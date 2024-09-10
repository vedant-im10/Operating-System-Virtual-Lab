<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algorithm Content</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/algoContent.css">
</head>

<body>
    <div class="container-algo-content">
        <div class="description" id="intro">
            <h2>What is <?php echo $algoName ?>?</h2>
            <br>
            <p><?php echo $algoDesc ?></p>
        </div>
        <div class="description" id="adv">
            <h2>Advantages</h2>
            <br>
            <p><?php echo $algoAdv ?></p>
        </div>
        <div class="description" id="disadv">
            <h2>Disadvantages</h2>
            <br>
            <p><?php echo $algoDisAdv ?></p>
        </div>
    </div>
</body>

</html>