<?php
class Complex {
    private $real;
    private $imag;

    public function __construct($real, $imag){
        $this->real = $real;
        $this->imag = $imag;
    }

    public function operacion(){
        $signo = ($this->imag >= 0) ? "+" : "";
        return $this->real . " " . $signo . " " . $this->imag . "j";
    }

    public function suma($c){
        return new Complex(
            $this->real + $c->real,
            $this->imag + $c->imag
        );
    }

    public function resta($c){
        return new Complex(
            $this->real - $c->real,
            $this->imag - $c->imag
        );
    }

    public function multiplicacion($c){
        return new Complex(
            $this->real * $c->real - $this->imag * $c->imag,
            $this->real * $c->imag + $this->imag * $c->real
        );
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Números Complejos</title>
</head>
<body>

<h2>Operaciones con Números Complejos</h2>

<form method="post">
    <h3>Primer número complejo</h3>
    Real: <input type="number" name="r1" required>
    Imaginaria: <input type="number" name="i1" required><br><br>

    <h3>Segundo número complejo</h3>
    Real: <input type="number" name="r2" required>
    Imaginaria: <input type="number" name="i2" required><br><br>

    <input type="submit" value="Calcular">
</form>

<?php
if ($_POST) {
    $c1 = new Complex($_POST["r1"], $_POST["i1"]);
    $c2 = new Complex($_POST["r2"], $_POST["i2"]);

    $suma = $c1->suma($c2);
    $resta = $c1->resta($c2);
    $producto = $c1->multiplicacion($c2);

    echo "<h3>Resultados</h3>";
    echo "Primer número: " . $c1->operacion() . "<br>";
    echo "Segundo número: " . $c2->operacion() . "<br><br>";

    echo "Suma: " . $suma->operacion() . "<br>";
    echo "Resta: " . $resta->operacion() . "<br>";
    echo "Producto: " . $producto->operacion() . "<br>";
}
?>

</body>
</html>
