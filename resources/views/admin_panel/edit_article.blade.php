@extends('layout.admin')

@section('page_title')
    Edit articles
@endsection

@section('content')
    <livewire:add-article :article="$article" />
@endsection