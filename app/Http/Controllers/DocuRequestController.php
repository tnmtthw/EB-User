<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DocuRequest;
use Illuminate\Support\Facades\Auth;

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
        $data->signature = $request->input('signature');
        $data->user_id = auth()->user()->id;
        $data->save();
    
        return redirect()->back()->with('success', 'DocuRequest submitted successfully.');
    }
}
