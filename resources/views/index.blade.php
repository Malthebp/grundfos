@extends('layouts.app')

@section('headerLeft')
	<i class="fa fa-arrow-left" aria-hidden="true"></i>
@endsection

@section('headline')
	Home
@endsection

@section('headerRight')
	<i class="fa fa-pencil" aria-hidden="true"></i>
@endsection

@section('content')
<main id="withMargin">
	<section class="search">
		<div>
			<input type="" name="" placeholder="Search...">
			<span><i class="fa fa-search" aria-hidden="true"></i>
			</span>
		</div>
	</section> 

	<section class="addNew">
		<div>
			<i class="icon-gr-plus-circle" aria-hidden="true"></i>
			<p>Client</p>
		</div>
		<div>
			<i class="fa fa-plus-circle" aria-hidden="true"></i>
			<p>Pump</p>
		</div>
	</section>


	<section class="searchResultCategory">
		<h2>Clients</h2>
		<article>
			<div>
				<img src="images/client.png">
			</div>
			<div>
				<h3>Erhvervsakademi Aarhus</h3>
				<p>Sønderhøj 30, 8260 Viby J</p>
			</div>
		</article>
				<article>
			<div>
				<img src="images/client.png">
			</div>
			<div>
				<h3>Erhvervsakademi Aarhus</h3>
				<p>Sønderhøj 30, 8260 Viby J</p>
			</div>
		</article>
				<article>
			<div>
				<img src="images/client.png">
			</div>
			<div>
				<h3>Erhvervsakademi Aarhus</h3>
				<p>Sønderhøj 30, 8260 Viby J</p>
			</div>
		</article>
	</section>

	<section class="searchResultCategory">
		<h2>Pumps</h2>
		<article>
			<div>
				<img src="images/alpha3.jpg">
			</div>
			<div>
				<h3>Alpha 3 in basement</h3>
				<p>APHA3 15-80 130</p>
				<p class="location">Ringvejsyd 104, 8260 Viby J</p>
			</div>
		
		</article>
		<article>
			<div>
				<img src="images/alpha3.jpg">
			</div>
			<div>
				<h3>Alpha 3 in basement</h3>
				<p>APHA3 15-80 130</p>
				<p class="location">Ringvejsyd 104, 8260 Viby J</p>
			</div>
		</article>
		<article>
			<div>
				<img src="images/alpha3.jpg">
			</div>
			<div>
				<h3>Alpha 3 in basement</h3>
				<p>APHA3 15-80 130</p>
				<p class="location">Ringvejsyd 104, 8260 Viby J</p>
			</div>
		</article>
	</section>
</main>




@endsection