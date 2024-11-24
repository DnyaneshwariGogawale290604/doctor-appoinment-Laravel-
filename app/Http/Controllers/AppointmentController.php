<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function save(Request $request){ 
       
        $patient=new Appointment([
            'NAME'=> $request->get('NAME'),
            'EMAIL'=> $request->get('EMAIL'),
            'DESCRIPTION'=> $request->get('DESCRIPTION'),
            'TIMING'=> $request->get('TIMING'),
            'DOCTOR'=> $request->get('DOCTOR')

        ]);
        $patient->save();
        return redirect()->back();
    }
}
