@extends('uhelp.app')

@section('header')
    {{-- @include('uhelp.partials.customer-header') --}}
@endsection

@section('main')
    {{-- @include('uhelp.partials.customer-main') --}}
    @include('uhelp.partials.agent-aside')
    @include('uhelp.partials.agent-main')
@endsection

@section('footer')
    <footer>
        <div class="footer-container">
            <p>
                Copyright © 2024.
                Developed by <a href="https://github.com/Cosmin-Valentin">PrimalCosmin</a>.
            </p>
        </div>
    </footer>
@endsection

{{-- <x-slot name="header">
        @include('elements.back-button', [
            'header' => 'UHelp Support Ticketing System', 
            'section' =>'dashboard'
        ])
</x-slot> --}}