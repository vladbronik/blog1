@extends('index')

@section('content')

    <div class="col-md-7">
        {!! Form::model($post, array('route' => array('admin-panel.update', $post->goods_id), 'method' => 'PUT')) !!}
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
                {{Form::label('sizeid', 'sizeid')}}
            </div>
            <div class="col-md-10">
                {{Form::text('sizeid', null, ['class' => 'form-control']) }}
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
            <div class="col-md-12">
                {{ Form::submit('Обновить!', ['class' => 'btn btn-primary']) }}
            </div>
        </div>

        {!! Form::close() !!}
    </div>
@endsection
