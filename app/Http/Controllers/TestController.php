<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;

class TestController extends Controller
{
    private $formItems = ["family_name","last_name","gender","email","postcode","address","building_name","opinion"];

    function index()
    {
        return view('form');
    }

    function post(Request $request) {
        $input = $request->only($this->formItems);
        dd($request→all());
        $request->session()->put("form_input", $input);
        return redirect('/contact/check');
    }

    function check(Request $request)
    {
        $input = $request->session()->get("form_input");
        dd($input);
        return view("confirmation",["input" => $input]);
    }

    function store(ClientRequest $request)
    {
        $input = $request->session()->get("form_input");
        unset($input['_token']);
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
    $params = $request->query();

    $users = Controlform::serach($params)->get();

    return view('control')->with([
        'users' => $users,
        'params' => $params,
    ]);
    }

    function delete(Request $request)
    {
        Contactform::find($request->id)->delete();
        return redirect('/contact/control');
    }
}
