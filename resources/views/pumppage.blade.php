@extends('layouts.app')

@section('headerLeft')
	<redirect-back></redirect-back>
@endsection

@section('headline')
	Home
@endsection

@section('headerRight')
@endsection

@section('content')
<main >
	{{$pump->description}}
</main>
@endsection


