<?php

class Matrix {
    private $filas;
    private $columnas;
    private $matriz;

    public function __construct($filas, $columnas){
        $this->filas = $filas;
        $this->columnas = $columnas;

        $this->matriz = [];

        for ($i = 0; $i < $filas; $i++) {
            for ($j = 0; $j < $columnas; $j++) {
                $this->matriz[$i][$j] = "";
            }
        }
    }

    public function getFilas() {
        return $this->filas;
    }

    public function getColumnas() {
        return $this->columnas;
    }

    public function setRelleno($i, $j, $relleno){
        return ($i < $this->filas && $j < $this->columnas)
            ? $this->matriz[$i][$j] = $relleno
            : "";
    }

    public function rellenar($valor) {
        for ($i = 0; $i < $this->filas; $i++) {
            for ($j = 0; $j < $this->columnas; $j++) {
                $this->matriz[$i][$j] = $valor;
            }
        }
    }

    public function tabla() {
        echo "<table border='1px solid'>";
        for ($i = 0; $i < $this->filas; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $this->columnas; $j++) {
                echo "<td>" . $this->matriz[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

}

$mat = new Matrix(3, 4);   

$mat->rellenar(0);            

$mat->setRelleno(1, 2, "Pepe");  

echo "Filas: " . $mat->getFilas() . "<br>";
echo "Columnas: " . $mat->getColumnas() . "<br><br>";

$mat->tabla();
    
