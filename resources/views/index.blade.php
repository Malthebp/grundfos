@extends('layouts.app')

@section('headerLeft')
@endsection

@section('headline')
Home
@endsection

@section('headerRight')
@endsection

@section('content')
<main id="withMargin">
	<section class="search">
		<div>
			<form action="search">
				<input type="" name="search" placeholder="Search...">
				<span><i class="icon-gr-search" aria-hidden="true"></i></span>
			</form>
		</div>
	</section> 

	<users-clients :userid="{{Auth::id()}}"></users-clients>
	<users-pumps :uid="{{Auth::id()}}"></users-pumps>
</main>

@endsection

@section('navigation')
@include('layouts.navigation')
@endsection