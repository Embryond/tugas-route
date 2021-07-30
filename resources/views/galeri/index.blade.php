@extends('welcome')

@section('content')
<h1>Galeri</h1>
<img src="{{ asset('test/img/Desert.jpg') }}"
height="200"
/>
<img src="{{ asset('test/img/Koala.jpg') }}"
height="200"
/>
<img src="{{ asset('test/img/koceng.jpg') }}"
height="200"
/>
<img src="{{ asset('test/img/Tulips.jpg') }}"
height="200"
/>
<img src="{{ asset('test/img/Penguins.jpg') }}"
height="200"
/>

@endsection