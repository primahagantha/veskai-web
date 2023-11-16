<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;

class ContactController extends Controller
{
    public function sendMail(Request $request)
    {
        // Ambil nilai dari formulir
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
    
        // Debugging: Cetak nilai variabel sebelum membuat instance ContactFormSubmitted
        dd($name, $email, $message);
    
        // Kirim email
        Mail::to('veskaiprod@gmail.com')->send(new ContactFormSubmitted($name, $email, $message));
    
        // Membuat pesan sukses atau redirect
        return 'Form submitted successfully!';
    }
    
}
