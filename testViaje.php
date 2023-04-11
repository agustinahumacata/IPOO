<?php
include_once("classViaje.php") ;


 // PROGRAMA PRINCIPAL // 
$pasajerosS = [] ;

do{
        echo "-------Menu de opciones------- 
             Seleccione una opcion: 
            1) cargar informacion del viaje.  
            2) modificar informacion del viaje
            3) cargar el/los pasajeros.
            4) modificar datos de pasajero.
            5) Ver datos.  
            6) salir \n" ;    
           $opcion = trim(fgets(STDIN)) ;
   while ($opcion >= 1 && $opcion <= 5 && is_int($opcion)){
        echo "ERROR : seleccione una opcion valida. \n" ;
             echo "-------Menu de opciones------- 
                Seleccione una opcion: 
             1) cargar informacion del viaje.  
             2) modificar informacion del viaje
             3) cargar el/los pasajeros.
             4) modificar datos de pasajero.
             5) Ver datos. 
             6) salir \n" ;
           
                $opcion = trim(fgets(STDIN)) ;
}
    $pasajeros = 0 ;
    
    switch ($opcion){
        case 1:            // case que carga la informacion del viaje 
    
         echo "ingrese codigo: \n" ;
             $codig = trim(fgets(STDIN)) ;
        while(is_int($codig)){
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
        while (is_int($cantPasaj)){
           echo "error : ingrese cantidad de pasajeros en forma numerica: \n" ;
           $cantPasaj = trim(fgets(STDIN)) ;
                
        }   
        $viaje = new Viaje ($codig, $dest, $cantPasaj) ;
     
        break ;
        
        case 2:              // este case modifica viaje de datos
             echo "que datos desea modificar?: \n" ;
             echo "a) codigo: \n" ;
             echo "b) destino \n" ;
             echo "c) cantidad maxima de pasajeros: \n" ;
                $rta2 = trim(fgets(STDIN)) ;
        while(!ctype_alpha($rta2)){
            echo "error - ingrese una opcion valida: \n" ;
            $rta2 = trim(fgets(STDIN)) ;
    }
            
             if($rta2 == "a"){
                        echo "ingrese nuevo codigo: \n" ;
                       $nuevoCodig = trim(fgets(STDIN)) ;
                 while(is_int($nuevoCodig)){
                        echo "error: ingrese un codigo numerico: \n" ;
                        $nuevoCodig = trim(fgets(STDIN)) ;
            }
            $viaje -> set_codigoviaje($nuevoCodig) ;
        }elseif($rta2 == "b"){
            echo "ingrese destino nuevo: \n" ;
               $nuevoDesti = trim(fgets(STDIN)) ;
                    while (!ctype_alpha($nuevoDesti)){
                        echo "error : ingrese destino en letras: \n" ;
                        $nuevoDesti = trim(fgets(STDIN)) ;
                }
             $viaje -> set_destino($nuevoDesti) ;
            }elseif($rta2 == "c"){
                      echo "ingrese cantidad maxima de pasajeros nueva: \n" ;
                         $nuevoCantMax = trim(fgets(STDIN)) ;
                    while (is_int($nuevoCantMax)){
                         echo "error : ingrese cantidad de pasajeros en forma numerica/entero: \n" ;
                         $nuevoCantMax = trim(fgets(STDIN)) ;
                } 
                $viaje -> set_cantPasajeros($nuevoCantMax) ;
            
        }
break ;
      
          case 3 :          // este case ingresa datos del/los pasajeros

         echo "cuantos pasajeros desea ingresar: "; 
         $cantPasajeros = trim(fgets(STDIN)) ;
         while (is_int($cantPasajeros)){
            echo "error : ingrese nuevamente cantidad de pasajeros \n" ;
            $cantPasajeros = trim(fgets(STDIN)) ;
   } 
           while($pasajeros < $cantPasajeros){
                  echo "Ingrese nombre: \n" ;
                     $nombre = trim(fgets(STDIN)) ;
                     while (!ctype_alpha($nombre)){
                        echo "error : ingrese nombre en letras: \n" ;
                        $nombre = trim(fgets(STDIN)) ;
                        
                }
            
    
                     echo "Ingrese apellido: \n" ;
                     $apellido = trim(fgets(STDIN)) ;
                     while (!ctype_alpha($apellido)){
                        echo "error : ingrese apellido en letras: \n" ;
                        $apellido = trim(fgets(STDIN)) ;
                }
                
                     echo "ingrese dni: " ;
                     $dni = trim(fgets(STDIN)) ;
                     while (is_int($dni)){
                        echo "error : ingrese dni en forma numerica/entero: \n" ;
                        $dni = trim(fgets(STDIN)) ;
               } 
                $pasajeros++ ;
                $pasajerosS = ["nombre" => $nombre, "apellido" => $apellido, "dni" => $dni] ;
                $viaje = $this -> get_pasajeros [$pasajerosS] ; // consultar 
            }
                  
        
        break ;
        case 4 :            // este case modifica datos del/los pasajeros
        
         
            echo "que datos desea modificar?: \n" ;
            echo "a) Nombre. \n" ;
             echo "b) Apellido. \n" ;
             echo "c) DNI. \n" ;
                 $rta4 = trim(fgets(STDIN)) ;
                 while (!ctype_alpha($rta4)){
                    echo "error - ingrese una opcion valida \n" ;
                    $rta4 = trim(fgets(STDIN)) ;
           } 
            if($rta4 = "a"){ 
                    echo "ingrese dni de la persona que quiere modificar: ";
                        $dniX= trim(fgets(STDIN)) ;
                         $viaje -> buscarPasajero($dniX) ;
                           
                              
                 }elseif($rta4 = "b") {
                    echo "ingrese dni de la persona que quiere modificar: ";
                    $dniX= trim(fgets(STDIN)) ;
                        $viaje -> buscarPasajero($dniX) ;
                     
                    
                }elseif($rta4 = "c"){
                    echo "ingrese dni de la persona que quiere modificar: ";
                    $dniX= trim(fgets(STDIN)) ;
                        $viaje -> buscarPasajero($dniX) ;
                      
                    
                }
                 
            
        break ;
        case 5:         // este case muestra los datos 
            echo $viaje. "\n" ;
            $viaje -> set_pasajeros () ;
            break ;
        
 
            }
  
   
}while($opcion != 6) ;