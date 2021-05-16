<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\About;
use App\Http\Controllers\Controller;

class AboutPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $about=About::first();
        return view('BackEnd.about.about',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $this->validate($request,[
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',
            'description' => 'required|string',
        ]);
        $about=About::first();
        $about->name=$request->name;
        $about->phone=$request->phone;
        $about->email=$request->email;
        $about->description=$request->description;
        
        if($request->file('image')){
            $img_file = $request->file('image');
            $img_file->storeAs('public/img/','image.' . $img_file->getClientOriginalExtension());
            $about->image = 'storage/img/image.' . $img_file->getClientOriginalExtension();
        }

        if($request->file('resume')){
            $pdf_file = $request->file('resume');
            $pdf_file->storeAs('public/pdf/','resume.' . $pdf_file->getClientOriginalExtension());
            $about->resume = 'storage/pdf/resume.' . $pdf_file->getClientOriginalExtension();
        }
        $about  ->save();
        // return 'abc';
       
        return redirect()->route('about.index');
        // return request()->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
