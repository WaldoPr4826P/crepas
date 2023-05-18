<?php
$tipo = $_GET['tipo'];

	class Crepas
	{
		private $tipo, $cantidad, $ingextra;
		public function __construct($cant, $extra)
		{
		    $this->cantidad=$cant;
		    $this->ingextra=$extra;	
	    }	
		public function cobrar($tipo)
		{
				$this->tipo=$tipo;
				$total=($this->cantidad * $this->calcularPrecio()) + ($this->ingextra * 15*$this->cantidad);
				return $total;
		}
		
		public function calcularPrecio()
		{
			if($this->tipo==1)
				$precioBase=35;
			else
				
				$precioBase=40;
			return $precioBase;
		}
		
	}
	$obj=new Crepas($tipo,2);
	
     echo  $obj->cobrar(1);
?>