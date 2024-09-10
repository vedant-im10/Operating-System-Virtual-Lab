<html>
<head>
  <link rel="stylesheet" href="../assets/css/form_style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $("#str").click(function (){
        $("#submit").css("background-color","rgba(255, 153, 0, 0.8)");
      })
    })
  </script>
</head>
<body>
    <form method="post" action = "./diskSchedulingAlgo/Page2.php">
      Initial Head Position: <input type="text" name="name" id="name" ><br><br>
      Cylinder Positions   : <input type="text" name="str" id="str" ><br><br>
      Max cylinder location : <input type="text" name="maximum" id="maximum"><br><br>
      Min cylinder location : <input type="text" name="minimum" id="minimum"><br><br>
      <input type="hidden" name="algo" value="SCAN">
      <input type = "submit" class="submit" id="submit"><br><br>
    </form>
</body>
</html>
