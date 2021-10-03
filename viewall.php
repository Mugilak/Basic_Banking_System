<?php 
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<?php include('navb.php'); ?>

<div class="container" style="background-color: lightgreen; font-size: 30px;">
        <h1 style="color: darkgreen;">View customer </h1>
        <br>
            <table style="border: 4px solid black; font-size: 30px; border-collapse: collapse; width: 80%; margin-left: auto; margin-right: auto;">

                        <thead>
                            <tr>
                            <th scope="col" style="height: 70px;">Id</th>
                            <th scope="col" style="height: 70px;">Name</th>
                            <th scope="col" style="height: 70px;">E-Mail</th>
                            <th scope="col" style="height: 70px;">Balance</th>
                            <th scope="col" style="text-align: center;">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td><?php echo $rows['id'] ?></td>
                        <td><?php echo $rows['name']?></td>
                        <td><?php echo $rows['email']?></td>
                        <td><?php echo $rows['balance']?></td>
                        <td><a href="vieweach.php?id= <?php echo $rows['id'] ;?>"> <button type="button" style="border-radius: 15px; background-color: darkgreen; color:white;">View</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                
         </div>
        
<?php include('footb.php'); ?>
</body>
</html>
