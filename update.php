<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="CyberClipV2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
    <li><a href="index.php">Home</a></li>
        <li><a href="filter.php">Filtering</a></li>
        <li><a href="management.php">Management</a></li>
        <li><a href="Guildline.php">Guideline</a></li>
        <li><a href="update.php">Update</a></li>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>
    <title>Update</title>
  </head>
  <body>
    <h1>Update manager</h1>
  <p>this page will have the use of the update manager to allow for update nofication to be done</p>
    <form name = "form1" action="modified.php" method = "post" enctype = "multipart/form-data" >    
      <div class = "container">    
          <div class = "form_group">    
              <label>label:</label>    
              <input type = "text" name = "fname" value = "" required/>    
              <input type="submit" value="Submit">
          </div>     
      </div>      
  </form>  
  </body>
</html>
