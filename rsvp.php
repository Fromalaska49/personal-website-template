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
							<br />
							<form action="script-rsvp.php" method="post">
								<input type="text" name="name" placeholder="Your Name" style="margin:10px;" aria-required="true" />
								<br />
								<input type="text" name="email" placeholder="Your Email" style="margin:10px;" aria-required="true" />
								<br />
								<input type="text" name="num" placeholder="Number of Attendees" style="margin:10px;" aria-required="true" />
								<br />
								<div style="margin:10px;">
									<input type="checkbox" name="mil_access" />
									<label for="mil_access" style="font-weight:inherit;">I have a base pass or military ID card</label>
								</div>
								<br />
								<input type="submit" value="RSVP" />
							<form>
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
