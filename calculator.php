<?php
echo "<form action='#' method='post'>" . 
"<input id='POST-name' type='number' placeholder='Voer het eerste getal in' name='num1'>" . PHP_EOL . 
"<input id='POST-name' type='number' placeholder='Voer het tweede getal   in' name='num2'>" . PHP_EOL .
"<input type='submit' value='Verstuur'>" . PHP_EOL . "<input type='submit' name='+' value='+' />" . PHP_EOL .
"<input type='submit' name='-' value='-' />" . PHP_EOL . "<input type='submit' name='x' value='x' />" . PHP_EOL .
"<input type='submit' name='/' value='/' />" . PHP_EOL . "<input type='submit' name='%' value='%' />" . PHP_EOL .
"</form>";
if(array_key_exists('+', $_POST)) { 
    plus(); 
} 
else if(array_key_exists('-', $_POST)) { 
    minus(); 
} 
else if(array_key_exists('x', $_POST)) { 
    keer(); 
} 
else if(array_key_exists('/', $_POST)) { 
    delen(); 
} 
else if(array_key_exists('%', $_POST)) { 
    modulo(); 
} 
function plus() {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $antwoord = $num1 + $num2;
    echo $antwoord;
}
function minus() {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $antwoord = $num1 - $num2;
    echo $antwoord;
}
function keer() {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $antwoord = $num1 * $num2;
    echo $antwoord;
}
function delen() {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $antwoord = $num1 / $num2;
    echo $antwoord;
}
function modulo() {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $antwoord = $num1 % $num2;
    echo $antwoord;
}

?>