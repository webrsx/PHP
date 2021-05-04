<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../public/styles/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
</head>
<body>
    <header>
        <p><?php require('blocks/header.php')?></p>
        <nav>
            <p><?php require('blocks/nav.php')?></p>
        </nav>
    </header>

    <main class="main">
        <?php require('blocks/main.php');?>
    </main>

    <aside >
        <p><?php require('blocks/aside.php')?></p>
    </aside>

    <footer >
        <p><?php require('blocks/footer.php')?></p>
    </footer>
    <script src="../public/scripts/script.js"></script>
</body>
</html>
