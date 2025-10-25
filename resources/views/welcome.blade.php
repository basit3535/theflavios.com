{{-- @extends('layouts.guest') --}}
<x-guest-layout :socialLinks="$socialLinks" :privateInformation="$privateInformation">
{{-- @section('content') --}}

    @include('components.hero')
    @include('components.about')
    {{-- @include('components.awards') --}}
    @include('components.weekly-menu')
    @include('components.menu')
    @include('components.gallery')
    @include('components.reservation-form')
{{-- @endsection --}}
</x-guest-layout>
