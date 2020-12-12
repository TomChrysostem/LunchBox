<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notifications\ContactFormMessage;
use App\Http\Requests\ContactFormRequest;
use App\Recipient;

class ContactController extends Controller
{
    public function show()
 {
  return view('contact.index');
 }
public function mailContactForm(ContactFormRequest $message, Recipient $recipient)
 {      
  $recipient->notify(new ContactFormMessage($message));
  return redirect()->back()->with('message', 'お問い合わせ頂きましてありがとうございます。');
 }
}