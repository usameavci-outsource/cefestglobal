<?php

use Illuminate\Http\Request;
use App\Mail\ContactMessageMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'pages.index')->name('index');
Route::view('/cefest-bilisim', 'pages.technology')->name('technology');
Route::view('/cefest-lojistik', 'pages.logistics')->name('logistics');
Route::view('/servisler', 'pages.services')->name('services');
Route::view('/iletisim', 'pages.contact')->name('contact');

Route::post('/iletisim', function (Request $request) {
    try {
        $mail = new ContactMessageMail(
            $request->get('email'),
            $request->get('fullname'),
            $request->get('message')
        );

        Mail::send($mail);

        toast('Mesajınız başarıyla gönderildi!', 'success');

        return redirect()->route('index');
    } catch (Exception $e) {
        Log::error('Mail gönderilemedi!', ['details' => $e->getMessage()]);

        toast('Bir hata oluştu lütfen daha sonra tekrar deneyiniz.', 'error');

        return redirect()->back()->withInput();
    }
})->name('contact-post');

Route::view('/dashboard', 'dashboard')->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
