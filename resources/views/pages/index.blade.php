@extends('layouts.app')


@section('content')

<div class="container text-center">
    Ze słonecznej SBM!
    Lista Stron!
    <table class="table table-hover text-left">
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach($pages as $page)
            <tr>
                <td>{{ $page->id }}</td>
                <td>{{ $page->title  }}</td>
                <td><a class="btn btn-info" href="#!">Edit</a></td>
                <td><a class="btn btn-danger" href="#!">Delete</a></td></td>
            </tr>
        @endforeach
    </table>

    {{ $pages->links() }}
</div>
@endsection