<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/Main.css" />
    <!-- <title>Disk Scheduling Algorithms</title> -->
</head>

<body>
    <section class="tabs">
        <img src="./assets/images/hard-disk1.jpg" alt="hard-disc-image">
        <div class="text">
            <h1>Disk Scheduling</h1>
            <h1>Algorithms</h1>
        </div>

        <?php
        $title_1 = "Disk Scheduling";
        $title_2 = "Algorithms";
        $main_desc = "Ang Lorem Ipsum ay ginagamit na modelo ng industriya ng pagpriprint at pagtytypeset. Ang Lorem Ipsum ang naging
                            regular na modelo simula pa noong 1500s, noong may isang di kilalang manlilimbag and kumuha ng galley ng type at
                            ginulo ang pagkaka-ayos nito upang makagawa ng libro ng mga type specimen. Nalagpasan nito hindi lang limang siglo, kundi nalagpasan din
                            nito ang paglaganap ng electronic typesettin?";
        include "./components/header.php"; 
    ?>
        <div class="tabs-container" id="tbs">
            <a class="tab" href="#tab-FCFS">FCFS</a>
            <a class="tab" href="#tab-SSTF">SSTF</a>
            <a class="tab" href="#tab-SCAN">SCAN</a>
            <a class="tab" href="#tab-C-SCAN">C-SCAN</a>
            <a class="tab" href="#tab-LOOK">LOOK</a>
            <a class="tab" href="#tab-C-LOOK">C-LOOK</a>
            <a class="tab" href="#tab-Best-One">Best One</a>
            <div id="tab-slider"></div>
        </div>
    </section>

    <main class="et-main">
        <section class="et-slide" id="tab-FCFS">
            <div class='heading'>
                <h2>FCFS Disk Scheduling Algorithm</h2>
            </div>
            <div class='sec_body'>
                <div class='info' id='info1'>
                    <h3>What is FCFS ? </h3>
                    <p>FCFS stands for First Come First Serve. As the name suggests, this algorithm entertains requests
                        in
                        the order they arrive in the disk queue. It is the easiest disk scheduling algorithm among all
                        the
                        scheduling algorithms beacuse each input/output request is served in the order in which the
                        requests
                        arrive. In this algorithm, starvation does not occur because FCFS address each request.</p>
                    <h3>Advantages: -</h3>
                    <p> It is simple, easy to understand and implement. In FCFS disk scheduling, there is no indefinite
                        delay. There is no starvation in FCFS disk scheduling because each request gets a fair chance.
                    </p>
                    <h3>Disadvantage: -</h3>
                    <p>In FCFS, scheduling disk time is not optimized. Also this algorithm is not offered as the best
                        service beacuse it results in increased total seek time. To sum up it is inefficient.</p>
                    <div class='icon'>
                        <button class='btn next-btn' onclick="nextOne()">Next&nbsp;&nbsp;<i class="fa fa-arrow-right"
                                aria-hidden="true"></i></button>
                    </div>
                </div>

                <div class='nextInfo' id='nextinfo1'>
                    <h3>Algorithm: -</h3>
                    <h5>Step1:</h5>
                    <p>Let Request array represents an array storing indexes of tracks that have been requested in
                        ascending
                        order of their time of arrival. ‘head’ is the position of disk head.</p>
                    <h5>Step2:</h5>
                    <p>Let us one by one take the tracks in default order and calculate the absolute distance of the
                        track
                        from the head.</p>
                    <h5>Step3:</h5>
                    <p>Increment the total seek count with this distance.</p>
                    <h5>Step4:</h5>
                    <p>Currently serviced track position now becomes the new head position.</p>
                    <h5>Step5:</h5>
                    <p>Go to step 2 until all tracks in request array have not been serviced.</p>
                    <div class='icon'>
                        <button class='btn back-btn' onclick="backOne()"><i class="fa fa-arrow-left"
                                aria-hidden="true"></i>&nbsp;&nbsp;Back</button>
                    </div>
                </div>

                <div class='practical'>
                    <h2><u> Experiment</u></h2>
                    <?php include './diskSchedulingAlgo/FCFSform.php'; ?>
                </div>
            </div>
        </section>

        <!-- <br> -->

        <section class="et-slide" id="tab-SSTF">
            <div class='heading'>
                <h2>SSTF Disk Scheduling Algorithm</h2>
            </div>
            <div class='sec_body'>
                <div class='info' id='info2'>
                    <h3>What is SSTF ? </h3>
                    <p> SSTF stands for Shortest Seek Time First. This algorithm services that request next which
                        requires
                        least number of head movements from its current position regardless of the direction. It breaks
                        the
                        tie in the direction of head movement.</p>
                    <h3>Advantages: -</h3>
                    <p> It reduces the total seek time as compared to FCFS. It provides increased throughput. It
                        provides
                        less average response time and waiting time.</p>
                    <h3>Disadvantage: -</h3>
                    <p>There is an overhead of finding out the closest request.The requests which are far from the head
                        might starve for the CPU. It provides high variance in response time and waiting time. Switching
                        the
                        direction of head frequently slows down the algorithm.</p>
                    <div class='icon'>
                        <button class='btn next-btn' onclick="nextTwo()">Next&nbsp;&nbsp;<i class="fa fa-arrow-right"
                                aria-hidden="true"></i></button>
                    </div>
                </div>

                <div class='nextInfo' id='nextinfo2'>
                    <h3>Algorithm: -</h3>
                    <h5>Step1:</h5>
                    <p>Let Request array represents an array storing indexes of tracks that have been requested. ‘head’
                        is
                        the position of disk head.</p>
                    <h5>Step2:</h5>
                    <p>Find the positive distance of all tracks in the request array from head.</p>
                    <h5>Step3:</h5>
                    <p>Find a track from requested array which has not been accessed/serviced yet and has minimum
                        distance
                        from head.</p>
                    <h5>Step4:</h5>
                    <p>Increment the total seek count with this distance. Currently serviced track position now becomes
                        the
                        new head position.</p>
                    <h5>Step5:</h5>
                    <p>Go to step 2 until all tracks in request array have not been serviced.</p>
                    <div class='icon'>
                        <button class='btn back-btn' onclick="backTwo()"><i class="fa fa-arrow-left"
                                aria-hidden="true"></i>&nbsp;&nbsp;Back</button>
                    </div>
                </div>

                <div class='practical'>
                    <h2><u> Experiment</u></h2>
                    <?php include './diskSchedulingAlgo/SSTFform.php'; ?>
                </div>
            </div>
        </section>

        <!-- <br> -->

        <section class="et-slide" id="tab-SCAN">
            <div class='heading'>
                <h2>Scan Disk Scheduling Algorithm</h2>
            </div>
            <div class='sec_body'>
                <div class='info' id='info3'>
                    <h3>What is Scan ? </h3>
                    <p> As the name suggests, this algorithm scans all the cylinders of the disk back and forth. Head
                        starts
                        from one end of the disk and move towards the other end servicing all the requests in between.
                        After
                        reaching the other end, head reverses its direction and move towards the starting end servicing
                        all
                        the requests in between. The same process repeats. SCAN Algorithm is also called as Elevator
                        Algorithm. This is because its working resembles the working of an elevator.</p>
                    <h3>Advantages: -</h3>
                    <p> It is simple, easy to understand and implement. It does not lead to starvation. It provides low
                        variance in response time and waiting time.</p>
                    <h3>Disadvantage: -</h3>
                    <p>It causes long waiting time for the cylinders just visited by the head.It causes the head to move
                        till the end of the disk even if there are no requests to be serviced.</p>
                    <div class='icon'>
                        <button class='btn next-btn' onclick="nextThree()">Next&nbsp;&nbsp;<i class="fa fa-arrow-right"
                                aria-hidden="true"></i></button>
                    </div>
                </div>

                <div class='nextInfo' id='nextinfo3'>
                    <h3>Algorithm: -</h3>
                    <h5>Step1:</h5>
                    <p>Let Request array represents an array storing indexes of tracks that have been requested in
                        ascending
                        order of their time of arrival. ‘head’ is the position of disk head. </p>
                    <h5>Step2:</h5>
                    <p>Let direction represents whether the head is moving towards left or right.</p>
                    <h5>Step3:</h5>
                    <p>In the direction in which head is moving service all tracks one by one.</p>
                    <h5>Step4:</h5>
                    <p>Calculate the absolute distance of the track from the head. Increment the total seek count with
                        this
                        distance. </p>
                    <h5>Step5:</h5>
                    <p>Currently serviced track position now becomes the new head position.</p>
                    <h5>Step6:</h5>
                    <p>Go to step 3 until we reach at one of the ends of the disk. </p>
                    <h5>Step7:</h5>
                    <p>If we reach at the end of the disk reverse the direction and go to step 2 until all tracks in
                        request
                        array have not been serviced. </p>
                    <div class='icon'>
                        <button class='btn back-btn' onclick="backThree()"><i class="fa fa-arrow-left"
                                aria-hidden="true"></i>&nbsp;&nbsp;Back</button>
                    </div>
                </div>

                <div class='practical'>
                    <h2><u> Experiment</u></h2>
                    <?php include './diskSchedulingAlgo/Scanform.php'; ?>
                </div>
            </div>
        </section>

        <!-- <br> -->

        <section class="et-slide" id="tab-C-SCAN">
            <div class='heading'>
                <h2>C-Scan Disk Scheduling Algorithm</h2>
            </div>
            <div class='sec_body'>
                <div class='info' id='info4'>
                    <h3>What is C-Scan ? </h3>
                    <p> Circular-SCAN Algorithm is an improved version of the SCAN Algorithm. Head starts from one end
                        of
                        the disk and move towards the other end servicing all the requests in between. After reaching
                        the
                        other end, head reverses its direction. It then returns to the starting end without servicing
                        any
                        request in between. The same process repeats.</p>
                    <h3>Advantages: -</h3>
                    <p> The waiting time for the cylinders just visited by the head is reduced as compared to the SCAN
                        Algorithm. It provides uniform waiting time. It provides better response time.</p>
                    <h3>Disadvantage: -</h3>
                    <p>The waiting time for the cylinders just visited by the head is reduced as compared to the SCAN
                        Algorithm. It provides uniform waiting time. It provides better response time.</p>
                    <div class='icon'>
                        <button class='btn next-btn' onclick="nextFour()">Next&nbsp;&nbsp;<i class="fa fa-arrow-right"
                                aria-hidden="true"></i></button>
                    </div>
                </div>

                <div class='nextInfo' id='nextinfo4'>
                    <h3>Algorithm: -</h3>
                    <h5>Step1:</h5>
                    <p> Let Request array represents an array storing indexes of tracks that have been requested in
                        ascending order of their time of arrival. ‘head’ is the position of disk head. The head services
                        only in the right direction from 0 to size of the disk.</p>
                    <h5>Step2:</h5>
                    <p>While moving in the left direction do not service any of the tracks. </p>
                    <h5>Step3:</h5>
                    <p>When we reach at the beginning(left end) reverse the direction. </p>
                    <h5>Step4:</h5>
                    <p>While moving in right direction it services all tracks one by one.</p>
                    <h5>Step5:</h5>
                    <p>While moving in right direction calculate the absolute distance of the track from the head. </p>
                    <h5>Step6:</h5>
                    <p>Increment the total seek count with this distance. Currently serviced track position now becomes
                        the
                        new head position. </p>
                    <h5>Step7:</h5>
                    <p>Go to step 5 until we reach at right end of the disk. </p>
                    <h5>Step8:</h5>
                    <p>If we reach at the right end of the disk reverse the direction and go to step 2 until all tracks
                        in
                        request array have not been serviced. </p>
                    <div class='icon'>
                        <button class='btn back-btn' onclick="backFour()"><i class="fa fa-arrow-left"
                                aria-hidden="true"></i>&nbsp;&nbsp;Back</button>
                    </div>
                </div>

                <div class='practical'>
                    <h2><u> Experiment</u></h2>
                    <?php include './diskSchedulingAlgo/Cscanform.php'; ?>
                </div>
            </div>
        </section>

        <!-- <br> -->

        <section class="et-slide" id="tab-LOOK">
            <div class='heading'>
                <h2>Look Disk Scheduling Algorithm</h2>
            </div>
            <div class='sec_body'>
                <div class='info' id='info5'>
                    <h3>What is Look ? </h3>
                    <p>LOOK Algorithm is an improved version of the SCAN Algorithm. Head starts from the first request
                        at
                        one end of the disk and moves towards the last request at the other end servicing all the
                        requests
                        in between. After reaching the last request at the other end, head reverses its direction. It
                        then
                        returns to the first request at the starting end servicing all the requests in between. The same
                        process repeats.</p>
                    <h3>Advantages: -</h3>
                    <p>It does not causes the head to move till the ends of the disk when there are no requests to be
                        serviced. It provides better performance as compared to SCAN Algorithm. It does not lead to
                        starvation. It provides low variance in response time and waiting time. </p>
                    <h3>Disadvantage: -</h3>
                    <p>There is an overhead of finding the end requests. It causes long waiting time for the cylinders
                        just
                        visited by the head. </p>
                    <div class='icon'>
                        <button class='btn next-btn' onclick="nextFive()">Next&nbsp;&nbsp;<i class="fa fa-arrow-right"
                                aria-hidden="true"></i></button>
                    </div>
                </div>

                <div class='nextInfo' id='nextinfo5'>
                    <h3>Algorithm: -</h3>
                    <h5>Step1:</h5>
                    <p>Let Request array represents an array storing indexes of tracks that have been requested in
                        ascending
                        order of their time of arrival. ‘head’ is the position of disk head. </p>
                    <h5>Step2:</h5>
                    <p>The initial direction in which head is moving is given and it services in the same direction.
                    </p>
                    <h5>Step3:</h5>
                    <p>The head services all the requests one by one in the direction head is moving. </p>
                    <h5>Step4:</h5>
                    <p>The head continues to move in the same direction until all the request in this direction are not
                        finished. </p>
                    <h5>Step5:</h5>
                    <p>While moving in this direction calculate the absolute distance of the track from the head. </p>
                    <h5>Step6:</h5>
                    <p>Increment the total seek count with this distance. Currently serviced track position now becomes
                        the
                        new head position.</p>
                    <h5>Step7:</h5>
                    <p>Go to step 5 until we reach at last request in this direction.</p>
                    <h5>Step8:</h5>
                    <p>If we reach where no requests are needed to be serviced in this direction reverse the direction
                        and
                        go to step 3 until all tracks in request array have not been serviced. </p>
                    <div class='icon'>
                        <button class='btn back-btn' onclick="backFive()"><i class="fa fa-arrow-left"
                                aria-hidden="true"></i>&nbsp;&nbsp;Back</button>
                    </div>
                </div>

                <div class='practical'>
                    <h2><u> Experiment</u></h2>
                    <?php include './diskSchedulingAlgo/Lookform.php'; ?>
                </div>
            </div>
        </section>

        <!-- <br> -->

        <section class="et-slide" id="tab-C-LOOK">
            <div class='heading'>
                <h2>C-Look Disk Scheduling Algorithm</h2>
            </div>
            <div class='sec_body'>
                <div class='info' id='info6'>
                    <h3>What is C-Look ? </h3>
                    <p>Circular-LOOK Algorithm is an improved version of the LOOK Algorithm. Head starts from the first
                        request at one end of the disk and moves towards the last request at the other end servicing all
                        the
                        requests in between. After reaching the last request at the other end, head reverses its
                        direction.
                        It then returns to the first request at the starting end without servicing any request in
                        between.
                        The same process repeats. </p>
                    <h3>Advantages: -</h3>
                    <p>It does not causes the head to move till the ends of the disk when there are no requests to be
                        serviced. It reduces the waiting time for the cylinders just visited by the head. It provides
                        better
                        performance as compared to LOOK Algorithm. It does not lead to starvation. It provides low
                        variance
                        in response time and waiting time. </p>
                    <h3>Disadvantage: -</h3>
                    <p>There is an overhead of finding the end requests. </p>
                    <div class='icon'>
                        <button class='btn next-btn' onclick="nextSix()">Next&nbsp;&nbsp;<i class="fa fa-arrow-right"
                                aria-hidden="true"></i></button>
                    </div>
                </div>

                <div class='nextInfo' id='nextinfo6'>
                    <h3>Algorithm: -</h3>
                    <h5>Step1:</h5>
                    <p>Let Request array represents an array storing indexes of the tracks that have been requested in
                        ascending order of their time of arrival and head is the position of the disk head. The initial
                        direction in which the head is moving is given and it services in the same direction. </p>
                    <h5>Step2:</h5>
                    <p>The head services all the requests one by one in the direction it is moving.</p>
                    <h5>Step3:</h5>
                    <p>The head continues to move in the same direction until all the requests in this direction have
                        been
                        serviced. </p>
                    <h5>Step4:</h5>
                    <p>While moving in this direction, calculate the absolute distance of the tracks from the head. </p>
                    <h5>Step5:</h5>
                    <p>Increment the total seek count with this distance. Currently serviced track position now becomes
                        the
                        new head position. </p>
                    <h5>Step6:</h5>
                    <p>Go to step 4 until we reach the last request in this direction. </p>
                    <h5>Step7:</h5>
                    <p>If we reach the last request in the current direction then reverse the direction and move the
                        head in
                        this direction until we reach the last request that is needed to be serviced in this direction
                        without servicing the intermediate requests. </p>
                    <h5>Step8:</h5>
                    <p>Reverse the direction and go to step 2 until all the requests have not been serviced. </p>
                    <div class='icon'>
                        <button class='btn back-btn' onclick="backSix()"><i class="fa fa-arrow-left"
                                aria-hidden="true"></i>&nbsp;&nbsp;Back</button>
                    </div>
                </div>

                <div class='practical'>
                    <h2><u> Experiment</u></h2>
                    <?php include './diskSchedulingAlgo/CLookform.php'; ?>
                </div>
            </div>
        </section>

        <!-- <br> -->

        <section class="et-slide" id="tab-Best-One">
            <div class='heading'>
                <h2>Find The Best Algorithm For Your Query</h2>
            </div>
            <div class='sec_body'>
                <div class='info'>
                    <h3>How to select the best one?</h3>
                    <p>SSTF is common and has a natural appeal because it increases performance over FCFS. SCAN and
                        C-SCAN
                        perform better for systems that place a heavy load on the disk because they are less likely to
                        cause
                        a starvation problem. With any scheduling algorithm, however, performance depends heavily on the
                        number and types of requests.</p>
                    <p>The location of directories and index blocks is also important. Since every file must be opened
                        to be
                        used and opening a file requires searching the directory structure, the directories will be
                        accessed
                        frequently.</p>
                    <p>Suppose that a directory entry is on the first cylinder and a file's data is on the final
                        cylinder.
                        In this case, the disk head has to move the entire width of the disk. If the directory entry
                        were on
                        the middle cylinder, the head would have to move only one-half the width. Caching the
                        directories
                        and index blocks in main memory can also help to reduce disk-arm movement, particularly for read
                        requests.</p>
                    <p>Because of these complexities, the disk scheduling algorithm should be written as a separate
                        module
                        of the operating system, so that it can be replaced with a different algorithm if necessary.
                        Either
                        SSTF or LOOK is a reasonable choice for the default algorithm.</p>
                </div>
                <div class='practical'>
                    <h2><u> Experiment</u></h2>
                    <?php include './diskSchedulingAlgo/BestOneForm.php'; ?>
                </div>
            </div>
        </section>
    </main>
    <div id="FrontPage-container"></div>
    <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>
    <script src="./assets/js/tab.js"></script>
    <script src="https://kit.fontawesome.com/e2bbc75ec5.js" crossorigin="anonymous"></script>
    <script>
    function nextOne() {
        document.getElementById('info1').style.display = "none";
        document.getElementById('nextinfo1').style.display = "block";
    }

    function backOne() {
        document.getElementById('nextinfo1').style.display = "none";
        document.getElementById('info1').style.display = "block";
    }

    function nextTwo() {
        document.getElementById('info2').style.display = "none";
        document.getElementById('nextinfo2').style.display = "block";
    }

    function backTwo() {
        document.getElementById('nextinfo2').style.display = "none";
        document.getElementById('info2').style.display = "block";
    }

    function nextThree() {
        document.getElementById('info3').style.display = "none";
        document.getElementById('nextinfo3').style.display = "block";
    }

    function backThree() {
        document.getElementById('nextinfo3').style.display = "none";
        document.getElementById('info3').style.display = "block";
    }

    function nextFour() {
        document.getElementById('info4').style.display = "none";
        document.getElementById('nextinfo4').style.display = "block";
    }

    function backFour() {
        document.getElementById('nextinfo4').style.display = "none";
        document.getElementById('info4').style.display = "block";
    }

    function nextFive() {
        document.getElementById('info5').style.display = "none";
        document.getElementById('nextinfo5').style.display = "block";
    }

    function backFive() {
        document.getElementById('nextinfo5').style.display = "none";
        document.getElementById('info5').style.display = "block";
    }

    function nextSix() {
        document.getElementById('info6').style.display = "none";
        document.getElementById('nextinfo6').style.display = "block";
    }

    function backSix() {
        document.getElementById('nextinfo6').style.display = "none";
        document.getElementById('info6').style.display = "block";
    }
    </script>
</body>

</html>