<!DOCTYPE html>
<html>
  <head>
    <title>List manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/latest/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="css/main.css">

  </head>
  <body>
  <?php 
    include('config.php');
    include('session.php');
  ?>
<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="mylist.php">Prive</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="mylist.php">Home</a></li>
              <li><a href="add.php">Lägg till</a></li>
              <li><a href="admin.php">Admin</a></li>
              <li style="display:none" class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
	<div class="main-wrapper">
		<div class="container">
			<div class="row">
        <div class="addToList">
          <div class="col-sm-12" style="margin: 0 auto">
            <form id="newEntry" class="form-horizontal">
              <div class="form-group">
                <label for="inputFirstname" class="col-sm-12">Förnamn</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" name="inputFirstname" placeholder="Förnamn">
                </div>
              </div>
              <div class="form-group">
                <label for="inputLastname" class="col-sm-12">Efternamn</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" name="inputLastname" placeholder="Efternamn">
                </div>
              </div>
               <div class="form-group">
                <label for="inputAmount" class="col-sm-12">Antal</label>
                <div class="col-sm-12">
                  <select name="inputAmount" class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">
                  <button type="submit" class="btn btn-primary">Lägg till</button>
                </div>
              </div>
            </form>
          </div>
        </div>
				<div class="col-sm-12">
					<h1> Din lista </h1>
          <table class="table your-list"> 
            <thead> 
              <tr> 
                <th>Förnamn</th> 
                <th>Efternamn</th> 
                <th>Antal</th> 
              </tr> 
            </thead> 
            <tbody>
              
            </tbody> 
          </table>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="editEntry" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&amp;times;</button>
          <h4 class="modal-title" id="myModalLabel">Uppdatera sällskap</h4>
          </div>
          <div class="modal-body">
            <form id="editEntry" class="form-horizontal">
              <div class="form-group">
                <label for="inputFirstname" class="col-sm-12">Förnamn</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" name="inputFirstname" placeholder="Förnamn">
                </div>
              </div>
              <div class="form-group">
                <label for="inputLastname" class="col-sm-12">Efternamn</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" name="inputLastname" placeholder="Efternamn">
                </div>
              </div>
               <div class="form-group">
                <label for="inputAmount" class="col-sm-12">Antal</label>
                <div class="col-sm-12">
                  <select name="inputAmount" class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <input type="text" name="entryID" style="display: none"></input>
              </div>
              <div class="form-group">
                <div class="col-sm-12">
                  <button type="submit" class="btn btn-primary">Spara ändringar</button>
                </div>
              </div>
            </form>
          </div>
      </div>
    </div>
  </div>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="main.js"></script>
  </body>
</html>