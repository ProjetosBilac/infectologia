@extends('layouts.evaluation')

@section('content')
  <form action="{{ route('evaluation.store') }}" method="POST">
    @csrf
  </evaluation-page>
@endsection
