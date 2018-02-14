@extends('layouts.app')

@section('content')
  <section class="section">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
      <h1 class="title">Create contact</h1>
      <form class="" action="/contacts" method="post">
        {{ csrf_field() }}
        <label for="name">Name</label><br>
        <input type="text" name="name" value="" placeholder="New contact name"><br>
        <label for="phone">Phone number</label><br>
        <input type="phone" name="phone" value="" placeholder="New contact phone number"><br>
        <label for="email">Email</label><br>
        <input type="text" name="email" value="" placeholder="New contact phone email1"><br>
        <hr>
        <input type="submit" name="" value="Save" class="button is-link">
      </form>
@endsection
