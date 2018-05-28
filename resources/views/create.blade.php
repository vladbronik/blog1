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
                {{Form::label('content', 'Текст поста')}}
            </div>
            <div class="col-md-10">
                {{Form::textarea('content', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-2">
                {{Form::label('img', 'img')}}
            </div>
            <div class="col-md-10">
                {{Form::text('img', null, ['class' => 'form-control']) }}
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
                {{Form::label('size_id', 'size_id')}}
            </div>
            <div class="col-md-10">
                {{Form::text('size_id', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-2">
                {{Form::label('goods_typeid', 'goods_typeid')}}
            </div>
            <div class="col-md-10">
                {{Form::text('goods_typeid', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-2">
                {{Form::label('visible', 'Видимость')}}
            </div>
            <div class="col-md-10">
                {{Form::text('visible', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-2">
                {{Form::label('hits', 'Популярное')}}
            </div>
            <div class="col-md-10">
                {{Form::text('hits', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-2">
                {{Form::label('new', 'Новинки')}}
            </div>
            <div class="col-md-10">
                {{Form::text('new', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-2">
                {{Form::label('sale', 'Распродажа')}}
            </div>
            <div class="col-md-10">
                {{Form::text('sale', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-2">
                {{Form::label('price', 'Цена')}}
            </div>
            <div class="col-md-10">
                {{Form::text('price', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-2">
                {{Form::label('img_slim', 'img_slim')}}
            </div>
            <div class="col-md-10">
                {{Form::text('img_slim', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-2">
                {{Form::label('created_at', 'created_at')}}
            </div>
            <div class="col-md-10">
                {{Form::text('created_at', null, ['class' => 'form-control']) }}
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