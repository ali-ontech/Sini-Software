
<div class="card nopadding">
	<div class="card-body" style="padding-left: 4px; padding-right: 1px;">	
		<span style="font-size: 15px; color: #ffffff;">Manage Account</span>
		<ul class="list-group list-group-mine">
			<?php if($SiNi_admin_id == "Dashboard") $Active = 'active'; else $Active = ''; ?>
			<a href="{{ url('/User/Dashboard') }}" class="list-group-item <?php echo $Active; ?>">&nbsp;&nbsp;<i class="fas fa-home"></i> &nbsp;User Dashboard</a>
			<?php if($SiNi_admin_id == "Update") $Active = 'active'; else $Active = ''; ?>
			<a href="{{ url('/User/Details') }}" class="list-group-item <?php echo $Active; ?>">&nbsp;&nbsp;<i class="fas fa-cog"></i> &nbsp;Update Details</a>
		</ul>
		<span style="font-size: 15px; color: #ffffff;">Buy SiNi Software</span>
		<ul class="list-group list-group-mine">
			<?php if($SiNi_admin_id == "Shopping") $Active = 'active'; else $Active = ''; ?>
			<a href="{{ url('/User/Buy') }}" class="list-group-item <?php echo $Active; ?>">&nbsp;&nbsp;<i class="fas fa-credit-card"></i> &nbsp;Buy SiNi</a>
		</ul>
		<span style="font-size: 15px; color: #ffffff;">Users & Licences</span>
		<ul class="list-group list-group-mine">
			<?php if($SiNi_admin_id == "Users") $Active = 'active'; else $Active = ''; ?>
			<a href="{{ url('/User/User') }}" class="list-group-item <?php echo $Active; ?>">&nbsp;&nbsp;<i class="fas fa-user"></i> &nbsp;Licences & Users</a>

			<?php if($SiNi_admin_id == "Licences") $Active = 'active'; else $Active = ''; ?>
			<a href="{{ url('/User/Licences') }}" class="list-group-item <?php echo $Active; ?>">&nbsp;&nbsp;<i class="fas fa-calendar-check"></i> &nbsp;Active Licences</a>
			@if(3 == 1)
				<?php if($SiNi_admin_id == "PaymentDetails") $Active = 'active'; else $Active = ''; ?>
				<a href="{{ url('/User/PaymentDetails') }}" class="list-group-item <?php echo $Active; ?>">&nbsp; <i class="fas fa-credit-card"></i> &nbsp;Payment Details</a>
			@endif
		</ul>
		<span style="font-size: 15px; color: #ffffff;">Downloads</span>
		<ul class="list-group list-group-mine">
			<?php if($SiNi_admin_id == "Downloads") $Active = 'active'; else $Active = ''; ?>
			<a href="{{ url('/User/Downloads') }}" class="list-group-item <?php echo $Active; ?>">&nbsp;&nbsp;<i class="fas fa-cloud-download-alt"></i> &nbsp;SiNi Products</a>
		</ul>
		<ul class="list-group list-group-mine">
			<?php if($SiNi_admin_id == "files") $Active = 'active'; else $Active = ''; ?>
			<a href="{{ url('/User/Files') }}" class="list-group-item <?php echo $Active; ?>">&nbsp;&nbsp;<i class="fas fa-cloud-download-alt"></i> &nbsp;SiNi Extra Files</a>
		</ul>
		<span style="font-size: 15px; color: #ffffff;">Support Tickets</span>
		<ul class="list-group list-group-mine">
			<?php if($SiNi_admin_id == "New_Ticket") $Active = 'active'; else $Active = ''; ?>
			<a href="{{ url('/User/NewTicket') }}" class="list-group-item <?php echo $Active; ?>">&nbsp;&nbsp;<i class="fas fa-bug"></i> &nbsp;New Ticket</a>
			
			<?php if($SiNi_admin_id == "Tickets") $Active = 'active'; else $Active = ''; ?>
			<a href="{{ url('/User/Tickets') }}" class="list-group-item <?php echo $Active; ?>">&nbsp;&nbsp;<i class="fas fa-bug"></i> &nbsp;View Tickets
			@if(0 > 0)
				<?php if($SiNi_admin_id == "Tickets") $MyColor = '#333640'; else $MyColor = '#3a3c46'; ?>
				<span class="badge float-md-right" style="background-color: <?php echo $MyColor; ?>;"><span style="color: #db524b;"><i class="fas fa-exclamation-circle"> </i> 0</span></span>
			@endif
			</a>
		</ul>
		<span style="font-size: 15px; color: #ffffff;">Order History</span>
		<ul class="list-group list-group-mine">
			<?php if($SiNi_admin_id == "History") $Active = 'active'; else $Active = ''; ?>
			<a href="{{ url('/User/History') }}" class="list-group-item <?php echo $Active; ?>">&nbsp;&nbsp;<i class="fas fa-file-invoice-dollar"></i> &nbsp;Sales Invoices</a>
		</ul>
		<span style="font-size: 15px; color: #ffffff;">Log Out</span>
		<ul class="list-group list-group-mine">

		</ul>
		<hr>
		<img src="/images/default.png" class="img-fluid" alt="user image" style="padding-top: 0px;">
	</div>
</div>




