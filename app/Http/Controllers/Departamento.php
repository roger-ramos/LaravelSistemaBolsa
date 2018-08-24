<?php
/**
 * Created by IntelliJ IDEA.
 * User: Usuario
 * Date: 11/07/2018
 * Time: 09:49
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\CollectionStdClass;

class Departamento extends Controller
{
        public function PegarDepartamentos(){
            $departamentos = DB::table('departamento')
                ->orderBy('iddep')
                ->get();
            echo 'Código Departamento';
            echo '<br>';
            $fp = fopen("../files/testedownload.txt","w");
            $titulo = "Código Departamento; Nome Departamento;\r\n";
            $escreve = fwrite($fp,$titulo);
            foreach ($departamentos as $user){
                echo $user->iddep;
                echo '  ';
                echo $user->nomedep;
                $texto= $user->iddep."; ".$user->nomedep.";\r\n";
                $escreve = fwrite($fp,$texto);
                echo '<br>';
            }
            //fecha o arquivo
            fclose($fp);

            echo "<br>";
            echo "<br>";
            echo "<h3>Downloadkkk</h3>";
            echo "<a href='download?file=testedownload.txt'>Clique aqui para o download!</a>";
            echo "<br>";
        }
}