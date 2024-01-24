<?php include_once 'config.php'; ?>

<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>">
<head>
    <meta charset="UTF-8">
    <title>Multi-Language Example</title>
</head>
<body>
    <h1><?php echo $lang['title']; ?></h1>

    <p><?php echo $lang['description'] ?></p>


    <?php 
        foreach ($languages as $key => $value) {
            echo "<a href='?lang=$key'>{$lang['lang_' . $key]}</a> ";
        }
    ?>

</body>
</html>
