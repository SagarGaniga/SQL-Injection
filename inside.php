<!DOCTYPE html>
<html>
<head>
	<title>Logged In</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div>
			<h1 class="text-center">Dashboard</h1>
		</div>
		<div>
			<form class="form-group" action="inside.php" method="POST">
				<h2>Search Users</h2>
				<input type="text" name="userid" class="form-control" placeholder="Search Users by User ID"><br>
				<input type="submit" name="search" class="form-control btn-primary">
			</form>
		</div>
	</div>
</body
</html>

<?php
	if(isset($_POST["search"]))
    {
        require("dbCon.php");
        $userid = $_POST["userid"];
        // $userid = "tyvon2q' OR 1=1'";
        $sql = "select * from login where userid = $userid";
        $result = $conn->query($sql);
        // echo "gg";
        if ($result->num_rows > 0) 
        {
        	echo "<div class=\"container\">";
        	// echo "<h2>INPUT:	".$userid."</h2>";
            while($row = $result->fetch_assoc()) 
            {
            	
                echo "<h4>";
                echo $row['userid']."	".$row['name']."	".$row['gender'];
            	echo "</h4>";
            	
            }
            echo "</div>";
        }
        else 
        {
        	echo $sql;
            ?>
                <script>
                    alert("Wrong Password or Email");
                </script>
            <?php
        }
    }
?>