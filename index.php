<?php
$passwordLength = isset($_GET['passwordLength'])? $_GET['passwordLength'] : '';
$passwordLength = (int)$passwordLength;
var_dump($passwordLength);
$password = passwordBuilder($passwordLength);
function passwordBuilder($lenght)
{
    $lilChar = 'abcdefghjklmnopqrstuvwxyz';
    $bigChar = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '1234567890';
    $symbols = '#$@!?><|+_-*&^%';
    $totals = $lilChar . $bigChar . $numbers . $symbols;
    $toReturn = '';
    for ($i=0; $i < $lenght; $i++) {
        $randNum = rand(0, strlen($totals)); 
        $toReturn = $toReturn . $totals[$randNum];
    }
    return $toReturn;
}
?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="css/style.css">
        <!-- <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> -->
    </head>
    <body class="bg-dark-blue">
        <div class="container">
            <h1 class="text-center text-secondary mt-4">Strong Password Generator</h1>
            <h3 class="text-center text-white mb-5">Genere una password sicura</h3>

            <form action="" method="$_GET">
                <div class="container bg-white text-center border border-secondary rounded">
                    <div class="py-3 w-50 m-auto">
                        <input type="number" name="passwordLength"  <?php "value='$passwordLength' "?>  class="form-control" placeholder="Inserisci la lunghezza della password da generare">
                    </div>
                    <div class="py-4">
                        <button class="btn btn-lg btn-primary">INVIA</button>
                        <button class="btn btn-lg btn-secondary">ANNULLA</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- <script src="js/main.js"></script> -->
    </body>
</html>