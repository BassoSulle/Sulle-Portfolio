@extends('layout.admin')

@section('page_title')
    Edit project
@endsection
@section('content')
    <livewire:add-project :project="$project" />
@endsection
