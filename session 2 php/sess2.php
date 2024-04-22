<h1>Learning PHP - session 2</h1>

<?php
define(`DB_name`,`Gestion_stock`);
// ou
const PI = 3.14;

// functions

function sayHello($name){
    echo "Hello ".$name;
};

function sum($n1,$n2){
    return $n1 + $n2;
};


$npf = sum(9,5);
 
#echo $npf;

#sayHello("Nadir");

// global scope

$nom  = "Nadir";

function printName(){
    global $nom;
    echo $nom;
}

printName();

// arrays
$nombres = [13,66,96,5];

//or

$modules = array("HTML","Js","Python");

echo "<br>".$nombres[2]."/100";
echo "<br>".$modules[0];

// les tableaux associatives
$nbrTest = [0=>22, 1=>54, 30=>5];
echo $nbrTest[30];

$stagiaire = ["nom"=>"ANASS", "Group"=>"DD105", "statut"=>"Etudiant"] ;
echo "<br>".$stagiaire["nom"]."<br>";
$etudiants = [
    ['prenom'=> 'hmd','nom'=>'meganev','groupe'=>105],
    ['prenom'=>'simo','nom'=>'kimoski','groupe'=>105],
    ['prenom'=>'zico','nom'=>'pamba','groupe'=>105]
];
array_push($etudiants, ['prenom'=>'nawfel','nom'=>'makanga','groupe'=>105]);
echo "<pre>";
var_dump($etudiants);
echo "</pre>";