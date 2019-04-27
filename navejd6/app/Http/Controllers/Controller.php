<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;
use App\UsuarioModel as UsuarioModel;
use App\JuegoModel as JuegoModel;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function insert(Request $req)
    {
    	$vnombre = $req->input('name0');
    	$vtiempo = $req->input('email0');
    	// $Country = $req->input('password');


    	$data = array('nombre'=>$vnombre,"tiempo"=>$vtiempo);
    	 DB::table('navetabla')->insert($data);

    	return $data;
    	// return "success";
    }
    function guardarUsuario(Request $req){
        $nombre = $req->input('nombre');
        $dni = $req->input('dni');
        $usuario = UsuarioModel::where("dni",$dni)->first();
        if($usuario){
            return $usuario->idUsuario;
        }
        $usuario = new UsuarioModel();
        $usuario->nombre = $nombre;
        $usuario->dni = $dni;
        $usuario->save();
        return $usuario->idUsuario;
    }

    function guardarJuego(Request $req){

        $nombre = $req->input('idUsuario');
        $score = $req->input('score');

        // return $req->all();

        $sad = UsuarioModel::where("nombre",$nombre)
            ->select('idUsuario')
            ->first();

        //retorna valor numerico
        $sad = json_decode($sad)->idUsuario;

        $juego = new JuegoModel();

        $juego->idUsuario = (int)$sad;
        $juego->score = $score;

        $juego->save();


         return $juego->idJuego;
    }
    function cargarPuntajes(Request $req){


        // $users = DB::table('juego')->where('idUsuario', '22')->max('score');

         // $users = DB::table('juego')
         //            ->orderBy('score', 'desc')
         //            ->groupBy('idUsuario')
         //            ->get();
            $sql_users = '
                SELECT MAX(A.score) AS score, A.idUsuario, B.nombre
                FROM juego A
                JOIN usuario B ON A.idUsuario = B.idUsuario
                GROUP BY A.idUsuario, B.nombre
                ORDER BY MAX(A.score) ASC
            ';
            $users =DB::select($sql_users);

            return $users;
            // $users = DB::table('usuario')
            // ->join('juego', 'usuario.idUsuario', '=', 'juego.idUsuario')
            // ->select('usuario.idUsuario', 'usuario.nombre', 'juego.score')
            // ->get();
            // $users = DB::table('juego')
            // ->join('usuario', 'juego.idUsuario', '=', 'usuario.idUsuario')
            // // ->where(function($query){
            // //     ->select(DB::raw('max(score) as scoreMax, idUsuario'))
            // //       )
            // // })
            // ->get();



         // $users = DB::table('juego')
         //             ->select(DB::raw('max(score) as scoreMax, idUsuario'))
         //              ->groupBy('idUsuario')
         //             ->get();

         // $users = DB::table('juego')
         //             ->select(DB::raw('max(score) as scoreMax, idUsuario'))
         //             // ->where('idUsuario', '<>', 9)
         //              ->groupBy('idUsuario')
         //             ->get();




        //DB::select('select * from usuario where idUsuario < ?', [5]);


        // $usuario = UsuarioModel::where("dni",$dni)->first();

        // if($usuario){
        //     return $usuario->idUsuario;
        // }
        // $usuario = new UsuarioModel();
        // $usuario->nombre = $nombre;
        // $usuario->dni = $dni;
        // $usuario->save();


    }

    function edad(){
        return 29;
    }
    function nena(){
        $array = ["Susy","Magaly","Nadine"];
        return $array[ rand(0,COUNT($array)-1 ) ];
    }
}
