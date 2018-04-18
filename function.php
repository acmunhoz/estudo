<?php
include 'db_connect.php';


if(!empty($_GET['id_chamado']) && !empty($_GET['franquia']) && !empty($_GET['data_chamado'])):

$sql_insert="INSERT INTO chamados (id_chamado,franquia,data_chamado) VALUES (".$_GET['id_chamado'].",\"".$_GET['franquia']."\",\"".$_GET['data_chamado']."\")";
		

	if($mysqli->query($sql_insert) == True):
		echo "Chamado #".$_GET['id_chamado']." inserido!";
	else:
		echo "Deu ruim";
	endif;		

$mysqli->close();

endif;

/*
function checkChamado(){

	$sql_consulta="SELECT * FROM chamados";
}
*/

?>