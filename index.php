<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
    function directToRight(){
      $.ajax({url:"to_right.php",success:function(result){
      }})
      // Assign our canvas element to a variable
      var canvas = document.getElementById("canvas1");
// Create the HTML5 context object to enable draw methods
      var ctx = canvas.getContext("2d");
      ctx.clearRect(0, 0, canvas.width, canvas.height);

// step to right
        ctx.beginPath();
        ctx.moveTo(50, 50);
        ctx.lineTo(50, 0);
        ctx.lineTo(180, 0);
        ctx.lineTo(50, -80);
        ctx.stroke();
    }
    function directToLeft(){
      $.ajax({url:"to_left.php",success:function(result){

      }})
      // Assign our canvas element to a variable
      var canvas = document.getElementById("canvas1");
// Create the HTML5 context object to enable draw methods
      var ctx = canvas.getContext("2d");
      ctx.clearRect(0, 0, canvas.width, canvas.height);


// step to left
          ctx.beginPath();
          ctx.moveTo(120, 60);
          ctx.lineTo(120, 0);
          ctx.lineTo(10, 0);
          ctx.stroke();


}

    function directForward(){
      $.ajax({url:"to_forward.php",success:function(result){

      }})
      // Assign our canvas element to a variable
      var canvas = document.getElementById("canvas1");
// Create the HTML5 context object to enable draw methods
      var ctx = canvas.getContext("2d");
      ctx.clearRect(0, 0, canvas.width, canvas.height);

// step forward
            ctx.beginPath();
            ctx.moveTo(50, 50);
            ctx.lineTo(50,160);
            ctx.stroke();
    }
</script>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
    $(document).ready(function(){
		 $("#refresh").load("load.php");
        setInterval(function() {
            $("#refresh").load("load.php");
        }, 1000);
    });
 </script>

</head>
<body>

<h1>Robot Control Panel</h1><br>


<div id="wrapper">

    <div id="second">
    <button class="F" onclick="directForward()"> &nbsp; Step Forward&nbsp;</button><br>
    <br>
    <button class="L" onclick="directToLeft()">  &nbsp;  Step to Left &nbsp; &nbsp;</button><br>
    <br>
    <button  class="R" onclick="directToRight()"> &nbsp;  Step to Right &nbsp;</button><br>
    </div>

    <div id="first"><br><canvas id="canvas1" width="200" height="200"></canvas></div>
</div>

<div class="tableDiv">
    <table class="paleBlueRows">
        <thead>
        <tr>
            <th>ID</th>
            <th>TO RIGHT</th>
            <th>TO LEFT </th>
            <th>Forward</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody id="refresh">

        </tbody>
    </table>
</div>

<div class="imgDiv"><img src="blue_geometric.png" class="geometric"></div>


<!--<img src="robot.png" alt="alternatetext">-->


<!--  <dev><p class="foot"> By Mariam Ahmad Alghamdi </p></div>-->

</body>
</html>
