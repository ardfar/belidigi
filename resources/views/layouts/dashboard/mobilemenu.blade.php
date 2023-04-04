<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="" class="flex mr-auto">
            <img alt="Icewall Tailwind HTML Admin Template" class="w-6" src="images/logo.svg">
        </a>
        <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
    @if (Auth::user()->role=="admin")
    <ul class="border-t border-theme-2 py-5 hidden">
        <li>
            <a href="{{ route('dashboard') }}" class="menu {{ Route::is('dashboard') ? 'menu--active' : '' }}">
                <div class="menu__icon"> <i data-feather="home"></i> </div>
                <div class="menu__title">
                    Overview 
                </div>
            </a>
        </li>
        {{-- <li>
            <a href="{{ route('DBI') }}" class="menu {{ Route::is('DBI') ? 'menu--active' : '' }}">
                <div class="menu__icon"> <i data-feather="edit-3"></i> </div>
                <div class="menu__title">
                     Edit Info
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('DBU') }}" class="menu {{ Route::is('DBU') ? 'menu--active' : '' }}">
                <div class="menu__icon"> <i data-feather="users"></i> </div>
                <div class="menu__title">
                     Edit User
                </div>
            </a>
        </li> --}}
    </ul>
    @endif
    {{-- @if (auth()->user()->role=='ospeta' or auth()->user()->role=='staff')
        <ul class="border-t border-theme-2 py-5 hidden">
            <li>
                <a href="{{ route('dashboard') }}" class="menu {{ Route::is('dashboard') ? 'menu--active' : '' }}">
                    <div class="menu__icon"> <i data-feather="home"></i> </div>
                    <div class="menu__title">
                        Overview
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ route('addinfo') }}" class="menu {{ Route::is('addinfo') ? 'menu--active' : '' }}">
                    <div class="menu__icon"> <i data-feather="edit-3"></i> </div>
                    <div class="menu__title">
                        Add Info
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ route('recentinfo') }}" class="menu {{ Route::is('recentinfo') ? 'menu--active' : '' }}">
                    <div class="menu__icon"> <i data-feather="eye"></i> </div>
                    <div class="menu__title">
                        Recent Info
                    </div>
                </a>
            </li>
        </ul>
    @endif
    @if (auth()->user()->role=='masjid')
        <ul class="border-t border-theme-2 py-5 hidden">
            <li>
                <a href="{{ route('dashboard') }}" class="menu {{ Route::is('dashboard') ? 'menu--active' : '' }}">
                    <div class="menu__icon"> <i data-feather="home"></i> </div>
                    <div class="menu__title">
                        Overview
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ route('announce') }}" class="menu {{ Route::is('announce') ? 'menu--active' : '' }}">
                    <div class="menu__icon"> <i data-feather="edit-3"></i> </div>
                    <div class="menu__title">
                        Announce!
                    </div>
                </a>
            </li>
        </ul>
    @endif --}}
</div>