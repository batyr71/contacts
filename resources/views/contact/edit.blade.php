@extends('layouts.app')

@section('content')
  <section class="section">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
      <h1 class="title">Edit contact</h1>
      <form class="" action="/contacts/{{$contact->id}}" method="post">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <label for="name">Name</label><br>
        <input type="text" name="name" value="{{$contact->name}}" ><br>
        <label for="phone">Phone number</label><br>
        <input type="phone" name="phone" value="{{$contact->phone}}"><br>
        <label for="email">Email</label><br>
        <input type="text" name="email" value="{{$contact->email}}"><br>
        <hr>
        <input type="submit" name="" value="Update" class="button is-link">
      </form>
@endsection
