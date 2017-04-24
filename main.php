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

      <script type="text/javascript" src="questions_db.php"></script>
      <script type="text/javascript" src="users.js"></script>


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
            <a class="navbar-brand" href="index.php">Oreo</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              
              <li><a href="#">Help</a></li>
              <li><a href="#">See grades</a></li>

              <li>
              <a>
                <form>
                <!-- <label>Select your assignment</label> -->
                  <select id="navbar">
                    <option>Choose assignment</option>
                  </select>
                  <button id="fetchAssignment" class="btn btn-default btn-xs">Go</button>
                </form>
                
              </a>
              </li>


              
              
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
          <ul class="nav navbar-nav navbar-right">
                <li><a id="signedIn" class="navbar-text">
                Hi  
              </a></li>
              <li><a id="lout" href="#">Log out</a></li>
              </ul>

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




        <div id="id" class="col-lg-6 col-lg-offset-3">
      <form>
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon3">Course code:</span>
          <input type="text" name="courseCode" id="courseCode" class="form-control">
        </div>
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon3">First name:</span>
          <input type="text" name="fname" id="fname" class="form-control">
        </div>
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon3">Last name:</span>
          <input type="text" name="lname" id="lname" class="form-control">
        </div>
      </div>
      

      <!-- questions are loaded here -->

      <div class="col-md-6 col-md-offset-3" id="homeworkScreen">
        <div class="panel panel-default">
          <div class="panel-heading text-center">Assignment <span class="text-primary showGrade"></span></div>
          <div class="panel-body">
            <p id="questionScreen">
              Choose an assignment from the dropdown list
            </p>


          </div>
          <div class="panel-footer">
            <a onclick="reload()" class="btn btn-xsm btn-danger" id="back">back</a>

            <a class="btn btn-xsm btn-success pull-right showGrade" id="sub">submit</a>
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
    <script type="text/javascript" src="functions.js"></script>
    <script type="text/javascript">


    
    var u = sessionStorage.getItem('u');
    var firstName;
    var lastName;
    var courseCode; 


      $('#signedIn').append(u + '!');

      users.forEach(function(user) {
        if (user.uname == u) {
          $('#fname').val(user.fname);
          $('#lname').val(user.lname);
          $('#courseCode').val("demo");
          for(var key in user.hw)
            $('#navbar').append('<option value="' + user.hw[key] + '">' + key + '</option>');
        }

      });

      $('#fetchAssignment').click(function(event) {
        event.preventDefault();
        var hw =[];
        hw = $('#navbar').val().split(",");
        // $('#fetchAssignment').addClass('disabled');
        render(hw);
        return false;
      });

      

    


      // gets values of all checked radios and sums it up
      $('#sub').click(function() {
        var hw =[];
        hw = $('#navbar').val().split(",");

        // check that input was filled in
        if ($.trim($("#courseCode").val()) === "" || $.trim($("#fname").val()) === "" || $.trim($("#lname").val()) === "") {
          alert('you did not fill out one of the fields');
          return false;
        }

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
          $('.showGrade').html('Done. Grade: ' + grade + '%');
          $('#sub').addClass("disabled");
        }

        var info = $('form').serialize() + '&grade=' + grade;
        $.post('submittedAssignment.php', info);

      });


    $('#id').hide();
      






      
    </script>
  </body>
  </html>

















