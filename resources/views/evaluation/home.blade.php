@extends('layouts.evaluation')

@section('content')
  <evaluation-page
    route="{{ route('teste') }}"
    json-data="{{ $evaluation }}">
    @csrf
  </evaluation-page>
@endsection
