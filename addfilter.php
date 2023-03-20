<link rel="stylesheet" href="CyberClipV2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<?php


$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn, 'filtering database');

if(isset($_POST['insert']))
{
    $FilterINT = htmlspecialchars($_POST['FilterINT']);
    $FilterINT = filter_var($FilterINT, FILTER_VALIDATE_URL);

    $query = "INSERT INTO filteret(`FilterINT`) VALUES ('$FilterINT')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>Adding site Page</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-12">
                  
                    <h2> Adding filtered site</h2>
                    <hr>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for=""> Filtered site </label>
                            <input type="text" name="FilterINT" class="form-control" placeholder="Enter Site" required>
                        </div>
                        <button type="submit" name="insert" class="btn btn-primary"> Save Site </button>
                        <a href="filter.php" class="btn btn-danger"> BACK </a>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</body>
</html>
