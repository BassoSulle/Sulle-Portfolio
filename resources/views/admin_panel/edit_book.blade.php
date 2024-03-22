@extends('layout.admin')

@section('page_title')
    Edit Book
@endsection

@section('content')
    <livewire:add-book :book="$book" />
@endsection
