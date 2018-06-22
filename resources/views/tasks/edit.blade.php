@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} のタスク編集ページ</h1>
　<div class="container">
      <div class="row">
            <div class="col-xs-12"></div>
            <div class="col-sm-8 col-sm-offset-2"></div>
            <div class="col-md-8 col-md-offset-2"></div>
            <div class="col-lg-6 col-lg-offset-3"></div>
      </div>
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
　　　<div class="form-group">
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status') !!}
       </div>

　　　<div class="form-group">
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}
　　　</div>

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection




    