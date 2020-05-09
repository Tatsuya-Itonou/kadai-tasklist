@extends('layouts.app')

@section('content')

    <h1>タスク詳細</h1>

    <table class="table">
        
        <tr class="bg-light">
            <th>id</th>
            <th>タスク</th>
            <th>スタッツ</th>
        </tr>   
        <tr>
            <td>{{ $tasks->id }}</td>
            <td>{{ $tasks->content }}</td>
            <td>{{ $tasks->status }}</td>
        </tr>
        
            
    </table>
    
    {!! link_to_route('tasks.edit','タスクを編集',['id' => $tasks->id],['class' => 'btn btn-light mb-1']) !!}
    {!! Form::model($tasks, ['route' => ['tasks.destroy', $tasks->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}


@endsection