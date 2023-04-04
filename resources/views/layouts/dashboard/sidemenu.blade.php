<nav class="side-nav">
   @if (Auth::user()->role =='admin')
   <ul>
    <li>
        <a href="{{ route('dashboard') }}" class="side-menu {{ Route::is('dashboard') ? 'side-menu--active' : '' }}">
            <div class="side-menu__icon"> <i data-feather="eye"></i> </div>
            <div class="side-menu__title">
                Overview 
            </div>
        </a>
    </li>
    <li>
        <a id="transaksi" href="javascript:;.html" class="side-menu {{ (Route::is('verify') or Route::is('verifySearch') or Route::is('process') or Route::is('processSearch') or Route::is('success') or Route::is('successSearch') or Route::is('cancel') or Route::is('cancelSearch') or Route::is('created') or Route::is('createdSearch') or Route::is('abort') or Route::is('abortSearch'))  ? 'side-menu--active' : '' }}">
            <div class="side-menu__icon"> <i data-feather="shopping-bag"></i> </div>
            <div class="side-menu__title"> Transaksi <i data-feather="chevron-down" class="side-menu__sub-icon transform rotate-180"></i> </div>
        </a>
        <ul class="menu__sub-open">
            <li>
                <a href="{{ route('created') }}" class="side-menu {{ (Route::is('created') or Route::is('createdSearch'))  ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="file-plus"></i> </div>
                    <div class="side-menu__title"> Dibuat </div>
                </a>
            </li>
            <li>
                <a href="{{ route('verify') }}" class="side-menu {{ (Route::is('verify') or Route::is('verifySearch'))  ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="shield"></i> </div>
                    <div class="side-menu__title"> Verifikasi </div>
                </a>
            </li>
            <li>
                <a href="{{ route('process') }}" class="side-menu {{ (Route::is('process') or Route::is('processSearch'))  ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="refresh-cw"></i> </div>
                    <div class="side-menu__title"> Proses </div>
                </a>
            </li>
            <li>
                <a href="{{ route('success') }}" class="side-menu {{ (Route::is('success') or Route::is('successSearch'))  ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="thumbs-up"></i> </div>
                    <div class="side-menu__title"> Selesai </div>
                </a>
            </li>
            <li>
                <a href="{{ route('cancel') }}" class="side-menu {{ (Route::is('cancel') or Route::is('cancelSearch'))  ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="x-octagon"></i> </div>
                    <div class="side-menu__title"> Batal </div>
                </a>
            </li>
            <li>
                <a href="{{ route('abort') }}" class="side-menu {{ (Route::is('abort') or Route::is('abortSearch'))  ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="user-x"></i> </div>
                    <div class="side-menu__title"> Ditolak </div>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="{{ route('refundDashboard') }}" class="side-menu {{ (Route::is('refundDashboard'))  ? 'side-menu--active' : '' }}">
            <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
            <div class="side-menu__title">
                Refund
            </div>
        </a>
    </li>
    <li>
        <a href="{{ route('pesanDashboard') }}" class="side-menu {{ (Route::is('pesanDashboard'))  ? 'side-menu--active' : '' }}">
            <div class="side-menu__icon"> <i data-feather="message-square"></i> </div>
            <div class="side-menu__title">
                Pesan
            </div>
        </a>
    </li>
    </ul>   
   @endif
</nav>
@if (Route::is('verify') or Route::is('verifySearch') or Route::is('process') or Route::is('processSearch') or Route::is('success') or Route::is('successSearch') or Route::is('created') or Route::is('createdSearch') or Route::is('cancel') or Route::is('cancelSearch') or Route::is('abort') or Route::is('abortSearch'))
<script>
    $(document).ready(function(){
        document.getElementById('transaksi').click();
    })
</script>
@endif