<!-- funzioni utili PHP -->
<!-- in php array e stringa non sono trattati allo stesso modo. che è diverso dal js -->
<!-- per stampare:
echo,
print,
print_r,
var_dump
-->

<!-- per manipolare con la stringa/array:
explode("delimitatore della stringa (A PAROLE)", "la stringa" ),
implode("un array") -> ritorna una stringa  (è quesi come join),
str_split("una stringa  ritorna un array con le lettere/ singoli caratteri della stringa passata"),
count (lungezza dell array, NON DELLA STRINGA),
strlen ("stringa"), -->


 <?php
 $mio_paragrafo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
 $arrayParagrafo = explode(" ", $mio_paragrafo );
 // print_r($arrayParagrafo);
 $getYou = $_GET["badword"];

 for ($i=0; $i < count($arrayParagrafo) ; $i++) {
   if($arrayParagrafo[$i] != $getYou){
     echo $arrayParagrafo[$i] . " ";
   } else {
     $arrayParagrafo[$i] = "***";
     echo $arrayParagrafo[$i] . " ";
   }
 }
  ?>
