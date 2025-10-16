<div class="card radius-10">
                         <div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h6 class="mb-0">Recent Orders</h6>
								</div>
								<div class="dropdown ms-auto">
									<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
									</a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="javascript:;">Action</a>
										</li>
										<li><a class="dropdown-item" href="javascript:;">Another action</a>
										</li>
										<li>
											<hr class="dropdown-divider">
										</li>
										<li><a class="dropdown-item" href="javascript:;">Something else here</a>
										</li>
									</ul>
								</div>
							</div>
						 <div class="table-responsive">
						   <table class="table align-middle mb-0">
							<thead class="table-light">
							 <tr>
                                 <th>Product</th>
                                 <th>Photo</th>
                                 <th>Status</th>
                                 <th>Order Id</th>
                                 <th>Customer</th>
                                 <th>Mobile</th>
                                 <th>Email</th>
                                 <th>Address</th>
                                 <th>City</th>
                                 <th>Country</th>
                                 <th>Postal Code</th>
							   <th>Product ID</th>
							   <th>Amount</th>
							   <th>Date</th>
							   <th>Order Note</th>
							   <th>Change Status</th>
							 </tr>
							 </thead>
							 <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    <td>{{$order->products->itemname}}</td>
                                    <td><img src="{{ asset('uploads/products/images/'.$order->products->picture) }}" class="product-img-2" alt="product img"></td>
                                    <td>
										@if($order->status =='In Progress')
										<span class="badge bg-gradient-quepal text-white shadow-sm w-100">{{$order->status}}</span>
									    @elseif($order->status =='Shipped')
										<span class="badge bg-gradient-bloody text-white shadow-sm w-100">{{$order->status}}</span>
										@else
										<span class="badge bg-gradient-blooker text-white shadow-sm w-100">{{$order->status}}</span>
										@endif
									</td>
                                    <td>{{$order->order_id}}</td>
                                    <td>{{$order->first_name}} {{$order->last_name}}</td>
                                    <td>{{$order->phone}}</td>
                                    <td>{{$order->email}}</td>
                                    <td>{{$order->address}}</td>
                                    <td>{{$order->city}}</td>
                                    <td>{{$order->country}}</td>
                                    <td>{{$order->postal_code}}</td>
							  <td>{{$order->product_id}}</td>
							  <td>{{$order->products->discounted_price}}</td>
							  <td>{{$order->created_at}}</td>
							  <td>{{$order->order_note}}</td>
							  <td>
							  <a href="{{route('order.shipped', $order->order_id)}}"><span class="badge bg-gradient-bloody text-white shadow-sm w-50">Shipped</span></a>
							  <a href="{{route('order.delieverd', $order->order_id)}}"><span class="badge bg-gradient-blooker text-white shadow-sm w-50">Delieverd</span></a></td>
							 </tr>
                             @endforeach
						    </tbody>
						  </table>
						  </div>
						 </div>
					</div>

