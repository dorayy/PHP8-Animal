<?php


/*
Jeu de données : a exécuté un par un

insert("Jaune","Aigle","Lucie",1);
insert("Vert","Babouin","Fred",3);
insert("Orange","Tigre","Luc",2);
insert("Violet","Mangouste","Jerem",1);
insert("Noir","Manchot","Ele",3);
*/

function insert(string $couleur,string $type, string $nom, int $age){
    require('Animal.php');
    require('config.php');

    $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
    $chien = new Animal($couleur,$type,$nom,$age);
try {
	$pdo = new PDO($dsn, $user, $password);

	if ($pdo) {
		echo "Connected to the $db database successfully!";
        $data = [
            'couleur' => $chien->getCouleur(),
            'type' => $chien->getType(),
            'nom' => $chien->getNom(),
            'age' => $chien->getAge(),
        ];
        $sql = "INSERT INTO Animal (`couleur`, `type`, `nom`, `age`) VALUES (:couleur, :type, :nom, :age)";
        $stmt= $pdo->prepare($sql);
        $stmt->execute($data);
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}
}

function getAll(){
    require('config.php');

    $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
	$pdo = new PDO($dsn, $user, $password);

	if ($pdo) {
        $sql = "SELECT * FROM animal";
        $stmt= $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $result;
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}

}