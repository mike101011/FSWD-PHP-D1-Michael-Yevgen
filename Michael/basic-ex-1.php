<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic 1</title>
    <style>
        .message {
            position: absolute;
            width: 100%;
            top: 45%;
        }

        .heading {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    static $name = "Mike";
    ?>
    <div class="message">
        <h1 class="heading">My name is <?php echo $name; ?></h1>
    </div>



</body>

</html>