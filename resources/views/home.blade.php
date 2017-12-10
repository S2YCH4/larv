@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="list-inline list-unstyled text-center">
                <li>
                    <a href="admin/pages">Strony</a>
                </li>
                <li>
                    <a href="admin/posts">Wpisy</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Jesteś zalogowany!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
