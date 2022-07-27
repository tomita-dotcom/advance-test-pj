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
        return view("confirmation",["input" => $input]);
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
        $query =  Contactform::where('family_name',' family_name_keyword')->where('last_name','last_name_keyword')->where('email'.'email_keyword')->get();

         return view('control', ['query' => $query]);

    }

    function delete(Request $request)
    {
        Contactform::find($request->id)->delete();
        return redirect('/contact/control');
    }

}