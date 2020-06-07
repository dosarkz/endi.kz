<?php


namespace App\Http\Controllers;


use App\Http\Requests\CallbackRequest;
use App\Mail\CallBackMail;
use Illuminate\Support\Facades\Mail;
use Prophecy\Call\Call;

class SiteController extends Controller
{
    public function projects()
    {
        return view('site.projects');
    }

    public function about()
    {
        return view('site.about');
    }

    public function contacts()
    {
        return view('site.contacts');
    }

    public function callback(CallbackRequest $request)
    {
        Mail::to([
            'address' => 'ashenov.e@gmail.com'
        ])->send(new CallBackMail($request->all()));
    }
}
