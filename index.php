<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/person-card.css">
    <link rel="stylesheet" href="./assets/css/header.css" />
    <title>Homepage</title>

    <style>
    .index:hover img {
        box-shadow: 5px 5px 10px #000;
    }

    .person-card-img {
        width: 100%;
    }

    @media screen and (min-width: 960px) {

        .index {
            flex: 0 1 calc(25% - 2em);
            margin-left: 0;
            margin-right: 0;
        }

        .person-cards {
            justify-content: space-between;
        }

        .person-card-name {
            cursor: default;
        }
    }
    </style>

</head>

<body>
    <?php 
        $title_1 = "OS";
        $title_2 = "Virtual Lab";
        $main_desc = "The OS Virtual Lab contains a combination of various Operating System algorithms. It is comprised of 4 components namely 'Disk Scheduling Algorithm', 'Scheduling Algorithm', 'Page Replacement Algorithm' and 'Concurrency and Deadlock'. The lab is designed to provide a user-friendly interface. It focuses on providing the user knowledge about OS algorithms along with their implementation. The objective of this lab is to help the users understand the internal working of an operating system via an online platform.";
        include './components/header.php';
    ?>

    <section class="person-cards">
        <div class="index person-card white-text items-center justify-center">
            <a href="#">
                <div class="person-card-header">
                    <img class="person-card-img" src="./assets/images/hard-disk1.jpg" alt="Person Image">
                </div>
            </a>
            <div class="person-card-body">
                <h4 class="person-card-name text-center">Disk Scheduling<br>Algorithms</h4>
            </div>
        </div>

        <div class="index person-card white-text items-center justify-center">
            <a href="./schedulingAlgo.php">
                <div class="person-card-header">
                    <img class="person-card-img" src="./assets/images/scheduling-bg.jpg" alt="Person Image">
                </div>
            </a>
            <div class="person-card-body">
                <h4 class="person-card-name text-center">Scheduling Algorithms</h4>
            </div>
        </div>

        <div class="index person-card white-text items-center justify-center">
            <a href="./pageReplacementAlgo.php">
                <div class="person-card-header">
                    <img class="person-card-img" src="./assets/images/page-replacement-bg.jpg" alt="Person Image">
                </div>
            </a>
            <div class="person-card-body">
                <h4 class="person-card-name text-center">Page Replacement<br>Algorithms</h4>
            </div>
        </div>

        <div class="index person-card white-text items-center justify-center">
            <a href="#">
                <div class="person-card-header">
                    <img class="person-card-img" src="./assets/images/concurrency-deadlock-bg.jpg" alt="Person Image">
                </div>
            </a>
            <div class="person-card-body">
                <h4 class="person-card-name text-center">Concurrency &<br>Deadlock Algorithms</h4>
            </div>
        </div>

    </section>

</body>

</html>