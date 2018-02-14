@extends('layouts.app')

@section('content')
  <section class="section">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <h1 class="title">Contact list</h1>
    @foreach($contacts as $contact)
    <article class="media">
      <div class="media-left">
        <figure class="image is-64x64">
          <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
        </figure>
      </div>
      <div class="media-content">
        <div class="content">
          <p>{{$contact->name}}</p>
        </div>
        <nav class="level is-mobile">
          <div class="level-left">
            <a href="/contacts/{{$contact->id}}" class="level-item"><i class="fas fa-eye"></i></a>
          </div>
        </nav>
      </div>
    </article>
    @endforeach
  </section>
@endsection
