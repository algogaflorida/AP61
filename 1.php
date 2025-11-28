<?php
class Triangle {
    private $equilatero;
    private $isosceles;
    private $escaleno;

    function __construct($equi, $isos, $esca){
        $this->equilatero=$equi;
        $this->isosceles=$isos;
        $this->escaleno=$esca;
    }

    public function areaHeron(){
        $a = $this->equilatero;
        $b = $this->isosceles;
        $c = $this->escaleno;

        $s = ($a + $b + $c) / 2;
        $area=sqrt($s*($s-$a)*($s-$b)*($s-$c));
        return $area;
    }

    public function periHeron(){
        $a = $this->equilatero;
        $b = $this->isosceles;
        $c = $this->escaleno;

        $p = $a + $b + $c;
        return $p;
    }
}

$tri1=new Triangle("3", "4", "5");
echo "El área de este triángulo es: " . $tri1->areaHeron() . "cm y su perímetro es " . $tri1->periHeron() ."cm";