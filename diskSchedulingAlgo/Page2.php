<?php
 $name = $str = $maximum = $minimum = $algo = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
				$str = $_POST["str"];
        $maximum = $_POST["maximum"];
        $minimum = $_POST["minimum"];
        $algo = $_POST["algo"];
        }
?>
<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="../assets/css/page2.css">
  <script
    type="text/javascript"
    src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"
  ></script>
  <script
    type="text/javascript"
    src="https://canvasjs.com/assets/script/canvasjs.min.js"
  ></script>
  <script >
   window.onload = function(){
   var name = <?php echo json_encode($name); ?>;
   var arr  = <?php echo json_encode($str); ?>;
   var maximum = <?php echo json_encode($maximum); ?>;
   var minimum = <?php echo json_encode($minimum); ?>;
   var algo = <?php echo json_encode($algo); ?>;
   if(algo == "FCFS"){
     document.getElementById("FCFS").style.display = "none";
     document.getElementById("SSTF").style.display = "block";
   }else if(algo == "SCAN"){
     document.getElementById("SCAN").style.display = "none";
     document.getElementById("SSTF").style.display = "block";
   }else if(algo == "CSCAN"){
     document.getElementById("CSCAN").style.display = "none";
     document.getElementById("SSTF").style.display = "block";
   }else if(algo == "LOOK"){
     document.getElementById("LOOK").style.display = "none";
     document.getElementById("SSTF").style.display = "block";
   }else if(algo == "CLOOK"){
     document.getElementById("CLOOK").style.display = "none";
     document.getElementById("SSTF").style.display = "block";
   }else{
     var np;
     }
   var xhttp = new XMLHttpRequest();
   xhttp.onreadystatechange = function(){
     if(this.readyState == 4 && this.status == 200){
       var text = this.responseText;
       var text_arr = text.split(" ");
       var final_arr = new Array();
       for(var i = 0;i<text_arr.length - 1;i++){
         final_arr[i]=text_arr[i];
       }
       var total = text_arr[text_arr.length -1];
       document.getElementById("main_algo").innerHTML = algo;
       document.getElementById("name").innerHTML = name;
       document.getElementById("fa").innerHTML = final_arr;
       document.getElementById("t").innerHTML = total  ;
       document.getElementById("algo").innerHTML = algo;
    }
    var iValue = 0;
    var xValue = name;
    var yValue = 10;
    var inter = 5;
    var max = 100;
    setInterval(function () {
      if (iValue != final_arr.length) {
        xValue = final_arr[iValue];
        yValue = yValue + 10;
        if((iValue % 2) == 0){
          chart.options.axisX.interval = inter ;
          inter = inter + 10;
        }
        if(xValue >= max){
          chart.options.axisX.viewportMaximum = max + 100 ;
          max = max +100;
        }
        chart.options.data[0].dataPoints.push({ x: xValue, y: yValue });
        chart.render();
        iValue++;
      }
    }, 1500);

   };
   var url = "anim.php";
   url = url + "?name="+name;
   url = url + "&arr="+arr;
   url = url + "&maximum="+maximum;
   url = url + "&minimum="+minimum;
   url = url + "&algo="+algo;
   xhttp.open("GET",url,true);
   xhttp.send();
   }
   function finalArray_FCFS(){
     var name = <?php echo json_encode($name); ?>;
     var arr  = <?php echo json_encode($str); ?>;
     var maximum  = <?php echo json_encode($maximum); ?>;
     var minimum  = <?php echo json_encode($minimum); ?>;
     var algo = "FCFS";
     var xhttp = new XMLHttpRequest();
     xhttp.onreadystatechange = function(){
       if(this.readyState == 4 && this.status == 200){
         var text = this.responseText;
         var text_arr = text.split(" ");
         var final_arr = new Array();
         for(var i = 0;i<text_arr.length - 1;i++){
           final_arr[i]=text_arr[i];
         }
         var total = text_arr[text_arr.length -1];
         document.getElementById("name").innerHTML = name;
         document.getElementById("fa").innerHTML = final_arr;
         document.getElementById("t").innerHTML = total;
         document.getElementById("algo").innerHTML = algo;
         }
       $("#FCFS").click(function () {
         var iValue = 0;
         var xValue = name
         var yValue = 10;
         var inter = 5;
         var max = 100;
         var malgo = document.getElementById("main_algo").innerHTML;
         setInterval(function () {
           if (iValue != final_arr.length) {
             xValue = final_arr[iValue];
             yValue = yValue + 10;
             if((iValue % 2) == 0){
               chart.options.axisX.interval = inter ;
               inter = inter + 10;
               }
               if(xValue >= max){
                 chart.options.axisX.viewportMaximum = max + 100 ;
                 max = max +100;
               }
             chart.options.data[1].dataPoints.push({ x: xValue, y: yValue });
             chart.options.toolTip.enabled = true;
             chart.options.data[6].showInLegend = true;
             chart.options.data[6].name = "C-LOOK";
             chart.options.data[5].showInLegend = true;
             chart.options.data[5].name = "LOOK";
             chart.options.data[4].showInLegend = true;
             chart.options.data[4].name = "C-SCAN";
             chart.options.data[3].showInLegend = true;
             chart.options.data[3].name = "SCAN"
             chart.options.data[2].showInLegend = true;
             chart.options.data[2].name = "SSTF";
             chart.options.data[1].showInLegend = true;
             chart.options.data[1].name = "FCFS";
             chart.options.data[0].showInLegend = true;
             chart.options.data[0].name = malgo;
             chart.render();
             iValue++;
           }
         }, 1000);
       });
       }
       var url = "anim.php";
       url = url + "?name="+name;
       url = url + "&arr="+arr;
       url = url + "&maximum="+maximum;
       url = url + "&minimum="+minimum;
       url = url + "&algo="+algo;
       xhttp.open("GET",url,true);
       xhttp.send();
     };
    function finalArray_SSTF(){
     var name = <?php echo json_encode($name); ?>;
     var arr  = <?php echo json_encode($str); ?>;
     var maximum  = <?php echo json_encode($maximum); ?>;
     var minimum  = <?php echo json_encode($minimum); ?>;
     var algo = "SSTF";
     var xhttp = new XMLHttpRequest();
     xhttp.onreadystatechange = function(){
       if(this.readyState == 4 && this.status == 200){
         var text = this.responseText;
         var text_arr = text.split(" ");
         var final_arr = new Array();
         for(var i = 0;i<text_arr.length - 1;i++){
           final_arr[i]=text_arr[i];
         }
         var total = text_arr[text_arr.length -1];
         document.getElementById("name").innerHTML = name;
         document.getElementById("fa").innerHTML = final_arr;
         document.getElementById("t").innerHTML = total;
         document.getElementById("algo").innerHTML = algo;
         }
       $("#SSTF").click(function () {
         var iValue = 0;
         var xValue = name
         var yValue = 10;
         var inter = 5;
         var max = 100;
         var malgo = document.getElementById("main_algo").innerHTML;
         setInterval(function () {
           if (iValue != final_arr.length) {
             xValue = final_arr[iValue];
             yValue = yValue + 10;
             if((iValue % 2) == 0){
               chart.options.axisX.interval = inter ;
               inter = inter + 10;
               }
               if(xValue >= max){
                 chart.options.axisX.viewportMaximum = max + 100 ;
                 max = max +100;
               }
             chart.options.data[2].dataPoints.push({ x: xValue, y: yValue });
             chart.options.toolTip.enabled = true;
             chart.options.data[6].showInLegend = true;
             chart.options.data[6].name = "C-LOOK";
             chart.options.data[5].showInLegend = true;
             chart.options.data[5].name = "LOOK";
             chart.options.data[4].showInLegend = true;
             chart.options.data[4].name = "C-SCAN";
             chart.options.data[3].showInLegend = true;
             chart.options.data[3].name = "SCAN"
             chart.options.data[2].showInLegend = true;
             chart.options.data[2].name = "SSTF";
             chart.options.data[1].showInLegend = true;
             chart.options.data[1].name = "FCFS";
             chart.options.data[0].showInLegend = true;
             chart.options.data[0].name = malgo;
             chart.render();
             iValue++;
           }
         }, 1000);
       });
       }
       var url = "anim.php";
       url = url + "?name="+name;
       url = url + "&arr="+arr;
       url = url + "&maximum="+maximum;
       url = url + "&minimum="+minimum;
       url = url + "&algo="+algo;
       xhttp.open("GET",url,true);
       xhttp.send();
     };
     function finalArray_SCAN(){
      var name = <?php echo json_encode($name); ?>;
      var arr  = <?php echo json_encode($str); ?>;
      var maximum  = <?php echo json_encode($maximum); ?>;
      var minimum  = <?php echo json_encode($minimum); ?>;
      var algo = "SCAN";
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
          var text = this.responseText;
          var text_arr = text.split(" ");
          var final_arr = new Array();
          for(var i = 0;i<text_arr.length - 1;i++){
            final_arr[i]=text_arr[i];
          }
          var total = text_arr[text_arr.length -1];
          document.getElementById("name").innerHTML = name;
          document.getElementById("fa").innerHTML = final_arr;
          document.getElementById("t").innerHTML = total;
          document.getElementById("algo").innerHTML = algo;
          }
        $("#SCAN").click(function () {
          var iValue = 0;
          var xValue = name
          var yValue = 10;
          var inter = 5;
          var max = 100;
          var malgo = document.getElementById("main_algo").innerHTML;
          setInterval(function () {
            if (iValue != final_arr.length) {
              xValue = final_arr[iValue];
              yValue = yValue + 10;
              if((iValue % 2) == 0){
                chart.options.axisX.interval = inter ;
                inter = inter + 10;
                }
                if(xValue >= max){
                  chart.options.axisX.viewportMaximum = max + 100 ;
                  max = max +100;
                }
              chart.options.data[3].dataPoints.push({ x: xValue, y: yValue });
              chart.options.toolTip.enabled = true;
              chart.options.data[6].showInLegend = true;
              chart.options.data[6].name = "C-LOOK";
              chart.options.data[5].showInLegend = true;
              chart.options.data[5].name = "LOOK";
              chart.options.data[4].showInLegend = true;
              chart.options.data[4].name = "C-SCAN";
              chart.options.data[3].showInLegend = true;
              chart.options.data[3].name = "SCAN";
              chart.options.data[2].showInLegend = true;
              chart.options.data[2].name = "SSTF";
              chart.options.data[1].showInLegend = true;
              chart.options.data[1].name = "FCFS";
              chart.options.data[0].showInLegend = true;
              chart.options.data[0].name = malgo;
              chart.render();
              iValue++;
            }
          }, 1000);
        });
      };
      var url = "anim.php";
      url = url + "?name="+name;
      url = url + "&arr="+arr;
      url = url + "&maximum="+maximum;
      url = url + "&minimum="+minimum;
      url = url + "&algo="+algo;
      xhttp.open("GET",url,true);
      xhttp.send();
    };
    function finalArray_CSCAN(){
     var name = <?php echo json_encode($name); ?>;
     var arr  = <?php echo json_encode($str); ?>;
     var maximum  = <?php echo json_encode($maximum); ?>;
     var minimum  = <?php echo json_encode($minimum); ?>;
     var algo = "CSCAN";
     var xhttp = new XMLHttpRequest();
     xhttp.onreadystatechange = function(){
       if(this.readyState == 4 && this.status == 200){
         var text = this.responseText;
         var text_arr = text.split(" ");
         var final_arr = new Array();
         for(var i = 0;i<text_arr.length - 1;i++){
           final_arr[i]=text_arr[i];
         }
         var total = text_arr[text_arr.length -1];
         document.getElementById("name").innerHTML = name;
         document.getElementById("fa").innerHTML = final_arr;
         document.getElementById("t").innerHTML = total;
         document.getElementById("algo").innerHTML = algo;
         }
       $("#CSCAN").click(function () {
         var iValue = 0;
         var xValue = name
         var yValue = 10;
         var inter = 5;
         var max = 100;
         var malgo = document.getElementById("main_algo").innerHTML;
         setInterval(function () {
           if (iValue != final_arr.length) {
             xValue = final_arr[iValue];
             yValue = yValue + 10;
             if((iValue % 2) == 0){
               chart.options.axisX.interval = inter ;
               inter = inter + 10;
               }
               if(xValue >= max){
                 chart.options.axisX.viewportMaximum = max + 100 ;
                 max = max +100;
               }
             chart.options.data[4].dataPoints.push({ x: xValue, y: yValue });
             chart.options.toolTip.enabled = true;
             chart.options.data[6].showInLegend = true;
             chart.options.data[6].name = "C-LOOK";
             chart.options.data[5].showInLegend = true;
             chart.options.data[5].name = "LOOK";
             chart.options.data[4].showInLegend = true;
             chart.options.data[4].name = "C-SCAN";
             chart.options.data[3].showInLegend = true;
             chart.options.data[3].name = "SCAN";
             chart.options.data[2].showInLegend = true;
             chart.options.data[2].name = "SSTF";
             chart.options.data[1].showInLegend = true;
             chart.options.data[1].name = "FCFS";
             chart.options.data[0].showInLegend = true;
             chart.options.data[0].name = malgo;
             chart.render();
             iValue++;
           }
         }, 1000);
       });
     };
     var url = "anim.php";
     url = url + "?name="+name;
     url = url + "&arr="+arr;
     url = url + "&maximum="+maximum;
     url = url + "&minimum="+minimum;
     url = url + "&algo="+algo;
     xhttp.open("GET",url,true);
     xhttp.send();
   };
   function finalArray_LOOK(){
    var name = <?php echo json_encode($name); ?>;
    var arr  = <?php echo json_encode($str); ?>;
    var maximum  = <?php echo json_encode($maximum); ?>;
    var minimum  = <?php echo json_encode($minimum); ?>;
    var algo = "LOOK";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
        var text = this.responseText;
        var text_arr = text.split(" ");
        var final_arr = new Array();
        for(var i = 0;i<text_arr.length - 1;i++){
          final_arr[i]=text_arr[i];
        }
        var total = text_arr[text_arr.length -1];
        document.getElementById("name").innerHTML = name;
        document.getElementById("fa").innerHTML = final_arr;
        document.getElementById("t").innerHTML = total;
        document.getElementById("algo").innerHTML = algo;
        }
      $("#LOOK").click(function () {
        var iValue = 0;
        var xValue = name
        var yValue = 10;
        var inter = 5;
        var max = 100;
        var malgo = document.getElementById("main_algo").innerHTML;
        setInterval(function () {
          if (iValue != final_arr.length) {
            xValue = final_arr[iValue];
            yValue = yValue + 10;
            if((iValue % 2) == 0){
              chart.options.axisX.interval = inter ;
              inter = inter + 10;
              }
              if(xValue >= max){
                chart.options.axisX.viewportMaximum = max + 100 ;
                max = max +100;
              }
            chart.options.data[5].dataPoints.push({ x: xValue, y: yValue });
            chart.options.toolTip.enabled = true;
            chart.options.data[6].showInLegend = true;
            chart.options.data[6].name = "C-LOOK";
            chart.options.data[5].showInLegend = true;
            chart.options.data[5].name = "LOOK";
            chart.options.data[4].showInLegend = true;
            chart.options.data[4].name = "C-SCAN";
            chart.options.data[3].showInLegend = true;
            chart.options.data[3].name = "SCAN";
            chart.options.data[2].showInLegend = true;
            chart.options.data[2].name = "SSTF";
            chart.options.data[1].showInLegend = true;
            chart.options.data[1].name = "FCFS";
            chart.options.data[0].showInLegend = true;
            chart.options.data[0].name = malgo;
            chart.render();
            iValue++;
          }
        }, 1000);
      });
    };
    var url = "anim.php";
    url = url + "?name="+name;
    url = url + "&arr="+arr;
    url = url + "&maximum="+maximum;
    url = url + "&minimum="+minimum;
    url = url + "&algo="+algo;
    xhttp.open("GET",url,true);
    xhttp.send();
  };
  function finalArray_CLOOK(){
      var name = <?php echo json_encode($name); ?>;
      var arr  = <?php echo json_encode($str); ?>;
      var maximum  = <?php echo json_encode($maximum); ?>;
      var minimum  = <?php echo json_encode($minimum); ?>;
      var algo = "CLOOK";
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
          var text = this.responseText;
          var text_arr = text.split(" ");
          var final_arr = new Array();
          final_arr[0] = name;
          for(var i = 0;i<text_arr.length - 1;i++){
            final_arr[i+1]=text_arr[i];
          }
          var total = text_arr[text_arr.length -1];
          document.getElementById("name").innerHTML = name;
          document.getElementById("fa").innerHTML = final_arr;
          document.getElementById("t").innerHTML = total;
          document.getElementById("algo").innerHTML = algo;
          }
        $("#CLOOK").click(function () {
          var iValue = 0;
          var xValue = name
          var yValue = 10;
          var inter = 5;
          var max = 100;
          var malgo = document.getElementById("main_algo").innerHTML;
          setInterval(function () {
            if (iValue != final_arr.length) {
              xValue = final_arr[iValue];
              yValue = yValue + 10;
              if((iValue % 2) == 0){
                chart.options.axisX.interval = inter ;
                inter = inter + 10;
                }
                if(xValue >= max){
                  chart.options.axisX.viewportMaximum = max + 100 ;
                  max = max +100;
                }
              chart.options.data[6].dataPoints.push({ x: xValue, y: yValue });
              chart.options.toolTip.enabled = true;
              chart.options.data[6].showInLegend = true;
              chart.options.data[6].name = "C-LOOK";
              chart.options.data[5].showInLegend = true;
              chart.options.data[5].name = "LOOK";
              chart.options.data[4].showInLegend = true;
              chart.options.data[4].name = "C-SCAN";
              chart.options.data[3].showInLegend = true;
              chart.options.data[3].name = "SCAN";
              chart.options.data[2].showInLegend = true;
              chart.options.data[2].name = "SSTF";
              chart.options.data[1].showInLegend = true;
              chart.options.data[1].name = "FCFS";
              chart.options.data[0].showInLegend = true;
              chart.options.data[0].name = malgo;
              chart.render();
              iValue++;
            }
          }, 1000);
        });
      };
      var url = "anim.php";
      url = url + "?name="+name;
      url = url + "&arr="+arr;
      url = url + "&maximum="+maximum;
      url = url + "&minimum="+minimum;
      url = url + "&algo="+algo;
      xhttp.open("GET",url,true);
      xhttp.send();
    };
</script>
</head>
<body>
  <h2><?php echo "$algo" ?> Disk Scheduling Algorithm</h2>
	<section class = "toAlign">
   <section class = "hor">
		<div id="chartContainer" ></div>
    <div id="anim_box">
      <div class="box">
        <div class="pointer_box">
          <p id="pointer">|</p>
        </div>
        <div>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
 	  <div class="compare_box">
			<p>COMPARE WITH</p>
			<a  class="b" id="FCFS" style="cursor: pointer" onclick="finalArray_FCFS()">FCFS</a>
      <a  class="b" id="SSTF" style="cursor: pointer" onclick="finalArray_SSTF()">SSTF</a>
			<a  class="b" id="SCAN" style="cursor: pointer" onclick="finalArray_SCAN()">SCAN</a>
			<a  class="b" id="CSCAN" style="cursor: pointer" onclick="finalArray_CSCAN()">C-SCAN</a>
			<a  class="b" id="LOOK" style="cursor: pointer" onclick="finalArray_LOOK()">LOOK</a>
			<a  class="b" id="CLOOK" style="cursor: pointer" onclick="finalArray_CLOOK()">C-LOOK</a>
      </script>
    </div>
   </section>
	 <div class="explain" id="explain">
     <var id = "main_algo" hidden ></var>
     Head&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <var id="name">0</var><br>
     Cylinder Positions&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <?php echo "$str<br>" ?>
     Algorithm&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <var id="algo">algo</var><br>
     Answer&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <var id="fa">final_arr</var><br>
     Total Head Movement&nbsp&nbsp&nbsp&nbsp: <var id="t">total</var>
   </div>
   <script src = "../assets/js/chart.js"></script>
  </section>
</body>
</html>
