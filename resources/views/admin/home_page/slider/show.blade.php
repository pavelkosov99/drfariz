@php
    $config = [
        "height" => "300",
        "width"  => "950",
    ]
@endphp

@extends('adminlte::page')

@section('content_header')
    <h1>Create a slide</h1>
@stop

@section('plugins.Summernote', true)
@section('content')
    @csrf
    <x-adminlte-input name="title" label="Title" placeholder="Enter the title" fgroup-class="col-md-9"
                      value="{{$slide->title}}" disabled/>
    <x-adminlte-input name="subtitle" label="Subtitle" placeholder="Enter the subtitle" fgroup-class="col-md-9"
                      value="{{$slide->subtitle}}" disabled/>

    <div class="ml-2">
        <x-adminlte-text-editor name="text" label="Main text" placeholder="Insert description..." :config="$config"
                                disabled> {{$slide->text}} </x-adminlte-text-editor>
    </div>

    <label for="image"></label>
    <img name="image" width="500px" height="300px" src="{{ asset($slide->image) }}">
@stop


