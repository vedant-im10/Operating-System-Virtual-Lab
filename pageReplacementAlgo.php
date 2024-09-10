<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/algoContent.css" />
    <link rel="stylesheet" href="./assets/css/tabs.css" />
    <link rel="stylesheet" href="./assets/css/header.css" />
    <title>Page Replacement Algorithms</title>
    <script src="./assets/js/tabs.js"></script>
</head>

<body>
    <?php
    $title_1 = "Page Replacement";
    $title_2 = "Algorithms";
    $main_desc = "In a computer operating system that uses paging for virtual memory management, page replacement algorithms decide which memory pages to page out, sometimes called swap out, or write to disk, when a page of memory needs to be allocated. Page replacement happens when a requested page is not in memory (page fault) and a free page cannot be used to satisfy the allocation, either because there are none, or because the number of free pages is lower than some threshold.";

    include "./components/header.php";
    ?>

    <div class="tabs-container flex-layout ">
        <div data-tab="fifo" class="pra tab h4 active-tab flex-layout justify-center items-center text-uppercase">
            FIFO
        </div>
        <div data-tab="belady" class="pra tab h4 flex-layout justify-center items-center text-uppercase">
            BELADY
        </div>
        <div data-tab="lifo" class="pra tab h4 flex-layout justify-center items-center text-uppercase">
            LIFO
        </div>
        <div data-tab="lru" class="pra tab h4 flex-layout justify-center items-center text-uppercase">
            LRU
        </div>
        <div data-tab="optimal" class="pra tab h4 flex-layout justify-center items-center text-uppercase">
            Optimal
        </div>
        <div data-tab="random" class="pra tab h4 flex-layout justify-center items-center text-uppercase">
            Random
        </div>
    </div>

    <div id="fifo" class="tab-view">
        <div class="page-heading flex-layout justify-center items-center text-uppercase white-text">
            <h1>First In First Out</h1>
        </div>
        <br><br>
        <?php
        $algoName = "FIFO";
        $algoDesc = "FIFO algorithm is the simplest page-replacement algorithm. The First-In, First-Out (FIFO) page replacement algorithm is a low-overhead algorithm that requires little bookkeeping on the part of the operating system. In other words, on a page fault, the frame that has been in memory the longest is replaced.
        ";

        $algoAdv = "FIFO is easy to understand.
        <br>
        It is very easy to implement.";
        $algoDisAdv = "It is not very effective.
        <br>
        System needs to keep track of each frame.
       ";

        include "./components/algoContent.php";
        ?>
        <br><br>
        <?php include "./pageReplacementAlgo/fifo.php"; ?>
        <br><br>
    </div>
    <div id="belady" class="tab-view">
        <div class="page-heading flex-layout justify-center items-center text-uppercase white-text">
            <h1>Belady</h1>
        </div>
        <br><br>
        <?php
        $algoName = "BELADY";
        $algoDesc = "Bélády’s anomaly is the name given to the phenomenon where increasing the number of page frames results in an increase in the number of page faults for a given memory access pattern.This phenomenon is commonly experienced in following page replacement algorithms:
            First in first out (FIFO)
            Second chance algorithm
Random page replacement algorithm ";

        $algoAdv = "";
        $algoDisAdv = "";

        include "./components/algoContent.php";
        ?>
        <br><br>
        <?php include "./pageReplacementAlgo/belady.php"; ?>
    </div>
    <div id="lifo" class="tab-view">
        <div class="page-heading flex-layout justify-center items-center text-uppercase white-text">
            <h1>Last In First Out</h1>
        </div>
        <br><br>
        <?php
        $algoName = "LIFO";
        $algoDesc = "In LIFO (Last In, First Out) algorithm, newest jobs are serviced before the existing ones i.e. in order of requests that get serviced the job that is newest or last entered is serviced first and then the rest in the same order.";

        $algoAdv = "Maximizes locality and resource utilization.";
        $algoDisAdv = "Can seem a little unfair to other requests and if new requests keep coming in, it cause starvation to the      
        old and existing ones.";

        include "./components/algoContent.php";
        ?>
        <br><br>
        <?php include "./pageReplacementAlgo/lifo.php"; ?>
        <br><br>

    </div>
    <div id="lru" class="tab-view">
        <div class="page-heading flex-layout justify-center items-center text-uppercase white-text">
            <h1>least recently used</h1>
        </div>
        <br><br>
        <?php
        $algoName = "LRU";
        $algoDesc = "Least Recently Used (LRU) algorithm is a Greedy algorithm where the page to be replaced is least recently used. The idea is based on locality of reference, the least recently used page is not likely. This idea suggests a realizable algorithm: when a page fault occurs, throw out the page that has been unused for the longest time.        ";

        $algoAdv = "It is open for full analysis.
        <br>
        In this, we replace the page which is least recently used, thus free from Belady’s Anomaly.<br>
       Easy to choose page which has faulted and hasn’t been used for a long time.
       ";
        $algoDisAdv = "It requires additional Data Structure to be implemented.<br>
        Hardware assistance is high.<br>
        Performance tends to degenerate under many quite common reference patterns.";

        include "./components/algoContent.php";
        ?>
        <br><br>
        <?php include "./pageReplacementAlgo/lru.php"; ?>
        <br><br>
    </div>
    <div id="optimal" class="tab-view">
        <div class="page-heading flex-layout justify-center items-center text-uppercase white-text">
            <h1>optimal</h1>
        </div>
        <br><br>
        <?php
        $algoName = "Optimal";
        $algoDesc = " This Algorithms replaces the page which will not be referred for so long in future. Although it can not be practically Implementable but it can be used as a benchmark. Other algorithms are compared to this in terms of optimality, In other words in this algorithm , pages are replaced which would not be used for the longest duration of time in the future.
        ";

        $algoAdv = "Complexity is less and easy to implement.<br>
        Assistance needed is low i.e Data Structure used are easy and light. 
        ";
        $algoDisAdv = "OPR is perfect, but not possible in practice as the operating system cannot know future requests.<br>
        Error handling is tough.
        ";

        include "./components/algoContent.php";
        ?>
        <br><br>
        <?php include "./pageReplacementAlgo/optimal.php"; ?>
        <br><br>
    </div>
    <div id="random" class="tab-view">
        <div class="page-heading flex-layout justify-center items-center text-uppercase white-text">
            <h1>random</h1>
        </div>
        <br><br>
        <?php
        $algoName = "Random";
        $algoDesc = "Random replacement algorithm replaces a random page in memory. This eliminates the overhead cost of tracking page references. ";

        $algoAdv = "Pages are replaced randomly and hence it is extremely easy to execute this algorithm.<br>Works well when there is tons of free memory and when there is no free memory.
";
        $algoDisAdv = "It can easily make bad choices by swapping out pages right before they are needed.<br>Random page replacement algorithm suffers from belady’s anomaly which results in increasing number of page faults";

        include "./components/algoContent.php";
        ?>
        <br><br>
        <?php include "./pageReplacementAlgo/random.php"; ?>
        <br><br>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" integrity="sha384-9/D4ECZvKMVEJ9Bhr3ZnUAF+Ahlagp1cyPC7h5yDlZdXs4DQ/vRftzfd+2uFUuqS" crossorigin="anonymous"></script>
</body>

</html>