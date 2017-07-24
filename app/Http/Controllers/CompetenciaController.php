<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Area;

use App\Competencia;

class CompetenciaController extends Controller
{
    
    public function index(Request $request){

    $competencia = Competencia::orderBy('id', 'DESC')->paginate(5);
    $competencia->each(function($competencia){
    $competencia->area;
    });

        return view('admin.competencias.index')->with('competencia', $competencia);

    }


    public function create(){

        $areas = Area::orderBy('id', 'ASC')->pluck('area_conocimiento', 'id');

    	return view('admin.competencias.create')->with('areas', $areas);
    }

    

    public function store(Request $request){

        $competencia = new Competencia($request->all());

        $competencia->area_id = 1; //ojo checar

        $nom = $competencia->area->area_conocimiento;

        $comp = $competencia->titulo;
        
        if($request->file('video')) {

        $file = $request->file('video');

        $nombre = 'QuetzalEdu'. $file->getClientOriginalName();

        $path = public_path() . '/Contenidos/'.$nom.'/'.$comp.'/VideoGeneral/';

        $file->move($path, $nombre);

        }

        if($request->file('informacion')) {

        $file = $request->file('informacion');

        $nombre = 'QuetzalEdu'. $file->getClientOriginalName();

        $path = public_path() . '/Contenidos/'.$nom.'/'.$comp.'/InformacionGeneral/';

        $file->move($path, $nombre);

        }

        $files = $request->file('files');
        foreach($files as $file){
                $nombre = 'QuetzalEdu'. $file->getClientOriginalName();
                $path = public_path() . '/Contenidos/'.$nom.'/'.$comp.'/ContenidoGeneral/';
                $file->move($path, $nombre);
            }

        

        $competencia->save();

        flash('¡La Competencia Docente  '. '<strong>'.$competencia->titulo.'</strong>'. ' ha sido creada con exito!', 'success');

        return redirect()->route('competencia.index');

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

        $competencia = Competencia::find($id);
        $competencia->delete();

        flash('¡La Competencia Docente '. '<strong>'.$competencia->titulo.'</strong>'. ' ha sido eliminada de forma exitosa!', 'danger');

        return redirect()->route('competencia.index');


    }
}
