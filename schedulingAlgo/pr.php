<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>priority</title>
        <link rel="stylesheet" href="../assets/css/demo.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <style>
        #pr-data {
            display: grid;
            grid-template-columns: 120px 175px 175px 175px 175px 175px 175px;
        }

        #pr-container {
            display: grid;
            grid-template-columns: 120px 175px 175px 175px 175px 175px 175px;
        }

        #pr-container_IO {
            display: none;
            grid-template-columns: 120px 100px 200px 200px 300px 200px 200px 200px;
        }

        #pr-data_IO {
            display: none;
            grid-template-columns: 120px 100px 200px 200px 300px 200px 200px 200px;
        }
        </style>
    </head>

    <body>
        <section class="sa-algo-container">
            <div class="algo-containers">
                <div id="pr-container">
                    <div class="item">P No.</div>
                    <div class="item">Arrival time</div>
                    <div class="item">Priority</div>
                    <div class="item">Burst time</div>

                    <div class="item ans">Completion Time</div>
                    <div class="item ans">Turn Around Time</div>
                    <div class="item ans">Waiting Time</div>

                </div>

                <div id="pr-container_IO">
                    <div class="item">P No.</div>
                    <div class="item">Total IO</div>
                    <div class="item">Arrival time</div>
                    <div class="item">Priority</div>
                    <div class="item">Burst time</div>

                    <div class="item ans">Completion Time</div>
                    <div class="item ans">Turn Around Time</div>
                    <div class="item ans">Waiting Time</div>

                </div>

                <div id="pr-data">
                    <label class="cen">0</label>
                    <input type="number" class="cen">
                    <input type="number" class="cen">
                    <input type="number" class="cen">
                    <label class="ans"></label>
                    <label class="ans"></label>
                    <label class="ans"></label>
                </div>

                <div id="pr-data_IO">
                    <label class="cen">0</label>
                    <input type="number" class="cen">
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
                <button id="pr-add_row" class="btn">Add Row</button>
                <button id="pr-delete_row" class="btn">Delete Row</button>
                <button id="pr-compute" class="btn">Compute</button>
                <button id="pr-reset" class="btn">Reset</button>

                <br><br>

                <!-- <button id="animate" class="btn">Animate</button> -->

                <div id="pr-animateAll">
                    <label class="start"></label>
                    <div class="animation black-text">
                        <label class="process_animate">p0</label>
                    </div>
                </div>

                <div class="average black-text">
                    <span class="b">Average Turn Around Time </span>
                    <label class="a" id="pr-avg_tat"></label>
                    <span class="b">Average Waiting Time </span>
                    <label class="a" id="pr-avg_wat"></label>
                </div>
            </div>
        </section>
    </body>
    <script type="module" src="../assets/js/pr.js"></script>
    <script src="../assets/js/priority-queue.js"></script>

</html>