<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use App\Models\Setting;
use App\Models\Template;
use App\Models\Loan;
use App\Models\LoanPayment;
use App\Models\User;
use App\Models\Smartfinance;
use App\Models\SmartfinancePayment;
Use \Carbon\Carbon;
use Image;
use DB;

class loanController extends Controller
{

    public function save_loan(Request $request){

        $validatedData = $request->validate([
            'amount' => 'required',
            'property_type' => 'required',
            'property_value' => 'required',
            'property_copy' => 'required',
            'terms_and_conditions' =>'accepted'
        ]);
        $now = Carbon::now()->format('Y-m-d');
        $loan = Loan::create([
            'user_id' => Auth::user()->id,
            'amount' => $request->amount,
            'property_type' => $request->property_type,
            'property_value' => $request->property_value,
            'requested_on' => $now,
            'is_status' => 2,
            'is_close' => 0,
        ]);

        $filenames = "";
        $files = $request->file('property_copy');
        foreach($files as $file){   

            $filename = $file->getClientOriginalName(); 
            $filename = time().$filename;
            $path = $file->storeAs(config('path.property'), $filename);
            $filenames .= $filename.",";

        }
        $loan->property_copy = trim($filenames,",");
        $loan->save();

        return redirect()->back()->with('alert', 'Loan added successfully!!');
    }

    public function get_loan(Request $request){

        $id=$request->id;  
        $loan = Loan::where('id',$id)->first();
        return $loan;
    }

    public function loan_edit(Request $request){

        if($request->is_status == 1){

            $validatedData = $request->validate([
                'loan_intrest' => 'required',
            ]);

            $loan_payment = LoanPayment::where('loan_id',$request->loan_id)->first();
            if($loan_payment != NULL){
                $loan_payment = LoanPayment::where('loan_id',$request->loan_id)->delete();
            }

            DB::table('loans')->where('id',$request->loan_id)->update(['is_status' => 1,'requested_on' => $request->loan_requested_date,'approved_on' => $request->loan_approved_date,'intrest' => $request->loan_intrest]);
            $approved_on = $request->loan_approved_date;
            $payment_date = Carbon::parse($approved_on)->addMonths(1);

            for ($i = 1; $i <= 12; $i++){

                $loan_payment = LoanPayment::create([
                    'loan_id' => $request->loan_id,
                    'payment_date' => $payment_date,
                    'amount' => $request->loan_intrest/100 * $request->loan_amount,
                    'is_status' => 3,
                ]);

                $payment_date = Carbon::parse($payment_date)->addMonths(1);
            }

            return redirect()->back()->with('alert', 'Loan approved successfully!!');
        }
        elseif($request->is_status == 0){

            $loan_payment = LoanPayment::where('loan_id',$request->loan_id)->first();
            if($loan_payment != NULL){
                $loan_payment = LoanPayment::where('loan_id',$request->loan_id)->delete();
            }
            DB::table('loans')->where('id',$request->loan_id)->update(['is_status' => 0]);
            return redirect()->back()->with('alert', 'Loan rejected successfully!!');
        }
        else{
            return redirect()->back()->with('alert', 'Please select valid status.');
        }
    }

    public function view_loan($id,Request $request){

        $loan = Loan::where('id',$id)->first();
        $loan_payments = LoanPayment::where('loan_id',$id)->get();
        return view('loan')->with('loan',$loan)->with('loan_payments',$loan_payments);
    }

    public function check_loan_payment(Request $request){

        $loan_payment_id = $request->id;
        $loan_id = $request->loan_id;
        $payment_check = LoanPayment::where([['loan_id',$loan_id],['id','<',$loan_payment_id]])->orderBy('id','desc')->first();
        if($payment_check != NULL){
            if($payment_check->is_status != 1){

                return "1";
            }
            else{

                return "0";
            }
        }
        else{

            return "0";
        }
    }

    public function loan_payment(Request $request){

        //check for previous payment
        $payment_check = LoanPayment::where([['loan_id',$request->loan_id],['id','<',$request->loan_payment_id]])->orderBy('id','desc')->first();
        if($payment_check != NULL){
            if($payment_check->is_status != 1){

                return redirect()->back()->with('error_alert', 'Please complete the previous payments.');
            }
        }
        //check for previous payment end


        //payment
        $validatedData = $request->validate([
            'payment_copy' => 'required|image|mimes:jpg,png,jpeg,svg',
        ]);

        $image = $request->file('payment_copy');
        $rand_name = time() . Str::random(12);
        $filename = $rand_name . '.jpg';
        $photo = Image::make($image)->encode('jpg', 80);
        Storage::disk('public')->put(config('path.loan_payment').$filename, $photo);

        DB::table('loan_payments')->where('id',$request->loan_payment_id)->update(['is_status' => 2,'payment_bill' => $filename,'paid_on' => $request->paid_date]);

        return redirect()->back()->with('alert', 'Payment done successfully!!');
        //payment end

    }

    public function get_loan_payment(Request $request){

        $id=$request->id;  
        $loan_payment = LoanPayment::where('id',$id)->first();
        return $loan_payment;
    }

    public function loan_payment_approve(Request $request){

        if($request->is_status == 1){
            DB::table('loan_payments')->where('id',$request->payment_id)->update(['is_status' => 1]);

            return redirect()->back()->with('alert', 'Payment approved successfully!!');
        }
        elseif($request->is_status == 0){
            DB::table('loan_payments')->where('id',$request->payment_id)->update(['is_status' => 0]);

            return redirect()->back()->with('alert', 'Payment rejected successfully!!');
        }
        

    }

    public function loan_search($type,Request $request)
    {
        $users = User::where('is_delete',0)->orderBy('id','Desc')->simplePaginate(10);
        $user_count = User::where('is_active',0)->orWhere('is_profile_verified',0)->count();
        $smartfinance_count = Smartfinance::where('is_status',2)->count();
        $payment_count = SmartfinancePayment::where('is_approve',2)->count();

        $smartfinances = Smartfinance::orderBy('id','Desc')->get();
        $user = Auth::user();
        $admin_finances = Smartfinance::where('user_id',$user->id)->orderBy('id','Desc')->simplePaginate(10);
        $admin_finance_count = Smartfinance::where('user_id',$user->id)->count();
        $loans = Loan::join('users','loans.user_id','=','users.id')->where('users.first_name', 'like', '%'.$type.'%')->orWhere('users.last_name', 'like', '%'.$type.'%')->select('loans.*')->orderBy('id','Desc')->simplePaginate(10);
        //$loans = Loan::orderBy('id','Desc')->simplePaginate(10);
        $loan_count = Loan::where('is_status',2)->count();
        $admin_loans = Loan::where('user_id',$user->id)->orderBy('id','Desc')->simplePaginate(10);
        $admin_loan_count = Loan::where('user_id',$user->id)->count();

        $flag = 'loan';
        $role = NULL;
        $profile = NULL;
        $progress = NULL;
        $status = NULL;
        $search = NULL;
        $investment_plan = NULL;
        $investment_status = NULL;
        $investment_search = NULL;
        $loan_status = NULL;
        $loan_search = $type;

        return view('dashboard')->with('users',$users)->with('user_count',$user_count)->with('smartfinances',$smartfinances)->with('smartfinance_count',$smartfinance_count)->with('admin_finances',$admin_finances)->with('admin_finance_count',$admin_finance_count)->with('payment_count',$payment_count)->with('loans',$loans)->with('loan_count',$loan_count)->with('admin_loans',$admin_loans)->with('admin_loan_count',$admin_loan_count)->with('role',$role)->with('profile',$profile)->with('progress',$progress)->with('status',$status)->with('search',$search)->with('investment_plan',$investment_plan)->with('investment_status',$investment_status)->with('investment_search',$investment_search)->with('loan_search',$loan_search)->with('loan_status',$loan_status)->with('flag',$flag);
    }

    public function loan_status($type,Request $request)
    {
        $users = User::where('is_delete',0)->orderBy('id','Desc')->simplePaginate(10);
        $user_count = User::where('is_active',0)->orWhere('is_profile_verified',0)->count();
        $smartfinance_count = Smartfinance::where('is_status',2)->count();
        $payment_count = SmartfinancePayment::where('is_approve',2)->count();

        $smartfinances = Smartfinance::orderBy('id','Desc')->get();
        $user = Auth::user();
        $admin_finances = Smartfinance::where('user_id',$user->id)->orderBy('id','Desc')->simplePaginate(10);
        $admin_finance_count = Smartfinance::where('user_id',$user->id)->count();
        $loans = Loan::where('is_status',$type)->orderBy('id','Desc')->simplePaginate(10);
        $loan_count = Loan::where('is_status',2)->count();
        $admin_loans = Loan::where('user_id',$user->id)->orderBy('id','Desc')->simplePaginate(10);
        $admin_loan_count = Loan::where('user_id',$user->id)->count();

        $flag = 'loan';
        $role = NULL;
        $profile = NULL;
        $progress = NULL;
        $status = NULL;
        $search = NULL;
        $investment_plan = NULL;
        $investment_status = NULL;
        $investment_search = NULL;
        $loan_status = $type;
        $loan_search = NULL;

        return view('dashboard')->with('users',$users)->with('user_count',$user_count)->with('smartfinances',$smartfinances)->with('smartfinance_count',$smartfinance_count)->with('admin_finances',$admin_finances)->with('admin_finance_count',$admin_finance_count)->with('payment_count',$payment_count)->with('loans',$loans)->with('loan_count',$loan_count)->with('admin_loans',$admin_loans)->with('admin_loan_count',$admin_loan_count)->with('role',$role)->with('profile',$profile)->with('progress',$progress)->with('status',$status)->with('search',$search)->with('investment_plan',$investment_plan)->with('investment_status',$investment_status)->with('investment_search',$investment_search)->with('loan_search',$loan_search)->with('loan_status',$loan_status)->with('flag',$flag);
    }






}
