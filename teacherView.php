<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Oreo Teacher</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" src="users.js"></script>
  <script type="text/javascript" src="functions.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=TeX-MML-AM_CHTML'></script>
  <script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
    var u = sessionStorage.getItem('u');
    var firstName;
    var lastName;
    var courseCode; 

    if (u == null) {
      window.location = 'index.php';
    }
  </script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
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
            <a class="navbar-brand" onclick="lout()">Oreo</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a id="createQuestionTab" href="#">Create New questions<span class="sr-only">(current)</span></a></li>
              <li><a id="createNewAssignmentTab" href="#">Create new assignment</a></li>
              <li><a href="#">Gradebook</a></li>
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
              <li><a id="signedIn">Hi </a></li>
              <li><a id="lout" href="#">Log out</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

      <div id="createQuestionPanel" class="col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title text-center">Create a question</h3>
          </div>
          <div class="panel-body">

            <div class="row">
              <div id="previewQuestionScreen1" class="col-md-10 col-md-offset-1">
                Question goes here.
              </div>
            </div>
            <br>
            <br>
            <div>
              a) <span id="previewSolutionsScreenA">Solutions go here</span> 
            </div>
            <div>
              b) <span id="previewSolutionsScreenB">Solutions go here</span>  
            </div>
            <div>
              c) <span id="previewSolutionsScreenC">Solutions go here</span>
            </div>
            <div>
              d) <span id="previewSolutionsScreenD">Solutions go here</span>
            </div>
            <br>
            <hr>




            <form id="createQuestionForm">
              <select name="grade" class="form-control">
                <option>Grade</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
              </select>
              <br>
              <label>Question text:</label>
              <br>
              <textarea id="questionText" class="col-md-12" name="questionText"></textarea>
              <br>
              <label>a) </label> <input class="A" type="radio" name="choice" value=""> <input id="A" class="form-control" type="text" name="solutionA">
              <br>
              <label>b) </label> <input class="B" type="radio" name="choice" value=""> <input id="B" class="form-control" type="text" name="solutionB">
              <br>
              <label>c) </label> <input class="C" type="radio" name="choice" value=""> <input id="C" class="form-control" type="text" name="solutionC">
              <br>
              <label>d) </label> <input class="D" type="radio" name="choice" value=""> <input id="D" class="form-control" type="text" name="solutionD">
            </div>
            <div class="panel-footer">
              <a class="btn btn-xsm btn-danger" id="back">back</a>

              <a class="btn btn-xsm btn-success pull-right showGrade" id="submitQuestion">submit</a>
            </div>
          </form>
        </div>
      </div>

      <!-- ---------------------------------------------------------------- -->

<form>
      <div id="createNewAssignmentPanel" class="col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title text-center">Select questions</h3>
          </div>
          <div class="panel-body">
            
            <?php

              $host = "localhost";
              $user = "root";
              $pass = "root";

              mysql_connect($host, $user, $pass);
              mysql_select_db('oreodb');



              $select =  "SELECT * FROM bank";


              $s = mysql_query($select);

              while ($d = mysql_fetch_assoc($s)) {

                echo "Grade: " . $d['grade'] . '<br>';
                echo '<input type="checkbox" name="questions" value="' . $d["id"] . '"> ';

                echo $d['text'];
                echo '<br>';
                echo 'Multiple choice options:' . $d['options'];
                echo '<br><hr>';
                
                
              }

            ?>


          </div>
          <div>
            <div class="panel-footer">
              <a class="btn btn-xsm btn-danger" id="back">back</a>

              <a class="btn btn-xsm btn-success pull-right showGrade" id="submitQuestion">submit</a>
            </div>
      </div>
</form>








      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
      <script type="text/javascript">

        $('#createQuestionTab').click(function() {
          $('#createQuestionPanel').show('slow');
          $('#createNewAssignmentPanel').hide('slow');
        });

        $('#createNewAssignmentTab').click(function() {
          $('#createNewAssignmentPanel').show('slow');
          $('#createQuestionPanel').hide('slow');
        });


        $('#questionText').keyup(function(){
          $('#previewQuestionScreen1').html($('#questionText').val());
          renderMath();
        });

        $('#A').keyup(function(){
          $('#previewSolutionsScreenA').html($('#A').val());
          $('.A').val($('#A').val());
          renderMath();
        });

        $('#B').keyup(function(){
          $('#previewSolutionsScreenB').html($('#B').val());
          $('.B').val($('#B').val());
          renderMath();
        });

        $('#C').keyup(function(){
          $('#previewSolutionsScreenC').html($('#C').val());
          $('.C').val($('#C').val());
          renderMath();
        });

        $('#D').keyup(function(){
          $('#previewSolutionsScreenD').html($('#D').val());
          $('.D').val($('#D').val());
          renderMath();
        });



        $('#signedIn').append(u + '!');

        function lout() {
          sessionStorage.clear();
          window.location = 'index.php';
        }

        $('#lout').click(function() {
          lout();
        });


        // $('#back').click(function() {
        //   console.log($('#createQuestionForm').serialize());
        // });

        $('#submitQuestion').click(function () {
          var info = $('#createQuestionForm').serialize();
          
          
          $.post('submitAquestion.php', info, function(data) {
            alert(data);

          });
        });




      </script>
    </body>
    </html>























