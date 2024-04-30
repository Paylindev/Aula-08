<?php
// levar a pasta para xampp htdocs
// Ambiente php
// Variável de memória: $nomeVariavel
// get --> variável superglobal $_GET
// post --> variável superglobal $_POST

$nome = $_GET["fNome"];
$nasc = $_GET["fNasc"];
$endereco = $_GET["fEnd"];
$genero = $_GET["fGenero"];

// Tratando informaçõess recebidas do formulário
$nome = strtoupper($nome);
// $nome = strtolower($nome);

// Exibindo o conteúdo das variáveis
// concatenação .
echo "<h1 style='text-align: center;'>Título HTML + PHP</h1>";
echo "<br><br>";
echo "Estamos no PHP";
echo "<br><br>";
echo $nome;
echo "<br><br>";
echo "Nome digitado: $nome";
echo "<br><br>";
echo $nasc;
echo "<br><br>";
echo "Data de nascimento: ".$nasc."<br><br>";
echo "Endereço: $endereco"."<br><br>";
echo "Endereço: $genero"."<br><br>";

// Com post
/* 
$nome = $_POST["fNome"];
$nasc = $_POST["fNasc"];

// Exibindo o conteúdo das variáveis
echo $nome;
echo "<br><br>";
echo $nasc;
*/

?>