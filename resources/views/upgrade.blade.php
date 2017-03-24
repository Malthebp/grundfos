@extends('layouts.app')

@section('headerLeft')
	<a href="{{URL::previous()}}">
        <i class=" icon-gr-left-angle" aria-hidden="true"></i>
    </a>
@endsection

@section('headline')
	Upgrade
@endsection

@section('headerRight')
@endsection

@section('content')
<main class="upgradeWrapper">
	<h2>ALPHA 3 will save you</h2>

	<section>
		<div><img src="../images/power.png"></img></div>
		<p>...electricity by manually regulating the pump pressure</p>
	</section>
	<section>
		<div><img src="../images/money.png"></img></div>
		<p>...expences on pump power and water</p>
	</section>
	<section>
		<div id="lastSection"><img src="../images/drop.png"></img></div>
		<p>...water and make you more environmently aware</p>
	</section>

</main>

@endsection