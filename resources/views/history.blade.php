<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<title>PHYRE</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	  <style>
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
	  	
	  </style>
</head>
<body>

	<div class="container">
        <nav class="navbar navbar-inverse bg-inverse navbar-fixed-top">
          <div class="container-fluid">
              <div class="navbar-header">
                <a href="#" class="navbar-brand">PHYRE</a> 
              </div>
              <div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{'\welcome'}}">Home</a></li>
                    <li class="active"><a href="#">History</a></li>
                  
                </ul>
                
              </div>
                
          </div>
                   
        </nav>          
	  <table class="table table-striped">
	    <thead>
	      <tr>
	        <th>Address</th>
	        <th>Longitude</th>
	        <th>Latitude</th>
	      </tr>
	    </thead>
	    <tbody>
	    	@foreach($data as $value)
		      <tr>
		        <td>{{ $value->address }}</td>
		        <td>{{ $value->lng }}</td>
		        <td>{{ $value->lat }}</td>
		      </tr>
		    @endforeach
	    </tbody>
	  </table>
	</div>
</body>
		
</html>