@extends('index.master')

@section('head')

{!! Html::style('assets/css/bootstrap.min.css') !!}


{!! Html::style('assets/css/main.css') !!}


{!! Html::style('assets/css/style.css') !!}
@stop

@section('content')
<div class="section group" >
	<div class="col_1_of_3 span_1_of_3" style="width: 15%;padding-left: 5%;">
		<div class="left-sidebar">
		@foreach($categories as $cat)
			<div class="panel-group" id="accordian"><!--category-productsr-->
				<div class="shop_categories">
					<div class="panel-heading">
						<h4 ><a href="javascript:category_filter({!!  $cat->id !!});">{!!  $cat->name !!}</a></h4>
					</div>
				</div>
			</div>
		@endforeach
		<div class="panel-group" id="accordian"><!--category-productsr-->
			<div class="shop_categories">
				<div class="panel-heading">
					<h5 ><a href="javascript:showAllProducts();">All products</a></h5>
				</div>
			</div>
		</div>
		</div>
	</div>
	<div class="col_1_of_3 span_1_of_3" style="width: 75%;margin-left: 10%;">
		<div class="section group">
			@foreach($products as $item)
				<div class="grid_1_of_3 events_1_of_3 category_{!!  $item->category_id !!}">
					<div>
						<div class="product-image-wrapper">
							<div class="single-products">
								<div class="productinfo text-center">
									{!!  Html::image(asset('/images/products/'. $item->image)) !!}
									<h3>{!!  $item->name !!}</h3>
									<p>$ {!!  $item->price !!}</p>
									<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
								</div>
								<div class="product-overlay ">
									<div class="overlay-content">
										<h3>{!!  $item->name !!}</h3>
										<h4>{!!  $item->description !!}</h4>
										<h4>$ {!!  $item->price !!}</h4>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>	
			@endforeach															

		</div>
	</div>
</div>
@stop