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

//Route::get('/', function () {
//    return (new ContactMessageMail('usameavci@gmail.com', 'John Doe', 'This is a test message'))->render();
//})->name('index');

Route::view('/', 'pages.index')->name('index');
Route::view('/cefest-lojistik', 'pages.logistics')->name('logistics');
Route::view('/cefest-bilisim', 'pages.technology')->name('technology');
Route::view('/cefest-tekstil', 'pages.textile')->name('textile');
Route::get('/iletisim', function () {
    if (request()->isXmlHttpRequest()) {
        $html = view('components.contact-form-fields')->render();

        return response()->json([
            'html'       => $html,
            'csrf_token' => csrf_token(),
        ]);
    }

    return view('pages.contact');
})->name('contact');

Route::post('/iletisim', function (Request $request) {
    try {
        $mail = new ContactMessageMail(
            $request->get('email'),
            $request->get('fullname'),
            $request->get('message')
        );

        Mail::send($mail);

        $message = 'Merhaba, ihtiyaçlarınızı incelemeye aldık. Neler yapabileceğimiz ve teklifimizle ilgili sizinle aynı gün içinde iletişime geçeceğiz. </br></br>Sevgiler, CeFest Global!';
        if ($request->isXmlHttpRequest()) {
            return response()->json(['message' => $message]);
        }

        toast($message, 'success');

        return redirect()->back();
    } catch (Exception $e) {
        Log::error('Mail gönderilemedi!', ['details' => $e->getMessage()]);

        $message = 'Bir hata oluştu lütfen daha sonra tekrar deneyiniz.';

        if ($request->isXmlHttpRequest()) {
            return response()->json(['message' => $message], 400);
        }

        toast($message, 'error');

        return redirect()->back()->withInput();
    }
})->name('contact-post');

Route::view('/dashboard', 'dashboard')->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
