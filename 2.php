<?php
class Average {
    private $num1;
    private $num2;
    private $num3;

    function __construct($n1, $n2, $n3){
        $this->num1=$n1;
        $this->num2=$n2;
        $this->num3=$n3;
    }

    public function media(){
        $primero = $this->num1;
        $segundo = $this->num2;
        $tercero = $this->num3;
        $media = ($primero + $segundo + $tercero) / 3;
        return $media;
    }

}
$primeraMedia = new Average(80, 20, 10);
echo "La media de estos tres números es: " . $primeraMedia->media();