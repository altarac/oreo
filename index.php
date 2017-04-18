<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Oreo Login</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="users.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.2.1.js"
      integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
      crossorigin="anonymous"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="container-fluid">

	<div class="panel panel-info col-md-6 col-md-offset-3">
		<div class="panel-heading">
			<h3 class="panel-title text-center">Welcome to Oreo</h3>
		</div>
		<div class="panel-body">
			<h1>Login to do your assignments!</h1>
			<form id="log">
				<p>
				<div class="input-group col-md-12">
				<span class="input-group-addon" id="basic-addon3">User Name:</span>
					<input type="text" name="uname" id="uname" class="form-control">
					
				</div>
				<div class="input-group col-md-12">
					<span class="input-group-addon" id="basic-addon3">Password:</span>
					<input type="Password" name="pword" id="pword" class="form-control">
				</div>
				
				<a id="login" class="btn btn-info center-block">Go!</a>
			</p>
			</form>
		</div>
		

	</div>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">



    $('#login').click(function() {

    	var info = $('#log').serializeArray();
    	var uname = info[0].value;
    	var pword = info[1].value;

    	for (var i = 0; i < users.length; i++) {
    		if (uname == users[i].uname && pword == users[i].pword) {
    			
    				window.location = 'main.php';
    				sessionStorage.setItem('u',users[i].uname);
    			} 
    	}

    });
    	


    </script>
  </body>
</html>























