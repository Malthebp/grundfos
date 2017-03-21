@extends('layouts.app')

@section('headerLeft')
    <a href="{{URL::previous()}}">
        <i class=" icon-gr-left-angle" aria-hidden="true"></i>
    </a>
@endsection

@section('headline')
Catalogue
@endsection

@section('content')

<main id="withMargin" class="mainCategory">
    <section class="searchResultCategory categories">
    <h2>Categories</h2>
        <a href="categories/heat">
        <article class="category">
            <div class="icon-gr-heat">
            </div>
            <div class="description">
                <h3>Heat</h3>
                <p>Circulator pumps for circulation of water in central and district heating …</p>
            </div>
        </article>
        </a>
        <article class="category">
            <div class="icon-gr-air">
            </div>
            <div class="description">
                <h3>Heat</h3>
                <p>Circulator pumps for circulation of water in central and district heating …</p>
            </div>
        </article>
        <article class="category">
            <div class="icon-gr-water">
            </div>
            <div class="description">
                <h3>Heat</h3>
                <p>Circulator pumps for circulation of water in central and district heating …</p>
            </div>
        </article>
    </section>
</main>
@endsection
