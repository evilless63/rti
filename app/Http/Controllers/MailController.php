<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\OrderMail;

class MailController extends Controller
{
    public function sendOrder(Request $request) {
        $comment = "Тест";
        dd($request);
        $toEmail = "prog@truck-star.ru";
        Mail::to($toEmail)->send(new OrderMail($comment));
        return 'Сообщение отправлено на адрес '. $toEmail;
    }
}
