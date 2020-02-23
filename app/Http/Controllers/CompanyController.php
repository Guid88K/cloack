<?php

namespace App\Http\Controllers;

use App\Company;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $user = User::find(Auth::user()->id);
        $companies = $user->companies;
        return view('dashboard.pages.company.mycompany.index', ['companies' => $companies, 'user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.company.mycompany.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = User::find(Auth::user()->id);
        $companies = new Company();

        $companies->name = $request->name;
        $companies->white_page = $request->white;
        $companies->black_page = $request->black;
//        $my_checkbox_value = $request['state'];
//
//        if ($my_checkbox_value == "pause") {
//            $companies->type_active = "Пауза";
//        } else {
//            $companies->type_active = "Активна";
//        }

        $companies->ip = $request->ip;
        $companies->geo = $request->geo;

        $my_device_checkbox_value = array();
        foreach ($request['device'] as $d) {
            array_push($my_device_checkbox_value, $d);
        }
        $finish_device = implode(",", $my_device_checkbox_value);
        $companies->devices = $finish_device;
        $user->companies()->save($companies);
        return redirect('client/companies');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companies = Company::find($id);
        return view('dashboard.pages.company.mycompany.edit', ['companies' => $companies]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find(Auth::user()->id);
        $companies = Company::find($id);

        $companies->name = $request->name;
        $companies->white_page = $request->white;
        $companies->black_page = $request->black;
//        $my_checkbox_value = $request['state'];
//
//        if ($my_checkbox_value == "pause") {
//            $companies->type_active = "Пауза";
//        } else {
//            $companies->type_active = "Активна";
//        }

        $companies->ip = $request->ip;
        $companies->geo = $request->geo;

        $my_device_checkbox_value = array();
        foreach ($request['device'] as $d) {
            array_push($my_device_checkbox_value, $d);
        }
        $finish_device = implode(",", $my_device_checkbox_value);
        $companies->devices = $finish_device;
        $user->companies()->save($companies);
        return redirect('client/companies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
