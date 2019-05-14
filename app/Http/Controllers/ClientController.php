<?php

namespace App\Http\Controllers;

use App\ticket_booking;
use Illuminate\Http\Request;

class ClientController extends Controller
{

//    Constractor

    public function __construct()
    {
        $this->middleware('auth',['except' => 'index']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ticket_booking $booking)
    {
        $info= request();
        $data = $booking->getData($info);
        $fromValue= $booking->getTicketColumnValue('from');
        $toValue= $booking->getTicketColumnValue('to');

        return view('home',[
            'data'=>$data,
            'fromValue'=>$fromValue,
            'toValue'=>$toValue
        ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(client $client)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(client $client)
    {
        //
    }
}
