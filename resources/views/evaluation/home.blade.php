@extends('layouts.evaluation')

@section('content')
  <evaluation-page json-data="{{ $evaluation }}"></evaluation-page>
@endsection
