@extends('layouts.app')

@section('content')

    @foreach($tasks as $task)

        <p wire:key="{{ $task->id }}"> @livewire('task-status-view') </p>
        
    @endforeach
                
@endsection
