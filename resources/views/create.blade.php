@extends('index')

@section('content')

    <div class="col-md-7">
        {!! Form::open(['route' => 'admin-panel.store']) !!}
        <div class="form-group">
            <div class="col-md-2">
                {{Form::label('goods_id', 'ID')}}
            </div>
            <div class="col-md-10">
                {{Form::text('goods_id', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-2">
                {{Form::label('name', 'Наименование')}}
            </div>
            <div class="col-md-10">
                {{Form::text('name', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-2">
                {{Form::label('size', 'size')}}
            </div>
            <div class="col-md-10">
                {{Form::text('size', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-2">
                {{Form::label('content', 'Текст поста')}}
            </div>
            <div class="col-md-10">
                {{Form::textarea('content', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                {{ Form::submit('Опубликовать!', ['class' => 'btn btn-primary']) }}
            </div>
        </div>

        {!! Form::close() !!}
    </div>
@endsection