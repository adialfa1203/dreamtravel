<?php

namespace App\Http\Controllers;

use App\Models\faq;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function faq()
    {
        return view('users.faq.indexfaq');
    }
    public function faqs()
    {
        $data = faq::orderBy('id', 'desc')->get();
        return view('admin.pesan-navbar.semuapesan')->with('data', $data);
    }
    public function createfaq(Request $request)
    {
       faq::create($request->all());
        return redirect()->Route('faq');
    }
   
}