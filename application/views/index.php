<section class="container login-form">
		<section>
			<form method="post" action="" role="login">
				<img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="" class="img-responsive" />
			
				<div class="form-group">
					<input type="email" name="email" required class="form-control" placeholder="Email address" />
				</div>
				
				<div class="input-group">
					<input type="password" name="password" required class="form-control" placeholder="Password" />
					<span class="input-group-btn">
						<button class="btn btn-default" type="button" id="tooltip" data-toggle="tooltip" data-placement="top" title="Forgot password ?">?</button>
					</span>
				</div>
				
				<button type="submit" name="go" class="btn btn-primary btn-block">Login Now</button>
				
				Not yet a member ? <a href="#">Register now</a>
			</form>
		</section>
	</section>