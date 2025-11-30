<?php
    class Empleado {
        private $nombre;
        private $horasDia;
        private $salarioHora;
        
        public function __construct($salH, $hDia, $nom){
            $this->salarioHora = $salH;
            $this->horasDia = $hDia;
            $this->nombre = $nom;
        }

        public function getInfo($dias){
            $mensual = $this->salarioHora * $this->horasDia * $dias;
            
            return $mensual;
        }

        public function AddSal($dias){
            $salarioMensual = $this->getInfo($dias);

            $this->salarioHora = ($salarioMensual < 500) 
                ? $this->salarioHora += 10
                : $this->salarioHora;

            return $this->getInfo($dias);
        }

        public function AddWork($dias){
            $this->salarioHora = ($this->horasDia > 6)
                ? $this->salarioHora += 5
                : $this->salarioHora;

            return $this->getInfo($dias);

        }
    }

    $empleado1=new Empleado(20, 10, "Alejandro");
    echo "El salario mensual es: " . $empleado1->getInfo(25) . "€ <br>";
    echo "El salario después de AddSal es: " . $empleado1->AddSal(25) . "€ <br>";
    echo "El salario después de AddWork es: " . $empleado1->AddWork(25) . "€ <br>";