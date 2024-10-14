<?php //Inserire il tag di apertura php 
// echo 'Ciao mondo.'; Stampa di una stringa


// $VARIABILE = 'Ciao mondo.';
// const STRINGA = 'ciao ciao';
// //echo $variabile;



// echo $variabile; //Variabile 
// echo STRINGA;// constante


//Data Types
//1)Primitivi
//2)Complessi


//Primitvi
//Stringa 
// $testo = 'francesco';
// //Interi
// $numero1 = 18;
// //Float
// $numero2 = 18.78;
// //Booleano 
// $stato1 = true;
// $stato2 = false;
// //Null 
// $valore = NULL;

// echo $testo; solo dati primitivi
// print_r($stato1); stampa tutto, primitivi e complessi
//var_dump($stato1); massima estensione di debug

//Stringhe
// $giorno = 78;
// $stringa1 = 'Ciao sono Francesco ' . $giorno; //per concatenare due dati primitivi si utilizza il .
// $stringa2 = "Ciao sono Francesco $giorno $stringa1";

// echo $stringa1;

//Type Coercion 
// $a = true; 
// $b = 10; 
// echo $a + $b;

//2) Dati Complessi
//Array

//$numeri = []; // Array vuoto

//$numeri = [1, null, 'aulab', true, 4, 5, 6, 7, 8, 89, 90, 'ciao', 89.98]; //array semplice
//php è 0 Based

//echo $numeri[10] . ' ' . $numeri[3];
//echo "$numeri[10]  $numeri[3]";
//var_dump($numeri);
//echo gettype($numeri[10]); //stampiamo tipo di dato

// $users = [
//     [
//         'person' => 'Francesco',
//         'eta' => 67,
//         'sesso' => 'M'
//     ],
//     [
//         'person' => 'Antonio'
//     ],
//     [
//         'person' => 'Gustavo'
//     ],
//     [
//         'testo' => 'Aulab',
//         [
//             'numero' => 90
//         ]
//     ]
// ];
//var_dump($users[1]['person']);
//echo $users[1]['person'];
// echo $users[3][0]['numero'];


//Operatori

//1) Matematici
//2) Confronto
//3) Logici

//1) Operatori matematici

// $a = 89;
// $b = 9;

// $c1 = $a + $b;
// $c2 = $a - $b;
// $c3 = $a * $b;
// $c4 = $a / $b;
// $c5 = $a % $b;

// echo $c;

//2)Operatori di confronto

// $a = 89;
// $b = 9;

// var_dump($a == $b);
// var_dump($a === $b);
// var_dump($a > $b);
// var_dump($a >= $b);
// var_dump($a < $b);
// var_dump($a <= $b);
// var_dump($a != $b);
// var_dump($a !== $b);
// var_dump($a <> $b);


// var_dump(true == false);
// var_dump(1 === '1');


//3) Operatori logici

$a = true;
$b = false;
// var_dump($a and $b);
// var_dump($a && $b);
// var_dump($a or $b);
// var_dump($a || $b);
// var_dump(!$a);

// var_dump(!$b);

//AND: I dati saranno sempre true se sono tutti TRUE
//OR: I dati saranno sempre true se ALMENO 1 è TRUE


//Truthy o Falsy

//Falsy
//STringa vuota = ''
//array vuoto $array => []
//null
//0
//false

//Truthy
//STringa piene = 'asdaad'
//array pieno $array => [98] 
//interi
//float
//true
