<div id="kt_aside" class="aside pb-5 pt-5 pt-lg-0" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'80px', '300px': '100px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Brand-->
    <div class="aside-logo py-8" id="kt_aside_logo">
        <!--begin::Logo-->
        <a href="index.html" class="d-flex align-items-center">
            <img alt="Logo" src="{{asset('img/favicon.png')}}" class="h-45px logo">
        </a>
        <!--end::Logo-->
    </div>
    <div class="aside-menu flex-column-fluid" id="kt_aside_menu">
        <!--begin::Aside Menu-->
        <div class="hover-scroll-overlay-y my-2 my-lg-5 pe-lg-n1" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="5px" style="height: 507px;">
            <!--begin::Menu-->
            <div class="menu menu-column menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold" id="#kt_aside_menu" data-kt-menu="true">
                <div class="menu-item py-2">
                    @php
                    $dashboard = '';
                    $locker = '';
                    $role = Auth::user()->role;
                    if($role == "admin"){
                        $dashboard = route('admin.dashboard');
                        
                    }
                    else {
                        $dashboard = route('web.dashboard');
                        
                    }
                    @endphp
                    <a class="menu-link {{request()->is('admin/dashboard') || request()->is('dashboard') ? 'active' : ''}} menu-center" href="{{ $dashboard }}" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon me-0">
                            <i class="bi bi-house fs-2"></i>
                        </span>
                        <span class="menu-title">Home</span>
                    </a>
                </div>
                <div class="menu-item py-2">
                    @php
                    if($role == "admin"){
                        $locker = route('admin.locker.index');
                        
                    }
                    else {
                        $locker = route('web.locker.index');
                        
                    }
                    @endphp
                    <a class="menu-link {{request()->is('admin/locker') || request()->is('locker') ? 'active' : ''}} menu-center" href="{{ $locker }}" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon me-0">
                            <i class="fas fa-solid fa-door-closed"></i>
                        </span>
                        <span class="menu-title">Locker</span>
                    </a>
                </div>
                @if($role == "admin")
                <div class="menu-item py-2">
                    <a class="menu-link {{request()->is('admin/student') ? 'active' : ''}} menu-center" href="{{ $student }}" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon me-0">
                            <i class="fas fa-light fa-users"></i>
                            {{-- <i class="fas fa-envelope-open-tex"></i> --}}
                        </span>
                        <span class="menu-title">Mahasiswa</span>
                    </a>
                </div>
                @endif
                <!--end::Menu item-->
            </div>
            <!--end::Menu 2-->
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Footer-->
</div>