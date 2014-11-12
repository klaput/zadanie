<?php

include_once('zwierzeinterface.php');

class Zwierze implements ZwierzeInterface{
	public $gatunek;
	public $plec;
	public $wydawanyDzwiek;
	public $umaszczenie;

	public function Zwierze($gatunek, $plec, $wydawanyDzwiek, $umaszczenie){
                $this->gatunek=$gatunek;
                $this->plec=$plec;
                $this->wydawanyDzwiek=$wydawanyDzwiek;
                $this->umaszczenie=$umaszczenie;
        }

	public function otoZwierze(){
		return "Witaj! To ja Twoja/Twój ".$this->gatunek.". Jestem ".$this->umaszczenie." i wydam dla Ciebie słodkie ".$this->wydawanyDzwiek." :) \n"; 
	}

	public function getGatunek(){
		return $this->gatunek;
	}
    public function setGatunek($gatunek){
		$this->gatunek=$gatunek;
	}
    public function getPlec(){
		return $this->plec;
	}
    public function setPlec($plec){
		$this->plec=$plec;
	}
    public function getWydawanyDzwiek(){
		return $this->wydawanyDzwiek;
	}
    public function setWydawanyDzwiek($wydawanyDzwiek){
		$this->wydawanyDzwiek=$wydawanyDzwiek;
	}
    public function getUmaszczenie(){
		return $this->umaszczenie;
	}
    public function setUmaszczenie($umaszczenie){
		$this->umaszczenie=$umaszczenie;
	}
}

class Drapieznik extends Zwierze implements DrapieznikInterface{
	public $predkoscMaksymalna;
	public $przyspieszenie;
	public $sposobZabijaniaOfiary;
	
	public function Drapieznik($predkoscMaksymalna, $przyspieszenie, $sposobZabijaniaOfiary){
	
	$this->sposobZabijaniaOfiary= 'zagryzienie';
	if($sposobZabijaniaOfiary == 'zagryzienie'){
	$this->predkoscMaksymalna= 110;
	$this->przyspieszenie= 50;
	}elseif($sposobZabijaniaOfiary == 'ukąszenie'){
	$this->predkoscMaksymalna= 70;
	$this->przyspieszenie= 20;
	}elseif($sposobZabijaniaOfiary == 'uduszenie'){
	$this->predkoscMaksymalna= 80;
	$this->przyspieszenie= 10;
	}else{
	$this->predkoscMaksymalna= 30;
	$this->przyspieszenie=5;
	}
	}
	
	public function getPredkoscMaksymalna(){
		return $this->predkoscMaksymalna;
	}
	
	public function getPrzyspieszenie(){
		return $this->przyspieszenie;
	}
	
}

class Zabojca implements ZabojcaInterface {
	
	public $sposobZabijaniaOfiary;
	
	public function getSposobZabijaniaOfiary(){
		return $this->sposobZabijaniaOfiary;
	}
}
?>