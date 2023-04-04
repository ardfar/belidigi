<div class="top-bar-boxed border-b border-theme-2 -mt-7 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 md:pt-0 mb-12">
    <div class="h-full flex items-center">
        <!-- BEGIN: Logo -->
        <a href="" class="-intro-x hidden md:flex">
            <img alt="Icewall Tailwind HTML Admin Template" class="w-6 h-6" src="{{ asset('images/favicon.png') }}">
            <span class="text-white text-lg ml-3"> Beli<span class="font-medium">Digi</span> </span>
        </a>
        <!-- END: Logo -->
        <!-- BEGIN: Breadcrumb -->
        <div class="-intro-x breadcrumb mr-auto"> <p href="">Aplication</p> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <p href="" class="breadcrumb--active">{{ Route::currentRouteName() }}</p> </div>
        <!-- END: Breadcrumb -->
        <!-- BEGIN: Account Menu -->
        <div class="intro-x dropdown w-8 h-8">
            <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110" role="button" aria-expanded="false">
                <img alt="Icewall Tailwind HTML Admin Template" src="{{ asset('images/profile-2.jpg') }}">
            </div>
            <div class="dropdown-menu w-56">
                <div class="dropdown-menu__content box bg-theme-11 dark:bg-dark-6 text-white">
                    <div class="p-4 border-b border-theme-12 dark:border-dark-3">
                        <div class="font-medium">{{ Auth::user()-> name }}</div>
                        <div class="text-xs text-theme-13 mt-0.5 dark:text-gray-600">{{ Auth::user()-> role }}</div>
                    </div>
                    @if (Auth::user()->role=='admin')
                        <div class="p-2">
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="edit" class="w-4 h-4 mr-2"></i> Manage Account </a>
                        </div>
                    @endif
                    <div class="p-2 border-t border-theme-12 dark:border-dark-3">
                        <a href="{{ route('logout') }}" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="log-out" class="w-4 h-4 mr-2"></i> Logout </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Account Menu -->
    </div>
</div>