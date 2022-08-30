@extends('layouts.master')
@section('body')
<!--begin::Toolbar-->
    <div class="toolbar py-5 py-lg-15" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-white fw-bolder my-1 fs-3">Dashboard</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-white opacity-75">
                        <a href="../../demo2/dist/index.html" class="text-white text-hover-primary">Home</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-white opacity-75">Dashboards</li>
                    <!--end::Item-->        
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Container-->
    </div>
<!--end::Toolbar-->
<!--begin::Container-->
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Row-->
        <div class="row gy-5 g-xl-8 ">
            <!--begin::Col-->
            <div class="col-xl-12">
                <!--begin::Mixed Widget 2-->
                <div class="card card-xl-stretch" style="height: 200px">
                    <!--begin::Header-->
                    <div class="card-header border-0 bg-warning py-5">
                        <!-- <h3 class="card-title fw-bolder text-white">Sales Statistics</h3> -->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body p-0">
                        <!--begin::Stats-->
                        <div class="card-p mt-n20 position-relative">
                            <!--begin::Row-->
                            <div class="row g-0">
                                <!--begin::Col-->
                                <div class="col bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                    <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">

                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="m6 16.5l-3 2.94V11h3m5 3.66l-1.57-1.34L8 14.64V7h3m5 6l-3 3V3h3m2.81 9.81L17 11h5v5l-1.79-1.79L13 21.36l-3.47-3.02L5.75 22H3l6.47-6.34L13 18.64"/></svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <a href="#" class="text-dark fw-bold fs-6">Smart Finance</a>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col bg-light-primary px-6 py-8 rounded-2 me-7 mb-7">
                                    <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                    <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64"><ellipse cx="10.97" cy="52.578" fill="currentColor" rx="1.742" ry="1.188"/><path fill="currentColor" d="m62 46.669l-.654-.384c-.05-.029-5.047-2.994-6.289-6.592l-.277-.797l-.512.669c-.016.021-.726.899-2.713 1.929c-1.471-8.373-6.475-18.369-13.051-22.631c1.88.152 3.766-.004 5.586-.666c1.096-.398.623-2.184-.483-1.78c-1.492.543-2.987.691-4.479.615c3.663-3.357 6.539-8.502 6.539-12.264c0-.904 0-2.587-1.34-2.587c-.538 0-.973.336-1.574.8c-.922.711-2.314 1.787-4.359 1.787c-.779 0-2.205-.822-3.351-1.482C33.658 2.489 32.773 2 32.029 2c-1.232 0-3.043.996-4.641 1.875c-.65.357-1.539.847-1.723.894c-2.316 0-3.661-1.068-4.553-1.775c-.52-.414-.897-.714-1.4-.714c-1.318 0-1.318 1.581-1.318 3.412c0 3.534 2.692 8.199 6.217 11.334c-2.221.159-4.411.83-5.95 2.321c-.85.822.438 2.126 1.285 1.306c1.279-1.24 2.956-1.771 4.75-1.874c.051.183.113.363.189.54C17.369 24.72 12.03 37.545 12.03 46.203c0 .854.066 1.627.168 2.355c-1.938-.861-2.645-1.616-2.659-1.633l-.516-.595l-.254.75c-1.123 3.304-6.005 6.17-6.054 6.199L2 53.694l.727.393c.255.138.508.259.763.39l-.46.319l.243 3.04L22.326 62l7.224-4.621c.729.004 1.467.006 2.218.006L40.212 62l19.089-6v-3.209l-.505-.303c.252-.16.504-.323.755-.491l.669-.447l-.147-.072l.851-.233l.144-3.336l-.492-.349c.262-.157.523-.317.785-.483l.639-.408M20.213 5.692c0-.444.006-.79.015-1.059c.153.12.331.251.521.386c.583 1.396 1.686 3.406 3.556 4.672c2.272 1.54 1.97-.23 3.182-1.846c1.212-1.615 2.032-2.461 4.062 1.693c.885 1.811 2.36-3.25 3.762-3.989c.371.202.741.39 1.104.55c2.514 4.088 3.679 2.813 5.912-.585c.614-.36 1.118-.746 1.519-1.055c.002.093.004.196.004.311c0 3.21-2.623 7.814-5.835 10.817a3.59 3.59 0 0 0-.642-1.053c-1.297-1.469-3.324.16-4.285 1.229c-1.705-.548-4.483-2.057-6.293-1.193a4.61 4.61 0 0 0-1.226.831c-2.96-2.698-5.356-6.593-5.356-9.709m16.204 10.974a26.467 26.467 0 0 1-1.337-.32c.558-.481 1.07-.649 1.285.066c.023.078.037.167.052.254m-7.6.621c-.331-.063-.671-.12-1.021-.165a14.18 14.18 0 0 1-.779-.525c.914-.613 2.49-.287 3.996.224c-.743.075-1.476.237-2.196.466m.454 2.64c-.56.14-1.17.084-1.697-.126c.214-.113.43-.211.646-.31c.35.169.7.31 1.051.436M10.774 56.379a39.327 39.327 0 0 1-6.912-2.733c1.357-.892 4.313-3.049 5.515-5.641c.824.647 2.726 1.827 6.43 2.733c-.063.102-.14.211-.214.318c-3.162-.828-4.96-1.875-4.989-1.893l-.436-.26l-.209.467c-.275.612-.92.704-1.279.704c-.1 0-.167-.007-.176-.008l-.357-.052l-.13.342c-.266.698-1.358 1.61-1.758 1.903l-.668.49l.764.313c.284.116.361.223.365.251c.01.069-.111.251-.24.356l-.582.469l.677.313c1.387.64 2.958 1.17 4.529 1.607c-.125.123-.233.228-.33.321m8.064-3.726c1.398.196 2.947.32 4.639.32h.001c.352 0 .709-.006 1.073-.017a.851.851 0 0 0 .103.213c.089.135.209.247.361.334l-2.552 2.181a3.216 3.216 0 0 0-.146-.003c-1.137 0-1.985.418-2.392 1.162a68.481 68.481 0 0 1-4.602-.747a51.413 51.413 0 0 0 3.515-3.443M7.489 53.85c.1-.189.165-.418.13-.668a1.016 1.016 0 0 0-.307-.59c.449-.385 1.068-.979 1.408-1.594c.773-.011 1.411-.304 1.813-.822c.677.354 2.202 1.069 4.455 1.689c-.921 1.155-2.162 2.465-3.127 3.439c-1.504-.398-3.019-.878-4.372-1.454m14.251 4.209l-.205.001c-.861 0-3.714-.07-7.483-.855c.132-.112.269-.227.396-.337c3.058.639 5.524.913 5.709.934l.366.039l.113-.355c.247-.766 1.158-.879 1.68-.879c.143 0 .238.009.249.01l.194.021l4.433-3.788l-1.185-.039c-.396-.014-.563-.103-.604-.164l.251-.657l-.694.029c-.506.022-1 .033-1.483.033h-.001c-1.396 0-2.691-.092-3.888-.237l.278-.328c2.416.323 5.309.522 8.802.497c-.834 1.17-2.914 3.657-6.928 6.075m10.024-4.345v1.825c-.569 0-1.123-.002-1.665-.006l-.163-2.054l-1.354.11c.912-1.078 1.301-1.797 1.336-1.862l.367-.694l-.775.014c-7.418.136-12.256-.748-15.31-1.73c-.223-.902-.352-1.922-.352-3.113c0-8.123 5.191-20.401 12.083-25.377c1.221 1.181 3.073 1.698 4.833.549c.386-.252.722-.582 1.037-.933c.075.002.152.019.228.019c.252 0 .508-.021.763-.053c.323.129.639.259.932.388c1.403.618 2.601.234 3.419-.618c6.313 3.82 11.371 13.925 12.702 22.093c-2.886 1.154-7.464 2.28-14.49 2.478c1.386-.792 2.426-2.124 2.052-3.874c-.393-1.85-1.939-2.37-3.54-2.455c-.004-.869-.004-1.736.002-2.605c.491.217.962.467 1.39.734c.756.475 1.44-.756.689-1.231a10.293 10.293 0 0 0-2.072-.999c.01-1.006.015-2.01.015-3.014c.001-.92-1.366-.92-1.366 0c0 .883-.006 1.765-.014 2.646a7.1 7.1 0 0 0-2.202-.037a26.48 26.48 0 0 0-.432-1.97c-.226-.886-1.546-.511-1.317.378c.168.639.305 1.275.418 1.92c-.058.022-.121.033-.178.059c-1.852.733-2.982 2.602-1.627 4.345c.631.812 1.456 1.14 2.359 1.249c.049 1.203.08 2.407.115 3.609c-.605-.393-1.156-.897-1.655-1.43c-.618-.652-1.583.355-.966 1.006c.839.893 1.72 1.568 2.675 2c.043 1.027.104 2.057.204 3.079c.088.907 1.456.912 1.367 0a53.716 53.716 0 0 1-.187-2.657c.52.09 1.066.113 1.646.058c.065.946.141 1.892.249 2.838c.062.542.58.755.962.645l-.085 1.964c-.602.054-1.216.104-1.856.146l-.762.05l.406.656c.041.066.502.795 1.531 1.856h-1.412zm24.888-6.582c-1.257.591-2.847 1.133-4.467 1.606c-.996-1.029-2.27-2.402-3.221-3.62c2.119-.642 3.305-1.304 3.84-1.661c.423.373.983.567 1.646.566c.22 0 .415-.021.565-.045c.48.622 1.254 1.34 1.738 1.769c-.229.235-.34.495-.331.776c.008.24.104.444.23.609m-7.155 3.286c.204.18.415.364.63.55c-4.054 1.075-7.071 1.192-7.728 1.203c-4.198-2.561-6.374-5.271-7.213-6.491c3.513-.088 6.417-.406 8.839-.844a24 24 0 0 0 .299.36a53.115 53.115 0 0 1-5.877.583l-.807.034l.444.679c-.001.001-.091.169-.687.285l-.969.189l4.764 3.857l.222-.06c.005-.001.425-.114.933-.114c.733 0 1.234.223 1.486.659l.16.276l.311-.055a87.25 87.25 0 0 0 5.193-1.111M35.4 47.479l-1.138-.062c-.053-.568-.106-1.136-.146-1.704c.2.332.61.956 1.284 1.766m-1.408-3.661a105.002 105.002 0 0 1-.119-4.041c.164.006.326.021.48.043c1.768.268 2.23 2.234.85 3.34c-.36.285-.775.494-1.211.658m10.439 6.752c-.448-.553-1.161-.843-2.083-.843c-.385 0-.724.052-.938.094l-2.995-2.427c.249-.143.417-.324.509-.546a.953.953 0 0 0 .052-.171c2.374-.13 4.374-.367 6.065-.657c.82.915 2.025 2.177 3.623 3.644c-1.963.467-3.6.787-4.233.906M32.505 39.813c.019 1.449.055 2.902.132 4.35c-.129.02-.256.045-.383.058c-.43.049-.838.013-1.226-.085c-.049-1.4-.081-2.803-.134-4.204c.538-.025 1.083-.078 1.611-.119m-1.68-1.265a44.292 44.292 0 0 0-.31-3.286a5.34 5.34 0 0 1 1.987.101a285.006 285.006 0 0 0-.005 3.067c-.439.024-.856.066-1.223.099a6.32 6.32 0 0 1-.449.019m-1.372-.175c-.085-.023-.169-.041-.256-.07a2.671 2.671 0 0 1-1.057-.667c-.854-.797.318-1.579 1.057-1.95c.116.89.196 1.788.256 2.687M40.49 57.839c-4.341-2.218-6.67-4.683-7.595-5.825c.665-.05 1.294-.11 1.917-.173l7.118 4.62l15.61-4.288c-8.05 4.852-16.003 5.591-17.05 5.666m12.892-7.89c-.128-.128-.281-.28-.462-.463c1.776-.538 3.494-1.162 4.775-1.848l.779-.419l-.79-.402c-.177-.091-.35-.258-.353-.321c.002-.024.072-.152.375-.326l.578-.332l-.514-.428c-.016-.013-1.619-1.344-2.182-2.201l-.186-.28l-.319.093c-.003 0-.277.079-.633.079c-.55.001-.962-.179-1.226-.533l-.292-.387l-.366.315c-.019.016-1.152.945-4.191 1.823a10.25 10.25 0 0 1-.289-.44c3.685-1.117 5.568-2.469 6.384-3.209c1.31 2.834 4.429 5.117 5.783 6.012a37.972 37.972 0 0 1-6.871 3.267"/><path fill="currentColor" d="M44.38 47.117c-.997-.271-2.122-.086-2.516.409c-.391.497.103 1.123 1.099 1.396c.998.271 2.122.085 2.516-.411c.391-.497-.101-1.121-1.099-1.394"/></svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <a href="#" class="text-dark fw-bold fs-6">Loan</a>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col bg-light-danger px-6 py-8 rounded-2 me-7 mb-7">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                    <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"><ellipse cx="14" cy="10" rx="10" ry="5"/><path d="M4 10v7c0 2.761 4.477 5 10 5s10-2.239 10-5v-7"/><path d="M4 17v7c0 2.761 4.477 5 10 5s10-2.239 10-5v-7"/><path d="M4 24v7c0 2.761 4.477 5 10 5s10-2.239 10-5v-7"/><path d="M4 31v7c0 2.761 4.477 5 10 5s10-2.239 10-5v-7"/><ellipse cx="34" cy="24" rx="10" ry="5"/><path d="M24 24v7c0 2.761 4.477 5 10 5s10-2.239 10-5v-7"/><path d="M24 31v7c0 2.761 4.477 5 10 5s10-2.239 10-5v-7"/></g></svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <a href="#" class="text-dark fw-bold fs-6 mt-2">Mutual Fund</a>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col bg-light-success px-6 py-8 rounded-2 me-7 mb-7">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
                                    <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1.19em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 38 32"><g fill="black"><path d="M37.5 18a.5.5 0 0 0-.5.5v12a.5.5 0 0 1-.5.5h-35a.5.5 0 0 1-.5-.5v-12a.5.5 0 0 0-1 0v12c0 .827.673 1.5 1.5 1.5h35c.827 0 1.5-.673 1.5-1.5v-12a.5.5 0 0 0-.5-.5zm-12-13a.5.5 0 0 0 .5-.5v-3c0-.827-.673-1.5-1.5-1.5h-11c-.827 0-1.5.673-1.5 1.5v3a.5.5 0 0 0 1 0v-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5z"/><path d="M36.5 7h-35C.673 7 0 7.673 0 8.5v4.958c0 2.778 9.456 6.5 19.125 6.5c9.543 0 18.875-3.722 18.875-6.5V8.5c0-.827-.673-1.5-1.5-1.5zm.5 6.458c0 1.764-8.457 5.5-17.875 5.5c-9.55 0-18.125-3.735-18.125-5.5V8.5a.5.5 0 0 1 .5-.5h35a.5.5 0 0 1 .5.5v4.958zM19.125 23c.943 0 1.923-.039 2.914-.116a.5.5 0 0 0 .459-.538a.49.49 0 0 0-.538-.459c-2.014.157-3.909.15-5.919-.02a.5.5 0 0 0-.084.996c1.076.091 2.142.137 3.168.137z"/></g></svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <a href="#" class="text-dark fw-bold fs-6 mt-2">Insurance</a>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row g-0">
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Mixed Widget 2-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row gy-5 g-xl-8 mt-xl-5">
            <!--begin::Col-->
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-12 ">
                <!--begin::Tables Widget 9-->
                <div class="card card-xl-stretch mb-5 mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder text-dark">User Management</span>
                            <span class="text-gray-400 mt-1 fw-bold fs-6">Avg. 10 customers added per day</span>
                        </h3>
                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Search by user name">
                            <!--begin::Search-->
                            <div class="position-relative my-1">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                
                                <!--end::Svg Icon-->
                                <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" method="post" action="{{route('user_search')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" data-kt-table-widget-4="search" class="form-control w-150px fs-7 ps-12" placeholder="Search" name="search" id="search" />
                                        </div>
                                        <div class="col-md-1">
                                        </div>
                                        <div class="col-md-5">
                                            <button type="submit"  class="btn btn-light"><i class="fa fa-search" id="fa"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--end::Search-->
                            <!-- <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                    </svg>
                                </span>
                                User Management 
                            </a> -->
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="fw-bolder text-muted">
                                        <th class="">User</th>
                                        <th class="">Role</th>
                                        <th class="">Smart Finanace</th>
                                        <th class="">Taxation</th>
                                        <th class="">Progress</th>
                                        <th class="">Status</th>
                                        <th class="">Actions</th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    @foreach($users as $user)
                                        <tr>                               
                                            <td class="">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-45px me-5">
                                                        @php
                                                            $user_detail = App\Models\UserDetail::where('user_id',$user->id)->first();
                                                        @endphp
                                                        @if($user_detail != NULL)
                                                            <img src="{{ $user_detail->avatar}}" alt="" />
                                                        @else
                                                        <img src="{{ asset('public/assets/media/avatars/blank.png') }}" alt="" />
                                                        @endif
                                                    </div>
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a href="{{route('user', ['id' => $user->id])}}" class="text-dark fw-bolder text-hover-primary fs-6">{{$user->first_name}} {{$user->last_name}}</a>
                                                        <span class="text-muted fw-bold text-muted d-block fs-7">#{{$user->id}}</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="">
                                                {{$user->role->name}}
                                            </td>
                                            <td class="">
                                                 @if($user->is_finanace == 0)
                                                    <span>No</span>
                                                @else
                                                    <span>Yes</span>
                                                @endif
                                            </td>
                                            <td class="">
                                                @if($user->is_tax == 0)
                                                    <span>No</span>
                                                @else
                                                    <span>Yes</span>
                                                @endif
                                            </td>
                                            <td class="">
                                                @if($user->is_active == 0)
                                                    <span class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
                                                @else
                                                    <span class="badge py-3 px-4 fs-7 badge-light-success">Approved</span>
                                                @endif
                                            </td>
                                            <td class="">
                                                @if($user->is_lock == 0)
                                                    <span class="badge py-3 px-4 fs-7 badge-light-success">Active</span>
                                                @else
                                                    <span class="badge py-3 px-4 fs-7 badge-light-danger">Locked</span>
                                                @endif
                                            </td>
                                            @if($user->role_id == 1)
                                                <td class="">
                                                    <div class=" flex-shrink-0">
                                                        <button type="button"  class="btn  btn-light mb-5" onclick="super_admin()"><i class="fas fa-pencil-alt" id="fa"></i></button>
                                                    </div>
                                                </td>
                                            @else
                                                <td class="">
                                                    <div class=" flex-shrink-0">
                                                        <button type="button" id="kt_sign_in_submit" class="btn  btn-light mb-5" data-system_id="{{$user->id}}" name="edit"><i class="fas fa-pencil-alt" id="fa"></i></button> 
                                                    </div>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                            <div class="d-flex justify-content-end mb-3">
                                {{ $users->links() }}
                            </div>
                            
                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--begin::Body-->
                </div>
                <!--end::Tables Widget 9-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row gy-5 g-xl-8">
            <div class="col-xl-12 mb-5 mb-xl-10">
                <!--begin::Table Widget 4-->
                <div class="card card-flush h-xl-100">
                    <!--begin::Card header-->
                    <div class="card-header pt-7">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder text-dark">Recent Transactions</span>
                            <span class="text-gray-400 mt-1 fw-bold fs-6">Avg 100 Transactions processed per day</span>
                        </h3>
                        <!--end::Title-->
                        <!--begin::Actions-->
                        <div class="card-toolbar">
                            <!--begin::Filters-->
                            <div class="d-flex flex-stack flex-wrap gap-4">
                                <!--begin::Destination-->
                                <!--end::Destination-->
                                <!--begin::Status-->
                                <div class="d-flex align-items-center fw-bolder">
                                    <!--begin::Label-->
                                    <div class="text-muted fs-7 me-2">Status</div>
                                    <!--end::Label-->
                                    <!--begin::Select-->
                                    <select class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-4="filter_status">
                                        <option></option>
                                        <option value="Show All" selected="selected">Show All</option>
                                        <option value="Shipped">Approved</option>
                                        <option value="Confirmed">Confirmed</option>
                                        <option value="Rejected">Rejected</option>
                                        <option value="Pending">Pending</option>
                                    </select>
                                    <!--end::Select-->
                                </div>
                                <!--end::Status-->
                                <!--begin::Search-->
                                <div class="position-relative my-1">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                    <span class="svg-icon svg-icon-2 position-absolute top-50 translate-middle-y ms-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <input type="text" data-kt-table-widget-4="search" class="form-control w-150px fs-7 ps-12" placeholder="Search" />
                                </div>
                                <!--end::Search-->
                            </div>
                            <!--begin::Filters-->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_4_table">
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="">Customer</th>
                                    <th class="">INVESTMENT DATE</th>

                                    <th class="">TOTAL AMOUNT INVESTED</th>
                                    <th class="">RATE OF INTEREST</th>
                                    <th class="">Profit</th>
                                    <th class="">Status</th>
                                    <th class=""></th>               
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                                <tbody class="fw-bolder text-gray-600">
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-45px me-5">
                                                    <img src="{{ asset('public/assets/media/avatars/blank.png') }}" alt="" />
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Siva</a>
                                                    <span class="text-muted fw-bold text-muted d-block fs-7">+91 9994090424</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="">13 June 2022, 11:52 pm</td>
                                        <!-- <td class="text-end">3000000</td> -->
                                        <td class="">
                                            <a href="" class="text-dark text-hover-primary">3000000</a>
                                        </td>
                                        <td class="">3%</td>
                                        <td class="">
                                            <span class="text-dark fw-bolder">Rs. 60000</span>
                                        </td>
                                        <td class="">
                                            <span class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
                                        </td>
                                        <td class="">
                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
                                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Table Widget 4-->
            </div>
        </div>
        <!--end::Row-->
    </div>
    <!--end::Post-->
</div>
<!--end::Container-->

<!-- begin::Modal -->
<div class="modal fade" id="edit_modal" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Heading-->

                <!--end::Google Contacts Invite-->
                <!--begin::Separator-->
                <!--end::Separator-->
                <!--begin::Textarea-->
                <!--end::Textarea-->
                <!--begin::Users-->
                <div class="mb-10">
                    <!--begin::Heading-->
                    <div class="fs-6 fw-bold mb-2">User Management</div>
                    <!--end::Heading-->
                    <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" method="post" action="{{route('change_user_status')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" id="user_id">
                        <!--begin::List-->
                        <div class="mh-300px scroll-y me-n7 pe-7">
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="{{ asset('public/assets/media/avatars/blank.png') }}" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <div class=""><input  type="text" readonly="" name="user_name" id="user_name" style="border: none;outline: none;"></div>
                                        <div class=""><input type="text" readonly="" name="user_email" id="user_email" style="border: none;outline: none;color: #a1a5b7;width: 100%;"></div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                
                            </div>
                        </div>
                        <!--end::List-->
                        <!--begin::List-->
                        <div class="mh-300px scroll-y me-n7 pe-7">
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <span class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Progress</span>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-150px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" name="progress" id="progress">
                                        <option value="">Select</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                        </div>
                        <!--end::List-->
                        <!--begin::List-->
                        <div class="mh-300px scroll-y me-n7 pe-7">
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <span class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Role</span>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-150px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" name="role" id="role">
                                        <option value="">Select</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                        </div>
                        <!--end::List-->
                        <!--begin::List-->
                        <div class="mh-300px scroll-y me-n7 pe-7">
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                   
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <span class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Status</span>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-150px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" name="status" id="status">
                                        <option value="">Select</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                        </div>
                        <!--end::List-->
                        <div class="d-flex justify-content-center">
                            <button type="submit"  class="btn  btn-primary mt-5 mb-3">Submit</button>
                        </div>
                    </form>
                </div>
                <!--end::Users-->
                <!--begin::Notice-->
                <!--end::Notice-->
            </div>
            <!--end::Modal body-->
        </div>
            <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!-- end::Modal -->

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">

    $(document).on('click', 'button[name^="edit"]', function(e) {
        var system_id = $(this).data("system_id");
        console.log(system_id);

        if(system_id)
        {
            jQuery.ajax({
                url : 'get_user',
                type: 'GET',
                dataType: 'json',
                data: { id: system_id },
                success:function(data)
                { 
                    jQuery('#edit_modal').modal('show');
                    document.getElementById("user_id").value = data.id;
                    document.getElementById("user_name").value = data.first_name+ ' '+ data.last_name;
                    document.getElementById("user_email").value = data.email;
                    if(data.is_active == 1)
                    {
                        jQuery('select[name="progress"]').empty();
                        $('select[name="progress"]').append('<option value="'+ '1' +'" selected>'+ 'Approved' +'</option>');
                        $('select[name="progress"]').append('<option value="'+ '0' +'">'+ 'Pending' +'</option>');
                    }
                    else{
                        jQuery('select[name="progress"]').empty();
                        $('select[name="progress"]').append('<option value="'+ '0' +'" selected>'+ 'Pending' +'</option>');
                        $('select[name="progress"]').append('<option value="'+ '1' +'">'+ 'Approved' +'</option>');
                    }
                    if(data.is_lock == 1)
                    {
                        jQuery('select[name="status"]').empty();
                        $('select[name="status"]').append('<option value="'+ '1' +'" selected>'+ 'Locked' +'</option>');
                        $('select[name="status"]').append('<option value="'+ '0' +'">'+ 'Active' +'</option>');
                    }
                    else{
                        jQuery('select[name="status"]').empty();
                        $('select[name="status"]').append('<option value="'+ '0' +'" selected>'+ 'Active' +'</option>');
                        $('select[name="status"]').append('<option value="'+ '1' +'">'+ 'Locked' +'</option>');
                    }
                    if(data.role_id == 1){
                        jQuery('select[name="role"]').empty();
                        $('select[name="role"]').append('<option value="'+ '1' +'" selected>'+ 'Super Admin' +'</option>');
                        $('select[name="role"]').append('<option value="'+ '2' +'">'+ 'Admin' +'</option>');
                        $('select[name="role"]').append('<option value="'+ '3' +'">'+ 'User' +'</option>');
                    }
                    else if (data.role_id == 2) {
                        jQuery('select[name="role"]').empty();
                        $('select[name="role"]').append('<option value="'+ '1' +'" >'+ 'Super Admin' +'</option>');
                        $('select[name="role"]').append('<option value="'+ '2' +'" selected>'+ 'Admin' +'</option>');
                        $('select[name="role"]').append('<option value="'+ '3' +'">'+ 'User' +'</option>');
                    }
                    else{
                        jQuery('select[name="role"]').empty();
                        $('select[name="role"]').append('<option value="'+ '1' +'" >'+ 'Super Admin' +'</option>');
                        $('select[name="role"]').append('<option value="'+ '2' +'">'+ 'Admin' +'</option>');
                        $('select[name="role"]').append('<option value="'+ '3' +'" selected>'+ 'User' +'</option>');

                    }
                }
            });
        }
        
    });

</script>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
<script type="text/javascript">
    function super_admin() {
        Swal.fire(
            'Super Admin Cant be Edit!',
            ' ',
            'success'
        )
    }
</script>


@endsection

@section('scripts')

@endsection