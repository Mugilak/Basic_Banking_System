<?php include('navb.php') ?>
<br>
<body>
 <div class="bg" style="background-color: lavender;">
 	<div class="center"  style="padding-top: 50px; padding-bottom: 50px; border-style: groove; border-width: 30px; text-align: center;">
 		<ul>
 			<h2><a href="viewall.php" onMouseOver="this.style.color='green'"
        onMouseOut="this.style.color='lightgreen'" ><b><button class="btn" id="view" style="font-size: 30px; background-color: lightgreen;">VIEW ALL USERS</button></b></a></h1>

 			<h2><a href="transfer_money.php" onMouseOver="this.style.color='black'"
        onMouseOut="this.style.color='black'" ><b><button class="btn" id="trans" style="font-size: 30px; background-color: lightgreen;">TRANSFER MONEY</button></b></a></h1>

                     <h1><a href="transaction_history.php" onMouseOver="this.style.color='black'"
        onMouseOut="this.style.color='black'" ><b><button class="btn" id="trans" style="font-size: 30px; background-color: lightgreen;">TRANSACTION HISTORY</button></b></a></h1>

 			</ul>
 	</div>
 </div>
<br><br>
 <?php include('footb.php') ?>

</body>
</html>