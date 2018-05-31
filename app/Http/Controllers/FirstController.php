<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function show()
    {
        echo 'it is first ctrl';
        echo '<br><a href="/">Back to home</a>';
    }

}
