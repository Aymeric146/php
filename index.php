<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="name">nom</label>
        <input type="text" name="text" id="text">
        <input type="submit" value="envoyer">
    </form>
</body>
</html>
<?php
$teste='Bonjour';
$number=455;
echo '<h1>'. $teste.'</h1>';
echo '<br>';
echo $number;
if ($_SERVER["REQUEST_METHOD"] == "POST" )
{
    $text = htmlspecialchars($_POST['text']);
} else{
    echo 'ça marche pas';
}
echo $text;

?>