<?php

include_once('zwierze.php');

$panda = new Zwierze('panda', 'dziewczynka', 'rawrrr', 'czarno-biała');
echo $panda->otoZwierze();

$mojeZwierze = new Zwierze("kotek", "chłopak", "meow", "czarny");
$inneZwierze = new Zwierze("konik", "chłopczyk", "ihahaha", "biały");

echo $mojeZwierze->otoZwierze();
echo $inneZwierze->otoZwierze();

echo $mojeZwierze->umaszczenie."\n";
$mojeZwierze->umaszczenie="kruczoczarny";
echo $mojeZwierze->umaszczenie."\n";

	function helloZwierze($z){
		return "Witaj! To ja - Twój/Twoja ".$z->gatunek.". Jestem ".$z->umaszczenie." i wydam dla Ciebie słodkie ".$z->wydawanyDzwiek."."."\n";
	}
	
	echo helloZwierze($mojeZwierze);

?>