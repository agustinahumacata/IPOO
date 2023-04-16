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
    $this -> pasajeros = Array() ; 
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

public function set_pasajeros($pasajeros) {
    $this -> pasajeros = $pasajeros ;
}

public function buscarPasajero($dniX){
$pasajerosS = $this -> get_pasajeros() ;   
$i = 0 ;
$bandera = false; 
while($i<count($pasajerosS) && !$bandera){
    $bandera = $pasajerosS[$i]["DNI"] == $dniX ;
    // poner if para que si no encuentra incremente el i y si encuentra, que salga 
    $i++ ;
} 
    return $i - 1 ;
}

public function modificarPasajeros ($pDatoNuevo, $pDniBuscado,$rta){
    $indice = $this ->buscarPasajero($pDniBuscado) ;
    switch($rta){
        case "a" :
            if($indice >= 0){ //entra si lo encuentra 
                $pasajeros= $this -> get_pasajeros() ;
                $pasajeros[$indice]=["nombre" => $pDatoNuevo, "apellido" => $pasajeros[$indice]["apellido"],"DNI" => $pasajeros[$indice]["DNI"]];
                $this -> set_pasajeros($pasajeros) ;
            }

            break ;
        case "b" :
            if($indice >= 0){ //entra si lo encuentra 
                $pasajeros= $this -> get_pasajeros() ;
                $pasajeros[$indice]= ["nombre" => $pasajeros[$indice]["nombre"],"apellido" => $pDatoNuevo, "DNI" => $pasajeros[$indice]["DNI"]];
                $this -> set_pasajeros($pasajeros) ; 
            }
            break ;
        case "c" :
            if($indice >= 0){ //entra si lo encuentra 
                $pasajeros= $this -> get_pasajeros() ;
                $pasajeros[$indice]=["nombre" => $pasajeros[$indice]["nombre"], "apellido" => $pasajeros[$indice]["apellido"], "DNI" => $pDatoNuevo]; 
                $this -> set_pasajeros($pasajeros) ; 
            }
            break ;
            
    }
}

public function mostrarDatosPasajero(){
    $cadena = "" ;
    $colP = $this -> get_Pasajeros();
        for($i = 0 ; $i<count($colP); $i++){ 
            $nombre = $colP[$i]["nombre"] . "\n" ;
            $apellido = $colP[$i]["apellido"]. "\n" ;
            $dni = $colP[$i]["DNI"]. "\n" ;
            
         $cadena = $cadena . "nombre: $nombre apellido: $apellido dni: $dni" ;
        } 
        return $cadena ;
}

public function cargarPasajeros($nombre, $apellido, $dni){
    $colP = $this->get_pasajeros();
    $nuevoPasajero = ["nombre" => $nombre,"apellido" => $apellido, "DNI" => $dni];
    array_push($colP, $nuevoPasajero); 
    $this->set_pasajeros($colP);  
    print_r($colP) ;
}
public function __toString()
{
    $cadena = $this -> mostrarDatosPasajero() ;
    return  "codigo: ". $this ->get_codigoviaje().
              "\n destino: ". $this -> get_destino(). 
              "\n cantMaxPasajeros: ". $this -> get_cantPasajeros().
            "\n datos del pasajero: " . $cadena ;
    
}

}