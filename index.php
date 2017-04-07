<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Oreo</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=TeX-MML-AM_CHTML'></script>

    <script
    src="https://code.jquery.com/jquery-3.2.1.js"
    integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
    crossorigin="anonymous"></script>

  <!-- <script src="jquery-3.2.0.min.js"></script> -->

  </head>
  <body class="container-fluid">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Oreo</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Link</a></li>
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li> -->
          </ul>
          <!-- <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form> -->


          <!-- <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul> -->
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>


    <!-- <div>
      <a class="btn btn-sm btn-primary" id="hw">Do homework</a>
    </div> -->


    <!-- questions are loaded here -->
    <div class="col-md-6 col-md-offset-3" id="homeworkScreen">
      <div class="panel panel-default">
        <div class="panel-body">
        <p id="questionScreen">
          solve the following equations $$2+x=4$$
        </p>
        <form id="optionsForm" method="POST">
          <p id="optionsScreen">
          
          </p>
          <button type="submit">Done</button>
        </form>
        
        
        </div>
        <div class="panel-footer">
          <a class="btn btn-xsm btn-danger" id="back">back</a>
          <a class="btn btn-xsm btn-success pull-right" id="next">next</a>
        </div>
      </div>
    </div>
    <!-- ***************** -->



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">


      
      function renderMath() {
        MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
      };


      $("#next").click(function() {

          $.post('getQuestions.php', {'questionId' : [3]} , function(data) {
            // clear screen before appending new question
            $('#questionScreen').text('');
            $('#optionsScreen').text('');
            $('#questionScreen').text($.parseJSON(data).text);
            $('#optionsScreen').append('<input type=radio name=options value=1 > 1) ' + $.parseJSON(data).options.split(',')[0] + '</input> <br>');
            $('#optionsScreen').append('<input type=radio name=options value=2 > 2) ' + $.parseJSON(data).options.split(',')[1] + '</input> <br>');
            $('#optionsScreen').append('<input type=radio name=options value=3 > 3) ' + $.parseJSON(data).options.split(',')[2] + '</input> <br>');
            $('#optionsScreen').append('<input type=radio name=options value=4 > 4) ' + $.parseJSON(data).options.split(',')[3] + '</input>');

            renderMath();

          });
          
      });

      $("#optionsForm").submit(function(event) {
        alert($('#optionsForm').val());
        event.preventDefault();

      });


      


      
    </script>
  </body>
</html>

















