<!DOCTYPE html>
<html>

<body>

    <h1>PHP</h1>

    <?php
    print "<h2>1 - Syntax</h2>";
    print "<br>";
    print "Hola Mundo";
    print "<br>";
    echo "Hola Mundo con echo";
    print "<br>";
    ECHO "Hola Mundo con ECHO";
    print "<br>";
    echo "hola ", "mundo";
    // print "hola",

    print "<h2>***</h2>";

    print "<h2>2 - Variables and types</h2>";
    print "<br>";
    $number = 123;
    $color = "red";
    var_dump($number);
    print "<br>";
    var_dump($color);
    print "<br>";
    print($color);
    ?>

    <h3>2.1 - String</h3>
    <?php
    $color = "red";
    echo "My car is " . $color . "<br>";
    print "<br>";
    ECHO "my house is " . $color . "<br>";

    print "<h3>2.2 / number</h3>";
    $x = 1;
    $y = 2;
    echo $x + $y;
    //var_dump se usa para ver las propiedades de una variable
    //echo no funciona para imprimir arrays
    print "<h3>2.3 / number</h3>";
    print "<br>";
    $xy = 10.12;
    var_dump($xy);
    $cars = array("Axel", "Erving", "Hector");
    var_dump($cars);
    print "<br>";
    print_r($cars); //Imprime el array completo
    print "<br>";
    print_r($cars[1]); //Imprime un solo objeto
    ?>

    <?php
    print "<h3>2.4 / Objetcs</h3>";

    class car
    {
        public $color;
        public $model;

        public function __construct($color, $model){
            $this -> color = $color;
            $this -> model = $model;
        }

        public function message(){
            return "My car is a " . $this -> color . " " . $this -> model;
        }
    }

    $myCar = new car("Toyota" , 2005);
    print "<br>";
    var_dump($myCar);
    print "<br>";
    echo $myCar -> message(); //Llama a la funcion de mensaje para imprimirlo
    ?>

    <?php
    print "<h2> 3 - String Utilities </h2>";
    print "<br>";
    echo strlen("Yirson");
    print "<br>";
    echo str_word_count("Yirson Acevedo Arguedas");
    print "<br>";
    echo strrev("Yirson Acevedo");
    print "<br>";
    echo str_replace("Zamora", "xCodeFreak", "Francisco Zamora");
    ?>

    <?php
    print "<h2>4 - If (Condicionales)</h2>";
    print "<br>";
    $x = 100;
    $y = 50;

    if ($x == 100 & $y == 50){
        echo "yes";
    } else{
        echo "no";
    }
    ?>
<?php
echo $_SERVER["REQUEST_METHOD"];
echo "<br>";
echo $_GET['name'] . " ";
echo $_GET['lastName'] . ", edad: ";
echo $_GET["age"];
echo "<br>";

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://reqres.in/api/users',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
echo "<br>";
echo "<br>";
/*var_dump($response);
echo "<br>";
echo $response;*/

$obj = json_decode($response);
echo "<br>";
//var_dump($obj);
echo "<br>";
//var_dump($obj -> total_pages);

echo "<br>";
print_r($obj -> data[1]);

?>
</body>

</html>