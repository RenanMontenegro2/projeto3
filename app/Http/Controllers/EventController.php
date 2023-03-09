<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
class EventController extends Controller
{
    public function index(){
        $nome="Matheus";
        $idade=29;
        $arr=[1,2,3,4,5];
        $nomes=["Matheus","João","Maria","José"];
        //recebe o valor=>passa o valor
        return view('welcome',
            [
                'nome'=>$nome,
                'idade'=>$idade,
                'profissao'=>'Progamador',
                'arr'=>$arr
            ]);
    }
    public function create(){
        return view('events.create');
    }
}

