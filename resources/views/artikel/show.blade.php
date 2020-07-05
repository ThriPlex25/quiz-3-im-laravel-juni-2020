@extends('layouts.master')

@section('content')
<div class="ml-3 mt-4 mr-3">
    
    <h3> Judul : {{ $artikel->judul}}</h3> 
    <p> slug : {{ $artikel->slug}}</p> 
    <p> {{ $artikel->isi}}</p> 
   
    <button type="submit" class="btn btn-sm btn-success" style="display:inline">info</button>
    <button type="submit" class="btn btn-sm btn-success" style="display:inline">web</button>
    <button type="submit" class="btn btn-sm btn-success" style="display:inline">phplaravel</button>
</div>

@endsection