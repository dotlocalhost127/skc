<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="../images/logo-dark.png" alt="">
						  <h3><b>SKC</b> Japan</h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li>
          <a href="">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>  
		
        <li class="treeview">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Manage users </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('user.view') }}"><i class="ti-more"></i>View User</a></li>
            <li><a href="{{ route('users.AddUser') }}"><i class="ti-more"></i>Add User</a></li>
          </ul>
        </li> 
        
        <li class="treeview">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Manage Profile </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('users.Password') }}"><i class="ti-more"></i>Change password</a></li>
          </ul>
        </li> 
		  


        <li class="treeview">
          <a href="#">
            <i data-feather="mail"></i> <span>Car Make</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('listing.view_make') }}"><i class="ti-more"></i>Views Make</a></li>
            <li><a href="{{ route('listing.Add_make') }}"><i class="ti-more"></i>Add Make</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i data-feather="mail"></i> <span>Car Model</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('listing.view_Model') }}"><i class="ti-more"></i>Views Model</a></li>
            <li><a href="{{ route('listing.Add_Model') }}"><i class="ti-more"></i>Add Model</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i data-feather="mail"></i> <span>Car listing</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('listing.View_listing') }}"><i class="ti-more"></i>View Listing</a></li>
            <li><a href="{{ route('listing.Add_listing') }}"><i class="ti-more"></i>Add listing</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i data-feather="mail"></i> <span>Accounts Department</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('accounts.view_account') }}"><i class="ti-more"></i>View Account Details</a></li>
            <li><a href="{{ route('accounts.Add_account') }}"><i class="ti-more"></i>Add Account Details</a></li>
          </ul>
        </li>
		
       		  
		 
        <li class="header nav-small-cap">User Interface</li>
		  
        <li class="treeview">
          <a href="#">
            <i data-feather="grid"></i>
            <span>Components</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="components_alerts.html"><i class="ti-more"></i>Alerts</a></li>
            <li><a href="components_badges.html"><i class="ti-more"></i>Badge</a></li>
            <li><a href="components_buttons.html"><i class="ti-more"></i>Buttons</a></li>
            <li><a href="components_sliders.html"><i class="ti-more"></i>Sliders</a></li>
            <li><a href="components_dropdown.html"><i class="ti-more"></i>Dropdown</a></li>
            <li><a href="components_modals.html"><i class="ti-more"></i>Modal</a></li>
            <li><a href="components_nestable.html"><i class="ti-more"></i>Nestable</a></li>
            <li><a href="components_progress_bars.html"><i class="ti-more"></i>Progress Bars</a></li>
          </ul>
        </li>
		  
	  		  
		  
		
    </section>
	
	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>