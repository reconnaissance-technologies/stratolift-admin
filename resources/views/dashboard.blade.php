@extends('layouts.general')

@section('title', 'Dashboard | StratoLift - The #1 Lift Installation Experts')

@section('content')
        <!-- Task Sections -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div>
                <h2 class="text-lg font-bold mb-2">Emergency Tasks <span class="text-red-500">(4)</span></h2>
                @for ($i = 0; $i < 4; $i++)
                    @include('components.emergency-task-card')
                @endfor
            </div>
            <div>
                <h2 class="text-lg font-bold mb-2">Service Request Tasks <span class="text-red-500">(4)</span></h2>
                @for ($i = 0; $i < 4; $i++)
                    @include('components.regular-task-card')
                @endfor
            </div>
        </div>
@endsection