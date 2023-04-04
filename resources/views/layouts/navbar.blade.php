<div class=" ud-header bg-transparent absolute top-0 left-0 z-40 w-full flex items-center">
      <div class="container">
        <div class="flex -mx-4 items-center justify-between relative">
          <div class="px-4 w-60 max-w-full">
            <a href="{{ route('/') }}" class="navbar-logo w-full block py-5">
              <img src="{{ asset('images/logo/logo-white.svg') }}" alt="logo" class="w-full header-logo"/>
            </a>
          </div>
          <div class="flex px-4 justify-between items-center w-full">
            <div>
              <button id="navbarToggler" class=" block absolute right-4 top-1/2 -translate-y-1/2 lg:hidden focus:ring-2 ring-primary px-3 py-[6px] rounded-lg">
                <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
                <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
                <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
              </button>
              <div id="navbarCollapse" class=" absolute py-5 lg:py-0 lg:px-4 xl:px-6 bg-white lg:bg-transparent shadow-lg rounded-lg max-w-[250px] w-full lg:max-w-full lg:w-full right-4 top-full hidden lg:block lg:static lg:shadow-none " >
                <ul class="blcok lg:flex">
                  <li class="relative group">
                    <a href="{{ route('/') }}" class="text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary py-2 lg:py-6 lg:inline-flex lg:px-0 flex mx-8 lg:mr-0 " > Beranda </a>
                  </li>
                  <li class="relative group">
                   @if (Auth::check())
                   @else
                   <a href="{{ route('cari-transaksi') }}" class="text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary py-2 lg:py-6 lg:inline-flex lg:px-0 flex mx-8 lg:mr-0 " > Cari Transaksi </a>   
                   @endif
                  </li>
                  <li class="relative group submenu-item">
                    <a href="javascript:void(0)" class=" text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary py-2 lg:py-6 lg:inline-flex lg:pl-0 lg:pr-4 flex mx-8 lg:mr-0 lg:ml-8 xl:ml-12 relative after:absolute after:w-2 after:h-2 after:border-b-2 after:border-r-2 after:border-current after:rotate-45 lg:after:right-0 after:right-1 after:top-1/2 after:-translate-y-1/2 after:mt-[-2px] " > Layanan Kami </a>
                    <div class=" submenu hidden relative lg:absolute w-[250px] top-full lg:top-[110%] left-0 rounded-sm lg:shadow-lg p-4 lg:block lg:opacity-0 lg:invisible group-hover:opacity-100 lg:group-hover:visible lg:group-hover:top-full bg-white transition-[top] duration-300 " >
                      <a href="{{ route('transfer-uang') }}" class=" block text-sm text-body-color rounded hover:text-primary py-[10px] px-4 " > Transfer Antar Bank </a>
                      <a href="{{ route('bayar-virtual-account') }}" class=" block text-sm text-body-color rounded hover:text-primary py-[10px] px-4 " > Bayar Virtual Account </a>
                      <a href="{{ route('pulsa-kuota') }}" class=" block text-sm text-body-color rounded hover:text-primary py-[10px] px-4 " > Isi Pulsa & Kuota </a>
                      <a href="{{ route('lisensi-digital') }}" class=" block text-sm text-body-color rounded hover:text-primary py-[10px] px-4 " > Lisensi Digital </a>
                      <a href="{{ route('topup-e-wallet') }}" class=" block text-sm text-body-color rounded hover:text-primary py-[10px] px-4 " > Top Up E-Wallet </a>
                      <a href="{{ route('jasa-sosmed') }}" class=" block text-sm text-body-color rounded hover:text-primary py-[10px] px-4 " > Jasa Sosial Media </a>
                      </a>
                    </div>
                  </li>
                  <li class="relative group">
                    <a href="{{ route('tentang') }}" class="text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary py-2 lg:py-6 lg:inline-flex lg:px-0 flex mx-8 lg:mr-0 lg:ml-7 xl:ml-12 " > Tentang </a>
                  </li>
                  <li class="relative group">
                    <a href="{{ route('kontak') }}" class="text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary py-2 lg:py-6 lg:inline-flex lg:px-0 flex mx-8 lg:mr-0 lg:ml-7 xl:ml-12 " > Kontak Kami </a>
                  </li>
                </ul>
            </div>
            </div>
            <div class="sm:flex justify-end hidden pr-16 lg:pr-0">
              @if (Auth::check())
                @if (Auth::user()->role == 'user')
                  <a href="{{ route('user-profile') }}" class=" text-base font-medium text-white hover:opacity-70 py-3 px-7 loginBtn " > Profil </a>
                  <a href="{{ route('logout') }}" class=" text-base font-medium text-white bg-white bg-opacity-20 rounded-lg py-3 px-6 hover:bg-opacity-100 hover:text-dark signUpBtn duration-300 ease-in-out " > Keluar </a>
                @else
                  @if (Auth::user()->role == 'admin')
                    <a href="{{ route('dashboard') }}" class=" text-base font-medium text-white bg-white bg-opacity-20 rounded-lg py-3 px-6 hover:bg-opacity-100 hover:text-dark signUpBtn duration-300 ease-in-out " > Dashboard </a>
                  @endif
                @endif
              @else 
                <a href="{{ route('login') }}" class=" text-base font-medium text-white hover:opacity-70 py-3 px-7 loginBtn " > Masuk </a>
                <a href="{{ route('signup') }}" class=" text-base font-medium text-white bg-white bg-opacity-20 rounded-lg py-3 px-6 hover:bg-opacity-100 hover:text-dark signUpBtn duration-300 ease-in-out " > Daftar </a>
              @endif
            </div>
          </div>
        </div>
      </div>
</div>