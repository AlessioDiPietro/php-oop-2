<?php


/*Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping. Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito... $c = new CreditCard(..); $user->insertCreditCard($c);
BONUS: Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta).*/


/*classe genitore*/
require_once 'ArticlesSport.php';
/*classe figlio*/
require_once 'EmployeeMontagna.php';
/*classe figlio*/
require_once 'EmployeeMare.php';


$scarpini_calcio = new ArticlesSport('Scarpini da calcio', 35 ,2323234);

$passamontagna = new EmployeeMontagna('Passamontagna', 14 , 33300222);
$passamontagna->setAltaquota('2000 mt');
$passamontagna->setVetrina_esp(0);

$maschera_sub = new EmployeeMare('Maschera da sub', 22, 9993322);
$maschera_sub->setImmersioni_profonde('120mt');
$maschera_sub->setVetrina_esp(3);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShoppySport</title>
</head>
<body>
    <h1>Benvenuto in ShoppySport</h1>

    <hr>
    <hr>
    <hr>

    <nav>
        <h2>i nostri articoli più gettonati </h2>
        <ul>
            <li>
                <ul>
                    <li><?php echo $scarpini_calcio->getDes() ?></li>
                    <li> <strong>Codice: </strong> #<?php echo $scarpini_calcio->barcode ?></li>
                    
                </ul>
                
            </li>
        </ul>

        <h2>i nostri articoli più gettonati per la MONTAGNA</h2>
        <ul>
            <li>
                <ul>
                    <li><?php echo $passamontagna->getDes() ?></li>
                    <li> <strong>Codice: </strong> #<?php echo $passamontagna->barcode ?></li>
                    <li><h3>vetrina:</h3><?php $passamontagna->getVetrina_esp()?></li>
                    <li><h3>Altaquota fino a: <?php echo $passamontagna->getAltaquota()?></h3></li>
                </ul>
            </li>
        </ul>

        <h2>i nostri articoli più gettonati per il MARE</h2>
        <ul>
            <li>
                <ul>
                    <li><?php echo $maschera_sub->getDes() ?></li>
                    <li> <strong>Codice: </strong> #<?php echo $maschera_sub->barcode ?></li>
                    <li><h3>vetrina:</h3><?php $maschera_sub->getVetrina_esp()?></li>
                    <li><h3>immersioni fino a: <?php echo $maschera_sub->getImmersioni_profonde()?></h3></li>
                </ul>
            </li>
        </ul>
    </nav>
    
</body>
</html>