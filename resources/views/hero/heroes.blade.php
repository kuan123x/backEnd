@extends('welcome')

@section('content')
@if (session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
@endif
<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
    <a href="{{url('/team/create')}}" class="btn btn-primary me-md-2" type="button">
        Add new hero
    </button>
    </a>
  </div>
<table class="table table-bordered table-striped table">
    <thead>
        <th>Player</th>
        <th>Hero</th>
        <th>Hero Type</th>
    </thead>
    <tbody>
        @foreach($heroes as $hero)
        <tr>
            <td>{{$hero->player->name }}</td>
            <td>{{$hero->hero_name}}</td>
            <td>{{$hero->hero_type}}</td>

        </tr>
        @endforeach
    </tbody>
</table>

@endsection
