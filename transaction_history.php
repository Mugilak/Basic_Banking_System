
<?php
  include 'navb.php';
?>

	<div class="container" style="background-color: lightgreen; font-size: 25px;">
        <h2 style="color: darkgreen;">Transaction History</h2>
        
       <br>
       <table style="border: 3px solid black; font-size: 30px; border-collapse: collapse; width: 50%; margin-left: auto; margin-right: auto;">
        <thead>
            <tr>
                <th style="text-align: center; height: 70px;">Sender</th>
                <th style="text-align: center; height: 70px;">Receiver</th>
                <th style="text-align: center; height: 70px;">Amount Received</th>
            </tr>
        </thead>
        <tbody>
         <tr>
            <?php

            include 'config.php';

            $sql ="SELECT * FROM transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>
                    <tr>
                      <td><?php echo htmlentities($rows['sender']); ?></td>
                        <td><?php echo htmlentities($rows['receiver']); ?></td>
                        <td><?php echo htmlentities($rows['balance']); ?></td>
                    </tr>
                <?php
                    }
                ?>
         </tr>

        </tbody>
    </table>
</div>

<?php include('footb.php'); ?>

</body>
</html>