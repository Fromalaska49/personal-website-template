<?php
$from = 'noreply@joyfulheart.life';

$to = 'Paul.Greenlee.Retirement@gmail.com';
$subject = 'RSVP for Retirement Ceremony';
$name = $_POST['name'];
$num_attendees = '';
$num = intval($_POST['num']);
if($num > 1){
	$num_attendees = 'They will be bringing ' . $num . ' attendees';
}
else{
	$num_attendees = 'They did not mark any additional attendees';
}
$mil_access = '';
if($_POST['mil_access']){
	$mil_access = 'will not need to be sponsored to get on base';
}
else{
	$mil_access = 'will need to be sponsored to get on base';
}
$body = htmlentities($name) . ' has RSVP\'d for Paul Greenlee\'s retirement ceremony. '.$num_attendees.', and '.$mil_access.'. You can contact them at ' . htmlentities($_POST['email']);

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: " . $from . "\r\n"."X-Mailer: php";

$stat = '';
if(mail($to, $subject, $body, $headers)){
	$stat = 'Your RSVP has been received';
}
else{
	$stat = 'Error: your RSVP could not be recorded at this time, please try again later';
}

?>
<!DOCTYPE html>
<html>
	<head>
		<?php
			require('common/head-includes.php');
		?>
		<title>
			Paul Greenlee Retirement
		</title>
	</head>
	<body>
		<?php
			require('common/menu.php');
		?>
		<div id="content" class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="row section-container">
						<div class="col-sm-12">
							<h1>
								RSVP
							</h1>
							<p>
								<?php
									echo(htmlentities($stat));
								?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
			require('common/footer.php');
		?>
	</body>
</html>
