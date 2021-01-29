@extends('app')

@section('title', 'Service')

@section('content')
<h1>Services Page</h1>

<form action="/services" method="post">
    <input type="text" name="name" autocomplete="off">

    @csrf

    <button>Add Service</button>
</form>
@error('name') {{ $message }} @enderror

<ul>
    @forelse($services as $service)
        <li>{{ $service }}</li>
    @empty
        <li>No services available.</li>
    @endforelse
</ul>
@endsection