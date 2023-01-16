<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Index.css" />
</head>
<body>
<a href="./Index.html">
            <button style="justify-content:center"; class="btn btn-primary btn-lg">Terug naar home</button>
        </a>


<form method="post" action="confirm.php">

<?php
$naam=$_POST['naam'];
echo ("Uw naam: $naam <br><br>");

$adres=$_POST['adres'];
echo ("Uw adres: $adres  <br><br>");

$postcode=$_POST['postcode'];
echo ("Uw postcode: $postcode <br><br>");

$plaats=$_POST['plaats'];
echo ("Uw plaats: $plaats <br><br>");

$besteldatum=$_POST['besteldatum'];
echo ("Uw besteldatum: $besteldatum <br><br>");

$tijd=$_POST['tijd'];
echo ("Uw gekozen tijd: $tijd <br><br>");

$option=$_POST['Option'];
echo ("Uw gekozen voor: $option<br><br>");

//zet variabel van de prijs
$margherita_Price="12.50";
$funghi_Price="12.50";
$marina_Price="13.95";
$hawai_Price="11.50";
$formaggi_Price="14.50";

$total_price_1="0";
$total_price_2="0";
$total_price_3="0";
$total_price_4="0";
$total_price_5="0";
//telt aantal pizza's
$Margherita=$_POST['Marghertita_teller'];
if ($Margherita == 0){
    echo ("");
} elseif ($Margherita >= 1){ 
    $total_price_1=$margherita_Price*$Margherita;
    echo    ("Margherita: $Margherita stuks. <br>
    Totaal: €$total_price_1 <br><br>");
}

$Funghi=$_POST['Funghi_teller'];
if ($Funghi == 0){
    echo ("");
}  elseif ($Funghi >= 1){
    $total_price_2=$funghi_Price*$Funghi;
    echo    ("Funghi: $Funghi stuks. <br> 
    Totaal: €$total_price_2 <br><br>");
}

$Marina=$_POST['Marina_teller'];
if ($Marina == 0){
    echo ("");
}  elseif ($Marina >= 1){
    $total_price_3=$marina_Price*$Marina;
    echo    ("Margherita: $Marina stuks. <br>
    Totaal: €$total_price_3 <br><br>");
}
$Hawai=$_POST['Hawai_teller'];
if ($Hawai == 0){
    echo ("");
}  elseif ($Hawai >= 1) {
    $total_price_4=$hawai_Price*$Hawai;
    echo    ("Hawai: $Hawai stuks. <br>
    Totaal: €$total_price_4 <br><br>");
}
$Formaggi=$_POST['Formaggi_teller'];
if ($Formaggi === 0){
    echo ("");
}  elseif ($Formaggi >= 1) {
    $total_price_5=$formaggi_Price*$Formaggi;
    echo    ("Formaggi: $Formaggi stuks. <br>
    Totaal: €$total_price_5 <br><br>");
}

//datum
$today=date("l");

if ($today == "Monday" && "Friday") {
    $totaal_eind=$total_price_1+$total_price_2+$total_price_3+$total_price_4+$total_price_5;
    $pizzadag=$totaal_eind/100*90;
    $pizzadag = number_format($pizzadag, 2, ',', ' ');
    echo ("Totaal bedrag Met Pizzadag: €$pizzadag");
} else {
    $totaal_eind=$total_price_1+$total_price_2+$total_price_3+$total_price_4+$total_price_5;
    echo ("Totaal bedrag: €$totaal_eind");    
}
?>
    <input type="submit" value="Akoord en doorgaan">
</form>
</body>
</html>