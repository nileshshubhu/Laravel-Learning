<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function index()
    {
        return 'hello from controller';
    }

    public function about()
    {
        // return 'ID No' . $id . 'Name' . $name;

        $name = $this->privateFunction();
        return $name;
        return view('about', compact('id', 'name'));
    }

    private function privateFunction()
    {
        return 'hello world';
    }
}
