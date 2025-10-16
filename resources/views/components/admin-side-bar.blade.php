<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{asset('dashboard/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Chandar</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="{{route('website')}}" >
						<div class="parent-icon"><i class='bx bx-home-circle'></i>
						</div>
						<div class="menu-title">Website</div>
					</a>
				</li>
				<li>
					<a href="{{route('admin.dashboard')}}" >
						<div class="parent-icon"><i class='bx bx-home-circle'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>
				
				<li class="menu-label">UI Elements</li>
				
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-cart'></i>
						</div>
						<div class="menu-title">eCommerce</div>
					</a>
					<ul>
						<li> <a href="{{route('product.show')}}"><i class="bx bx-right-arrow-alt"></i>Products</a>
						</li>
						<li> <a href="{{route('product.trashshow')}}"><i class="bx bx-right-arrow-alt"></i>Deleted Products</a>
						</li>
						<li> <a href="{{route('product.add')}}"><i class="bx bx-right-arrow-alt"></i>Add New Products</a>
						</li>
						<li> <a href="{{route('view.orders')}}"><i class="bx bx-right-arrow-alt"></i>Orders</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
						</div>
						<div class="menu-title">Categories</div>
					</a>
					<ul>
						<li> <a href="{{route('product.category.show')}}"><i class="bx bx-right-arrow-alt"></i>All Categories</a>
						</li>
						<li> <a href="{{route('product.category.add')}}"><i class="bx bx-right-arrow-alt"></i>Add Category</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-repeat"></i>
						</div>
						<div class="menu-title">Sub Categories</div>
					</a>
					<ul>
						<li> <a href="{{route('product.subcategory.show')}}"><i class="bx bx-right-arrow-alt"></i>All Sub Categories</a>
						</li>
						<li> <a href="{{route('product.subcategory.show')}}"><i class="bx bx-right-arrow-alt"></i>Add Sub Category</a>
						</li>
					</ul>
				</li>
				
			</ul>
			<!--end navigation-->
		</div>