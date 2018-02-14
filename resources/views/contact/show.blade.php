@extends('layouts.app')

@section('content')
  <section class="section">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <h1 class="title">{{$contact->name}}</h1>
    <p><b>Phone number: </b>{{$contact->phone}}</p>
    <p><b>Email: </b>{{$contact->email}}</p>
    <hr>
    <a href="/contacts/{{$contact->id}}/edit" class="button is-primary">Edit</a>
    <a href="/contacts/{{$contact->id}}/edit" class="button is-danger" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">Delete</a>
    <form id="delete-form" class="" action="/contacts/{{$contact->id}}" method="post">
      {{ method_field('DELETE') }}
      {{ csrf_field() }}
    </form>
@endsection
