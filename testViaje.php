<?php
include_once("classViaje.php") ;
$viaje = new Viaje() ;
//do
echo "Menu de opciones: 
     Seleccione una opcion: 
     1) cargar informacion del viaje.  
     2) modificar informacion del viaje
     3) cargar el pasajero
     4) modificar datos de pasajero.
     5) Ver datos. " ; 
$opcion = trim(fgets(STDIN)) ;
$pasajeros = 0 ;

if($opcion = 1){ // cargar informacion del viaje //
    echo "Que datos desea cargar?: \n" ;
    echo "a) codigo del viaje. \n" ;
    echo "b) destino. \n" ;
    echo "c) cantidad maxima de pasajeros. \n" ;
    $rta1 = trim(fgets(STDIN)) ;
        switch($rta1){
            case "a":
                echo "ingrese nuevo codigo: \n" ;
                $nuevoCodigo = trim(fgets(STDIN)) ;
                
            case "b": 
                echo "ingrese destino: \n" ;
                $nuevoDest = trim(fgets(STDIN)) ;
                
            case "c":
                echo "ingrese cantidad de pasajeros: \n" ;
                $CantPasaj = trim(fgets(STDIN));
                 
    }
}elseif($opcion = 2){
    echo "que datos desea modificar?: \n" ;
    echo "a) Nombre. \n" ;
    echo "b) Apellido. \n" ;
    echo "c) DNI, \n" ;
    echo "d) modificar todos: \n" ;
    $rta2 = trim(fgets(STDIN)) ;
    switch($rta2){
        case "a" : 
            echo "ingrese nombre: \n" ;
            $nombre = trim(fgets(STDIN)) ;
            // preguntar como llamar el array o como ir incorporando con el array creado en el objeto
        case "b" :
            echo "ingrese apellido: \n" ;
            $apellido = trim(fgets(STDIN)) ;
            //
        case "c" :
            echo "ingrese el dni: \n" ;
            $dni = trim(fgets(STDIN)) ;
        case "d" :
            echo "ingrese nombre: \n" ;
            $nombre1 = trim(fgets(STDIN)) ;
            echo "ingrese apellido: \n" ;
            $apellido1 = trim(fgets(STDIN)) ;
            echo "ingrese dni: \n" ;
            $dni1 = trim(fgets(STDIN)) ;
}
}elseif($opcion = 3){
        //mostrar el objeto 
    
}