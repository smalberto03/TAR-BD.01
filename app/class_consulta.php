<?php
    require_once('../config/configdb.php');

    class Consultas{ 

        public $consulta1; 
        public $consulta2;

        public function consultar()
        {
           $connect = new Conexion(); 

           $conexion = $connect->conectar();

           $this->consulta1 = 'SELECT DISTINCT prueba FROM alumnos_prueba';

           $datos = $conexion->query($this->consulta1);

           //var_dump($datos);

           while($filas = mysqli_fetch_array($datos, MYSQLI_ASSOC))
           {
                foreach($filas as $valores)
                {
                    echo '<h2>'.$valores.'</h2>';

                    //$valores = $prueba;

                    $this->consulta2 = 'SELECT alumno FROM alumnos_prueba WHERE prueba = "'.$valores.'"'; //$this->consulta2 = 'SELECT alumno FROM alumnos_prueba WHERE prueba = '"$valores"''; //"SELECT alumno FROM alumnos_prueba WHERE prueba = ''$valores'"; 

                    $datos2 = $conexion->query($this->consulta2);

                    while($filas2 = mysqli_fetch_array($datos2, MYSQLI_ASSOC))
                    {
                        foreach($filas2 as $valor)
                        {
                            echo $valor.'<br>';
                        }
                    }
                }
                echo '<br><br>';
           }
        }
    }

?>