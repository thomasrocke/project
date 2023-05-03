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
          <li><a href="login.php">Management</a></li>
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
    <title>Filtering</title>
</head>
  <body>
    <h1>Filtering and blocking page</h1>
  <p>this page will have the abilty to show and add the blocked sites</p>
  <body>
    <div class="container">
        <div class="jumbotron">

            <div class="row">
                <div class="col-md-6">
                    <h1>Filtered sites List  </h1>
                </div>
                <div class="col-md-6">
                    <a href="addfilter.php" class="btn btn-success" style="margin-left: 80%;"> ADD Site </a>    
                </div>
                <div class="col-md-12">
                    <hr>
                </div>
            </div>

            <?php
               $conn = mysqli_connect("localhost","root","","");
               $db = mysqli_select_db($conn, 'filtering database');

                $query = "SELECT * FROM filteret";
                $query_run = mysqli_query($conn, $query);
            ?>

            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered" style="background-color: white;">
                        <thead class="table-dark">
                            <tr>
                                <th> Filter sites added by blacklist</th>
                                <th> Filtered Sites added by user </th>
                                <th> EDIT </th>
                                <th> DELETE </th>
                            </tr>
                        </thead>
                        <tbody>
                                        
                        <?php
                        if($query_run)
                        {
                            while($row = mysqli_fetch_array($query_run))
                            {
                                ?>
                                    <tr>
                                        <th></th>
                                        <th class="table-active"> <?php echo $row['FilterINT']; ?> </th>
                                        <th class="table-warning" > 
                                            <form action="updatefilter.php" method="post">
                                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                                <input type="submit" name="edit" class="btn btn-warning" value="EDIT">
                                            </form>
                                        </th >
                                        <th class="table-danger"> 
                                            <form action="removefilter.php" method="post">
                                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                                <input type="submit" name="delete" class="btn btn-danger" value="DELETE"> 
                                            </form>
                                        </th>
                                    </tr>
                                <?php
                                }
                            }
                            else
                            {
                                ?>
                                    <tr>    
                                        <th colspan="6"> No Record Found </th>
                                    </th>
                                <?php
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
