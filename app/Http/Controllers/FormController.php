<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programa;
use DB; 
class FormController extends Controller
{
     ///////////////////////////////
    //-----//PROGRAMA//-----//
    /////////////////////////////// 
    public function form(){        
        $programas=Programa::all();        
        return view('form', ['programas'=>$programas]);
    }
    public function edit(){        
        $programas=Programa::all();        
        return view('edit', ['programas'=>$programas]);
    }
    public function destroy($deleteprogram){       
        DB::delete('DELETE FROM programas WHERE codigo_prog = ?', [$deleteprogram]);
        return redirect()->route('form');
    }

    // public function view($program_code){
    //     $programas=Programa::find($program_code);
    //     $programas=Programa::all();   
    //     return view('edit', ['programas'=>$program_code]);                                
    // }
    // public function dark(){            
    //     return view('dark');
    // }
    
    public function updatevideogame($request){        
        $update =Programa::find($request->codigo_prog);        
        $update->codigo_prog=$request->codigo_prog;
        $update->nombre=$request->nombre;
        $update->estado=$request->estado;
        $update->nivel_formacion=$request->nivel_formacion;
        $update->duracion=$request->duracion;
        $update->version=$request->version;
        $update->codigo_cen=$request->codigo_cen;
        $update->active=1;
        $update->save();        
        return redirect()->route('form');         
    }

    public function create(){
        $programas=Programa::all();        
        return view('create', ['programas'=>$programas]);
    }
//  public function storevideogame(StoreVideogame $request){
//                                 /*-----SHAPE 1-----*/
//         // $request->validate([
//         //     'name_game'=>'required'
//         // ]);
//         // $game =new Videogame;
//         // $game->name=$request->name_game;
//         // $game->category_id=$request->categoria_id;
//         // $game->active=1;
//         // $game->save();
//                                 /*-----SHAPE 2-----*/
//         // Videogame::create([
//         //     'name'=>$request->name,
//         //     'category_id'=>$request->category_id
//         // ]);

//         Videogame::create($request->all()); 
        
//         return redirect()->route('listgames');
         
//     }

    
}

