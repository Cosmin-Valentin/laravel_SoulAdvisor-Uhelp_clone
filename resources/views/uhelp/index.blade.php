@extends('uhelp.app')

@section('content')
    <x-slot name="header">
        @include('elements.back-button', [
            'header' => 'UHelp Support Ticketing System', 
            'section' =>'dashboard'
        ])
    </x-slot>

    <section class="cover block">
        <div class="container">
            <p>Content</p>
        </div>
    </section>
@endsection