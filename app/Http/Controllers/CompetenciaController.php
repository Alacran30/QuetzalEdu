<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Area;

use App\Competencia;

use App\Actividad;

use App\User;

use App\Mochila;

use App\Http\Requests\CompetenciaRequest;

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

    

    public function store(CompetenciaRequest $request){

        $competencia = new Competencia($request->all());

        $competencia->area_id = $competencia->area->id;

        $competencia->user_id = 1;

        $nom = $competencia->area->area_conocimiento;

        $comp = $competencia->titulo;


        if($request->file('informacion')) {

        $file = $request->file('informacion');

        $nombre = $file->getClientOriginalName();

        $path = public_path().'/Contenidos/'.$nom.'/'.$comp.'/InformacionGeneral/';

        $pathinfo = public_path().'/Contenidos/'.$nom.'/'.$comp.'/InformacionGeneral/'.$nombre;

        $file->move($path, $nombre);

        }

        if($request->file('video')) {

        $file = $request->file('video');

        $nombre = $file->getClientOriginalName();

        $path = public_path().'/Contenidos/'.$nom.'/'.$comp.'/VideoGeneral/';

        $pathvideo = public_path().'/Contenidos/'.$nom.'/'.$comp.'/VideoGeneral/'.$nombre;

        $file->move($path, $nombre);

        }


        $competencia->informacion = $pathinfo;

        $competencia->video = $pathvideo;

        $competencia->save();

        $files = $request->file('actividades');
        foreach($files as $file){
                $nombre = $file->getClientOriginalName();
                $path = public_path().'/Contenidos/'.$nom.'/'.$comp.'/Actividades/';
                $pathactividad = public_path().'/Contenidos/'.$nom.'/'.$comp.'/Actividades/'.$nombre;
                $file->move($path, $nombre);

                $actividad = new Actividad($request->all());

                $actividad->competencia_id = $competencia->id;

                $actividad->actividad = $pathactividad;

                $actividad->save(); 
            }


        $files = $request->file('mochila');
        foreach($files as $file){
                $nombre = $file->getClientOriginalName();
                $path = public_path().'/Contenidos/'.$nom.'/'.$comp.'/Mochila/';
                $pathmochila = public_path().'/Contenidos/'.$nom.'/'.$comp.'/Mochila/'.$nombre;
                $file->move($path, $nombre);

                $mochila = new Mochila($request->all());

                $mochila->competencia_id = $competencia->id;

                $mochila->mochila = $pathmochila;

                $mochila->save(); 
            }

        flash('¡El curso '.'<strong>'.$competencia->titulo.'</strong>'. ' ha sido creado con exito!', 'success');

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

        flash('¡El curso '. '<strong>'.$competencia->titulo.'</strong>'. ' ha sido eliminado de forma exitosa!', 'danger');

        return redirect()->route('competencia.index');


    }

    public function lista(){

        $id = \Auth::user()->id;

        $user = User::find($id);

        return view('alumno.competencias')->with('user', $user);
    }

    public function competencian(){

        $id = \Auth::user()->id;

        $user = User::find($id);

        return view('alumno.competencia')->with('user', $user);
    }
}
