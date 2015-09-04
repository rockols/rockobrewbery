@extends('index.master')

@section('content')

<div class="section group" style="padding-left: 72px;">
	{{--*/ $count = 0 /*--}}
	@foreach($beers as $beer)
		{{--*/ $count++ /*--}}
		@if($count/3 == 0)
		</div>
			<div class="section group" style="padding-left: 72px;">
		@endif
			<div class="col_1_of_3 span_1_of_3 wraper_beers">
				<div class="txt1">
					<p class="beer_title" align='center'> 
					{{$beer->name}} </p>
					<p align='center'> {{$beer->description}} </p>
					<p align='center'>ABV: {{$beer->abv}}% - IBUS: {{$beer->ibus}}</p>
				</div>

				{!!  Html::image(asset('/images/our_beers/'. $beer->image)) !!}

			</div>

	@endforeach
</div>


@stop