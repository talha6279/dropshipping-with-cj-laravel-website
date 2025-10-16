@extends('admin/layout')
@section('admincontent')


		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
			<div class="row row-cols-1 row-cols-md-2 row-cols-xl-5">
					<div class="col">
						<div class="card radius-10 overflow-hidden">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary font-14">Total Orders</p>
										<h5 class="my-0">{{$totalorders}}</h5>
									</div>
									<div class="text-primary ms-auto font-30"><i class='bx bx-cart-alt'></i>
									</div>
								</div>
							 </div>
							<div class="mt-1" id="chart1"></div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 overflow-hidden">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary font-14">Total Carts</p>
										<h5 class="my-0">{{$totalcarts}}</h5>
									</div>
									<div class="text-danger ms-auto font-30"><i class='bx bx-dollar' ></i>
									</div>
								</div>
							</div>
							<div class="mt-1" id="chart2"></div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 overflow-hidden">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary font-14">New Users</p>
										<h5 class="my-0">{{$totalusers}}</h5>
									</div>
									<div class="text-success ms-auto font-30"><i class='bx bx-group'></i>
									</div>
								</div>
							</div>
							<div class="mt-1" id="chart3"></div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 overflow-hidden">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary font-14">Sold Items</p>
										<h5 class="my-0">{{$delieverdorders}}</h5>
									</div>
									<div class="text-warning ms-auto font-30"><i class='bx bx-beer'></i>
									</div>
								</div>
							</div>
							<div class="mt-1" id="chart4"></div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 overflow-hidden">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary font-14">Shipped</p>
										<h5 class="my-0">{{$shippedorders}}</h5>
									</div>
									<div class="text-info ms-auto font-30"><i class='bx bx-camera-movie'></i>
									</div>
								</div>
							</div>
							<div class="mt-1" id="chart5"></div>
						</div>
					</div>
				  </div><!--end row-->
				

				<x-admin-recent-order-history></x-admin-recent-order-history>

					
					 </div><!--end row-->

					 
						
					 </div><!--end row-->

			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button-->
		  <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		

@endsection