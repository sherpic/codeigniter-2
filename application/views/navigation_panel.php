<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">

			<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>

			<!-- Be sure to leave the brand out there if you want it shown -->
			<a class="brand" href="#">JavaScript</a>

			<!-- Everything you want hidden at 940px or less, place within here -->
			<div class="nav-collapse collapse">
				<ul class="nav pull-right">
<?php
					if($this->session->userdata('is_login')){
?>
						<li><a href="/index.php/auth/logout">Log Out</a></li>
<?php
					} else {
?>
						<li><a href="/index.php/auth/login">Log In</a></li>
						<li><a href="/index.php/auth/register">Register</a></li>
<?php
					}
?>
				</ul>				        
			</div> <!-- ./nav-collapse collapse -->
		</div> <!-- ./container -->

	</div> <!-- ./navbar-inner -->
</div> <!-- ./navbar navbar-fixed-top -->