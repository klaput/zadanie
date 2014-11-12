<?php

interface ZwierzeInterface{

	public function getGatunek();
	public function setGatunek($gatunek);
	public function getPlec();
	public function setPlec($plec);
	public function getWydawanyDzwiek();
	public function setWydawanyDzwiek($wydawanyDzwiek);
	public function getUmaszczenie();
	public function setUmaszczenie($umaszczenie);
}

interface DrapieznikInterface
{
	public function getPredkoscMaksymalna();
	public function getPrzyspieszenie();
}

interface ZabojcaInterface
{
	public function getSposobZabijaniaOfiary();
}


?>
