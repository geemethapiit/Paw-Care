<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Record;   
use Illuminate\Support\Facades\DB;

class MedicalRecordController extends Controller
{
    public function addnewrecord()
    {
        return view('addnewrecord');
    }


    public function index()
    {
        $records = Record::all();
        return view('medicalrecords', compact('records'));
    }


    public function store(Request $request)
    {
        $request->validate([
        'pet_name' => ['required', 'string'],
        'customer_name' => ['required', 'string'],
        'date_of_record' => ['required', 'date'],
        'treatment_given' => ['required', 'string'],
        'veterinarian_name' => ['required', 'string'],
    ]);

    $Record = Record::create([
        'pet_name' => $request->pet_name,
        'customer_name' => $request->customer_name,
        'date_of_record' => $request->date_of_record,
        'treatment_given' => $request->treatment_given,
        'veterinarian_name' => $request->veterinarian_name,
    ]);

    if($Record){
        return redirect()->route('medicalrecords')->with('success', 'Record added successfully');
    }else{
        return redirect()->route('medicalrecords')->with('error', 'Failed to add record');
    }
    }

    public function destroy($id)
    {
        $record = Record::findOrFail($id);
        $record->delete();
        return redirect()->route('medicalrecords')->with('success', 'Medical Record deleted successfully');
    }

    public function edit($id)
    {
        $record = Record::findOrFail($id);
        return view('editrecord', compact('record'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pet_name' => ['required', 'string'],
            'customer_name' => ['required', 'string'],
            'date_of_record' => ['required', 'date'],
            'treatment_given' => ['required', 'string'],
            'veterinarian_name' => ['required', 'string'],
        ]);

        $record = Record::findOrFail($id);
        $record->update($request->all());

        return redirect()->route('medicalrecords')->with('success', 'Medical record updated successfully.');
    }





}