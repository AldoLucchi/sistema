<!--begin::Navbar-->
<div class="app-navbar flex-shrink-0">
    
    <!--begin::My apps links-->
    <div class="app-navbar-item ms-1 ms-md-3">
        <!--begin::Menu wrapper-->
        <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
             data-kt-menu-placement="bottom-end">{!! getIcon('element-11', 'fs-2 fs-md-1') !!}</div>
        @include('partials/menus/_my-apps-menu')
        <!--end::Menu wrapper-->
    </div>
    <!--end::My apps links-->
    <!--begin::Theme mode-->
    <div class="app-navbar-item ms-1 ms-md-3">
        @include('partials/theme-mode/_init')
    </div>
    <!--end::Theme mode-->
    <!--begin::User menu-->
    <div class="app-navbar-item ms-1 ms-md-3" id="kt_header_user_menu_toggle">
        <!--begin::Menu wrapper-->
        <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            @if(Auth::user()->profile_photo_url)
                <img src="{{ \Auth::user()->profile_photo_url }}" alt="user"/>
            @else
                <div class="symbol-label fs-3 {{ app(\App\Actions\GetThemeType::class)->handle('bg-light-? text-?', Auth::user()->name) }}">
                    {{ substr(Auth::user()->name, 0, 1) }}
                </div>
            @endif
        </div>
        @include('partials/menus/_user-account-menu')
        <!--end::Menu wrapper-->
    </div>
    <!--end::User menu-->
    <!--begin::Header menu toggle-->
    <div class="app-navbar-item d-lg-none ms-2 me-n3" title="Show header menu">
        <div class="btn btn-icon btn-active-color-primary w-30px h-30px w-md-35px h-md-35px" id="kt_app_header_menu_toggle">{!! getIcon('text-align-left', 'fs-2 fs-md-1') !!}</div>
    </div>
    <!--end::Header menu toggle-->
</div>
<!--end::Navbar-->
