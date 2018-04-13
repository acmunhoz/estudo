<?php
require("db_connect.php");

$id_chamado=6558;
$franquia="Express Pelotas"
$data_chamado=date('Ymd');

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