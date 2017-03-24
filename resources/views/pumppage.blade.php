@extends('layouts.app')

@section('headerLeft')
	<a href="{{URL::previous()}}">
        <i class=" icon-gr-left-angle" aria-hidden="true"></i>
    </a>
@endsection

@section('headline')
	Home
@endsection

@section('headerRight')
@endsection

@section('content')
<main id="withMargin">
	<pumppage :pumpid="{{$pump->id}}" :userid="{{Auth::id()}}"></pumppage>
</main>
@endsection


