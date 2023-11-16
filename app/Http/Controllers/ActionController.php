<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActionController extends Controller
{
    public function unbandiscord(Request $request){
     
        $username = $request->input('username');
        $reason = $request->input('reason');

        $from = 'discord-unban@veskai.com'; // Ganti dengan alamat email pengirim
        $to = 'admin@veskai.com'; // Ganti dengan alamat email admin atau penerima permintaan unban
        $subject = 'Unban Request';
        $message = "Username: $username\nReason: $reason";

        // Kirim email
        $sent = mail($to, $subject, $message, "From: $from");

        if ($sent) {
            return "Unban request for user $username has been submitted. We will review your request.";
        } else {
            return "Failed to submit unban request. Please try again later.";
        }
    }

    public function unbansurvania(Request $request){
     
        $username = $request->input('username');
        $reason = $request->input('reason');

        $from = 'mxxpe789456@gmail.com'; // Ganti dengan alamat email pengirim
        $to = 'veskaiprod@gmail.com'; // Ganti dengan alamat email admin atau penerima permintaan unban
        $subject = 'Unban Request';
        $message = "Username: $username\nReason: $reason";

        // Kirim email
        $sent = mail($to, $subject, $message, "From: $from");

        if ($sent) {
            return "Unban request for user $username has been submitted. We will review your request.";
        } else {
            return "Failed to submit unban request. Please try again later.";
        }
    }
}
