@extends('layouts.app')

@section('headline')
Catalogue
@endsection

@section('content')

<main id="withMargin" class="mainCategory">
    <section class="searchResultCategory categories">
        <h2>Categories</h2>
        @foreach ($categories as $category)
        <a href="catalogue/{{$category->id}}">
            <article class="category">
                <div class="{{$category->imagepath}}">
                </div>
                <div class="description">
                    <h3>{{$category->name}}</h3>
                    <p>{{$category->description}}</p>
                </div>
            </article>
        </a>
        @endforeach
    </section>

</main>
@endsection