<!DOCTYPE html>
<?php include 'db.php';

$sql = "select * from tasks";

$rows = $db->query($sql);
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
                <h1>Todo list</h1>
            </center>

            <!--DIV WITH 10 COLUMNS
            MD = MEDIUM SIZE
            OFFSET OF 1 TO CENTER-->
            <div class="col-md-10 col-md-offset-1">
                <table class=" table table-hover">
                    <button type="button" data-target="#myModal" data-toggle="modal" class="btn btn-success">Add Task</button>
                    <button type="button" class="btn btn-default pull-right" onclick="print()" >Print</button>
                    <hr><br>

                    <!-- Modal: Shows up a small screen with a message about the stuff, 
                    jQuery needed for this to work-->
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Add Task</h4>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="add.php">
                                        <div class="form-group">
                                            <lable>Task Name</lable>
                                            <input type="text" required name="task" class="form-control">
                                        </div>
                                        <input type="submit" name="send" value="Add Task" class="btn btn-success">
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Task</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php while ($row = $rows->fetch_assoc()) : ?>
                                <th><?php echo $row['id'] ?></th>
                                <td class="col-md-10"><?php echo $row['name'] ?></td>
                                <td><a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-success">Edit</a></td>
                                <td><a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                    <?php endwhile; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</body>

</html>