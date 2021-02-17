</html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>






<br><br><br>
<center>
<div class="card text-white bg-secondary mb-3" style="width: 25rem;">
  
  
  <font size="5">Riepilogo dati</font>
  <hr>
  <div class="card-body">
    <p class="card-text">
	
	
	<form method="post" action="page3.php">
	<p style="margin-bottom:1rem"><label>Cognome: &nbsp;&nbsp;&nbsp;</label>
	<?php 
	echo $_POST["cognome"]; 
	?>
	</p>
	
	<p style="margin-left:1rem"><label>Nome: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<?php 
	echo $_POST["nome"]; 
	?>
	</p>
	
	<label>Sesso: </label><?php 
	echo $_POST["sesso"]; 
	?>
	
	<br><br>
	<label>Nazionalita: </label>
	<?php 
	echo $_POST["naz"]; 
	?>
	
	<br><br>
	<label>Patente: </label>
	<?php 
	echo $_POST["cat"];
	?>
	
	<br><br>
	<label>eMail: </label>
	<?php 
	echo $_POST["mail"]; 
	?>
	<br><br><hr>
	
	<input type="reset" value="&#10007 Correggi" class="btn btn-secondary"></input>&nbsp;&nbsp;&nbsp;
	<input type="submit" value="&#10003 Registra" class="btn btn-success" name="salvataggio"></input>
	
	</form>
	</p>
	</p>


	<?php
	
	$cognome = $_POST["cognome"];
	$nome = $_POST["nome"];
	$sesso = $_POST["sesso"];
	$naz = $_POST["naz"];
	$cat = $_POST["cat"];
	$mail = $_POST["mail"];
	$password = $_POST["password"];
	$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
	$txt = "Cognome: $cognome \n";
	fwrite($myfile, $txt);
	$txt = "Nome: $nome \n";
	fwrite($myfile, $txt);
	$txt = "Sesso: $sesso \n";
	fwrite($myfile, $txt);
	$txt = "Nazionalità: $naz \n";
	fwrite($myfile, $txt);
	$txt = "Categoria: $cat \n";
	fwrite($myfile, $txt);
	$txt = "e-Mail: $mail\n";
	fwrite($myfile, $txt);
	$txt = "Password: $password \n";
	fwrite($myfile, $txt);
	fclose($myfile);
	
/*
	$host = "127.0.0.1";
	$nome = "root";
	$pw = "misterleo.7";
	$db = "esphp5";

	$connessione = mysql_connect($host, $nome, $pw)
		or die("Connessione non riuscita".mysqli_connect_error());
		mysql_select_db($db);


		$inserisci_dati = "INSERT INTO dati_utente (cognome, nome, sesso, nazionalita) VALUES ('$nome', '$cognome', '$sesso', '$nazionalita')";
		$result = mysql_query($inserisci_dati);

		if(!result){
			or die("Errore nell-inserimento della query".mysql_error());
		}
		$inserisci_credenziali = "INSERT INTO credenziali (patente, email, patente) VALUES ('$patente', '$mail', '$password')";
		$result = mysql_query($inserisci_credenziali);

		if(!result){
			or die("Errore nell-inserimento della query".mysql_error());
		}

		mysqli_close();
		*/
	?>
	
	
  </div>
</div>


</center>
</body>

<html>