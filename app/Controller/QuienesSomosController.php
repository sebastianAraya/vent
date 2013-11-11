<?php
App::uses('AppController', 'Controller');

class QuienesSomosController extends AppController {
	public function index() {
		
		$quienesSomos = "Somos una plataforma donde microempresarios tienen una oportunidad para mostrar sus productos y comercializarlos, ofrecemos una relación precio calidad conveniente para un gran espectro de clientes, como somos microempresarios podemos ofrecer un servicio más cercano y tenemos la capacidad de adaptarnos fácilmente al mercado.";
		$this->set(compact('quienesSomos'));
	}
	public function conocenos(){
		$mision	= "hola mision";
		$vision = "hola vision";
		$this->set(compact('mision', 'vision'));
	}
	public function valores(){

	}

}
