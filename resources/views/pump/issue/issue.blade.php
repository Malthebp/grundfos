@extends('layouts.app')
@section('headerLeft')
	<a href="{{URL::previous()}}">
        <i class=" icon-gr-left-angle" aria-hidden="true"></i>
    </a>
@endsection
@section('headline')
{{$issue->name}}
@endsection

@section('content')

<main id="withMargin" class="pump">
	<section class="">
		<img src="../{{$issue->imagepath}}" alt="">
		<article>
			<h3>{{$issue->name}}</h3>
			<p>{{$issue->description}}</p>
		</article>
		<div class="expandable">
			<h4 class="icon-gr-service">Tools</h4>
			<div class="icon-gr-right-triangle icon-right"></div>
			@foreach ($tools as $tool)
			<div class="dropdown-content">
				<p class="text-left">{{$tool->name}}</p>
				<div class="icon-gr-right-angle icon-right"></div>
			</div>
			@endforeach
		</div>
		<div class="expandable">
			<h4 class="icon-gr-exchange-replace-switch">Spareparts</h4>
			<div class="icon-gr-right-triangle icon-right"></div>
			@foreach ($parts as $part)
			<div class="dropdown-content">
				<p class="text-left">{{$part->name}}</p>
				<div class="icon-gr-right-angle icon-right"></div>
			</div>
			@endforeach
		</div>
	</section>
</main>

@endsection