@extends('layouts.app')

@section('headerLeft')
	<a href="{{URL::previous()}}">
        <i class=" icon-gr-left-angle" aria-hidden="true"></i>
    </a>
@endsection

@section('headline')
	Add new pump
@endsection

@section('headerRight')
@endsection

@section('content')
<main>
	<form action="/newpump/create" method="POST" class="createForm">
	{{ csrf_field() }}
		<section>
			<div>
				<i class="icon-gr-tag"></i>
			</div>
			<div>
				<label for="model">Model Number</label>
				<select type="" name="model" id="model">
				@foreach($models as $model)
					<option value="{{$model->id}}">{{$model->model}}</option>
				@endforeach
				</select>
			</div>
		</section>
		<section>
			<div>
				<i class="icon-gr-doc-text"></i>
			</div>
			<div>
				<label for="alias">Alias</label>
				<input type="text" name="alias" placeholder="Ex. in the basement" id="alias">
			</div>
		</section>
		<section>
			<div>
				<i class="icon-gr-location"></i>
			</div>
			<div>
				<label for="pumpaddress">Address of pump</label>
				<input type="text" name="pumpaddress" placeholder="Ex. Ringvejsyd 104, 8260 Viby J" id="pumpaddress">
			</div>
		</section>
		<section>
			<div>
				<i class="icon-gr-calendar-date"></i>
			</div>
			<div>
				<label for="year">Year of installation</label>
				<input type="text" name="year" placeholder="Ex. 2017" id="year">
			</div>
		</section>
		<section class="picture">
			<div>
				<i class="icon-gr-camera"></i>
			</div>
			<label for="photo">Photo</label>
			<div>
				<div class="upload">
					<input type="file" name="year" id="photo">
				</div>
			</div>
		</section>

		<button type="submit">
			<i class="icon-gr-check"></i>
			<div>
				Add Pump
			</div>
		</button>
	</form>
</main>

@endsection