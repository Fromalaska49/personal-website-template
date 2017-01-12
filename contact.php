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
								Contact
							</h1>
							<br />
							<p>
								If you would like to send a message to Paul and Sarah, you can send it to them below.
							</p>
							<br />
							<form action="script-send-email.php" method="post">
								<div class="row">
									<div class="hidden-xs col-sm-6" style="text-align:left;">
										<input type="text" name="email" placeholder="Your Email" aria-required="true" />
									</div>
									<div class="hidden-xs col-sm-6" style="text-align:right;">
										<input type="text" name="name" placeholder="Your Name" aria-required="true" />
									</div>
									<div class="col-xs-12 hidden-sm hidden-md hidden-lg hidden-xl" style="text-align:left;margin-top:10px;">
										<input type="text" name="m-email" placeholder="Your Email" aria-required="true" />
									</div>
									<div class="col-xs-12 hidden-sm hidden-md hidden-lg hidden-xl" style="text-align:left;margin-top:10px;">
										<input type="text" name="m-name" placeholder="Your Name" aria-required="true" />
									</div>
								</div>
								<br />
								<div class="row">
									<div class="col-md-12">
										<textarea name="text" placeholder="Your Message" style="width:100%;height:400px;"></textarea>
									</div>
								</div>
								<input type="submit" value="Send" id="contact-form-submit-button" />
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
