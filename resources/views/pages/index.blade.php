@extends('layouts.app')


@section('content')

<div class="container">
    Ze słonecznej SBM!
    Lista Stron!
    <ul>
        @foreach($pages as $page)
        <li>
            <h1>{{ $page->title }}</h1>
            <p>{{ $page->content }}</p>
        </li>
        @endforeach
    </ul>

    {{ $pages->links() }}
</div>
@endsection