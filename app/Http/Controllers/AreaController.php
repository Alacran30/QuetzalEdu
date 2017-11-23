<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Area;

use App\Http\Requests\AreaRequest;

class AreaController extends Controller
{

    function __construct(){

        $this->middleware('auth', ['only' => ['index']]);
    }
    
    //
     public function index(Request $request){


       $area = Area::orderBy('id', 'ASC')->paginate(4);



       return view('admin.areas.index')->with('area', $area);

    }


    public function create(){

    	return view('admin.areas.create');
    }

    

    public function store(AreaRequest $request){

    	$area = new Area($request->all());

        $area->save();

        flash('¡El área de conocimiento '. '<strong>'.$area->area_conocimiento.'</strong>'. ' ha sido creada exitosamente!', 'success');

        return redirect()->route('areas_conocimiento.index');
    }

    public function show($id){


    }

    public function edit($id){

        $area = Area::find($id);

        return view('admin.areas.edit')->with('area', $area);

    }

    public function update(AreaRequest $request, $id){


        $area = Area::find($id);
        $area->area_conocimiento = $request->area_conocimiento;
        $area->save();

        flash('¡El área de conocimiento  '. '<strong>'.$area->area_conocimiento.'</strong>'. ' ha sido editada con exito!', 'warning');

        return redirect()->route('areas_conocimiento.index');





    }

    public function destroy($id){

        $area = Area::find($id);
        $area->delete();

        flash('¡El área de conocimiento '. '<strong>'.$area->area_conocimiento.'</strong>'. ' ha sido eliminada de forma exitosa!', 'danger');

        return redirect()->route('areas_conocimiento.index');


    }
}
