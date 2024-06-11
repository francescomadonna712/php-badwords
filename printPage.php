<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Testo Inserito</title>
</head>
<body>
    <h1>
        <?php
            $userText = $_GET['userText'];
            $textLength = strlen($userText);
            echo "Il paragrafo inviato è lungo $textLength caratteri";
        ?>
    </h1>
    <p>
        <?php
            echo $userText;
        ?>
    
</body>
</html>