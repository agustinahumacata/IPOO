<?php
 class viaje {
    private $codigoViaje ;
    private $destino ;
    private $cantMaxPasajeros ;
    private $pasajeros ; // 

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

public function buscarPasajero($dniX){
$pasajerosS = $this -> get_pasajeros() ;   
$i = 0 ;
$bandera = false; 
while($i<count($pasajerosS) && !$bandera){
    $pasajerosS[$i]["dni"] == $dniX ;
    $i++ ;
}  //arreglar 
return $i ;
}
public function modificarPasajeros ($pApellido, $pNombre, $pDni){
    $indice = $this ->buscarPasajero($pDni) ;
    if($indice > 0){
        $pasajeros= $this -> get_pasajeros() ;
        $pasajeros[$indice]["nombre"] = $pNombre;
        $pasajeros[$indice]["apellido"] = $pApellido;
        $pasajeros[$indice]["dni"] = $pDni; 
    }
    return $indice ;
}

public function mostrarDatosPasajero(){
    $cadena = "" ;
    $cantPasaj = $this -> get_Pasajeros();
        for($i = 0 ; $i<count($cantPasaj); $i++){ //preg
            $nombre = $cantPasaj ; // terminar // preg
        } 
}

public function cargarPasajeros($nombre, $apellido, $dni){
    $PasajerosS[0] = ["nombre" => $nombre,"apellido" => $apellido, "DNI" => $dni] ;

      array_push($this -> get_pasajeros(), ["nombre" => $nombre,"apellido" => $apellido, "DNI" => $dni] ) ; 
       
}
public function __toString()
{
    $cadena = "codigo: ". $this ->get_codigoviaje().
              " destino: ". $this -> get_destino(). 
              " cantMaxPasajeros: ". $this -> get_cantPasajeros() ; 
           // ($this -> mostrarDatosPasajeros()) ;// con esto muestro el arreglo 
    return $cadena ;
}

}