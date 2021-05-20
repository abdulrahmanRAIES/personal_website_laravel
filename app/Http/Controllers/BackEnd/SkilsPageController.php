<?php


namespace App\Http\Controllers\BackEnd;

use App\Skil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SkilsPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        //
        $skils=Skil::all();
        return view('BackEnd.skils.list',compact('skils'));
        // return view('BackEnd.index',compact('skils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('BackEnd.skils.create');
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
            'tool' => 'required|string',
            'code' => 'required|string',
        ]);
        $skils=new Skil();
        $skils->tool=$request->tool;
        $skils->code=$request->code;

        $skils->save();
     
        return redirect()->route('skils.create');
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
        $skils=Skil::find($id);
        return view('BackEnd.skils.edit',compact('skils'));
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
            'tool' => 'required|string',
            'code' => 'required|string',
        ]);
        $skils=Skil::find($id);
        $skils->tool=$request->tool;
        $skils->code=$request->code;

        $skils->save();
        
        return redirect()->route('admin.skils.list');
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
        $skils=Skil::find($id);
        $skils->delete();
        return redirect()->route('admin.skils.list');
    }
}
