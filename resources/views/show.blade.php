@extends('index')

@section('content')
<h1>{{$post->name}}</h1>
<hr>
<p>{{$post->size}}</p>
<hr>
<p>{!!$post->content!!}</p>

<a href="{{ URL::to('admin-panel/'.$post->goods_id.'/edit') }}" class="btn btn-primary">Редактировать</a>

{!! Form::open(['method' => 'DELETE','route' => ['admin-panel.destroy', $post->goods_id]]) !!}
{!! Form::submit('Удалить', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
@endsection