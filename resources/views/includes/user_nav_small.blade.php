

<!----- Iphone small ------>
<div class="row d-block d-sm-none">
    <div class="col-12" style="padding-bottom: 8px;">
    	<div class="card nopadding">
			<div class="card-body" style="padding-bottom: 10px; padding-top: 10px;">	
				<div class="row">
					<div class="col-12 flex-row justify-content-center">
						<!----------------- Start Nav ---------------------------------->
						<center>
							<ul class="navbar-nav mx-auto flex-row justify-content-center flex-nowrap" style="width: 100%;">

								<?php if($SiNi_admin_id == "Update") $Active = 'class="nav-item active"'; else $Active = ''; ?>
								<li  style="padding-left: 5px" <?php echo $Active; ?> ><a style="padding-right: 5px;" href="{{ url('/User/Details') }}">Details</a></li>

								<?php if($SiNi_admin_id == "Users") $Active = 'class="nav-item active"'; else $Active = ''; ?>
								<li style="padding-left: 5px" <?php echo $Active; ?> ><a style="padding-right: 5px;" href="{{ url('/User/User') }}">Users</a></li>

								<?php if($SiNi_admin_id == "Licences") $Active = 'class="nav-item active"'; else $Active = ''; ?>
								<li style="padding-left: 5px" <?php echo $Active; ?> ><a style="padding-right: 5px;" href="{{ url('/User/Licences') }}">Licences</a></li>

								<?php if($SiNi_admin_id == "Tickets") $Active = 'class="nav-item active"'; else $Active = ''; ?>
								<li style="padding-left: 5px" <?php echo $Active; ?> ><a style="padding-right: 5px;" href="{{ url('/User/NewTicket') }}">Tickets
								@if(0 > 0)
									<span style="background-color: #3a3c46;"><span style="color: #db524b;"><i class="fas fa-exclamation-circle"> </i> 0</span></span>
								@endif
								</a></li>


							</ul>
						</center>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>

<!----- Iphone Large ------>
<div class="row d-none d-sm-block d-md-none">
    <div class="col-12" style="padding-bottom: 8px;">
    	<div class="card nopadding">
			<div class="card-body" style="padding-bottom: 10px; padding-top: 10px;">	
				<div class="row">
					<div class="col-12 flex-row justify-content-center">
						<!----------------- Start Nav ---------------------------------->
						<center>
							<ul class="navbar-nav mx-auto flex-row justify-content-center flex-nowrap" style="width: 100%;">
								<?php if($SiNi_admin_id == "Dashboard") $Active = 'class="nav-item active"'; else $Active = ''; ?>
								<li <?php echo $Active; ?> ><a style="padding-right: 5px;" href="{{ url('/User/Dashboard') }}">Dash</a></li>

								<?php if($SiNi_admin_id == "Update") $Active = 'class="nav-item active"'; else $Active = ''; ?>
								<li  style="padding-left: 15px" <?php echo $Active; ?> ><a style="padding-right: 5px;" href="{{ url('/User/Details') }}">Details</a></li>

								<?php if($SiNi_admin_id == "Users") $Active = 'class="nav-item active"'; else $Active = ''; ?>
								<li style="padding-left: 15px" <?php echo $Active; ?> ><a style="padding-right: 5px;" href="{{ url('/User/User') }}">Users</a></li>

								<?php if($SiNi_admin_id == "Licences") $Active = 'class="nav-item active"'; else $Active = ''; ?>
								<li style="padding-left: 15px" <?php echo $Active; ?> ><a style="padding-right: 5px;" href="{{ url('/User/Licences') }}">Licences</a></li>

								<?php if($SiNi_admin_id == "New_Ticket") $Active = 'class="nav-item active"'; else $Active = ''; ?>
								<li style="padding-left: 15px" <?php echo $Active; ?> ><a style="padding-right: 5px;" href="{{ url('/User/NewTicket') }}">New Tickets</a></li>

								<?php if($SiNi_admin_id == "Tickets") $Active = 'class="nav-item active"'; else $Active = ''; ?>
								<li style="padding-left: 15px" <?php echo $Active; ?> ><a style="padding-right: 5px;" href="{{ url('/User/NewTicket') }}">Tickets
								@if(0 > 0)
									<span style="background-color: #3a3c46;"><span style="color: #db524b;"><i class="fas fa-exclamation-circle"> </i> 0</span></span>
								@endif
								</a></li>

								<?php if($SiNi_admin_id == "History") $Active = 'class="nav-item active"'; else $Active = ''; ?>
								<li style="padding-left: 15px" <?php echo $Active; ?> ><a style="padding-right: 5px;" href="{{ url('/User/History') }}">Invoices</a></li>

							</ul>
						</center>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>

<!----- Ipade small ------>
<div class="row d-none d-md-block d-lg-none">
    <div class="col-12" style="padding-bottom: 8px;">
    	<div class="card nopadding">
			<div class="card-body" style="padding-bottom: 10px; padding-top: 10px;">	
				<div class="row">
					<div class="col-12 flex-row justify-content-center">
						<!----------------- Start Nav ---------------------------------->
						<center>
							<ul class="navbar-nav mx-auto flex-row justify-content-center flex-nowrap" style="width: 100%;">
								<?php if($SiNi_admin_id == "Dashboard") $Active = 'class="nav-item active"'; else $Active = ''; ?>
								<li <?php echo $Active; ?> ><a style="padding-right: 5px;" href="{{ url('/User/Dashboard') }}"><i class="fas fa-home"></i> &nbsp;Dashboard</a></li>

								<?php if($SiNi_admin_id == "Update") $Active = 'class="nav-item active"'; else $Active = ''; ?>
								<li  style="padding-left: 20px" <?php echo $Active; ?> ><a style="padding-right: 5px;" href="{{ url('/User/Details') }}"><i class="fas fa-cog"></i> &nbsp;Details</a></li>

								<?php if($SiNi_admin_id == "Users") $Active = 'class="nav-item active"'; else $Active = ''; ?>
								<li style="padding-left: 20px" <?php echo $Active; ?> ><a style="padding-right: 5px;" href="{{ url('/User/User') }}"><i class="fas fa-users"></i> &nbsp;Users</a></li>

								<?php if($SiNi_admin_id == "Licences") $Active = 'class="nav-item active"'; else $Active = ''; ?>
								<li style="padding-left: 20px" <?php echo $Active; ?> ><a style="padding-right: 5px;" href="{{ url('/User/Licences') }}"><i class="fas fa-calendar-check"></i> &nbsp;Licences</a></li>

								<?php if($SiNi_admin_id == "New_Ticket") $Active = 'class="nav-item active"'; else $Active = ''; ?>
								<li style="padding-left: 20px" <?php echo $Active; ?> ><a style="padding-right: 5px;" href="{{ url('/User/NewTicket') }}"><i class="fas fa-ambulance"></i>&nbsp;New Tickets</a></li>

								<?php if($SiNi_admin_id == "Tickets") $Active = 'class="nav-item active"'; else $Active = ''; ?>
								<li style="padding-left: 20px" <?php echo $Active; ?> ><a style="padding-right: 5px;" href="{{ url('/User/NewTicket') }}"><i class="fas fa-ambulance"></i>&nbsp;Tickets
								@if(0 > 0)
									<span style="background-color: #3a3c46;"><span style="color: #db524b;"><i class="fas fa-exclamation-circle"> </i> 0</span></span>
								@endif
								</a></li>

								<?php if($SiNi_admin_id == "History") $Active = 'class="nav-item active"'; else $Active = ''; ?>
								<li style="padding-left: 20px" <?php echo $Active; ?> ><a style="padding-right: 5px;" href="{{ url('/User/History') }}"><i class="fas fa-file-invoice-dollar"></i>&nbsp;Invoices</a></li>

							</ul>
						</center>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>




