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

      <script type="text/javascript" src="questions_db.js"></script>

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

<!--     <div>
      <select>
        <option>Select assignment</option>
        <option value="a1">a1</option>
        <option value="a2">a2</option>
      </select>
    </div> -->



    <div class="col-lg-6 col-lg-offset-3">
      <form>
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon3">Course code:</span>
        <input type="text" name="courseCode" class="form-control">
        </div>
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon3">First name:</span>
        <input type="text" name="fname" class="form-control">
        </div>
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon3">Last name:</span>
        <input type="text" name="lname" class="form-control">
        </div>
      </div>

      <!-- questions are loaded here -->

      <div class="col-md-6 col-md-offset-3" id="homeworkScreen">
        <div class="panel panel-default">
          <div class="panel-heading text-center">Assignment <span id="showGrade" class="text-primary"></span></div>
          <div class="panel-body">
            <p id="questionScreen">

            </p>
        
        
      </div>
      <div class="panel-footer">
        <a onclick="reload()" class="btn btn-xsm btn-danger" id="back">back</a>
        <a class="btn btn-xsm btn-success pull-right" id="sub">submit</a>
      </div>
    </div>
  </div>
</form>
<!-- ***************** -->
<div id="viewz"></div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">



  function renderMath() {
    MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
  };

  var hw = [1,4];


  for (var i = 0; i < hw.length; i++) {

    var q = hw[i]-1;

    $('#questionScreen').append(questions[q].text);


    // append image only if question has one...
    if (questions[q].img != 'none') {

    $('#questionScreen').append('<br> <img src="' + questions[q].img + '" class="img-rounded img-responsive center-block"><br>');

    }


    // check if q is mc and show options
    if (questions[q].type == 'mc') {

      if (questions[q].options[0] == questions[q].solution) {
        $('#questionScreen').append('<input type=radio name=options_' +q+ ' value=1> 1) ' + questions[q].options[0] + '</input> <br>');
      }
      else {
        $('#questionScreen').append('<input type=radio name=options_' +q+ ' value=0> 1) ' + questions[q].options[0] + '</input> <br>');
      }
      if (questions[q].options[1] == questions[q].solution) {
        $('#questionScreen').append('<input type=radio name=options_' +q+ ' value=1> 2) ' + questions[q].options[1] + '</input> <br>');
      }
      else {
        $('#questionScreen').append('<input type=radio name=options_' +q+ ' value=0> 2) ' + questions[q].options[1] + '</input> <br>');
      }
      if (questions[q].options[2] == questions[q].solution) {
        $('#questionScreen').append('<input type=radio name=options_' +q+ ' value=1> 3) ' + questions[q].options[2] + '</input> <br>');
      }
      else {
        $('#questionScreen').append('<input type=radio name=options_' +q+ ' value=0> 3) ' + questions[q].options[2] + '</input> <br>');
      }
      if (questions[q].options[3] == questions[q].solution) {
        $('#questionScreen').append('<input type=radio name=options_' +q+ ' value=1> 4) ' + questions[q].options[3] + '</input> <br>');
      }
      else {
        $('#questionScreen').append('<input type=radio name=options_' +q+ ' value=0> 4) ' + questions[q].options[3] + '</input> <br>');
      }

    }

    var link = questions[q].hint;
    $("#questionScreen").append('<br> <a class="hint pull-right btn btn-primary btn-xs" href="' + link + '">hint</a> <br>');

      $("#questionScreen").append('<hr>');


    renderMath();

  }


  function getSum(a) {
    var count = 0;

    for(var i=0; i < a.length; i++) 
    { 
      count += Number(a[i]); 
    }
    
    return count;
    
    
  }



      // gets values of all checked radios and sums it up
      $('#sub').click(function() {

        var answers = [];

        for (var i = 0; i < hw.length; i++) {
          var q = hw[i]-1;
          var v = $('input[name=options_'+ q +']:checked').val();
          answers.push(v);
        }
        var grade = getSum(answers)/answers.length*100;

        if (getSum(answers) == NaN) {
          answers =[];
        }
        else {
          $('#showGrade').append('Grade: ' + grade + '%');
          $('#sub').addClass("disabled");
        }

        var info = $('form').serialize() + '&grade=' + grade;
        $.post('submittedAssignment.php', info);

      });

      function reload() {
        location.reload();
      }

     


      
    </script>
  </body>
  </html>

















