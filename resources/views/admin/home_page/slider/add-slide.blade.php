@extends('adminlte::page')

@section('content_header')
    <h1>Create a slide</h1>
@stop

@section('plugins.Summernote', true)
@section('content')
    <x-adminlte-input name="title" label="Title" placeholder="Enter the title" fgroup-class="col-md-9"/>
    <x-adminlte-input name="subtitle" label="Subtitle" placeholder="Enter the subtitle" fgroup-class="col-md-9"/>

    @php
        $config = [
            "height" => "300",
            "width"  => "950",
        ]
    @endphp

    <x-adminlte-text-editor name="text" label="Main text" placeholder="Insert description..." :config="$config"/>

    <x-adminlte-input-file label="Upload an image" name="image" igroup-size="sm" placeholder="Choose an image...">
        <x-slot name="prependSlot">
            <div class="input-group-text bg-lightblue">
                <i class="fas fa-upload"></i>
            </div>
        </x-slot>
    </x-adminlte-input-file>

    <a  href="{{route('home-page-slider.store')}}">
        <x-adminlte-button class="btn-flat mt-2 mb-2" type="submit" label="Add a slide" theme="success" icon="fas fa-lg fa-plus"/>
    </a>
@stop
