<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\OrderMail;
use App\Mail\RequestMail;
use Validator;


class MailController extends Controller
{
    public function sendOrder(Request $request) {

        $validator = Validator::make($request->all(), [
            'dataName' => 'required',
            'dataPhone' => 'required',
            'dataEmail' => 'required|email',
            'dataPolitics' => 'required|accepted',
            'link' => 'required',
        ]);


        if ($validator->passes()) {
            // $request_data = json_decode($request->request_data, true);
            $toEmail = "vitaliy030589@gmail.com";
            Mail::to($toEmail)->send(new OrderMail($request));
			return response()->json(['success'=>'Письмо успешно отправлено ! Мы свяжемся с Вами в ближайшее время.']);
        }

        return response()->json(['error'=>$validator->errors()->all()]);

    }

    public function sendRequestMain(Request $request) {

        $validator = Validator::make($request->all(), [
            'dataName' => 'required',
            'dataSubject' => 'required',
            'dataEmail' => 'required|email',
            'dataText' => 'required',
            'dataPolitics' => 'required|accepted',
        ]);


        if ($validator->passes()) {
            // $request_data = json_decode($request->request_data, true);
            $toEmail = "vitaliy030589@gmail.com";
            Mail::to($toEmail)->send(new RequestMail($request));
			return response()->json(['success'=>'Письмо успешно отправлено ! Мы свяжемся с Вами в ближайшее время.']);
        }

        return response()->json(['error'=>$validator->errors()->all()]);

    }

    public function sendRequestContacts(Request $request) {
        $validator = Validator::make($request->all(), [
            'dataName' => 'required',
            'dataOrganization' => 'required',
            'dataPhone' => 'required',
            'dataEmail' => 'required|email',
            'dataText' => 'required',
            'dataPolitics' => 'required|accepted',
        ]);


        if ($validator->passes()) {
            // $request_data = json_decode($request->request_data, true);
            $toEmail = "vitaliy030589@gmail.com";
            Mail::to($toEmail)->send(new RequestMail($request));
			return response()->json(['success'=>'Письмо успешно отправлено ! Мы свяжемся с Вами в ближайшее время.']);
        }

        return response()->json(['error'=>$validator->errors()->all()]);
    }
}
