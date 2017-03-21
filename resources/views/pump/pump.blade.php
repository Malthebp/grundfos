@extends('layouts.app')

@section('headline')
{{$pump->name}}
@endsection

@section('content')

<main id="withMargin" class="pump">
	<section class="">
		<img src="../images/pumps/alpha3.png" alt="">
		<h3>{{$pump->name}}</h3>
	</section>
</main>
@endsection