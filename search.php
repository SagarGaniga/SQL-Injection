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
            while($row = $result->fetch_assoc()) 
            {
                echo "<h4>";
                echo $row['userid']."";
            	echo "</h4>";
            }
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