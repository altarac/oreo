function renderMath() {
        MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
      };


    function render(hw) {

      // clear previous screen
    $('#questionScreen').html('');
    

    // ---------------------


      for (var i = 0; i < hw.length; i++) {

    // convet question id to array location
    var q = hw[i]-1;
    // ------------------------------------

    $('#questionScreen').append(questions[q].text);

    


    // append image only if question has one...
    var image = questions[q].img;

    if (image != 'none') {

      $('#questionScreen').append('<br> <img src="' + image + '" class="img-rounded img-responsive center-block"><br>');

    }
    // ----------------------------------------

    var questionType = questions[q].type;

    // check if q is mc and show options if tf show 2 options
    if (questionType == 'mc') {

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

    } else if (questionType == 'tf') {
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
    }

    var link = questions[q].hint;
    $("#questionScreen").append('<br> <a class="hint pull-right btn btn-primary btn-xs" href="' + link + '">hint</a> <br>');

    $("#questionScreen").append('<hr>');


    renderMath();

  }
};


function getSum(a) {
  var count = 0;

  for(var i=0; i < a.length; i++) 
  { 
    count += Number(a[i]); 
  }

  return count;


};

function reload() {
        location.reload();
      };

      $('#lout').click(function() {
        sessionStorage.clear();
        window.location = 'index.php';
      });

      

      














