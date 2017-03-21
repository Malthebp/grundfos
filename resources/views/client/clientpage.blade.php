@extends('layouts.app')

@section('headerLeft')
	<a href="{{URL::previous()}}">
        <i class=" icon-gr-left-angle" aria-hidden="true"></i>
    </a>
@endsection

@section('headline')
	{{$client->name}}
@endsection

@section('headerRight')
@endsection

@section('content')
<main id="withMargin">
	<client v-bind:clientid="{{$client->id}}" v-bind:userid="{{Auth::id()}}"></client>
</main>

@endsection