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
				<span><i class="fa fa-search" aria-hidden="true"></i></span>
			</form>
		</div>
	</section> 


	<section class="searchResultCategory">
		<h2>Clients</h2>
		<article>
			<div class="addNew">
				<i class="icon-gr-plus-circle"></i>
				<p>	Add new client</p>
			</div>
		</article>
		<article>
			<div>
				<i class="icon-gr-social-users"></i>
			</div>
			<div>
				<h3>Erhvervsakademi Aarhus</h3>
				<p>Sønderhøj 30, 8260 Viby J</p>
			</div>
			<div class="select-cat-btn">
				<a><i class="icon-gr-right-angle"></i>
				</a>
			</div>
		</article>
		<article>
			<div>
				<i class="icon-gr-social-users"></i>
			</div>
			<div>
				<h3>Erhvervsakademi Aarhus</h3>
				<p>Sønderhøj 30, 8260 Viby J</p>
			</div>
			<div class="select-cat-btn">
				<a><i class="icon-gr-right-angle"></i>
				</a>
			</div>
		</article>
		<article>
			<div>
				<i class="icon-gr-social-users"></i>
			</div>
			<div>
				<h3>Erhvervsakademi Aarhus</h3>
				<p>Sønderhøj 30, 8260 Viby J</p>
			</div>
			<div class="select-cat-btn">
				<a><i class="icon-gr-right-angle"></i>
				</a>
			</div>
		</article>
	</section>

	<section class="searchResultCategory">
		<h2>Pumps</h2>
		<article>
			<div class="addNew">
				<i class="icon-gr-plus-circle"></i>
				<p>	Add new pump</p>
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
			<div class="select-cat-btn">
				<a><i class="icon-gr-right-angle"></i>
				</a>
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
			<div class="select-cat-btn">
				<a><i class="icon-gr-right-angle"></i>
				</a>
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
			<div class="select-cat-btn">
				<a><i class="icon-gr-right-angle"></i>
				</a>
			</div>
		</article>
	</section>
</main>

@endsection

@section('navigation')
@include('layouts.navigation')
@endsection