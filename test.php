

<?php
	$pdo = new PDO('mysql:host=localhost;dbname=robotik;charset=utf8', 'root', '');
	// FETCH
	/*
	$sql = "SELECT * FROM books ORDER BY nachname";
	foreach($pdo->query($sql) as $row){
		
	}*/
	
	// INSERT
	/*
	$vorname = "Vorname";
	$nachname = "Nachname";
	$titel = "Titel";
	$beschreibung = "Beschreibung";
	
	
	$sql = "INSERT INTO books (vorname, nachname, titel, beschreibung) 
			VALUES ('$vorname', '$nachname', '$titel', '$beschreibung')";
			
	if($pdo->exec($sql) === 1)
		echo "Neuer Datensatz eingefügt";
	*/
	
	// UPDATE
	/*
	$vorname = "Neuer Vorname";
	$sql = "UPDATE books SET vorname = '$vorname', updated_at = NOW() WHERE id = 2";
			
	if($pdo->exec($sql) === 1)
		echo "Update ausgeführt";
	*/
	
	// DELETE
	/*
	$sql = "DELETE FROM books WHERE id = 5";
	$affected = $pdo->exec($sql);
	echo "Datensatz wurde gelöscht<br>";
	*/
	
	// Prepared Statements
	/*
	$statement = $pdo->prepare("INSERT INTO books(vorname, nachname, titel, beschreibung)
								VALUES (?, ?, ?, ?)");
	
	$statement ->bindParam(1, $vorname);
	$statement ->bindParam(2, $nachname);
	$statement ->bindParam(3, $titel);
	$statement ->bindParam(4, $beschreibung);
	
	$vorname = "Vorname";
	$nachname = "Nachname";
	$titel = "Titel";
	$beschreibung = "Beschreibung";
	
	if($statement->execute()){
		echo "Neuer Datensatz wurde angelegt<br>";
	}
	*/
	/*
	$statement = $pdo->prepare("INSERT INTO books(vorname, nachname, titel, beschreibung)
								VALUES (:vorname, :nachname, :titel, :beschreibung)");
	
	$statement ->bindParam(':vorname', $vorname);
	$statement ->bindParam(':nachname', $nachname);
	$statement ->bindParam(':titel', $titel);
	$statement ->bindParam(':beschreibung', $beschreibung);
	
	$vorname = "Vorname";
	$nachname = "Nachname";
	$titel = "Titel";
	$beschreibung = "Beschreibung";
	
	if($statement->execute()){
		echo "Neuer Datensatz wurde angelegt<br>";
	}
	*/
	
	$nachname = 'Martin';
	$statement = $pdo->prepare("SELECT * FROM books WHERE nachname = :nachname");
	$statement->execute(array('nachname' => $nachname));
	while($row = $statement->fetch()){
		echo $row['vorname'] . " " . $row['nachname'] . "<br/>";
		echo $row['titel'] . "<br/>";
		echo $row['beschreibung'] . "<br/>";
	}
?>