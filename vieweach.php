<!DOCTYPE>
<html>
<head>
<title> Customer </title>
</head>
<body>
	<?php
  include 'navb.php';
?>

	<div class="container" style="background-color: lightgreen;">
        <h1>Customer Detail</h1>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  users where id=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table style="border: 3px groove black; font-size: 30px;  width: 60%; margin-left: auto; margin-right: auto; background-color: blue; color: white;">
                <tr>
                	<th style="height: 70px;"> CUSTOMER NAME : </th>
                	<td><?php echo $rows['name'] ?></td>
                </tr>
                <tr>
                	<th style="height: 70px;"> E-mail : </th>
                	<td><?php echo $rows['email'] ?></td>
                </tr>
                <tr>
                	<th style="height: 70px;"> BALANCE HOLDING : </th>
                	<td><?php echo $rows['balance'] ?></td>
                </tr>
            </table>
    </div>
<?php include 'footb.php'; ?>
</body>
</html>