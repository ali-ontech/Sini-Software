
<!-- Nav Iphone Small  This neews to update--->
<div class="d-block d-sm-none">
	<nav class="navbar navbar-expand fixed-top">
		<div class="container-full">
			<div class="row">
				<div class="col-12 flex-row justify-content-center" style="padding-top: 5px; padding-bottom: 5px;">
					<!----------------- Start Nav ---------------------------------->
					<center>
					<ul class="navbar-nav mx-auto flex-row justify-content-center flex-nowrap" style="width: 100%;">
						<li>
							<a href="{{ url('/') }}" class="img-fluid" alt="SiNi Software Logo"><img height="30" style="padding-top: 0px; padding-bottom: 0px;" src="/images/sini/SiNi_Logo.png"></a> 
						</li>

						<li>
							&nbsp; &nbsp; &nbsp;
						</li>

				  		<?php if($SiNi_page_id == "Home") $Active = 'class="nav-item active"'; else $Active = ''; ?>
						<li <?php echo $Active; ?> ><a href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>

						<?php if($SiNi_page_id == "Products") $Active = 'class="nav-item active"'; else $Active = ''; ?>
						<li <?php echo $Active; ?> ><a href="{{ url('/Products') }}"><i class="fa fa-puzzle-piece"></i></a></li>

						<?php if($SiNi_page_id == "Pricing") $Active = 'class="nav-item active"'; else $Active = ''; ?>
						<li <?php echo $Active; ?> ><a href="{{ url('/Pricing') }}"><i class="fa fa-tag"></i></a></li>

						<?php if($SiNi_page_id == "Forum") $Active = 'class="nav-item active"'; else $Active = ''; ?>
						<li <?php echo $Active; ?> ><a href="{{ url('/Forum') }}"><i class="fa fa-comments"></i></a></li>

						<?php /*
						<?php if($SiNi_page_id == "Community") $Active = 'class="nav-item active"'; else $Active = ''; ?>
						<li <?php echo $Active; ?> ><a href="{{ url('/Community') }}"><i class="fas fa-users"></i> Community</a></li>
						*/ ?>

						<?php if($SiNi_page_id == "Videos") $Active = 'class="nav-item active"'; else $Active = ''; ?>
						<li <?php echo $Active; ?> ><a href="{{ url('/Videos') }}"><i class="fas fa-video"></i></a></li>

						<?php if($SiNi_page_id == "About") $Active = 'class="nav-item active"'; else $Active = 'class="nav-item"'; ?>
						<li <?php echo $Active; ?> ><a href="{{ url('/About') }}"><i class="fa fa-info"></i></a></li>

						<?php if($SiNi_page_id == "News") $Active = 'class="nav-item active"'; else $Active = 'class="nav-item"'; ?>
						<li <?php echo $Active; ?> ><a href="{{ url('/News') }}"><i class="far fa-newspaper"></i></a></li>

						<?php if($SiNi_page_id == "Help") $Active = 'class="nav-item active"'; else $Active = 'class="nav-item"'; ?>
						<li <?php echo $Active; ?> ><a href="{{ url('https://docs.sinisoftware.com') }}" target="_blank"><i class="fas fa-ambulance"></i></a></li>

						<li>
							&nbsp; &nbsp; &nbsp;
						</li>
						@if (Route::has('login'))
				  			@if (Auth::check())
					  			<?php if($SiNi_page_id == "Login") $Active = 'class="active"'; else $Active = ''; ?>
								<li <?php echo $Active; ?> >
								<a href="{{ url('/User/Dashboard') }}">Dash</a>
					  		@else
								<?php if($SiNi_page_id == "Login") $Active = 'class="active"'; else $Active = ''; ?>
								<li <?php echo $Active; ?> >
								<a href="{{ url('/login') }}">Login</a>
				  			</li>
				  			@endif
			  			@endif
			  		</ul>
			  	</center>
				</div>
				<!----------------- End Nav ---------------------------------->
			</div>
		</div>
	</nav>
</div>
<!-- Nav Iphone big --->
<div class="d-none d-sm-block d-md-none">
	<nav class="navbar navbar-expand fixed-top">
		<div class="container-full">
			<div class="row">
				<div class="col-12 d-flex justify-content-center align-items-center" style="padding-top: 5px; padding-bottom: 5px;">
					<center>
					<ul class="navbar-nav mx-auto flex-row justify-content-center flex-nowrap" style="width: 100%;">
						<li>
							<a href="{{ url('/') }}" class="img-fluid" alt="SiNi Software Logo"><img height="30" style="padding-top: 0px; padding-bottom: 0px;" src="/images/sini/SiNi_Logo.png"></a> 
						</li>

						<li>
							&nbsp; &nbsp; &nbsp;
						</li>
				  		<?php if($SiNi_page_id == "Home") $Active = 'class="nav-item active"'; else $Active = ''; ?>
						<li <?php echo $Active; ?> ><a href="{{ url('/') }}">Home</a></li>

						<?php if($SiNi_page_id == "Products") $Active = 'class="nav-item active"'; else $Active = ''; ?>
						<li <?php echo $Active; ?> ><a href="{{ url('/Products') }}">Products</a></li>

						<?php if($SiNi_page_id == "Pricing") $Active = 'class="nav-item active"'; else $Active = ''; ?>
						<li <?php echo $Active; ?> ><a href="{{ url('/Pricing') }}">Pricing</a></li>

						<?php if($SiNi_page_id == "Forum") $Active = 'class="nav-item active"'; else $Active = ''; ?>
						<li <?php echo $Active; ?> ><a href="{{ url('/Forum') }}">Forum</a></li>

						<?php /*
						<?php if($SiNi_page_id == "Community") $Active = 'class="nav-item active"'; else $Active = ''; ?>
						<li <?php echo $Active; ?> ><a href="{{ url('/Community') }}"><i class="fas fa-users"></i> Community</a></li>
						*/ ?>

						<?php if($SiNi_page_id == "Videos") $Active = 'class="nav-item active"'; else $Active = ''; ?>
						<li <?php echo $Active; ?> ><a href="{{ url('/Videos') }}">Videos</a></li>

						<?php if($SiNi_page_id == "About") $Active = 'class="nav-item active"'; else $Active = 'class="nav-item"'; ?>
						<li <?php echo $Active; ?> ><a href="{{ url('/About') }}">About</a></li>

						<?php if($SiNi_page_id == "News") $Active = 'class="nav-item active"'; else $Active = 'class="nav-item"'; ?>
						<li <?php echo $Active; ?> ><a href="{{ url('/News') }}">News</a></li>

						<?php if($SiNi_page_id == "Help") $Active = 'class="nav-item active"'; else $Active = 'class="nav-item"'; ?>
						<li <?php echo $Active; ?> ><a href="{{ url('https://docs.sinisoftware.com') }}" target="_blank">Help</a></li>

						<li>
							&nbsp; &nbsp; &nbsp;
						</li>

						@if (Route::has('login'))
				  			@if (Auth::check())
					  			<?php if($SiNi_page_id == "Login") $Active = 'class="active"'; else $Active = ''; ?>
								<li <?php echo $Active; ?> >
								<a href="{{ url('/User/Dashboard') }}">{{ Auth::user()->name }}</a>
					  		@else
								<?php if($SiNi_page_id == "Login") $Active = 'class="active"'; else $Active = ''; ?>
								<li <?php echo $Active; ?> >
								<a href="{{ url('/login') }}">Login</a>
				  			</li>
				  			@endif
			  			@endif
			  		</ul>
			  	</center>
				</div>
				<!----------------- End Nav ---------------------------------->
			</div>
		</div>
	</nav>
</div>
<!-- Nav Ipad Small --->
<div class="d-none d-md-block d-lg-none">
	<nav class="navbar navbar-expand fixed-top">
		<div class="container-full">
			<div class="row">
				<div class="col-12 d-flex justify-content-center align-items-center" style="padding-top: 5px; padding-bottom: 5px;">
					<a href="{{ url('/') }}" class="img-fluid" alt="SiNi Software Logo"><img height="35" style="padding-top: 0px; padding-bottom: 0px;" src="/images/sini/SiNi_Logo.png"></a> 
					<ul class="navbar-nav mx-auto flex-row justify-content-center flex-nowrap" style="width: 100%;">
						<li>
							&nbsp; &nbsp; &nbsp;
						</li>
				  		<?php if($SiNi_page_id == "Home") $Active = 'class="nav-item active"'; else $Active = ''; ?>
						<li <?php echo $Active; ?> style="padding-top: 8px;" ><a href="{{ url('/') }}"><i class="fa fa-home"></i>&nbsp; Home</a></li>

						<?php if($SiNi_page_id == "Products") $Active = 'class="nav-item active"'; else $Active = ''; ?>
						<li <?php echo $Active; ?> style="padding-top: 8px;" ><a href="{{ url('/Products') }}"><i class="fa fa-puzzle-piece"></i>&nbsp; Products</a></li>

						<?php if($SiNi_page_id == "Pricing") $Active = 'class="nav-item active"'; else $Active = ''; ?>
						<li <?php echo $Active; ?> style="padding-top: 8px;" ><a href="{{ url('/Pricing') }}"><i class="fa fa-tag"></i>&nbsp; Pricing</a></li>

						<?php if($SiNi_page_id == "Forum") $Active = 'class="nav-item active"'; else $Active = ''; ?>
						<li <?php echo $Active; ?> style="padding-top: 8px;" ><a href="{{ url('/Forum') }}"><i class="fa fa-comments"></i>&nbsp; Forum</a></li>

						<?php /*
						<?php if($SiNi_page_id == "Community") $Active = 'class="nav-item active"'; else $Active = ''; ?>
						<li <?php echo $Active; ?> ><a href="{{ url('/Community') }}"><i class="fas fa-users"></i> Community</a></li>
						*/ ?>

						<?php if($SiNi_page_id == "Videos") $Active = 'class="nav-item active"'; else $Active = ''; ?>
						<li <?php echo $Active; ?> style="padding-top: 8px;" ><a href="{{ url('/Videos') }}"><i class="fas fa-video"></i>&nbsp; Videos</a></li>

						<?php if($SiNi_page_id == "News") $Active = 'class="nav-item active"'; else $Active = 'class="nav-item"'; ?>
						<li <?php echo $Active; ?> style="padding-top: 8px;" ><a href="{{ url('/News') }}"><i class="far fa-newspaper"></i>&nbsp; News</a></li>

						<?php if($SiNi_page_id == "Help") $Active = 'class="nav-item active"'; else $Active = 'class="nav-item"'; ?>
						<li <?php echo $Active; ?> style="padding-top: 8px;" ><a href="{{ url('https://docs.sinisoftware.com') }}" target="_blank"><i class="fas fa-ambulance"></i>&nbsp; Help</a></li>
						
						<li>
							&nbsp; &nbsp; &nbsp;
						</li>

						@if (Route::has('login'))
				  			@if (Auth::check())
					  			<?php if($SiNi_page_id == "Login") $Active = 'class="active"'; else $Active = ''; ?>
								<li <?php echo $Active; ?> >
								<a href="{{ url('/User/Dashboard') }}"><img height="35" style="padding-top: 0px; padding-bottom: 0px;" src="/images/default.png"> &nbsp; {{ Auth::user()->name }}</a>
					  		@else
								<?php if($SiNi_page_id == "Login") $Active = 'class="active"'; else $Active = ''; ?>
								<li <?php echo $Active; ?>  style="padding-top: 8px;" >
								<a href="{{ url('/login') }}"><i class="fa fa-user"></i> &nbsp; Login / Register</a>
				  			</li>
				  			@endif
			  			@endif
			  		</ul>
				</div>
				<!----------------- End Nav ---------------------------------->
			</div>
		</div>
	</nav>
</div>
<!-- Nav Ipad Big --->
<div class="d-none d-lg-block d-xl-none">
	<nav class="navbar navbar-expand fixed-top">
		<div class="container-full">
			<div class="row">
				<div class="col-12 d-flex justify-content-center align-items-center" style="padding-top: 5px; padding-bottom: 5px;">
					<a href="{{ url('/') }}" class="img-fluid" alt="SiNi Software Logo"><img height="40" style="padding-top: 0px; padding-bottom: 0px;" src="/images/sini/SiNi_Logo.png"></a> 
					<ul class="navbar-nav mx-auto flex-row justify-content-center flex-nowrap" style="width: 100%;">
						<li>
							&nbsp; &nbsp; &nbsp;
						</li>
				  		<?php if($SiNi_page_id == "Home") $Active = 'class="nav-item active"'; else $Active = ''; ?>
						<li <?php echo $Active; ?> style="padding-top: 8px;"><a href="{{ url('/') }}"><i class="fa fa-home"></i>&nbsp; Home</a></li>

						<?php if($SiNi_page_id == "Products") $Active = 'class="nav-item active"'; else $Active = ''; ?>
						<li <?php echo $Active; ?> style="padding-top: 8px;" ><a href="{{ url('/Products') }}"><i class="fa fa-puzzle-piece"></i>&nbsp; Products</a></li>

						<?php if($SiNi_page_id == "Pricing") $Active = 'class="nav-item active"'; else $Active = ''; ?>
						<li <?php echo $Active; ?> style="padding-top: 8px;" ><a href="{{ url('/Pricing') }}"><i class="fa fa-tag"></i>&nbsp; Pricing</a></li>

						<?php if($SiNi_page_id == "Forum") $Active = 'class="nav-item active"'; else $Active = ''; ?>
						<li <?php echo $Active; ?> style="padding-top: 8px;" ><a href="{{ url('/Forum') }}"><i class="fa fa-comments"></i>&nbsp; Forum</a></li>

						<?php /*
						<?php if($SiNi_page_id == "Community") $Active = 'class="nav-item active"'; else $Active = ''; ?>
						<li <?php echo $Active; ?> ><a href="{{ url('/Community') }}"><i class="fas fa-users"></i> Community</a></li>
						*/ ?>

						<?php if($SiNi_page_id == "Videos") $Active = 'class="nav-item active"'; else $Active = ''; ?>
						<li <?php echo $Active; ?> style="padding-top: 8px;" ><a href="{{ url('/Videos') }}"><i class="fas fa-video"></i>&nbsp; Videos</a></li>

						<?php if($SiNi_page_id == "News") $Active = 'class="nav-item active"'; else $Active = 'class="nav-item"'; ?>
						<li <?php echo $Active; ?> style="padding-top: 8px;" ><a href="{{ url('/News') }}"><i class="far fa-newspaper"></i>&nbsp; News</a></li>

						<?php if($SiNi_page_id == "Help") $Active = 'class="nav-item active"'; else $Active = 'class="nav-item"'; ?>
						<li <?php echo $Active; ?> style="padding-top: 8px;" ><a href="{{ url('https://docs.sinisoftware.com') }}" target="_blank"><i class="fas fa-ambulance"></i>&nbsp; Help</a></li>

						<li>
							&nbsp; &nbsp; &nbsp;
						</li>

						@if (Route::has('login'))
				  			@if (Auth::check())
					  			<?php if($SiNi_page_id == "Login") $Active = 'class="active"'; else $Active = ''; ?>
								<li <?php echo $Active; ?> >
								<a href="{{ url('/User/Dashboard') }}"><img height="35" style="padding-top: 0px; padding-bottom: 0px;" src="/images/default.png"> &nbsp; {{ Auth::user()->name }}</a>
					  		@else
								<?php if($SiNi_page_id == "Login") $Active = 'class="active"'; else $Active = ''; ?>
								<li <?php echo $Active; ?>  style="padding-top: 8px;" >
								<a href="{{ url('/login') }}"><i class="fa fa-user"></i> &nbsp; Login / Register</a>
				  			</li>
				  			@endif
			  			@endif
			  		</ul>
				</div>
				<!----------------- End Login ---------------------------------->
			</div>
		</div>
	</nav>
</div>
<!-- Nav Computer --->
<div class="d-none d-xl-block">
	<nav class="navbar navbar-expand fixed-top">
		<div class="container-full">
			<div class="row">
				<!----------------- Start Logo ---------------------------------->
				<div class="col-1 d-flex justify-content-start align-items-center">
					<a href="{{ url('/') }}" class="img-fluid" alt="SiNi Software Logo"><img height="50" style="padding-top: 0px; padding-bottom: 0px;" src="/images/sini/SiNi_Logo.png"></a> 
				</div>
				<!----------------- End Logo ---------------------------------->
				<!----------------- Start Nav ---------------------------------->
				<!-- Nav Computer --->
				<div class="col-8 d-flex justify-content-center align-items-center">
					<ul class="navbar-nav mx-auto flex-row justify-content-center flex-nowrap" style="width: 100%;">
				  		<?php if($SiNi_page_id == "Home") $Active = 'class="nav-item active"'; else $Active = ''; ?>
						<li <?php echo $Active; ?> ><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>

						<?php if($SiNi_page_id == "Products") $Active = 'class="nav-item active"'; else $Active = ''; ?>
						<li <?php echo $Active; ?> ><a href="{{ url('/Products') }}"><i class="fa fa-puzzle-piece"></i> Products</a></li>

						<?php if($SiNi_page_id == "Pricing") $Active = 'class="nav-item active"'; else $Active = ''; ?>
						<li <?php echo $Active; ?> ><a href="{{ url('/Pricing') }}"><i class="fa fa-tag"></i> Pricing</a></li>

						<?php if($SiNi_page_id == "Forum") $Active = 'class="nav-item active"'; else $Active = ''; ?>
						<li <?php echo $Active; ?> ><a href="{{ url('/Forum') }}"><i class="fa fa-comments"></i> Forum</a></li>
						<?php /*
						<?php if($SiNi_page_id == "Community") $Active = 'class="nav-item active"'; else $Active = ''; ?>
						<li <?php echo $Active; ?> ><a href="{{ url('/Community') }}"><i class="fas fa-users"></i> Community</a></li>
						*/ ?>
						<?php if($SiNi_page_id == "Videos") $Active = 'class="nav-item active"'; else $Active = ''; ?>
						<li <?php echo $Active; ?> ><a href="{{ url('/Videos') }}"><i class="fas fa-video"></i> Videos</a></li>

						<?php if($SiNi_page_id == "About") $Active = 'class="nav-item active"'; else $Active = 'class="nav-item"'; ?>
						<li <?php echo $Active; ?> ><a href="{{ url('/About') }}"><i class="fa fa-info"></i> About</a></li>

						<?php if($SiNi_page_id == "News") $Active = 'class="nav-item active"'; else $Active = 'class="nav-item"'; ?>
						<li <?php echo $Active; ?> ><a href="{{ url('/News') }}"><i class="far fa-newspaper"></i> News</a></li>

						<?php if($SiNi_page_id == "Help") $Active = 'class="nav-item active"'; else $Active = 'class="nav-item"'; ?>
						<li <?php echo $Active; ?> ><a href="{{ url('https://docs.sinisoftware.com') }}" target="_blank"><i class="fas fa-ambulance"></i> Help</a></li>

						<?php if($SiNi_page_id == "Hefredlp") $Active = 'class="nav-item active"'; else $Active = 'class="nav-item"'; ?>
						<li <?php echo $Active; ?> ><a href="{{ url('/User/Downloads') }}"><i class="fas fa-download"></i> Download</a></li>

			  		</ul>
				</div>
				<!----------------- End Nav ---------------------------------->
				<!----------------- Start Login ---------------------------------->
				<div class="col-3 d-flex justify-content-center align-items-center">
					<ul class="navbar-nav flex-row justify-content-center flex-nowrap">
						<li>
					  		<a href="http://www.facebook.com/SiNiSoftware/" target=”_blank” style="padding-right: 7px;"><span><i class="fab fa-facebook-f"></i></span></a>
						</li>
						<li class="nav-item">
				  			<a href="http://www.linkedin.com/company/sini-software" target=”_blank” style="padding-right: 5px;"><span><i class="fab fa-linkedin-in"></i>&nbsp;</span></a>
						</li>
						<li class="nav-item">
				  			<a href="https://www.youtube.com/channel/UCSNP2LotVppRbntKKrd_dBQ" target=”_blank” style="padding-right: 5px;"><span><i class="fab fa-youtube"></i>&nbsp;</span></a>
						</li>
						<li class="nav-item">
				  			<a href="http://twitter.com/SiNi_Software" target=”_blank” style="padding-right: 20px;"><span><i class="fab fa-twitter"></i>&nbsp;</span></a>
						</li>
			  		</ul>
					<ul class="navbar-nav flex-row justify-content-center flex-nowrap">

		  			</ul>
				</div>
				<!----------------- End Login ---------------------------------->
			</div>
		</div>
	</nav>
</div>
<script src="{{ asset('js/jquery.js') }}"></script>
<script>
window.onscroll = function() {
	if (screen.width > 374) {
		if ($(window).scrollTop() >= 20) { 
			$('.navbar').css({ 
				'padding-top': '0px',
				'padding-bottom': '0px',
				'background': 'rgba(45, 46, 53, 0.9)'
			});
		}
		else { 
			$('.navbar').css({ 
				'padding-top': '25px',
				'padding-bottom': '25px',
				'background': 'rgba(45, 46, 53, 0.2)'
			});
		}
	}
	else{
		if ($(window).scrollTop() >= 20) { 
			$('.navbar').css({ 
				'padding-top': '4px',
				'padding-bottom': '4px',
				'background': 'rgba(45, 46, 53, 0.9)'
			});
		}
		else { 
			$('.navbar').css({ 
				'padding-top': '15px',
				'padding-bottom': '15px',
				'background': 'rgba(45, 46, 53, 0.2)'
			});
		}
	}
};

</script> 

<script>
$( ".dropdown-menu" ).css('margin-top',0);
$( ".dropdown" ).mouseover(function() {
	$( this ).addClass('show').attr('aria-expanded',"true");
	$( this ).find('.dropdown-menu').addClass('show');
})
.mouseout(function() {
	$( this ).removeClass('show').attr('aria-expanded',"false");
	$( this ).find('.dropdown-menu').removeClass('show');
});
</script>