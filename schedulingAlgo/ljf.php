<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Longest job first</title>
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/demo.css">
    </head>

    <body>
        <section class="sa-algo-container">
            <div class="sa-containers">
                <div id="ljf-container">
                    <div class="item">P No.</div>
                    <div class="item">Arrival time</div>
                    <div class="item">Burst time</div>

                    <div class="item ans">Completion Time</div>
                    <div class="item ans">Turn Around Time</div>
                    <div class="item ans">Waiting Time</div>
                </div>

                <div id="ljf-container_IO">
                    <div class="item">P No.</div>
                    <div class="item">Total IO</div>
                    <div class="item">Arrival time</div>
                    <div class="item">Burst time</div>

                    <div class="item ans">Completion Time</div>
                    <div class="item ans">Turn Around Time</div>
                    <div class="item ans">Waiting Time</div>
                </div>

                <div id="ljf-data">
                    <label class="cen">0</label>
                    <input type="number" class="cen">
                    <input type="number" class="cen">
                    <label class="ans"></label>
                    <label class="ans"></label>
                    <label class="ans"></label>
                </div>

                <div id="ljf-data_IO">
                    <label class="cen">0</label>
                    <input type="number" class="cen">
                    <input type="number" class="cen">
                    <div class="cen" style="overflow: auto;">
                        <input type="number" class="cen_IO" placeholder="BT" style="width:60px;">
                    </div>
                    <label class="ans"></label>
                    <label class="ans"></label>
                    <label class="ans"></label>
                </div>
                <br>
                <button id="ljf-add_row" class="btn">Add Row</button>
                <button id="ljf-delete_row" class="btn">Delete Row</button>
                <button id="ljf-compute" class="btn">Compute</button>
                <button id="ljf-reset" class="btn">Reset</button>

                <br><br>

                <!-- <button id="animate" class="btn">Animate</button> -->

                <div id="ljf-animateAll">
                    <label class="start"></label>
                    <div class="animation black-text">
                        <label class="process_animate">p0</label>
                    </div>
                </div>

                <div class="average black-text">
                    <span class="b">Average Turn Around Time </span>
                    <label class="a" id="ljf-avg_tat"></label>
                    <span class="b">Average Waiting Time </span>
                    <label class="a" id="ljf-avg_wat"></label>
                </div>
            </div>
        </section>
    </body>
    <script type="module" src="../assets/js/ljf.js"></script>

</html>