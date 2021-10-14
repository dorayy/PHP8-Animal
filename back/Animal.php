<?php

  class Animal {

    public function __construct(
            public string $couleur,
            public string $type, 
            public string $nom,
            public int $age,
            public bool $adopte
    ){}

    public function __toString()
    {
        return  "Animal de Couleur : " . $this->couleur . ", de Type : " . $this->type . " , comme nom :" . $this->nom . ", age:" . $this->age;
    }

    public function getCouleur(){
        return $this->couleur;
    }

    public function getType(){
        return $this->type;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getAge(){
        return $this->age;
    }

    public function getAdopte(){
        return $this->adopte;
    }

    public function setAdopte($adopte){
        $this->adopte = $adopte;
    }

    public function setCouleur($couleur){
        $this->couleur = $couleur;
    }

    public function setType($type){
        $this->type = $type;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function setAge($age){
        $this->age = $age;
    }
}

