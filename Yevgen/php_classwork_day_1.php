<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php classwork day 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Exercise 1 -->
<span class="ex-info">PHP DAY 1 Classwork: Exercise 1</span>
<h1><?php $myName = "Yevgen Kutsy"; echo $myName;?></h1>
<hr>
    
<!-- Exercise 2 -->

    <?php 
        $full_name = $GLOBALS["myName"];
        $age = 35;
        $job_title = "Junior Full-Stack Web Developer";
    ?>

<span class="ex-info">PHP DAY 1 Classwork: Exercise 2</span>
<h2><?php echo "Hello, my name is $full_name, and I am $age jung, and I will work as a $job_title";?></h2>
<hr>


<!-- Exercise 3 -->

<?php 
        $players = ["Mark", "John", "Georg", "Lisa"];

    ?>

<span class="ex-info">PHP DAY 1 Classwork: Exercise 3</span>
<h2><?php echo "The 3rd Player in the team is $players[2]";?></h2>
<hr>

</body>
</html>

<?php ?>