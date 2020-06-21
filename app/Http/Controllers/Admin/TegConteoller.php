<?php

namespace App\Http\Controllers\Admin;

use App\Teg;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TegConteoller extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $tegs = Teg::latest()->get();
        return view('backend.admin.teg.index',compact('tegs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.teg.crieate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teg = new Teg();
        $teg->name = $request->name;
        $teg->slug =Str::slug($request->name);
        $teg->save();
        return redirect (route('admin.teg.index'))->with('success','insart successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Teg::find($id);

        return view('backend.admin.teg.show',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teg = Teg::find($id);
        return view('backend.admin.teg.edit',compact('teg'));
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
        $update = Teg::find($id);
        $update->update($request->all());
        return redirect (route('admin.teg.index'))->with('success','Updated successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Teg::find($id);
        $delete->delete();
        return redirect()->back()->with('danger','Moved To Trash-List');
    }
}
