<?php include "templates/head.php"; ?>
<body>
	<?php include "templates/header.php"; ?>
	  <div class="authen-form-wrapper">
			<div class="container">
				<div class="authen-form-content">
					<div class="image-authen">
						<img src="./images/authen-image.png" alt="">
					</div>
					<div class="form-wrapper">
						<h3 class="form-title">Sign up</h3>
						<div class="form-item">
							<label for="email">Your Email</label>
							<input type="text" name="" value="" placeholder="Enter your email" id="email"/>
						</div>
						<div class="form-item">
							<label for="password">Password</label>
							<input type="password" name="" value="" placeholder="Enter your password" id="password"/>
						</div>
						<div class="form-item">
							<label for="confirm-password">Confirm Password</label>
							<input type="password" name="" value="" placeholder="Enter your password" id="confirm-password"/>
						</div>
						<div class="list-control">
							<button class="btn btn-submit">Sign up</button>
							<a href="#" target="" class="btn btn-link">Login</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php include "templates/footer.php"; ?>
</body>


</html>