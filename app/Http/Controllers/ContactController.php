<?php

namespace App\Http\Controllers;

use Exception;

use App\Http\Requests\LaracarteRequestForm;

use App\Mail\ContactMessageCreated;

use App\Models\Message;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

use MercurySeries\Flashy\Flashy;

class ContactController extends Controller
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
        return view('contactSupport');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LaracarteRequestForm $request)
    {
          try{
              $message = Message::create($request->only('name','email','message'));
              $msgFlashy = 'Your email has been sent';
              $color = 'success';
              Mail::to(env('ADMIN_EMAIL'))->send(new ContactMessageCreated($message));

          }catch(Exception $e){
              $msgFlashy = 'Sry the email need to be unique , entre another email please';
              $color = 'error';
          }
          $d = 'success';

         Flashy::$color($msgFlashy);
         return Redirect::route('contacts.create');
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
