<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompetenciaController extends Controller
{
    //
    public function index(Request $request){

       return view('admin.competencias.index');

    }


    public function create(){

    	return view('admin.areas.create');
    }

    

    public function store(Request $request){

    	$area = new Area($request->all());

        $area->save();

        flash('¡El Área '. '<strong>'.$area->area_conocimiento.'</strong>'. ' ha sido creada exitosamente!', 'success');

        return redirect()->route('areas_conocimiento.index');
    }

    public function show($id){


    }

    public function edit($id){

        $area = Area::find($id);

        return view('admin.areas.edit')->with('area', $area);

    }

    public function update(Request $request, $id){


        $area = Area::find($id);
        $area->area_conocimiento = $request->area_conocimiento;
        $area->save();

        flash('¡El Área  '. '<strong>'.$area->area_conocimiento.'</strong>'. ' ha sido editada con exito!', 'warning');

        return redirect()->route('areas_conocimiento.index');





    }

    public function destroy($id){

        $area = Area::find($id);
        $area->delete();

        flash('¡El Área '. '<strong>'.$area->area_conocimiento.'</strong>'. ' ha sido eliminada de forma exitosa!', 'danger');

        return redirect()->route('areas_conocimiento.index');


    }
}
