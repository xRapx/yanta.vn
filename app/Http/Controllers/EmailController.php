<?php

namespace App\Http\Controllers;

use App\Mail\MyTestEmail;
use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index ()
    {
        
        $emails = Email::all();
        return view('admin.content.email' , ['emails' => $emails]);
    }

    public function sendEmail(Request $request)
    {
        $details = [
            'recipient' => $request->recipient,
            'subject' => $request->subject,
            'body' => $request->body,
        ];

        Mail::to($details['recipient'])->send(new MyTestEmail($details));

        // Lưu thông tin email vào database
        \App\Models\Email::create($details);

        return response()->json(['message' => 'Email sent successfully']);
    }
    public function show(Request $request ,$id)
    {   
        Log::info('Show user attempt:', $request->all());
        // Thêm dữ liệu giả
        $email = Email::find($id);

        return view('admin.details.email', compact('email'));
    }
}
