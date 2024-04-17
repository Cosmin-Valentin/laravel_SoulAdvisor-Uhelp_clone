<x-app-layout>
    <x-slot name="header">
        @include('elements.back-button', [
            'header' => 'Professional Online Profile Creation',
            'section' => 'list-practice.index'    
        ])
    </x-slot>

    @include('soul-advisor.profile.create')

</x-app-layout>