<?php

namespace App\Http\Controllers;

use App\Specaility;
use Illuminate\Http\Request;

class SpecailityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specailities= Specaility::all();
        return view('specaility.specaility',['specailities' => $specailities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request , [
            'name' => 'required'
        ]);
        $specailities= new Specaility;
        $specailities->name=$request->input('name');
        $specailities->save();

        return redirect('/specaility')->with('info','Record Saved Successfully !');
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
     * @param  \App\Specaility  $specaility
     * @return \Illuminate\Http\Response
     */
    public function show(Specaility $specaility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Specaility  $specaility
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $this->validate($request , [
            'name' => 'required'
        ]);
        $data=array(
            'name'=> $request->input('name')
        );
        Specaility::where('id',$id)->update($data);



        return redirect('/specaility')->with('info','Specaility Updated Successfully !');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Specaility  $specaility
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $specailities= Specaility::find($id);
        //print_r($articles);
        return view('specaility.updatespecaility',['specailities' => $specailities]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Specaility  $specaility
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Specaility::where('id',$id)->delete();
        return redirect('/specaility')->with('info','Specaility Deleted Successfully !');

    }
    public function destroy(Specaility $specaility)
    {
        //
    }
}
