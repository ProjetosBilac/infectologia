@extends('layouts.evaluation')

@section('content')
  <form action="{{ route('teste') }}" method="POST">
    @csrf
    <evaluation-page json-data="{{ $evaluation }}"></evaluation-page>
  </form>
@endsection
