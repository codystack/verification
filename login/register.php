<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Portal Registration&trade;</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('https://i.imgur.com/k5bQ8hO.jpg');">
			<div class="inner">
				<div class="image-holders">
					<img src="https://i.imgur.com/gpVLlde.jpg" alt="">
				</div>
				<form action="">
					<h3>Portal Registration</h3>
					<div class="form-wrapper">
						<input type="text" name="company-name" placeholder="Company Name" class="form-control">
						<i class="zmdi zmdi-city-alt"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" name="company-reg-number" placeholder="Company Reg. Number" class="form-control">
						<i class="zmdi zmdi-code-setting"></i>
					</div>
					<div class="form-wrapper">
						<input type="tel" name="phone-number" placeholder="Phone Number" class="form-control">
						<i class="zmdi zmdi-phone"></i>
					</div>
					<div class="form-wrapper">
						<input type="email" name="email" placeholder="Email Address" class="form-control">
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-wrapper">
						<select name="business-type" class="form-control">
							<option value="" disabled selected>Business Type</option>
							<option value="enterprise">Enterprise</option>
							<option value="ltd">Limited Liability Company</option>
							<option value="plc">Public Liability Company</option>
							<option value="ge">Government Establishment</option>
							<option value="ngo">Non Government Organization</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" name="password" placeholder="Password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" name="confirm-password" placeholder="Confirm Password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<button>REGISTER
						<i class="zmdi zmdi-arrow-right"></i>
                    </button>
                    <p>Already have an account? <a href="index" style="text-decoration: none;">Login</a></p>
				</form>
			</div>
		</div>
	</body>
</html>