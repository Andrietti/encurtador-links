<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Link;
use App\Models\Serie;
use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function index (Request $request)
    {
        $links = Link::query()->orderBy('shortLink')->get();
        return view('links.index')->with('links', $links);
    }

    public function create()
    {
        return view('links.create');
    }

    public function store (Request $request)
    {
        $shortLink = $request->input('shortLink');
        $longLink  = $request->input('longLink');
        $link = new Link();
        $link->shortLink = $shortLink;
        $link->longLink = $longLink;
        $link->save();
        return redirect('http://localhost:8000/links');

    }

    public function redirect(Request $request, $shortLink){

        $link = Link::query()->where('shortLink', $shortLink)->first();
        return redirect($link->longLink);
    }


}
