@extends('Template')
@section('tableproduit')
div class="row gx-3">
						<div class="col-12">
												<div class="table-responsive">
													<table class="table table-bordered">
														<thead>
															<tr>
																<th colspan="7" class="pt-3 pb-3">
																	Items/Products
																</th>
															</tr>
															<tr>
																<th>Product</th>
																<th>Quantity</th>
																<th>Unit</th>
																<th>Price</th>
																<th>VAT</th>
																<th>Amount (Net)</th>
																<th>Actions</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>
																	<!-- Form group start -->
																	<select class="form-select">
																		<option>Select Product</option>
																		<option>Mobiles</option>
																		<option>Books</option>
																		<option>Clothing</option>
																		<option>Electronics</option>
																		<option>Food</option>
																		<option>Games</option>
																		<option>Gifts</option>
																		<option>Laptops</option>
																		<option>Mobiles</option>
																		<option>Music</option>
																		<option>Office</option>
																		<option>Pharmacy</option>
																		<option>Sports</option>
																		<option>Toys</option>
																	</select>
																	<!-- Form group end -->
																</td>
																<td>
																	<!-- Form group start -->
																	<div class="m-0">
																		<input type="number" class="form-control" placeholder="Qty" />
																	</div>
																	<!-- Form group end -->
																</td>
																<td>
																	<!-- Form group start -->
																	<div class="m-0">
																		<input type="text" class="form-control" />
																	</div>
																	<!-- Form group end -->
																</td>
																<td>
																	<!-- Form group start -->
																	<div class="input-group m-0">
																		<input type="text" class="form-control" />
																		<span class="input-group-text">
																			<i class="bi bi-currency-dollar"></i>
																		</span>
																	</div>
																	<!-- Form group end -->
																</td>
																<td>
																	<!-- Form group start -->
																	<div class="input-group m-0">
																		<input type="text" class="form-control" />
																		<span class="input-group-text">%</span>
																	</div>
																	<!-- Form group end -->
																</td>
																<td>
																	<!-- Form group start -->
																	<div class="input-group m-0">
																		<input type="text" class="form-control" />
																		<span class="input-group-text">
																			<i class="bi bi-currency-dollar"></i>
																		</span>
																	</div>
																	<!-- Form group end -->
																</td>
																<td>
																	<div class="d-inline-flex gap-3">
																		<button class="btn btn-outline-danger">
																			<i class="bi bi-trash m-0"></i>
																		</button>
																		<button class="btn btn-outline-success">
																			<i class="bi bi-pencil m-0"></i>
																		</button>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<!-- Form group start -->
																	<select class="form-select">
																		<option>Select Product</option>
																		<option>Mobiles</option>
																		<option>Books</option>
																		<option>Clothing</option>
																		<option>Electronics</option>
																		<option>Food</option>
																		<option>Games</option>
																		<option>Gifts</option>
																		<option>Laptops</option>
																		<option>Mobiles</option>
																		<option>Music</option>
																		<option>Office</option>
																		<option>Pharmacy</option>
																		<option>Sports</option>
																		<option>Toys</option>
																	</select>
																	<!-- Form group end -->
																</td>
																<td>
																	<!-- Form group start -->
																	<div class="m-0">
																		<input type="number" class="form-control" placeholder="Qty" />
																	</div>
																	<!-- Form group end -->
																</td>
																<td>
																	<!-- Form group start -->
																	<div class="m-0">
																		<input type="text" class="form-control" />
																	</div>
																	<!-- Form group end -->
																</td>
																<td>
																	<!-- Form group start -->
																	<div class="input-group m-0">
																		<input type="text" class="form-control" />
																		<span class="input-group-text">
																			<i class="bi bi-currency-dollar"></i>
																		</span>
																	</div>
																	<!-- Form group end -->
																</td>
																<td>
																	<!-- Form group start -->
																	<div class="input-group m-0">
																		<input type="text" class="form-control" />
																		<span class="input-group-text">%</span>
																	</div>
																	<!-- Form group end -->
																</td>
																<td>
																	<!-- Form group start -->
																	<div class="input-group m-0">
																		<input type="text" class="form-control" />
																		<span class="input-group-text">
																			<i class="bi bi-currency-dollar"></i>
																		</span>
																	</div>
																	<!-- Form group end -->
																</td>
																<td>
																	<div class="d-inline-flex gap-3">
																		<button class="btn btn-outline-danger">
																			<i class="bi bi-trash m-0"></i>
																		</button>
																		<button class="btn btn-outline-success">
																			<i class="bi bi-pencil m-0"></i>
																		</button>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<button class="btn btn-dark">
																		Add New Row
																	</button>
																</td>
																<td colspan="6">
																	<div class="row justify-content-end">
																		<div class="col-auto">
																			<label class="col-form-label">Discount % of Total Amount</label>
																		</div>
																		<div class="col-auto">
																			<input type="text" class="form-control" placeholder="0%" />
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<td colspan="5">&nbsp;</td>
																<td>
																	<p class="m-0">Subtotal</p>
																	<p class="m-0">Discount</p>
																	<p class="m-0">VAT</p>
																	<h5 class="mt-2 text-red">Total USD</h5>
																</td>
																<td>
																	<p class="m-0">$0.00</p>
																	<p class="m-0">$0.00</p>
																	<p class="m-0">$0.00</p>
																	<h5 class="mt-2 text-red">$0.00</h5>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
											<div class="col-12">
												<div class="text-end">
													<button class="btn btn-outline-dark">Save as Draft</button>
													<a href="invoice-list.html" class="btn btn-danger ms-1">Create Invoice</a>
												</div>
											</div>
										</div>



@endsection