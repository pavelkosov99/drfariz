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

    <form action="{{route('home-page-slider.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-adminlte-input name="title" label="Title" placeholder="Enter the title" fgroup-class="col-md-9" value="{{$slide->title}}"/>
        <x-adminlte-input name="subtitle" label="Subtitle" placeholder="Enter the subtitle" fgroup-class="col-md-9" value="{{$slide->subtitle}}"/>

        <div class="ml-2">
            <x-adminlte-text-editor name="text" label="Main text" placeholder="Insert description..." :config="$config"> {{$slide->text}} </x-adminlte-text-editor>
        </div>

        <div style="width: 300px;" class="ml-2">
            <x-adminlte-input-file name="image" label="Upload an image" igroup-size="sm" placeholder="Choose an image..." value="{{$slide->image}}">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-lightblue">
                        <i class="fas fa-upload"></i>
                    </div>
                </x-slot>
            </x-adminlte-input-file>
            <label for="image"></label>
            <img name="image" width="500px" height="300px" src="{{ asset($slide->image) }}">
        </div>

        <div class="ml-2">
            <a href="{{route('home-page-slider.store')}}">
                <x-adminlte-button name="submit" class="btn-flat mt-2 mb-2" type="submit" label="Edit a slide" theme="success" icon="fas fa-lg fa-plus"/>
            </a>
        </div>
    </form>
@stop


