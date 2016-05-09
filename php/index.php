<html>
<head>
  <title>Test</title>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <script src="./jquery-1.12.3.min.js" charset="utf-8"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <script src="./lib.js" charset="utf-8"></script>
  <style media="screen">
  body{
    font-family: 'Open Sans', sans-serif;
    font-size: 13px;
  }

  table{
    font-size: 13px;
  }
  .control-label {
    padding-right: 0px;
  }
  </style>
  <script charset="utf-8">
  // sayHello()
  var submitForm = function(){
    var x = $("#inputx").val(),
    y = $("#inputy").val();

    var results = heavyDeciCount(x, y, true);

    var content = '<table class="table table-striped table-bordered"><tr><th>Number</th><th>Average</th><th>Heavy</th></tr>';
    for (var i = 0; i < results.array.length; i++) {
      var obj = results.array[i];
      content += '<tr><td>' + obj.number + '</td><td>' + obj.average + '</td><td>' + (obj.isHeavy? "Yes": "No") + '</td></tr>';
    }
    content += "</table>" + "<b>Total Heavy Count:</b> " + results.heavy
    $("#output").html(content);
    return false;
  }
  </script>
</head>
<body>
  <div class="container-fluid" style="padding-top: 50px; padding-bottom: 50px;">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="row">
          <div class="col-md-8">
            <div class="panel panel-default">
              <div class="panel-heading"><b>Output</b></div>
              <div class="panel-body">
                <form onsubmit="return submitForm();" class="form-horizontal">
                  <div class="form-group">
                    <label for="inputx" class="col-sm-3 control-label">Input X</label>
                    <div class="col-sm-9">
                      <input type="number" name="inputx" id="inputx" class="form-control inputx" value="9872"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputy" class="col-sm-3 control-label">Input Y</label>
                    <div class="col-sm-9">
                      <input type="number" name="inputy" id="inputy" class="form-control inputy" value="9884"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-7">
                      <input type="submit" value="Run" class="btn btn-primary">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div id="output"></div>
      </div>
    </div>
  </div>
</body>
</html>
