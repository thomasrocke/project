<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=FireFOx">
                <link rel="stylesheet" href="CyberClipV2.css">
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Filter site edit</title>
</head>
<body>
    <?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, 'filtering database');

    $id = $_POST['id'];

    $query = "SELECT * FROM filteret WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        while($row = mysqli_fetch_array($query_run))
        {
            ?>
            <div class="container">
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-md-12">
                            
                            <h2> filtered site updating </h2>
                            <hr>
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                <div class="form-group">
                                    <label for=""> First Name </label>
                                    <input type="text" name="FilterINT" class="form-control" value="<?php echo $row['FilterINT'] ?>" placeholder="Enter site" required>
                                </div>
                                <button type="submit" name="update" class="btn btn-primary"> Update Site </button>

                                <a href="filter.php" class="btn btn-danger"> CANCEL </a>
                            </form>

                        </div>
                    </div>
                    
                    <?php
                    if(isset($_POST['update']))
                    {
                        $FilterINT = $_POST['FilterINT'];
                    

                        $query = "UPDATE filteret SET FilterINT='$FilterINT'WHERE id='$id'  ";
                        $query_run = mysqli_query($connection, $query);

                        if($query_run)
                        {
                            echo '<script> alert("Data Updated"); </script>';
                            header("location:filter.php");
                        }
                        else
                        {
                            echo '<script> alert("Data Not Updated"); </script>';
                        }
                    }
                    ?>

                </div>
            </div>
            <?php
        }
    }
    else
    {
        // echo '<script> alert("No Record Found"); </script>';
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>No Record Found</h4>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</body>