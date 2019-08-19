<!DOCTYPE html>
<html>
<head>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="row justify-content-center">
            <div class="col-9">
              <h1>ATN Shop</h1>

              <?php
               ini_set('display_errors', 1);

              ?>

              <?php
                echo '<p>The DB exists</p>';
                echo getenv("dbname");
                $pdo = new PDO("pgsql:dbname=d44dd6ie3u3e2r;host=ec2-23-21-225-251.compute-1.amazonaws.com
","kmtyidhikypivv", "8ce73487a82be64bcd9e3751432180912997562a04a091f347248c9dffbb2111" );
                if ($pdo === false) {
                  echo "ERROR: Could not connect Database";
                }
                $sql = 'SELECT * FROM public."supplier"';
                $stmt = $pdo->prepare($sql);
                //Thiết lập kiểu dữ liệu trả về
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $stmt->execute();
                $resultSet = $stmt->fetchAll();
                echo '<p>Supplier Information:</p>';
              ?>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Address</th>
                      <th>Phone</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($resultSet as $key => $value) : ?>
                      <tr class="odd gradeX">
                        <td><?php echo $value['Supplier_ID']; ?></td>
                        <td><?php echo $value['Supplier_Name']; ?></td>
                        <td><?php echo $value['Supplier_Address']; ?></td>
                        <td><?php echo $value['Supplier_Phone']; ?></td>
                      </tr>
                    <?php endforeach; ?>

                  </tbody>
                </table>
              </div>
              <div class="row">
                <div class="col-12">
                  <button type="button" class="btn btn-info"><a href="InsertData.php" class="myButton pl-3">Insert data to the database</a></button>
                  <button type="button" class="btn btn-warning"><a href="UpdateData.php" class="myButton pl-3">Update data to the database</a></button>
                  <button type="button" class="btn btn-danger"><a href="DeleteData.php" class="myButton pl-3">Delete data to the database</a></button>
                </div>
              </div>
            </div>
        </div>
</body>

</html>