<?php
  $conn = mysqli_connect('localhost', 'unn_w14019187', 'Malygos43', 'W_14019187');
  if (mysqli_connect_errno()) {
		echo "<p>Connection failed:".mysqli_connect_error()."</p>\n";
  }
?>