@extends('app')

@section('title', '学習記録一覧')

@section('content')
    @include('nav')
    <div class="container">
        @foreach ($records as $record)
        <div class="card mt-3">
            <div class="card-body d-flex flex-row">
                <i class="fas fa-user-graduate fa-3x mr-2"></i>
                <div>
                    <div class="font-weight-bold">
                        {{ $record->user->name }}
                    </div>
                    <div class="font-weight-lighter">
                        {{ $record->created_at->format('Y/m/d H:i') }}
                    </div>
                </div>
            </div>
            <div class="card-body pt-0 pb-2">
                <h3 class="h4 card-title">
                    {{ $record->title }}
                </h3>
                <div class="card-text">
                    {!! nl2br(e($record->body)) !!}
                </div>
                <div class="card-text">
                    1時間
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
