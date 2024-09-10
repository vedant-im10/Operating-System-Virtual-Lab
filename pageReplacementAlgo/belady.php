<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/algo2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>PRA | BELADY</title>
</head>

<body>
    <br><br>
    <div id="algo" class="black-text">
        <div class="container">
            <div class="flex-layout">
                <strong class="input-field">Reference String:</strong><input id="belady-input" class="input" type="text"
                    style="width: 40%;">
            </div>
            <div class="flex-layout items-center justify-center">
                <button class="submit black-text" id="belady-submit" style="width: 10%;">Submit</button>
            </div>
            <div>
                <br>
                <div id="chartContainer"></div>
                <div class="flex-layout items-center justify-center">
                    <table id="belady-table" class="table container text-center">
                    </table>
                </div>
                <br>
                <div class="flex-layout items-center justify-center">
                    <div id="belady-summary" class="flex-layout justify-center items-center bold-text text-uppercase">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/js/belady.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

</body>

</html>