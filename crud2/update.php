<!DOCTYPE html>
<?php include 'db.php';

$id = $_GET['id'];

$sql = "select * from tasks where id = '$id'";

$rows = $db->query($sql);

$row = $rows->fetch_assoc();

if(isset($_POST['send'])){

$task = $_POST['task'];

$sql = "update tasks set name = '$task' where id = '$id'";

$db->query($sql);

header('location: index.php');
}

?>


<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <title>Crud App</title>
</head>

<body>

    <div class="container">

        <div class="row">
            <center>
                <h1>Update task</h1>
            </center>

            <!--DIV WITH 10 COLUMNS
            MD = MEDIUM SIZE
            OFFSET OF 1 TO CENTER-->
            <div class="col-md-10 col-md-offset-1">
                <table class="table">
                    
                    <hr><br>

                    <form method="POST">
                        <div class="form-group">
                            <lable>Task Name</lable>
                            <input type="text" required name="task" value="<?php echo $row['name']?>" class="form-control">
                        </div>
                        <input type="submit" name="send" value="Update Task" class="btn btn-success">&nbsp;
                        <a href="index.php" class="btn btn-warning">Back</a>
                    </form>
            </div>

        </div>
    </div>
</body>

</html>