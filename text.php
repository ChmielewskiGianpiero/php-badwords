<?php

$text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum";

$replace = $_POST['ban_word'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testo censurato</title>
</head>
<body>
    <h2>il testo con la parola censurata:</h2>
    <p> <?php echo str_replace( $replace , '***' , $text ) ?> </p>
    <p> il testo adesso è lungo <?php echo strlen( str_replace( $replace , '***' , $text ) ) ?> caratteri </p>
</body>
</html>