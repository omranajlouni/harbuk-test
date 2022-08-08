<?php

namespace App\Http\Controllers;

use App\Models\company;
use Faker\Provider\ar_EG\Company as Ar_EGCompany;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            
            'logo'=>'min:100*100',
        ]);


        $company= new Company;
        $company->name=$request->input('name');
        $company->email=$request->input('email');
        $company->address=$request->input('address');
        $company->website=$request->input('website');
        if($request->hasfile('logo'))
        {
            $file= $request->file('logo');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('storage/app/public/companies-logos', $filename);
            $company->logo = $filename;

        }
        $company->save();
        return redirect()->back()->with('status','Company added successfully');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data= company::find($id);
        return view('company.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $company= company::find($request->id);

        $company->name=$request->name;
        $company->email=$request->email;
        $company->address= $request->address;
        $company->website= $request->website;
        if($request->hasfile('logo'))
        {
            $file= $request->file('logo');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('storage/app/public/companies-logos', $filename);
            $company->logo = $filename;

        }
        $company->save();
        return redirect()->back()->with('status','Company updated successfully');

        $company->update();
        return redirect()->route('home');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data= company::find($id);

        $data->destroy($id);

        return redirect()->route('home');
    }
}
