<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Antrian;
use App\Loket;


class AntrianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $antrian = Loket::select('*')->join('antrians','antrians.id_loket', '=','lokets.id')->orderBy('antrians.id')->get();

        $pkLoket = Antrian::find('id_loket',['id_loket']);
        return view('list-antrian',['listAntrian' => $antrian]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //set loket

        $antrian = new Antrian;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        console.log("berhasi");
      $antrian = new Antrian;
      $antrian->id_loket = $request->idLoket;
      $antrian->nomor_antrian = $request->noAntrian;
      console.log($request->noAntrian);
      $antrian->save();

      return redirect()->route('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $antrian = Antrian::find($id);
        alert('$antrian');
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
    public function update(Request $request, $id)
    {
        //
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
