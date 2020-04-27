
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				@guest
					<p>Guest</p>
				@else
					<p>{{ Auth::user()->name }}</p>
				@endif
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MAIN NAVIGATION</li>
			@if(Auth::user()->role == 1 || Auth::user()->role == 2)

				<li class="treeview menu-open">
					<a href="{{ url('/') }}">
						<i class="fa fa-dashboard"></i> <span>Dashboard</span>
						<span class="pull-right-container"></span>
					</a>
				</li>
				<li class="treeview active">
					<a href="#">
						<i class="fa fa-codepen"></i>
						<span>Products</span>
						<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i></span>
					</a>
					<ul class="treeview-menu">
						<li class=""><a href="{{ url('category/') }}"><i class="fa fa- fa-cube"></i> Category</a></li>
						<li class=""><a href="{{ url('sub_category/') }}"><i class="fa fa- fa-cube"></i> Sub Category</a></li>
						<li><a href="{{ route('product.index') }}"><i class="fa fa-codepen"></i> Products</a></li>
					</ul>
				</li>
				<li><a href="{{ route('users.index') }}"><i class="fa fa-users"></i>Manage Users</a></li>
				<li> <a href="{{url('contact-info')}}"><i class="fa fa-address-book"></i>Contact Info</a> </li>
				<li><a href="{{ route('table.index') }}"><i class="fa fa-table"></i>Tables</a></li>
				<li class="treeview active">
					<a href="#">
						<i class="fa fa-codepen"></i>
						<span>Report</span>
						<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i></span>
					</a>
					<ul class="treeview-menu">
						<li class=""><a href="{{ url('report/sales') }}"><i class="fa fa- fa-cube"></i> Sales Report</a></li>
						<li class=""><a href="{{ url('report/product_sales') }}"><i class="fa fa- fa-cube"></i> Product sales</a></li>
						<li class=""><a href="{{ route('users.index') }}"><i class="fa fa- fa-cube"></i> Sales for staff/tables</a></li>
					</ul>
				</li>
			@endif
			@if(Auth::user()->role == 5 || Auth::user()->role == 1 || Auth::user()->role == 2)
				<li><a href="{{ route('kitchen.index') }}"><i class="fa fa-cutlery"></i>Kitchen</a></li>
			@endif
			@if(Auth::user()->role == 3 || Auth::user()->role == 1 || Auth::user()->role == 2)
				<li><a href="{{ route('cashier.index') }}"><i class="fa fa-money"></i>Cashier</a></li>
			@endif
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>