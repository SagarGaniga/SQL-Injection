<?php
		if(isset($_POST["login"]))
    {
        require("dbCon.php");
        $pass= $_POST["pass"];
        $userid = $_POST["userid"];
        // $userid = "tyvon2q' OR 1=1'";
        $sql = "select * from login where userid = '$userid' and (password = $pass)";
        $result = $conn->query($sql);
        // echo "gg";
        if ($result->num_rows > 0) 
        {
        	header("location: inside.php");
            // while($row = $result->fetch_assoc()) 
            // {
            //     if($row["password"]==$pass)
            //     {
            //       header("location: inside.php");
            //     }   
            //     else
            //     {
            //     	echo $row["password"];
            //     }
            // 	echo "logged in as ".$row['userid']."";
            // }
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