<?php


namespace App\Http\Controllers;


use App\Http\Requests\CallbackRequest;

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

    public function advantages()
    {
        return view('site.advantages');
    }

    public function callback(CallbackRequest $request)
    {
        dd(1);
    }
}
