<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Sms\SmsInterface;

class SmsController extends Controller
{
 /**
 * Create a new instance
 *
 * @return void
 */
 public function __construct(SmsInterface $smsProvider)
 {
     $this->smsProvider = $smsProvider;
 }

 public function sendSms(Request $request)
 {
   $messageId = $this->smsProvider->sendSms("a@gmail.com","b@gmail.com","c@gmail.com",
       // $request->input('to'),
       // $request->input('from'),
       // $request->input('text_message')
   );

   return response()->json(['message_id' => $messageId]);

 }
}