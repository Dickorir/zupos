
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
		<!-- search form -->
		<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Search...">
				<span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
			</div>
		</form>
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MAIN NAVIGATION</li>
			<li class="treeview menu-open">
				<a href="{{ url('/') }}">
					<i class="fa fa-dashboard"></i> <span>Dashboard</span>
					<span class="pull-right-container">
            </span>
				</a>
			</li>
			<li class="treeview active">
				<a href="#">
					<i class="fa fa-codepen"></i>
					<span>Products</span>
					<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
				</a>
				<ul class="treeview-menu">
					<li class="active"><a href="{{ url('category/') }}"><i class="fa fa- fa-cube"></i> Category</a></li>
					<li class="active"><a href="{{ url('sub_category/') }}"><i class="fa fa- fa-cube"></i> Sub Category</a></li>
					<li><a href="{{ route('product.index') }}"><i class="fa fa-codepen"></i> Products</a></li>
					<li><a href="{{ route('product_variant.index') }}"><i class="fa fa-codepen"></i> Products Variant</a></li>
				</ul>
			</li>
			<li><a href="{{ route('users.index') }}"><i class="fa fa-users"></i>Manage Users</a></li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>