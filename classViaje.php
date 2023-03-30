<?php
 class viaje {
    private $codigoViaje ;
    private $destino ;
    private $cantMaxPasajeros ;
    private $pasajeros ;

public function __construct($codiViaje, $destinoX, $cantPasajerosMax){
    
    $this -> codigoViaje = $codiViaje ;
    $this -> destino = $destinoX ;
    $this -> cantMaxPasajeros = $cantPasajerosMax ;
    $this -> pasajeros = [] ;
}

public function get_codigoviaje(){
    return $this -> codigoViaje ;
}

public function get_destino(){
    return $this -> destino  ;
}

public function get_cantPasajeros() {
    return $this -> cantMaxPasajeros ;
}

public function get_pasajeros() {
    return $this -> pasajeros ;

}

public function set_codigoviaje($codiViaje) {
    $this -> codigoViaje = $codiViaje ;
}

public function set_destino($destinoX) {
    $this -> destino = $destinoX ;
}

public function set_cantPasajeros($cantPasajerosMax){
    $this -> cantMaxPasajeros = $cantPasajerosMax ;
}

public function set_pasajeros() {
    $this -> pasajeros = [] ;
}

public function cargarPasajeros($nombre, $apellido, $dni){
 $this -> pasajeros = ["nombre" => $nombre, "apellido" => $apellido, "DNI" => $dni];
  //  $pasajero = [] ;
   // $pasajero["nombre" ];
   // $pasajero["apellido"] ;
    //$pasajero["dni"] ;
   array_push($this -> get_pasajeros(), $this -> pasajeros) ;
}

public function __toString()
{
    return "codigo: ". $this ->get_codigoviaje(). " destino: ". $this -> get_destino(). " cantMaxPasajeros: ". $this -> get_cantPasajeros() ; 
}

}