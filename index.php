<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Paddys Schnitzeljagd</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        html, body, #container {
            height: 100%;
        }
        body {
            background-image: url(diagonal_waves.png);
            background-repeat: repeat;
        }
        #container {
            display: flex;
            align-items: center;
        }
    </style>
  </head>
  <body>
      <div id="container">
          <div class="container">
              <?php
              if(array_key_exists('code', $_GET) && $_GET['code'] != '')
              {
                  if($_GET['code'] == $_ENV['CODE'])
                  {
                      ?>
                      <div class="alert alert-success">
                          <strong>Glückwunsch!</strong> Die Kombination für das Schloss lautet <code><?php echo $_ENV['COMBINATION'] ?></code>.
                      </p>
                      <?php
                  }
                  else
                  {
                      ?>
                      <div class="alert alert-danger">
                          <strong>Holy antilope Batman!</strong> Der Code war falsch! <form>
                              <button type="submit" name="code" value="" class="btn btn-link">Nochmal versuchen &rarr;</button>
                          </form>
                      </div>
                      <?php
                  }
              }
              else
              {
              ?>
              <form>
                  <div class="input-group input-group-lg">
                      <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-lock"></span></span>
                      <input type="text" class="form-control" name="code" placeholder="Code" aria-describedby="sizing-addon1">
                  </div>
              </form>
              <?php
              }
              ?>
          </div>
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
