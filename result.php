<?php 
$input = "daniel davies";

if( isset($_POST["submit"]) ) {
    $input = $_POST["input"];
}

$output = "";

$input = strtolower($input);

for($i = 0; $i < strlen($input); $i++ ) {
    switch ($input[$i]) {
        case "a" :
            $output .= "dl ";
            break;
        case "b" :
            $output .= "lddd ";
            break;
        case "c" :
            $output .= "ldld ";
            break;
        case "d" :
            $output .= "ldd ";
            break;
        case "e" :
            $output .= "d ";
            break;
        case "f" :
            $output .= "ddld ";
            break;
        case "g" :
            $output .= "lld ";
            break;
        case "h" :
            $output .= "dddd ";
            break;
        case "i" :
            $output .= "dd ";
            break;
        case "j" :
            $output .= "dlll ";
            break;
        case "k" :
            $output .= "ldl ";
            break;
        case "l" :
            $output .= "dldd ";
            break;
        case "m" :
            $output .= "ll ";
            break;
        case "n" :
            $output .= "ld ";
            break;
        case "o" :
            $output .= "lll ";
            break;
        case "p" :
            $output .= "dlld ";
            break;
        case "q" :
            $output .= "lldl ";
            break;
        case "r" :
            $output .= "dld ";
            break;
        case "s" :
            $output .= "ddd ";
            break;
        case "t" :
            $output .= "l ";
            break;
        case "u" :
            $output .= "ddl ";
            break;
        case "v" :
            $output .= "dddl ";
            break;
        case "w" :
            $output .= "dll ";
            break;
        case "x" :
            $output .= "lddl ";
            break;
        case "y" :
            $output .= "ldll ";
            break;
        case "z" :
            $output .= "lldd ";
            break;
        case " " :
            $output .= " ";
            break;
        default :
            break;
    }
    //$output .= " ";
}

$noSquares = strlen($output);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel='stylesheet' type='text/css' href='styles.php' />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <title>SAMUEL.</title>
</head>
<style>
.grid{
    display: grid;
    grid-template-columns: repeat( <?php global $noSquares; echo ceil(sqrt($noSquares)); ?>, 1fr);
    grid-gap: <?php if($noSquares < 100) {echo "7px";} else{echo "2px";}?>;
}
</style>
<body class="full-height">
<?php include "fixed_info.php"; ?>
<h1 class="title centered-text tall-margin">SAMUEL.</h1>
<div class="centered-relative ">
    <div class="grid"> <!-- grid start -->
    <?php
    for($i = 0; $i < $noSquares; $i++) {
        if($output[$i]=="d") {?>
        <img class = "square" src="svg/morse_tile_1.svg" />
        <?php 
        } else if($output[$i]=="l") {?> 
        <img class = "square" src="svg/morse_tile_2.svg" />
        <?php
        } else {?>
        <img class = "square" src="svg/morse_tile_3.svg" />
        <?php
        }
    }
    ?>
    </div> <!-- grid end -->
</div>

</body>
</html>