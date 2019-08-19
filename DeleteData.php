<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
    li {
        list-style: none;
    }
</style>
<script>
    x = document.getElementById("take");
    if (x == "") {
        alert("fuck");
    }
</script>

<body>
    <div class="row justify-content-center">
        <div class="col-9">
            <h1>Delete from database</h1>
            <ul>
                <form name="DeleteData" action="DeleteData.php" method="POST">
                    <li>ID:</li>
                    <li><input type="text" name="id" id="take" /></li>
                    <li><input type="submit" /></li>
                </form>

            </ul>
            <div class="row">
                <div class="col-12">
                      <button type="button" class="btn btn-danger"><a href="ConnectToDB.php" class="myButton pl-3">View Data</a></button>
                      <button type="button" class="btn btn-info"><a href="InsertData.php" class="myButton pl-3">Insert data to the database</a></button>
                      <button type="button" class="btn btn-warning"><a href="UpdateData.php" class="myButton pl-3">Update data to the database</a></button>
                </div>
            </div>
        </div>
    </div>
    

    <?php
    // ini_set('display_errors', 1);
    // echo "Insert database!";
    ?>

    <?php


    $pdo = new PDO("gsql:dbname=d44dd6ie3u3e2r;host=ec2-23-21-225-251.compute-1.amazonaws.com
","kmtyidhikypivv", "8ce73487a82be64bcd9e3751432180912997562a04a091f347248c9dffbb2111" );

    $sql = 'DELETE FROM  public."Supplier" WHERE Supplier_ID = \''.$_POST["id"].'\'';
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute() == TRUE) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: ";
    }

    ?>
</body>

</html>