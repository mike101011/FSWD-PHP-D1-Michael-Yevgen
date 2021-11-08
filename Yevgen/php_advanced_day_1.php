<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Day 1 Advanced</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php 
    #creating an associative array => multidimensional array
    $diablo2_chars = [
        1 => [
            "class" => "Sorceres",
            "name" => "Oni",
            "age" => "124",
            "gender" => "female"
        ],
        2 => [
            "class" => "Barbarian",
            "name" => "Bro",
            "age" => "45",
            "gender" => "male"
        ],
        3 => [
            "class" => "Paladin",
            "name" => "Andariel",
            "age" => "76",
            "gender" => "male"
        ]
    ];

    echo "Character: " .$diablo2_chars[1]["class"] . "<br> Name: " .$diablo2_chars[1]["name"]. "<br> Age: ".$diablo2_chars[1]["age"]."<br> Gender: ".$diablo2_chars[1]["gender"]."<br><br>";

    echo "Character: " .$diablo2_chars[2]["class"] . "<br> Name: " .$diablo2_chars[2]["name"]. "<br> Age: ".$diablo2_chars[2]["age"]."<br> Gender: ".$diablo2_chars[2]["gender"]."<br><br>";

    echo "Character: " .$diablo2_chars[3]["class"] . "<br> Name: " .$diablo2_chars[3]["name"]. "<br> Age: ".$diablo2_chars[3]["age"]."<br> Gender: ".$diablo2_chars[3]["gender"]."<br><hr>";
?>

<table>
    <tr>
        <th>#</th>
        <th>Class</th>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
    </tr>
    <tbody>
        <tr>
            <td>1</td>
            <td><?php echo $diablo2_chars[1]["class"]?></td>
            <td><?php echo $diablo2_chars[1]["name"]?></td>
            <td><?php echo $diablo2_chars[1]["age"]?></td>
            <td><?php echo $diablo2_chars[1]["gender"]?></td>
        </tr>
        <tr>
            <td>2</td>
            <td><?php echo $diablo2_chars[2]["class"]?></td>
            <td><?php echo $diablo2_chars[2]["name"]?></td>
            <td><?php echo $diablo2_chars[2]["age"]?></td>
            <td><?php echo $diablo2_chars[2]["gender"]?></td>
        </tr>
        <tr>
            <td>3</td>
            <td><?php echo $diablo2_chars[3]["class"]?></td>
            <td><?php echo $diablo2_chars[3]["name"]?></td>
            <td><?php echo $diablo2_chars[3]["age"]?></td>
            <td><?php echo $diablo2_chars[3]["gender"]?></td>
        </tr>
    </tbody>
</table>
    
</body>
</html>