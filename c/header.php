<div class="header">
    <div class="logo">
        <a href="index.php"><img src="img/vac.png" alt="Chic Clothing logo" /></a>
    </div>
    <!--logo ends-->
    <div class="navigation">
        <?php 
		$cat_sql = "SELECT * FROM category";
		$cat_query = mysqli_query($dbconnect, $cat_sql);
		$cat_rs = mysqli_fetch_assoc($cat_query);
		?>
        <p><?php
			do { ?>
            

            <?php

		} while ($cat_rs = mysqli_fetch_assoc($cat_query))
			?>
            <a href="index.php?page=admin">Admin Page</a>
        </p>
    </div>
    <!--navigation ends-->
</div><!-- Header ends here--> 