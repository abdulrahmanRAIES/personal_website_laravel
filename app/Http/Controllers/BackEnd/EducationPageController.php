<?php


namespace App\Http\Controllers\BackEnd;

use App\Education;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EducationPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        //
        $educations=Education::all();
        return view('BackEnd.education.list',compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('BackEnd.education.create');
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
        
        $this->validate($request,[
            'title1' => 'required|string',
            'title2' => 'required|string',
            'start' => 'required|string',
            'end' => 'required|string',
        ]);
        $education=new Education();
        $education->title1=$request->title1;
        $education->title2=$request->title2;
        $education->start=$request->start;
        $education->end=$request->end;
        if($request->description){
            $education->description=$request->description;
        }

        $education->save();
        
        return redirect()->route('education.create');
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
        $education=Education::find($id);
        return view('BackEnd.education.edit',compact('education'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         
        $this->validate($request,[
            'title1' => 'required|string',
            'title2' => 'required|string',
            'start' => 'required|string',
            'end' => 'required|string',
        ]);
        $education=Education::find($id);
        $education->title1=$request->title1;
        $education->title2=$request->title2;
        $education->start=$request->start;
        $education->end=$request->end;
        if($request->description){
            $education->description=$request->description;
        }

        $education->save();
        
        return redirect()->route('admin.education.list');
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
        $education=Education::find($id);
        $education->delete();
        return redirect()->route('admin.education.list');
    }
}
