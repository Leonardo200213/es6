<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<br><br><br>
<center>
<div class="card text-white bg-primary mb-3" style="width: 25rem;">
  
  
  <font size="5">Modulo di iscrizione</font>
  <hr>
  <div class="card-body">
    <p class="card-text">
	<form action="page2.php" method="post" action="processo.php">
	<p style="margin-bottom:1rem">
		<label>Cognome: &nbsp;&nbsp;&nbsp;</label>	<input name="cognome"></input>
	</p>
	<p style="margin-left:1rem">
		<label>Nome: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>	<input name="nome"></input>
		</p>
	<label>Sesso: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="radio" id="maschio" name="sesso" value="maschio"><label for="maschio">Maschile</label>&nbsp;&nbsp;<input type="radio" id="femminile" name="sesso" value="femminile"><label for="femminile">Femminile</label><br>
	<br>
	<label>Nazionalita: &nbsp;&nbsp;&nbsp;</label><select name="naz" id="naz" style="width: 11rem;">
		<option value="Italia">Italia</option>
		<option value="Francia">Francia</option>
		<option value="Inghilterra">Inghilterra</option>
		<option value="Spagna">Spagna</option>
	</select>
	<br><br>
	<p style="margin-right:2rem">
	<label>Patente: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="checkbox" id="patente" name="cat" value="cat.A"><label for="patente"> Cat.A </label>&nbsp;&nbsp;
	<input type="checkbox" id="patente" name="cat" value="cat.B"><label for="patente"> Cat.B </label><br>
	</p>
	<p style="margin-left:1rem">
	<label>eMail: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="email" name="mail"></input>
	</p>
	<label>Password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="password" name="password"></input>
	<br><br><hr>
	<input type="submit" value="&#10007 Annulla" class="btn btn-secondary"></input>&nbsp;&nbsp;&nbsp;
	<input type="submit" value="&#10003 Conferma" class="btn btn-warning"></input>
	</form>
	
	</p>
	</p>
  </div>
</div>


</center>
</body>

</html>