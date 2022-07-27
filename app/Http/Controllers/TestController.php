<?php

namespace App\Http\Controllers;

use App\Models\Contactform;
use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;

class TestController extends Controller
{
    private $formItems = ["family_name","last_name","gender","email","postcode","address","building_name","opinion"];

    function index()
    {
        return view('form');
    }

    function post(Request $request)
    {
        $input = $request->only($this->formItems);
        $request->session()->put("form_input", $input);
        return redirect('/contact/check');
    }

    function check(Request $request)
    {
        $input = $request->session()->get("form_input");
        return view('confirmation',['input' => $input]);
    }

    function store(ClientRequest $request)
    {
        $input = $request->session()->get("form_input");
        dd($input);
        unset($input['_token']);
        if($request->has("back")){ return redirect('/') ->withInput($input);
        }
        Contactform::create($input);
        $request->session()->forget("form_input");
        return view('thanks');
    }

    function complete()
    {
        return view('thanks');
    }

    function control()
    { 
        return view('control');
    }

    function search(Request $request)
    {
        
        
        $querys =  Contactform::where('family_name',' family_name')->where('last_name','last_name')->where('email'.'email')->get();
        dd($querys);

        return view('control', ['querys' => $querys]);

    }

    function delete(Request $request)
    {
        Contactform::find($request->id)->delete();
        return redirect('/contact/control');
    }

}