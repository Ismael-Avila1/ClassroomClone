<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class SitioController extends Controller
{
    public function contact($codigo = null)
    {
        $name = '';
        $email = '';

        if($codigo == '1234') {
            $name = 'John Doe';
            $email = 'john.doe@mail.com';
        }

        return view('contactForm', compact('name', 'email'));
    }

    public function saveMessage(Request $request)
    {
        // dd($request->except('_token'));
        $request->validate([
            'name' => 'required|min:10',
            'email' => 'required|email',
            'message' => 'required|min:20',
        ]);

        Contact::create($request->except('_token'));

        return redirect('/');
    }
}
