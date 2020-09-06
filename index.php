<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    Input phone number:
    <br>
    <textarea name="textArea" placeholder="Phone Number"></textarea>
    <br>
    <button type="submit">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $textArea = $_POST["textArea"];

    $viettel = array();
    $mobiphone = array();
    $vinaphone = array();

    $textArea = explode(",", $textArea);
    echo "Phone Number";
    echo "<pre>";
    print_r($textArea);
    echo "</pre>";
    $viet = ["086", "096", "097", "098", "032", "033", "034", "035", "036", "037", "038", "039"];
    $vina = ["088", "091", "094", "083", "084", "085", "081", "082"];
    $mobi = ["089", "090", "093", "070", "079", "077", "076", "078"];


    for ($i = 0; $i < count($textArea); $i++) {
        $number = str_split($textArea[$i], 3);

        if (in_array($number[0], $viet)) {
            array_push($viettel, $textArea[$i]);
        } elseif (in_array($number[0], $vina)) {
            array_push($vinaphone, $textArea[$i]);
        } elseif (in_array($number[0], $mobi)) {
            array_push($mobiphone, $textArea[$i]);
        }
    }
    echo "Viettel";
    echo "<pre>";
    print_r($viettel);
    echo "</pre>";
    echo "MobiPhone";
    echo "<pre>";
    print_r($mobiphone);
    echo "</pre>";
    echo "VinaPhone";
    echo "<pre>";
    print_r($vinaphone);
    echo "</pre>";

}

?>


</body>
</html>
