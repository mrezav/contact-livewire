@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                {{--  pemanggilan component livewire di laravel 7 ke atas --}}
                <livewire:contact.contact-index></livewire:contact.contact-index>

                {{-- pemanggilan component livewire di php 7 ke bawah --}}
                {{-- @livewire('contact.contact-index'); --}}
            </div>
        </div>
    </div>
</div>
@endsection
