<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\crudplat;
use App\Http\Requests\CrudplatsRequeqt;
use App\Http\Controllers\HomeController;
use App\Http\Requests\updateRequest;

class CrudPlatsController extends Controller
{
    public function Crud()
    {
        $data = crudplat::select("*")->orderby('id', 'ASC')->paginate(3);
        return view('AdminCrudPlats.Crud', ['data' => $data]);
    }
    public function store(CrudplatsRequeqt $request)
    {
        if ($request->has('photo')) {
            $imge = $request->photo;
            $extension = strtolower($imge->extension());
            $filenams = time() . rand(1, 6000) . '.' . $extension;
            $imge->move('imgCrud', $filenams);
            $datatoinsert['photo'] = $filenams;
        };
        $datatoinsert['name'] = $request->name;
        $datatoinsert['components'] = $request->components;
        $datatoinsert['new_price'] = $request->new_price;
        $datatoinsert['old_price'] = $request->old_price;
        $datatoinsert['category'] = $request->category;
        $datatoinsert['available'] = $request->available;
        $datatoinsert['created_at'] = date("Y-m-d-H:i:s");
        crudplat::create($datatoinsert);
        return redirect()->route('Crud')->with(['success' => 'Add Plats successFully !']);
        return redirect()->route('plats');
    }
    public function edit($id)
    {
        $data = crudplat::select("*")->find($id);
        return view('AdminCrudPlats.edit',['data'=>$data]);
    }
    public function update($id, updateRequest $request)
    {
        if ($request->has('photo')) {
            $imge = $request->photo;
            $extension = strtolower($imge->extension());
            $filenams = time() . rand(1, 6000) . '.' . $extension;
            $imge->move('imgCrud', $filenams);
            $datatoinsert['photo'] = $filenams;
        };
        $datatoupdate['name'] = $request->name;
        $datatoupdate['components'] = $request->components;
        $datatoupdate['new_price'] = $request->new_price;
        $datatoupdate['old_price'] = $request->old_price;
        $datatoupdate['category'] = $request->category;
        $datatoupdate['available'] = $request->available;
        $datatoupdate['created_at'] = date("Y-m-d-H:i:s");
        crudplat::where(['id'=>$id] )->update($datatoupdate);
        return redirect()->route('Crud')->with(['success' => 'update Plats successFully !']);
    }
    public function delete($id){
        crudplat::where(['id'=>$id])->delete();
        return redirect()->route('Crud')->with(['success' => 'delet Plats successFully !']);
    }
    //ajax_search
    public function ajax_search(Request $request){
        if($request->ajax()){
            $searchbyplats=$request->searchbyplats;
            $data=crudplat::where('name',"like","%{$searchbyplats}%")->orderby("id","ASC")->pagination(1);
            return view('AdminCrudPlats.ajax_search',['data'=>$data]);
        }
    }
}
