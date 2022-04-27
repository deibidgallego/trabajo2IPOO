<?php
include "Viaje.php";
include "Pasajero.php";
include "ResponsableV.php";
function crearViaje()
{


    //objeto ResponsableV
    $objRespo = new ResponsableV("pepe", "garcia", "4567", "255");
    //objeto Pasajeros
    $objPasajero1 = new Pasajero("juan", "perez", 12345678, 4458585);
    $objPasajero2 = new Pasajero("ana", "perez", 12345678, 4458585);
    $objPasajero3 = new Pasajero("enoy", "perez", 12345678, 4458585);
    $objPasajero4 = new Pasajero("juth", "perez", 12345678, 4458585);
    //objeto pasajero en la coleccion
    $pasajerosViaje = [$objPasajero1, $objPasajero2, $objPasajero3, $objPasajero4];
    //objeto Viaje
    $unViaje = new Viaje(1234, "Neuquen", 50, $objRespo);
    //seteamos el obj Pasajeros
    $unViaje->setColPasajeros($pasajerosViaje);
    return $unViaje;
}
//menu
function menu()
{
    do {
        echo "\nIngrese una opción: \n
        1) Crear un viaje \n
        2) Modificar pasajeros de un viaje \n
        3) Ver datos de un viaje \n
        4) salir \n";
        $respuesta = trim(fgets(STDIN));
        if (!(is_int($respuesta)) && ($respuesta < 0 || $respuesta > 4)) {
            echo "Opcion incorrecta \n";
        }
    } while (!(is_int($respuesta)) && ($respuesta < 0 || $respuesta > 4));
    return ($respuesta);
}

//programa
do {
    //ejecutamos el menu
    $case = menu();
    //switch
    switch ($case) {
        case 1:
            $objViaje = crearViaje();
            echo $objViaje;
            break;
        case 2:
            //modificar
            echo "Modificar un pasajero: \n Opción ";
            $listaDePasajeros = $objViaje->getColPasajeros();
            //mostramos la lista
            print_r($listaDePasajeros);
            echo "Que pasajero desea modificar ingrese el DNI del mismo \n";
            $docPasajeroIng = trim(fgets(STDIN));
            //invocamos al metodo que busca pasajero
            $posColPasajero = $objViaje->buscarPasajero($docPasajeroIng);
            if ($posColPasajero == -1) {
                echo "No se encontro el pasajero";
            } else {

                echo "Ingrese el nombre del pasajero";
                $nomPasajeroIng = trim(fgets(STDIN));
                echo "ingrese el apellido del pasajero: ";
                $apePasajeroIng = trim(fgets(STDIN));
                echo "ingrese el telefono del pasajero";
                $telefonoPasajeroIng = trim(fgets(STDIN));
                $objViaje->modificarPasajero($posColPasajero, $nomPasajeroIng, $apePasajeroIng, $telefonoPasajeroIng);
                echo "Los datos se modificaron \n";
            }
            echo $objViaje;
            break;
        case 3:
            //mostramos información de un viaje
            echo $objViaje;
            break;
        case 4:
            echo "fin del programa";
            break;
    }
} while ($case <> 4);
