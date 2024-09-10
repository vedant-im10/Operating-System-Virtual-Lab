<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/header.css" />
</head>

<body>
    <div class="landing-screen">
        <nav>
            <div class="navbar flex-layout justify-center items-center white-text text-uppercase">
                <div class="nav-items"><a href="./index.php">Home</a></div>
                <div class="nav-items"><a href="">Disk Scheduling</a></div>
                <div class="nav-items"><a href="./pageReplacementAlgo.php">Page Replacement</a></div>
                <div class="nav-items"><a href="./schedulingAlgo.php">Scheduling</a></div>
                <div class="nav-items"><a href="">Concurrency & Deadlock</a></div>
                <div class="nav-items"><a href="./developers.php">about</a></div>
            </div>
        </nav>
        <div class="header-container flex-layout">
            <div class="header-info">
                <h1 class="header-title bold-text"><?php echo $title_1; ?><br><?php echo $title_2; ?></h1>
                <p class="header-para"><?php echo $main_desc; ?></p>
            </div>
        </div>
    </div>
</body>