<?php

namespace App\Http\Controllers\BackEnd;


use App\Experience;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExperiencePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $experiences=Experience::all();
        return view('BackEnd.experience.list',compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('BackEnd.experience.create');
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
        $experience=new Experience();
        $experience->title1=$request->title1;
        $experience->title2=$request->title2;
        $experience->start=$request->start;
        $experience->end=$request->end;
        if($request->description){
            $experience->description=$request->description;
        }

        $experience->save();
        
        return redirect()->route('experience.create');
        
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
        $experience=Experience::find($id);
        return view('BackEnd.experience.edit',compact('experience'));
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
        $experience=Experience::find($id);
        $experience->title1=$request->title1;
        $experience->title2=$request->title2;
        $experience->start=$request->start;
        $experience->end=$request->end;
        if($request->description){
            $experience->description=$request->description;
        }

        $experience->save();
        return redirect()->route('admin.experience.list');
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
        $experience=Experience::find($id);
        $experience->delete();
        return redirect()->route('admin.experience.list');
    }
}
