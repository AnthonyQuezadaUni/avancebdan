<?php

    class conexion 
    {
        function Conectar()
        {
          $mysqli = new mysqli("bxz1rti6avek7cgasljc-mysql.services.clever-cloud.com","ujc5hxuycgdo8gzy","sQ67sLn6QGohb4DTsRGu","bxz1rti6avek7cgasljc");
          
          if($mysqli->connect_errno)
          {
            echo "Error Al conectar a la Base de datos   ".$mysqli->connect_errno;
          } 
          return $mysqli; 
        }
    }