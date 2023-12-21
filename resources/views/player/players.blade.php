@extends('welcome')

@section('content')
@if (session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
@endif
<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
    <a href="{{url('/team/create')}}" class="btn btn-primary me-md-2" type="button">
        Add new player
    </button>
    </a>
  </div>
<table class="table table-bordered table-striped table">
    <thead>
        <th>Team</th>
        <th>Name</th>
        <th>IGN</th>
        <th>Rank</th>
        <th>Role</th>
    </thead>
    <tbody>
        @foreach($players as $player)
        <tr>
            <td>{{$player->team->team_name }}</td>
            <td>{{$player->name}}</td>
            <td>{{$player->ingame_name }}</td>
            <td>{{$player->rank }}</td>
            <td>{{$player->role }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
