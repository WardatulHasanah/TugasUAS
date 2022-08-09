 <?php
 error_reporting(0);
include 'configuration/config_connect.php';
        $queryback="SELECT * FROM backset";
		$resultback=mysqli_query($conn,$queryback);
		$rowback=mysqli_fetch_assoc($resultback);
		$footer=$rowback['footer'];


 ?>
 <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Laundry</b> Assyarif
                </div>
                <strong>Copyright © 2022 Sistem Informasi Laundry.</strong> All rights
                reserved. <?php echo $footer;?>
				</div>
            </footer>
