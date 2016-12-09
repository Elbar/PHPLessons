


<html>
<head>

</head>
<body>

<div class="col-md-4 col-lg-4"></div>
<form class="navbar-form navbar-center" action="search.php" method="post">
        <div class="col-sm-2">
          <input type="text" name="search" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-primary">Поиск</button>
      </form>
<br>

</body>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Students List</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Course</th>
      </tr>
    </thead>
    <tbody>
    <?php

    $host = "127.0.0.1";
 	$username = "root";
	$password = "";
	$dbName = "testdb";


    $conn = new mysqli($host, $username, $password, $dbName);
   
		$search=$_POST['search'];
		$query = "select * from student where name LIKE '$search' OR surname LIKE '$search'  LIMIT 0 , 10";
	
         $result = $conn->query($query);
      while($row = $result->fetch_assoc()) {?>
       <tr>
       
       	<td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['surname']; ?></td>
        <td><?php echo $row['course']; ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>


<?php header('refresh:5;url=index.php') ?>


