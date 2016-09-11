<?php
$dbcon1=@mysql_connect("localhost","revelation","revelation123",true);
	mysql_select_db('revelation',$dbcon1);
$Name = $_GET['name'];
	?>
<!-- Blog Posts -->
<div id="sp" class="blog-single-post">
	<!-- post image -->
	<div class="post-header-image">
	</div>
	<!-- /post-image -->

	<!-- post title -->
	<h2 class="blog-single-title">Successfully Completed!</h2>
	<!-- /post title -->

	<!-- post content -->
	<div class="blog-single-content">
		<p>Dear <?php echo $Name; ?>,</p><br>
		<p>Thank you for registering. Kindly take a screenshot of this screen. We'll mail you the confirmation as soon as possible.
<br>For Futher enquiries Contact: Manjunath:9176156512 or Surakshit: 9840357517</p>
	<p>Your Token ID is:-</p>
	<?php $sq1 = mysql_query("SELECT token from members where name = '$Name'");
	while($row = mysql_fetch_array($sq1))
	{
		echo "<h2>".$row['token']."</h2>";
	} ?>
  </div>
	<!-- /post content -->
</div>
<!-- /Blog Posts -->
