@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="my-5 text-center header-green">タスク登録</h2>

        <div class="row">
            <div class="col-12 col-md-8 mx-auto">
                {{-- バリデーションエラー部分テンプレート --}}
                @include('layouts.errors')

                {{-- ↓ {{ }} を {!! !!} に修正 --}}
                {!! Form::open(['url' => route('todo.store')]) !!}

                <div class="my-3">
                    {{-- ↓ {{ }} を {!! !!} に修正 --}}
                    {!! Form::text('title', '', ['class' => 'form-control form-control-lg', 'placeholder' => '例）再配達を頼む']) !!}
                </div>

                <div class="text-center">
                    {{-- ↓ {{ }} を {!! !!} に修正 --}}
                    {!! Form::submit('登録する', ['class' => 'btn btn-green px-4']) !!}
                </div>
                
                {{-- ↓ {{ }} を {!! !!} に修正 --}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection