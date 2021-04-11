@extends('layouts.app')

@section('content')
    <div class="grid grid-rows-3 grid-flow-col gap-4">
        <div class="col-span-3">
            <livewire:banner>
        </div>
        <div class="col-span-3">
            <livewire:feature>
        </div>
    </div>
@endsection
