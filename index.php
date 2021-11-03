<?php

$numeros = $_POST['tecla'];

echo $numeros;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
   
    <form action="" method="POST">

        <table>

            <tr>
                <td>
                    <input type="submit" name="tecla" value=" 7 " onclick="7">
                </td>
                <td>
                <input type="submit" name="tecla" value=" 8 " onclick="8">
                </td>
                <td>
                <input type="submit" name="tecla" value=" 9 " onclick="9">
                </td>
                <td>
                <input type="submit" name="tecla" value=" X " onclick="*">
                </td>   
            </tr>
            
            <tr>
                <td>
                    <input type="submit" name="tecla" value=" 4 " onclick="4">
                </td>
                <td>
                    <input type="submit" name="tecla" value=" 5 " onclick="5"> 
                </td>
                <td>
                    <input type="submit" name="tecla" value=" 6 " onclick="6">  
                </td>
                <td>
                    <input type="submit" name="tecla" value=" + " onclick="+">
                </td>   
            </tr>
            
            <tr>
                <td>
                    <input type="submit" name="tecla" value=" 1 " onclick="1">
                </td>
                <td>
                    <input type="submit" name="tecla" value=" 2 " onclick="2">
                </td>
                <td>
                    <input type="submit" name="tecla" value=" 3 " onclick="3"> 
                </td>
                <td>
                    <input type="submit" name="tecla" value=" - " onclick="-">
                </td>   
            </tr>

            
            <tr>
                <td>
                  <input type="submit" name="tecla" value=" C " onclick="c">
                </td>
                <td>
                    <input type="submit" name="tecla" value=" = " onclick="=">
                </td>
                <td></td>
                <td>
                    <input type="submit" name="tecla" value=" / " onclick="/">
                </td>   
            </tr>

        </table>
    </form>
    
</body>
</html>