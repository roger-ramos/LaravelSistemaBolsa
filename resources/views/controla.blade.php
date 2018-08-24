<html>
<head>
    <meta charset="UTF-8"/>
    <title>Departamento</title>
</head>
<body>
<div>
    <?php
    //include "Departamento.class.php";

   //$operacao = $_POST["operacao"];
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
    ?>
    </br><a href="paginaInicial.php">Voltar</a>
</div>
</body>
</html>