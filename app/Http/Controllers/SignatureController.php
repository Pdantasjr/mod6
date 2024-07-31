<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SignatureController extends Controller
{
    public function index(Request $request)
    {
        

        $validator = Validator::make($request->all(), [
            'name' => 'required|decimal:1,3'
        ]);

        $params = $validator->fails() ? $validator->messages() : $validator->validated()['name'];

        return view('test', [
            'params' => $params
        ]);
    }
}
