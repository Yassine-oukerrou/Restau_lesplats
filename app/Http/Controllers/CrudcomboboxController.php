<?php

namespace App\Http\Controllers;

use App\Models\crudcombobox;


use Illuminate\Http\Request;

class CrudcomboboxController extends Controller
{
    public function Crudcombobox()
    {

        $data = crudcombobox::select("*")->orderby('id', 'ASC')->paginate(1);
        return view('AdminCrudPlats.Crudcombobox', ['data' => $data]);
    }
    public function store(Request $request)
    {
        $datatoinsert['name_addition1'] = $request->name_addition1;
        $datatoinsert['choiceOne1'] = $request->choiceOne1;
        $datatoinsert['choiceTowe1'] = $request->choiceTowe1;
        $datatoinsert['choiceThree'] = $request->choiceThree;
        $datatoinsert['name_addition2'] = $request->name_addition2;
        $datatoinsert['choiceOne2'] = $request->choiceOne2;
        $datatoinsert['choiceTowe2'] = $request->choiceTowe2;
        $datatoinsert['choiceThree2'] = $request->choiceThree2;
        $datatoinsert['name_addition3'] = $request->name_addition3;
        $datatoinsert['choiceOne3'] = $request->choiceOne3;
        $datatoinsert['choiceTowe3'] = $request->choiceTowe3;
        $datatoinsert['choiceThree3'] = $request->choiceThree3;
        $datatoinsert['created_at'] = date("Y-m-d-H:i:s");
        crudcombobox::create($datatoinsert);
        return redirect()->route('Crudcombobox')->with(['success' => 'Add Plats successFully !']);
    }
}
