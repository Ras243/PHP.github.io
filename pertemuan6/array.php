<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Array associative</title>
    <style>
        .kotak{
            width:60px;
            height: 60px;
            background-color: #BADA55;
            text-align: center;
            line-height: 60px;
            margin: 10px;
            float: left;
            transition: 0.5s;
        }
        .kotak:hover {
            transform:rotate(180deg);
            border-radius: 50%
        }
    </style>
</head>
<body>
    <h3>semangat pagi❤️...!!</h3>
    <?php
    $friends = 
        ["Rasul", "Dhani", "Taufik", "alnest", "Rafli", "Aksha","Masri", "Salim",
        "Fani", "Difa", "Marwa", "Wiwi", "Fitra", "Berliana", "WiwiB", "Mita"];
    ?>
    <?php foreach( $friends as $friend) : ?>
    <div class="kotak"><?= $friend; ?></div>
    <?php endforeach ?>

</body>
</html>