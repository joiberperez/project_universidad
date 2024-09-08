<?php

	/*********************************************************************
     * Revisión y depuración realizadas por "Sathoru-Dev"                *
     * Revisado el dia: Sabado, 07 de Septiembre del 2024                *
     * Por favor abstenerse de editar algo sin permiso del programador   *
     * Copyright © Joiber (Uso educativo) - Proyecto universitario       *
    *********************************************************************/

    /** Clase Utils contiene metodos que pueden ser de utilidad (Se que es redundante) */
    class Utils {
		
      /** Genera un string aleatorio el cual se utilizar para generar id's con codigos de identiicacion
           * @param Int $size Cantidad de caracteres de largo del id
           * @return String Devuelve el id
           */
          public static function generate_id( $size = 8 ) {
              $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
              $random_string = '';
              for ($i = 0; $i < $size; $i++) {
                  $random_character = $permitted_chars[random_int(0, strlen($permitted_chars) - 1)];
                  $random_string .= $random_character;
              }
              return $random_string;
          }
    }



?>