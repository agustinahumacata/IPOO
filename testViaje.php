<?php
include_once("classViaje.php") ;

do{
        echo "-------Menu de opciones------- 
             Seleccione una opcion: 
            1) cargar informacion del viaje.  
            2) modificar informacion del viaje
            3) cargar el/los pasajeros.
            4) modificar datos de pasajero.
            5) Ver datos. " ; 
           $opcion = trim(fgets(STDIN)) ;
    while ($opcion >= 1 || $opcion <= 5 || !ctype_digit($opcion)){
        echo "ERROR : seleccione una opcion valida. \n" ;
             echo "-------Menu de opciones------- 
                Seleccione una opcion: 
             1) cargar informacion del viaje.  
             2) modificar informacion del viaje
             3) cargar el/los pasajeros.
             4) modificar datos de pasajero.
             5) Ver datos. " ;
                $opcion = trim(fgets(STDIN)) ;
}
$pasajeros = 0 ;

    switch ($opcion){
        case 1:             ///////// cargar informacion del viaje /////
    $viaje = new Viaje ($codig, $dest, $cantPasaj) ;
    
         echo "ingrese codigo: \n" ;
             $codig = trim(fgets(STDIN)) ;
        while(!ctype_digit($codig)){
            echo "error : ingrese un codigo numerico: " ;
              $codig = trim(fgets(STDIN)) ;
     }
         echo "ingrese destino: \n" ;
             $dest = trim(fgets(STDIN)) ;
        while (!ctype_alpha($dest)){
             echo "error : ingrese destino en letras: " ;
             $dest = trim(fgets(STDIN)) ;
        }
        echo "ingrese cantidad de pasajeros: \n" ;
         $cantPasaj = trim(fgets(STDIN)) ;
        while (!ctype_digit($cantPasaj)){
            echo "error : ingrese cantidad de pasajeros en forma numerica: \n" ;
            $cantPasaj = trim(fgets(STDIN)) ;
        } 

         case 2 :               //////// MODIFICAR DATOS DEL VIAJE///////
             echo "que datos desea modificar?: \n" ;
             echo "a) codigo: \n" ;
             echo "b) destino \n" ;
             echo "c) cantidad maxima de pasajeros: \n" ;
                $rta2 = trim(fgets(STDIN)) ;
        while(!ctype_alpha($rta2) || $rta2 = "a" || $rta2 = "b" || $rta2 = "c"){ //probar 
            echo "error - ingrese una opcion valida: \n" ;
            $rta2 = trim(fgets(STDIN)) ;
    }
             switch($rta2){
                case "a" :
                        echo "ingrese nuevo codigo: \n" ;
                        $nuevoCodig = trim(fgets(STDIN)) ;
                 while(!ctype_digit($nuevoCodig)){
                        echo "error: ingrese un codigo numerico: \n" ;
                        $nuevoCodig = trim(fgets(STDIN)) ;
            }
                     $this -> set_codigoViaje = $nuevoCodig ;
                 case "b": 
                         echo "ingrese destino nuevo: \n" ;
                         $nuevoDesti = trim(fgets(STDIN)) ;
                    while (!ctype_alpha($nuevoDesti)){
                        echo "error : ingrese destino en letras: " ;
                        $nuevoDesti = trim(fgets(STDIN)) ;
                }
                    $this -> set_destino = $nuevoDesti ;
                case "c" :
                         echo "ingrese cantidad maxima de pasajeros nueva: \n" ;
                         $nuevoCantMax = trim(fgets(STDIN)) ;
                    while (!ctype_digit($nuevoCantMax)){
                         echo "error : ingrese cantidad de pasajeros en forma numerica: \n" ;
                         $nuevoCantMax = trim(fgets(STDIN)) ;
                } 
                     $this -> set_cantPasajeros = $nuevoCantMax ;
        }

          case 3 :          ///////// INGRESE DATOS DEL PASAJERO ///////////
    do{
         echo "cuantos pasajeros desea ingresar: "; 
         $cantPasajeros = trim(fgets(STDIN)) ;

         echo "Ingrese nombre: \n" ;
        $nombre = trim(fgets(STDIN)) ;
       
         echo "Ingrese apellido: \n" ;
         $apellido = trim(fgets(STDIN)) ;
        
        echo "ingrese dni: " ;
        $dni = trim(fgets(STDIN)) ;
        
        $viaje -> cargarPasajeros($nombre, $apellido, $dni) ;
        $pasajeros++ ;
        }while($pasajeros >= $cantPasajeros) ;

        case 4 :            /////////// MODIFIQUE DATOS DEL PASAJERO ////////////// 
            echo "que datos desea modificar?: \n" ;
            echo "a) Nombre. \n" ;
             echo "b) Apellido. \n" ;
             echo "c) DNI, \n" ;
                 $rta4 = trim(fgets(STDIN)) ;
            switch($rta4){
                 case "a" : 
                     echo "ingrese nombre: \n" ;
                     $nombre = trim(fgets(STDIN)) ; 
                    
                 
                case "b" :
                    echo "ingrese apellido: \n" ;
                     $apellido = trim(fgets(STDIN)) ;
                   
                 case "c" :
                     echo "ingrese el dni: \n" ;
                     $dni = trim(fgets(STDIN)) ;
                    
}
        case 5:         ///////////// MOSTRAR LOS DATOS ////////////////
            echo "el nombre es: " . $this -> pasajero [$nombre] ;
            echo "el apellido es: ". $this -> pasajero [$apellido] ;
            echo "el dni es: " . $this -> pasajero [$dni] ;
            }
    echo "desea cargar otro viaje? (si/no): \n" ;
    $respuesta = trim(fgets(STDIN)) ;
}while($respuesta = "si") ;