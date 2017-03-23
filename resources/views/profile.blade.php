@extends('layouts.app')

@section('headerLeft')
@endsection

@section('headline')
{{ucfirst(Auth::user()->name)}}
@endsection

@section('headerRight')
	<a href="/logout">
		<i class="icon-gr-log-out"></i>
	</a>
@endsection

@section('content')
<main id="withMargin">
<profile :uid="{{Auth::id()}}"></profile>
</main>

@endsection

@section('navigation')
@include('layouts.navigation')
@endsection