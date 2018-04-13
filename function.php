<?php
require("db_connect.php");


$id_chamado=$_GET['id_chamado'];
$franquia=$_GET['franquia'];
$data_chamado=$_GET['data_chamado'];

var_dump($id_chamado);


function insertChamado($id_chamado,$franquia,$data_chamado){
	if(!empty($id_chamado) && !empty($franquia) && !empty($data_chamado))	
		$sql_insert="INSERT INTO chamados (id_chamado,franquia,data_chamado) VALUES ($id_chamado,$franquia,$data_chamado)";
		else:
			echo "Não foi inserido";
	endif;
}


function checkChamado(){

	$sql_consulta="SELECT * FROM chamados";
}

?>