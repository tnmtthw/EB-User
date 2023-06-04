<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DocuRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class DocuRequestController extends Controller
{
    public function docuRequest(Request $request)
    {
        $data = new DocuRequest();
        $data->firstname = $request->input('firstname');
        $data->middlename = $request->input('middlename');
        $data->lastname = $request->input('lastname');
        $data->address = $request->input('address');
        $data->bday = $request->input('bday');
        $data->por = $request->input('por');
        $data->pob = $request->input('pob');
        $data->voter = $request->input('voter');
        $data->howner = $request->input('howner');
        $data->rhowner = $request->input('rhowner');
        $data->roa = $request->input('roa');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = Storage::disk('s3')->put('public/img/signature', $image);
            $data['image'] = $path;
        }   
        $data->type = $request->input('type');
        $data->user_id = auth()->user()->id;
        $data->save();
    
        return redirect('/')->with("success","Registration successful. Please login to continue.");
    }
}
