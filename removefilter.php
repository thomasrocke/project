<link rel="stylesheet" href="CyberClipV2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'filtering database');

if(isset($_POST['delete']))
{
    $id = $_POST['id'];

    $query = "DELETE FROM filteret WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("location:filter.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>
?>