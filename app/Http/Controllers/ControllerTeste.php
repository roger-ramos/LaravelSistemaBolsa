<?php
/**
 * Created by IntelliJ IDEA.
 * User: Usuario
 * Date: 03/07/2018
 * Time: 01:52
 */

namespace App\Http\Controllers;


use Request;

class ControllerTeste extends Controller
{
        public function FazerDownload()
        {
            $operacao = "mostrar";
            if($operacao == "mostrar"){
                //  $departamento = new Departamento;
                //$resultado = $departamento->mostrar();
                $fp = fopen("../files/testedownload.txt","w");
                //if($resultado){
                $titulo = "OLA ISSO É UM TESTE DE DOWNLOAD\r\n";
                $escreve = fwrite($fp,$titulo);

                echo "<br>";
                echo "<br>";
                echo "<h3>Download</h3>";
                echo "<a href='download?file=testedownload.txt'>Clique aqui para o download!</a>";
                echo "<br>";


                //escreve dados no arquivo txt


                //fecha o arquivo
                fclose($fp);


                // }
            }

            //return "testando";
        }

        public function postDep( ){

            $operacao = Request::input('operacao');
            if($operacao == "mostrar"){
                //  $departamento = new Departamento;
                //$resultado = $departamento->mostrar();
                $fp = fopen("../files/testedownload.txt","w");
                //if($resultado){
                $titulo = "OLA ISSO É UM TESTE DE DOWNLOAD\r\n";
                $escreve = fwrite($fp,$titulo);

                echo "<br>";
                echo "<br>";
                echo "<h3>Download</h3>";
                echo "<a href='download?file=testedownload.txt'>Clique aqui para o download!</a>";
                echo "<br>";


                //escreve dados no arquivo txt


                //fecha o arquivo
                fclose($fp);


                // }
            }

            //return "testando";
        }

}