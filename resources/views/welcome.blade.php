<!DOCTYPE html>
<html>
    <head>
        <title>PHYRE</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script src="https://ajax.googleleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                padding-top: 65px ;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
                background: #F2F3F4;
            }

            .container {
                text-align: center;
                display: table-cell;
                /*vertical-align: middle;*/
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
            .sub {
                font-size: 35px;
            }
            .header img{
              width: 144px;
              height: 144px;
              display: block;
              margin-left: auto;
              margin-right: auto;
              text-align: center;
            }

            .textt {
              text-align: center;
              font-size: 80x;
              color: red;

            }
        </style>
    </head>
    <body onload="startTime()">
        
        <div class="container">
        <nav class="navbar navbar-inverse bg-inverse navbar-fixed-top">
          <div class="container-fluid">
              <div class="navbar-header">
                <a href="#" class="navbar-brand">PHYRE</a> 
              </div>
              <div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="{{'\history'}}">History</a></li>
                  
                </ul>
                
              </div>
                
          </div>
                   
        </nav>
 
          <header>
            <div class=".header">
              <img src="{{ asset('img/redlog.png') }}" /> 
            </div>
            <div class="textt">
              <strong>Red means FIRE</strong>
          
            </div>

            <div class="content">
                <div class="title" id="txt"></div>
                <!-- <body onload="startTime()"> -->
                  <!-- <div id="txt"></div> -->
                  <div class="sub" id="demo"></div>
            </div>
      

        </header>
      </div>
      
    </body>

    <script>
      var d = new Date();
      document.getElementById("demo").innerHTML = d.toDateString();
    </script>
    <script>
    function startTime() {
      var today = new Date();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      m = checkTime(m);
      s = checkTime(s);
      document.getElementById('txt').innerHTML =
      h + ":" + m + ":" + s;
      var t = setTimeout(startTime, 500);
    }
    function checkTime(i) {
      if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
      return i;
    }
    </script>
</html>
