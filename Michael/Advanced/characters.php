<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Exercise</title>
    <link rel="stylesheet" href="css/adv-styles.css">
</head>

<body>
    <?php
    $characters = [
        "Optimus" => [
            "name" => "Optimus prime",
            "party" => "autobots",
            "position" => "leader",
            "transforms" => "truck"
        ],
        "Bumblebee" => [
            "name" => "Bumblebee",
            "party" => "autobots",
            "position" => "soldier",
            "transforms" => "car"
        ],
        "Megatron" => [
            "name" => "Megatron",
            "party" => "decepticons",
            "position" => "leader",
            "transforms" => "airplane"
        ],
        "Starscream" => [
            "name" => "Starscream",
            "party" => "decepticons",
            "position" => "second in command",
            "transforms" => "airplane"
        ]
    ]
    ?>
    <h1 class="heading">Transformers - More Than Meets The Eye</h1>
    <h3 class="autobots"><?php echo "{$characters["Optimus"]["name"]}" ?></h3>
    <?php echo "<p>He is the {$characters["Optimus"]["position"]} of the {$characters["Optimus"]["party"]} and can transform into a {$characters["Optimus"]["transforms"]}</p>" ?>
    <h3 class="autobots"><?php echo "{$characters["Bumblebee"]["name"]}" ?></h3>
    <?php echo "<p>He is a {$characters["Bumblebee"]["position"]} of the {$characters["Bumblebee"]["party"]} and can transform into a {$characters["Bumblebee"]["transforms"]}</p>" ?>
    <h3 class="decepticons"><?php echo "{$characters["Megatron"]["name"]}" ?></h3>
    <?php echo "<p>He is the leader of the {$characters["Megatron"]["position"]} of the {$characters["Megatron"]["party"]} and can transform into a {$characters["Megatron"]["transforms"]}</p>" ?>
    <h3 class="decepticons"><?php echo "{$characters["Starscream"]["name"]}" ?></h3>
    <?php echo "<p>He has the position {$characters["Starscream"]["position"]} within the {$characters["Starscream"]["party"]} and can transform into a {$characters["Starscream"]["transforms"]}</p>" ?>
</body>

</html>