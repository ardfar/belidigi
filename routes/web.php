<?php

use App\Http\Controllers\BayarVAController;
use App\Http\Controllers\BeliJasaSosmedController;
use App\Http\Controllers\BeliKuotaController;
use App\Http\Controllers\BeliLisensiDigitalController;
use App\Http\Controllers\BeliPulsaController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TopUpEWalletController;
use App\Http\Controllers\TransferBankController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// START: GENERAL PAGE HANDLER --------------------------------------------------------------------------------------------------------------------------------------------------------------------------
// return the main page 
Route::get('/', function () {
    return view('index');
})->name('/');

// Route for searching created transaction (GENERAL)
Route::get('/cari-transaksi',[indexController::class, 'cari_transaksi'])->name('cari-transaksi'); // Show the search page
Route::get('/cari-transaksi/search_transaction_data',[indexController::class, 'search_transaction_data'])->name('search_transaction_data'); // Filter the result based on query and paginate them
Route::get('/authToView',[indexController::class, "authToView"])->name('authToView'); // Add security challange to view complete invoice

// Route for showing about the website 
Route::get('/tentang',[IndexController::class,'about'])->name('tentang'); // Show the page
Route::get('/add_email_sub',[indexController::class, 'add_email_sub'])->name('add_email_sub'); // Add an email to mailing list (UPCOMING FEATURE)

// Route of membership
Route::get('/membership',[indexController::class, 'memberIndex'])->name('memberIndex');

// Route for handling contact 
Route::get('/kontak',[IndexController::class,'contact'])->name('kontak'); // Show the page
Route::get('/add_open_msg',[indexController::class, 'add_open_msg'])->name('add_open_msg'); // Add the message to database
// END : GENERAL PAGE HANDLER ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

// START: USER HANDLING ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
// Login handler 
Route::get('/masuk', [UserController::class, 'login'])->name('login'); // Show Login page
Route::post('/loginAttempt', [UserController::class, 'loginAttempt'])->name('loginAttempt'); // Attempt login

// Logout handler 
Route::get('/keluar', [UserController::class, 'logout'])->name('logout');

// Reset password handler
Route::get('/reset', [UserController::class, 'reset_page'])->name('reset'); // Show reset password form
Route::post('/send_reset_link', [UserController::class, 'send_reset_link'])->name('send_reset_link'); // handle the reset password form and send email with link to designated email
Route::get('/reset/reset_link_confirm/{hash_key}', [UserController::class, 'reset_link_confirm'])->name('reset_link_confirm'); // Confirm the link from email and check the hash
Route::get('/reset/buat-password', [UserController::class, 'new_password_form'])->name('new_password_form'); // Show create new password form
Route::post('/reset/update_new_password', [UserController::class, 'update_new_password'])->name('update_new_password'); // Update the user password

// Signup handler 
Route::get('/daftar', [UserController::class, 'signup'])->name('signup'); // Show signup page
Route::post('/add_new_user', [UserController::class, 'add'])->name('add_new_user'); // handle the registration form
Route::get('/email_verify/{username}', [UserController::class, 'email_verify'])->name('email_verify'); // handle email verification

// User panel and information handling 
Route::get('/user-profile',[UserController::class, 'index'])->middleware('auth')->name('user-profile'); // Show profile page
Route::post('/user-profile/change_user_profile_photo',[UserController::class, 'change_user_profile_photo'])->middleware('auth')->name('change_user_profile_photo'); // Change user profile photo
Route::post('/user-profile/change_user_data',[UserController::class, 'change_user_data'])->middleware('auth')->name('change_user_data'); // Change user data 

// Route for searching created transaction (LOGGED IN USER)
Route::get('/user-profile/riwayat-transaksi',[UserController::class, 'riwayat_transaksi'])->name('riwayat-transaksi'); // Show the search page
Route::get('/user-profile/riwayat-transaksi/history_search_transaction_data',[UserController::class, 'history_search_transaction_data'])->name('history_search_transaction_data'); // Filter the result based on query and paginate them
// END: USER HANDLING --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

// START: ROUTES FOR HANDLING TRANSACTION -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
// Route for transfer bank 
Route::get('/transfer-uang', [TransferBankController::class, 'index'])->name('transfer-uang'); //Main page of Transfer Uang 
Route::post('/add_transfer_bank_transaction', [TransferBankController::class, 'add'])->name('add_transfer_bank_transaction'); // Route for handling Transfer Uang Form

// Route for Bayar Virtual account 
Route::get('/bayar-virtual-account', [BayarVAController::class, 'index'])->name('bayar-virtual-account'); // Main page of Bayar Virtual Account
Route::post('/add_bayar_virtual_transaction', [BayarVAController::class, 'add'])->name('add_bayar_virtual_transaction'); // Route for handling Bayar Virtual Form

// Route for mobile recharge 
Route::get('/pulsa-kuota', [BeliPulsaController::class, 'index'])->name('pulsa-kuota'); // Main Page of Beli Pulsa & Kuota 
Route::get('/pulsa-kuota/get-list-pulsa/{operator?}', [BeliPulsaController::class, 'get_list'])->name('get_list_pulsa'); // API to get all available mobile recharge option
Route::post('/add_beli_pulsa_transaction', [BeliPulsaController::class, 'add'])->name('add_beli_pulsa_transaction'); // Route for handling Beli Pulsa Form
Route::get('/pulsa-kuota/get-list-kuota/{operator?}', [BeliKuotaController::class, 'get_list'])->name('get_list_kuota'); // API to get all available mobile data package option
Route::post('/add_beli_kuota_transaction', [BeliKuotaController::class, 'add'])->name('add_beli_kuota_transaction'); // Route for handling Beli Kuota Form

// Route for digital license 
Route::get('/lisensi-digital', [BeliLisensiDigitalController::class, 'index'])->name('lisensi-digital'); // Main Page of Digital License
Route::get('/lisensi-digital/{produk}', [BeliLisensiDigitalController::class, 'form_to'])->name('lisensi-digital-checkout'); // Route for handling for checkout
Route::post('/add_beli_lisensi_digital_transaction', [BeliLisensiDigitalController::class, 'add'])->name('add_beli_lisensi_digital_transaction'); // Route for handling Beli Lisensi Form

// Route for Social media services 
Route::get('/jasa-sosmed', [BeliJasaSosmedController::class, 'index'])->name('jasa-sosmed'); // Main Page of Sosmed Service
Route::get('/jasa-sosmed/{group}/{target}', [BeliJasaSosmedController::class, 'form_to'])->name('jasa-sosmed-checkout'); // Route for handling for checkout
Route::post('/add_beli_jasa_sosmed_transaction', [BeliJasaSosmedController::class, 'add'])->name('add_beli_jasa_sosmed_transaction'); // Route for handling Jasa Sosmed Form

// Route for Top up e wallet
Route::get('/topup-e-wallet', [TopUpEWalletController::class, 'index'])->name('topup-e-wallet'); // Main Page of Topup E Wallet
Route::get('/topup-e-wallet/{target}', [TopUpEWalletController::class, 'form_to'])->name('topup-e-wallet-checkout'); // Route for handling for checkout
Route::post('/add_topup_e_wallet_transaction', [TopUpEWalletController::class, 'add'])->name('add_topup_e_wallet_transaction'); // Route for handling TopUp E Wallet Form

// Route for refund transaction 
Route::get('/refund/{idWillRefund}',[TransactionController::class, 'refund'])->name('refund'); // Show refund page
Route::get('/add_refund_transaction', [TransactionController::class, 'add_refund_transaction'])->name('add_refund_transaction'); // Handle and process the refund request

// Route for viewing the invoice 
Route::get('/invoice/{kind}/{id}/{key}', [TransactionController::class, 'invoice'])->name('invoice'); // Handle the invoice page
Route::get('/update_payment_status', [TransactionController::class, 'update_payment_status'])->name('update_payment_status'); // Handle the payment update status 
Route::get('/email/payment/{status}/{id}', [TransactionController::class, 'emailPayment'])->name('emailPayment'); // Handle the confirmation link from email

// Another route for invoicing 
Route::get('/struk/create/{kind}/{id}',[TransactionController::class,'createStruk'])->name('createStruk'); // Create the receipt (Page)
Route::get('/png/download/{kind}/{id}',[TransactionController::class,'toPng'])->name('toPng'); // Export the page of receipt to PNG
Route::get('/struk/view/{kind}/{id}',[TransactionController::class,'viewStruk'])->name('viewStruk'); // View the created receipt
// END: ROUTES FOR HANDLING TRANSACTION ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

// START: ROUTES FOR HANDLING DASHBOARD --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
// Route for main page 
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

// Route OpenMSG page 
Route::get('/dashboard/pesan', [DashboardController::class, 'pesan'])->middleware('auth')->name('pesanDashboard'); // show the pesan dashboard
Route::get('/dashboard/pesan/balas/email', [DashboardController::class, 'emailBalasan'])->middleware('auth')->name('emailBalasan'); // send the reply via email
Route::get('/dashboard/pesan/lupakan', [DashboardController::class, 'ignoreMsg'])->middleware('auth')->name('ignoreMsg'); // Ignore the message

// Route for Created Page
Route::get('/dashboard/transaction/created', [DashboardController::class, 'created'])->middleware('auth')->name('created'); // Show the created transaction page 
Route::get('/dashboard/transaction/created/search', [DashboardController::class, 'createdSearch'])->middleware('auth')->name('createdSearch'); // filter the created transaction
Route::get('/dashboard/transaction/created/detail/{kind}/{id}', [DashboardController::class, 'createdDetail'])->middleware('auth')->name('createdDetail'); // show the detail

// Route for @verify page 
Route::get('/dashboard/transaction/verify', [DashboardController::class, 'verifyPage'])->middleware('auth')->name('verify'); // Show the @verify page
Route::get('/dashboard/transaction/verify/search', [DashboardController::class, 'verifySearch'])->middleware('auth')->name('verifySearch'); // Filter the transaction that on verify
Route::get('/dashboard/transaction/verify/confirm', [DashboardController::class, 'verifyConfirm'])->middleware('auth')->name('verifyConfirm'); // Change the transaction status to ONPROCESS
Route::get('/dashboard/transaction/verify/decline', [DashboardController::class, 'verifyDecline'])->middleware('auth')->name('verifyDecline'); // Change the transaction status to ABORT    
Route::get('/dashboard/transaction/verify/detail/{kind}/{id}', [DashboardController::class, 'verifyDetail'])->middleware('auth')->name('verifyDetail'); // See the detail

// Route for @process page
Route::get('/dashboard/transaction/process', [DashboardController::class, 'process'])->middleware('auth')->name('process'); // Show the @process page
Route::get('/dashboard/transaction/process/buy', [DashboardController::class, 'processAPIBuy'])->middleware('auth')->name('processAPIBuy'); // Process DjavaAPI transaction
Route::get('/dashboard/transaction/process/search', [DashboardController::class, 'processSearch'])->middleware('auth')->name('processSearch'); // Filter the transaction that on process
Route::get('/dashboard/transaction/process/success', [DashboardController::class, 'processSuccess'])->middleware('auth')->name('processSuccess'); // Change the transaction status to SUCCESS
Route::get('/dashboard/transaction/process/abort', [DashboardController::class, 'processAbort'])->middleware('auth')->name('processAbort'); // Change the transaction status to ABORT  
Route::get('/dashboard/transaction/process/detail/{kind}/{id}', [DashboardController::class, 'processDetail'])->middleware('auth')->name('processDetail'); // See the detail

// Route for @selesai page
Route::get('/dashboard/transaction/success', [DashboardController::class, 'success'])->middleware('auth')->name('success'); // Show the @selesai page
Route::get('/dashboard/transaction/success/search', [DashboardController::class, 'successSearch'])->middleware('auth')->name('successSearch'); // Filter the transaction that was finished
Route::get('/dashboard/transaction/success/detail/{kind}/{id}', [DashboardController::class, 'successDetail'])->middleware('auth')->name('successDetail'); // See the detail

// Route for @batal page
Route::get('/dashboard/transaction/cancel', [DashboardController::class, 'cancel'])->middleware('auth')->name('cancel');// Show the @batal page
Route::get('/dashboard/transaction/cancel/search', [DashboardController::class, 'cancelSearch'])->middleware('auth')->name('cancelSearch'); // Filter the transaction that was canceled by user
Route::get('/dashboard/transaction/cancel/detail/{kind}/{id}', [DashboardController::class, 'cancelDetail'])->middleware('auth')->name('cancelDetail'); // See the detail

// Route for @ditolak page 
Route::get('/dashboard/transaction/abort', [DashboardController::class, 'abort'])->middleware('auth')->name('abort'); // Show the @ditolak page
Route::get('/dashboard/transaction/abort/search', [DashboardController::class, 'abortSearch'])->middleware('auth')->name('abortSearch'); // Filter the transaction that was aborted by admin
Route::get('/dashboard/transaction/abort/detail/{kind}/{id}', [DashboardController::class, 'abortDetail'])->middleware('auth')->name('abortDetail'); // See the detail

// Route for @refund page 
Route::get('/dashboard/refund',[DashboardController::class, 'refund'])->middleware('auth')->name('refundDashboard');
Route::get('/dashboard/refund/terkait/{id}',[DashboardController::class, 'refundTerkait'])->middleware('auth')->name('refundTerkait');
Route::get('/dashboard/refund/detail/{id}', [DashboardController::class, 'refundDetail'])->middleware('auth')->name('refundDetail');
Route::get('/dashboard/refund/process', [DashboardController::class, 'refundProcess'])->middleware('auth')->name('refundProcess');
Route::get('/dashboard/refund/success', [DashboardController::class, 'refundSuccess'])->middleware('auth')->name('refundSuccess');
Route::get('/dashboard/refund/abort', [DashboardController::class, 'refundAbort'])->middleware('auth')->name('refundAbort');

// END: ROUTES FOR HANDLING DASHBOARD --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
