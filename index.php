<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel='stylesheet' type='text/css' href='styles.php' />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <title>SAMUEL.</title>
</head>
<body class="full-height">
<?php include "fixed_info.php"; ?>
<!-- form start -->
<div class="centered-large centered-text">
    <h1 class="title">SAMUEL.</h1>
    <form action="result.php" method="POST" >
        <input class ="input" autocomplete="off" maxlength="150" type="text" name="input" placeholder="input" />
        <input class="button" type="submit" name="submit" value="TRANSLATE"/>
    </form>
</div>
<!-- form end -->
</body>
</html>