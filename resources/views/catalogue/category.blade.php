@extends('layouts.app')
@section('headerLeft')
    <a href="{{URL::previous()}}">
		<i class=" icon-gr-left-angle" aria-hidden="true"></i>
	</a>
@endsection
@section('headline')
Pumps
@endsection

@section('content')

<main id="withMargin" class="mainCategory">
	<section class="searchResultCategory categories">
		<h2>Pumps</h2>
		@foreach ($category as $row)
		@for ($i = 0; $i <= count($row->pump)-1; $i++)
		<a href="pump/{{$row->id}}">
			<article class="category">
				<div class="{{$row->pump[$i]->imagepath}}">
				</div>
				<div class="description">
					<h3>{{$row->pump[$i]->name}}</h3>
					<p>{{$row->pump[$i]->description}}</p>
				</div>
			</article>
		</a>
		@endfor

		@endforeach
	</section>

</main>
@endsection 
