<?php

namespace App\Http\Controllers;

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
}
