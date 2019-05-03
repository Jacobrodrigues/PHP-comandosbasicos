<? php

$variavel = array(1,2,3,4,5);
$variavel2 = array("A"=> "Abaicaxi", "B"=> "BOLA", "C"=> "CACHORRO");

echo $variavel;// não da certo 
print_r($variavel); // força a printar todo os elementos do array 
foreach ($variavel as $v) {// maneira mais simples de imprimir um array, ele vai imprimir todos os valores dentro do array
	echo $v;
}
print_r($variavel2);
echo $variavel2["B"];
echo $variavel2[2];//erro pq definimos a os indices A,B,C
foreach ($variavel2 as $v1) {
	echo $v1;
}