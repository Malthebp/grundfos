@extends('layouts.app')

@section('headerLeft')
	<a href="{{URL::previous()}}">
        <i class=" icon-gr-left-angle" aria-hidden="true"></i>
    </a>
@endsection

@section('headline')
	Add new client
@endsection

@section('headerRight')
@endsection

@section('content')
<main>
	<form action="/newclient/create" method="POST" class="createForm">
	{{ csrf_field() }}
		<section>
			<div>
				<i class="icon-gr-user"></i>
			</div>
			<div>
				<label for="name">Name</label>
				<input type="text" name="name" id="name" placeholder="John Doe">
			</div>
		</section>
		<section>
			<div>
				<i class="icon-gr-location"></i>
			</div>
			<div>
				<label for="address">Address of client</label>
				<input type="text" name="address" placeholder="Ex. Ringvej syd 104, 8260 Viby J" id="address">
			</div>
		</section>
		<section>
			<div>
				<i class="icon-gr-call"></i>
			</div>
			<div>
				<label for="phone">Telephone</label>
				<input type="text" name="phone" placeholder="Ex. +45 88 88 88 88" id="phone">
			</div>
		</section>
		<section>
			<div>
				<i class="icon-gr-mail-contact"></i>
			</div>
			<div>
				<label for="email">Email</label>
				<input type="text" name="email" placeholder="Ex. john@doe.com" id="email">
			</div>
		</section>
		<section>
			<div>
				<i class="icon-gr-doc-text"></i>
			</div>
			<div>
				<label for="description">Description</label>
				<input type="text" name="description" placeholder="Ex. Call 10 min before arrival" id="description">
			</div>
		</section>
		<button type="submit">
			<i class="icon-gr-check"></i>
			<div>
				Add client
			</div>
		</button>
	</form>
</main>

@endsection