<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use App\Models\LaudoTecnico;
use App\Models\User;
use App\Models\IncorporacaoBens;
use Illuminate\Support\Facades\Gate;
use PDF; 
use Auth;

class LaudoController extends Controller
{
    protected $laudos;
    protected $incorparacoes;
    protected $user;

    public function __construct(LaudoTecnico $laudos,IncorporacaoBens $incorparacoes,User $user)
    {
        $this->laudos = $laudos;
        $this->incorparacoes = $incorparacoes;
        setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');   // ajusta a data para padrao brasileiro
    }

    public function entrar()
    {        
        if (Auth::check()) {
            return view('dashboard');
        }else{
            return view('welcome');
        }
    }

    public function ip()
    {      
            return view('ip');
    }

    public function timbrado(Request $request)
    {        
        if (Gate::allows('admin')) {
            view()->share('timbrado'); 
            $pdf = PDF::loadView('timbrado')->setOptions([ 'isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
            return $pdf->stream('nome-do-arquivo-pdf.pdf',compact('pdf'));
        }else{
            echo 'não é admin' ;
        }
        

    }

    public function timbrado2(Request $request)
    {        
        if (Gate::allows('tifpolis')) {
            view()->share('timbrado'); 
            $pdf = PDF::loadView('timbrado')->setOptions([ 'isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
            return $pdf->stream('nome-do-arquivo-pdf.pdf',compact('pdf'));
        }else{
            echo 'não é da ti de Florianopolis' ;
        }
        

    }

    public function csv()
    {

        if (($open = fopen(storage_path() . "/app/public/SapBensGrid.csv", "r")) !== FALSE) {

            while (($data = fgetcsv($open, 1000, ",")) !== FALSE) { 

                if($data[3]=='584421'){                 //dd($data);
                    $numeroPatrimonio = $data[3];
                    $name = $data[8]; 
                    $tipoEquipamento = 'Código SIAFI: '.$data[7].' |  Descrição: '.$data[6];
                    $marca = "pegar no dgp";
                    $modelo = "pegar no dgp";
                    $local = $data[2];
                    $descricao = $data[10];
                }
            }
            fclose($open);
        }
        $ip = "172.16.0.10";
        $ds = ldap_connect($ip);
        $r = ldap_bind($ds);
        $filter = "(displayname=".$name.")";
        $cn = ldap_search($ds, "ou=Florianopolis,ou=Usuarios,dc=cefetsc,dc=edu,dc=br", $filter);
        ldap_close($ds);
        $info = ldap_get_entries($ds, $cn);    //dd($info);
        for ($i=0; $i<$info["count"]; $i++)      {
            $matriculaSiape= $info[$i]["o"]['0'];
            $nome =$info[$i]["displayname"]['0'];
            $u = explode(",",($info[$i]["dn"]));          
            $unidade = explode("=",$u[1]);
            $lotacao = $unidade[1]; 
        }
//dd($info);
echo "<pre>";
print_r($info);
echo "</pre>"; echo $matriculaSiape;
    }





    public function test()
    {        
        $ip = "172.16.0.10";
        $ds = ldap_connect($ip);
        $ldaptree   = "cn=Domain Admins,ou=Grupos,dc=cefetsc,dc=edu,dc=br";  
        $result = ldap_search($ds, $ldaptree,  "(&(objectClass=posixGroup))"  );
        ldap_close($ds);
        $data = ldap_get_entries($ds, $result);
        $membros = $data[0]['memberuid'];
        if(in_array(Auth::user()->username, $membros)){
           echo 'existe no array.';
        } else{
           echo 'nao existe no array';
        }
    }


    

    
}




