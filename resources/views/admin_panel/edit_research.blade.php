@extends('layout.admin')

@section('page_title')
    Edit Research
@endsection

@section('content')
    <livewire: add-research :research="$research" />
@endsection
