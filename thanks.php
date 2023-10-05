<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thanks</title>
</head>
<body>
<p id="message">
    Merci <?php echo $_POST['user_firstName']; ?> <?php echo $_POST['user_lastName']; ?> de nous avoir contacté à propos
    de “<?php echo $_POST['Sujet']; ?>”.<br>
    Un de nos conseiller vous contactera soit à l’adresse <?php echo $_POST['user_email']; ?> ou par téléphone
    au <?php echo $_POST['user_phone']; ?> dans les plus brefs délais pour traiter votre demande :<br>
    <?php echo $_POST['user_message']; ?>
</p>
</body>
</html>
