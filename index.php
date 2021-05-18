<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SNACKS 1</title>
</head>
<body>
<div class="snack1">
    <!-- PHP Snack 1:
    Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
    Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
    Stampiamo a schermo tutte le partite con questo schema:
    Olimpia Milano - Cantù | 55-60 -->
    
    <h2>SNACK 1</h2>
    <?php 
        //Creazione array matches
        $matches = [
            [
                'home_team' => 'Olimpia Milano',
                'away_team' => 'Trento',
                'home_team_points' => '88',
                'away_team_points' => '62',
            ],
            [
                'home_team' => 'Venezia',
                'away_team' => 'Dinamo Sassari',
                'home_team_points' => '92',
                'away_team_points' => '91',
            ],
            [
                'home_team' => 'Virtus Bologna',
                'away_team' => 'Universo Treviso',
                'home_team_points' => '91',
                'away_team_points' => '72',
            ],
            [
                'home_team' => 'Brindisi',
                'away_team' => 'Trieste',
                'home_team_points' => '85',
                'away_team_points' => '64',
            ],
            [
                'home_team' => 'Fortitudo Bologna',
                'away_team' => 'Cantù',
                'home_team_points' => '75',
                'away_team_points' => '68',
            ],
        ];
    ?>
    <h3>Matches</h3>
    <ul>
        <!-- GENERAZIONE ITEMS CON CICLO FOR -->
        <?php for($i = 0; $i < count($matches); $i++) { ?>
        <li>
            <?php echo $matches[$i]['home_team'] .  ' - ' . $matches[$i]['away_team'] . ' | ' . $matches[$i]['home_team_points'] . '-' . $matches[$i]['away_team_points'] ?>
        </li>
        <?php } ?>
    </ul>
    
</div>

<div class="snack2">
    <!-- PHP Snack 2:
    Passare come parametri GET (query string) name, mail e age
    verificare (cercando i metodi che non
    conosciamo nella documentazione) che:
    1. name sia più lungo di 3 caratteri
    2. che mail contenga un punto e una chiocciola
    3. che age sia un numero.
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
    
    <?php 
        //Collezione GET
        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];
    ?>

    <h2>SNACK 2</h2>
    <h3>Autenticazione</h3>
    <div class="response">
        <?php
            if( strlen($name) <= 3 || ! is_numeric($age) || ! strpos($mail, '@') || ! strpos($mail, '.') ) {
                echo 'Accesso Negato';
            } else {
                echo 'Accesso Riuscito';
            }
        ?>
    </div>


</div>
</body>
</html>