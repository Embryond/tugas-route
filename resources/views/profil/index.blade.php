@extends('welcome')

@section('content')
<h1>Profil Saya</h1>
<figure class="figure">
  <img
    src="{{ asset('test/img/Ryond.jpg') }}"
    height="400"
    alt="..."
  />
  <figcaption class="figure-caption">Krisantus Preyanda Embryond<br>
  XII RPL1/17<br>
  SMKN 1 Purwosari</figcaption>
</figure>
@endsection