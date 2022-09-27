<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\event;
use App\Lakes;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::all();
        return view('event.index',compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event = \App\Event::all();

        $lakes = \App\Lakes::all();
        return view('event.create',compact('event','lakes'));
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
    		'id_layanankesehatan' => 'required',
            'nama_event' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required'
    	]);

        Event::create($request->all()); 

        return redirect()->route('event.index')->with('Data ditambah','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::where('id_event',$id)->first();  
        
        $lakes = Lakes::where('id_layanankesehatan',$id)->first();
        return view('event.show',compact('event','lakes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::where('id_event',$id)->first(); 

        $lakes = \App\Lakes::all();
        
        return view('event.edit',compact('event','lakes'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request,[
            'id_layanankesehatan' => 'required',
            'nama_event' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required' 
        ]);

        // echo "<pre>"; print_r($request); "</pre>"; echo $id; exit;
        Event::where('id_event',$id)->update([
            'id_layanankesehatan' => $request->id_layanankesehatan,
            'nama_event' => $request->nama_event,
            'tanggal' => $request->tanggal,
            'keterangan' => $request->keterangan
        ]);
        
        return redirect()->route('event.index')->with('Data diedit','Data berhasil diedit');
        // Event::where('id_event', $id)->update($request->all()); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Event::where('id_event',$id)->delete(); 
        return redirect()->route('event.index')->with('Data dihapus','Data berhasil dihapus');
    }

    public function cetakEvent()
    {
        $cetakevent = Event::all();
        return view('event.cetakevent',compact('cetakevent'));
    }
}
