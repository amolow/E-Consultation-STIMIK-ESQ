<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action Plan</title>

    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- MY CSS -->
    <link rel="stylesheet" href="styleAct.css" />
</head>
<body class="isi">
    <div class="kotak">
        <div class="head">
            <h4>Add Action Plan</h4>
        </div>
        <form class="input">
          <div class="form-group row">
            <label for="inputText" class="col-sm-2 col-form-label">Subject</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="inputText">
            </div>
          </div>
          <div class="form-group row">
          <label for="inputTextarea" class="col-sm-2 col-form-label">Message</label>
            <div class="col-sm-8">
              <textarea class="form-control" id="inputTextarea" rows="8"></textarea>
            </div>
          </div>
          <div class="klik">
          <a class="btn btn-primary" href="actionPlan.php" type="submit">Submit </a> 
          <input class="btn btn-primary" type="reset" value="Reset">
          </div>
        </form>
    </div>
  </body>
</html>