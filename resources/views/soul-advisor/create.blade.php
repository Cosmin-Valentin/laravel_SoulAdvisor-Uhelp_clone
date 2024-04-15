<x-app-layout>
    <x-slot name="header">
        @include('soul-advisor.components.back-button', ['header' => 'Professional Online Profile Creation'])
    </x-slot>

    @include('soul-advisor.profile.create')

</x-app-layout>