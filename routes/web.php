<?php

use Illuminate\Http\Request;
use App\Mail\ContactMessageMail;
use Illuminate\Support\Collection;
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

Route::get('/mail-test', function () {
    /** @var Collection $subjects */
    $subjects = config('static-data.contact_subjects');
    $subject  = $subjects->where('id', 1)->first();

    $mail = new ContactMessageMail(
        'usameavci@gmail.com',
        '5374919101',
        'John Doe',
        $subject,
        'This is a test message'
    );

    return $mail->render();
})->name('index');

Route::view('/', 'pages.index')->name('index');
Route::view('/cefest-lojistik', 'pages.logistics')->name('logistics');
Route::view('/cefest-bilisim', 'pages.technology')->name('technology');
Route::view('/cefest-tekstil', 'pages.textile')->name('textile');
Route::get('/iletisim', function () {
    $subjects = config('static-data.contact_subjects');

    if (request()->isXmlHttpRequest()) {
        $html = view('components.contact-form-fields', compact('subjects'))->render();

        return response()->json([
            'html'       => $html,
            'csrf_token' => csrf_token(),
        ]);
    }

    return view('pages.contact', compact('subjects'));
})->name('contact');

Route::post('/iletisim', function (Request $request) {
    /** @var Collection $subjects */
    $subjects = config('static-data.contact_subjects');

    try {
        $mail = new ContactMessageMail(
            $request->get('email'),
            $request->get('phone'),
            $request->get('fullname'),
            $subjects->where('id', $request->get('subject'))->first(),
            $request->get('message')
        );

        Mail::send($mail);

        $message = 'Merhaba, ihtiya??lar??n??z?? incelemeye ald??k. Neler yapabilece??imiz ve teklifimizle ilgili sizinle ayn?? g??n i??inde ileti??ime ge??ece??iz. </br></br>Sevgiler, CeFest Global!';
        if ($request->isXmlHttpRequest()) {
            return response()->json(['message' => $message]);
        }

        toast($message, 'success');

        return redirect()->route('contact');
    } catch (Exception $e) {
        Log::error('Mail g??nderilemedi!', ['details' => $e->getMessage()]);

        $message = 'Bir hata olu??tu l??tfen daha sonra tekrar deneyiniz.';

        if ($request->isXmlHttpRequest()) {
            return response()->json(['message' => $message], 400);
        }

        toast($message, 'error');

        return redirect()->route('contact')->withInput();
    }
})->name('contact-post');

Route::view('/dashboard', 'dashboard')->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
