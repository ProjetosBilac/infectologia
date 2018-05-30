@extends('layouts.evaluation')

@section('content')
  <evaluation-page
    route="{{ route('evaluation.store') }}"
    json-data="{{ $evaluation }}">
     @csrf
  </evaluation-page>
@endsection
