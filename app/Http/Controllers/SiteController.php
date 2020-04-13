<?php


namespace App\Http\Controllers;


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
}
