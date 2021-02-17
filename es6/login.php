<?php
	include 'page2.php';
	include 'page4.php';
	$emaillogin = $_POST["emailconferma"];
	$passwordlogin = $_POST["passwordconferma"];
	$query = "SELECT dati_utente.cognome, dati_utente.nome FROM dati_utente INNER JOIN credenziali ON dati_utente.idutente = credenziali.idutente WHERE credenziali.mail = '$m' AND credenziali.password = '$p'";
	$result = mysqli_query($connessione, $query);
	if($result){
		echo "<center> Accesso negato controlla email e password </center>";
	}else{
		echo " <center> Accesso riuscito </center>";
		stampa($result);
	}


function stampa($buffer){
	while($row = mysqli_fetch_array($buffer, MYSQLI_NUM)) {
		echo"<center> <table>
		<tr> <td> cognome: </td>
		<td> $row[0] </td> </tr>
		<tr> <td> nome: </td>
		<td> $row[1] </td> </tr>
		</table> </center>";
	}
}
?>