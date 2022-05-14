@extends('layouts.app')

@section('title-block')Тест@endsection

@section('content')
    <h3>Результаты теста<h3>
    <table class="table">
        <thead>
            <th>Номер вопроса</th>
            <th>Правильность</th>
        </thead>
        <tbody>
            @foreach($data as $key => $value)
            <tr>
                <td>{{ explode('-', $key)[1] }}</td>
                @if ($value == true)
                <td class="table-success">Да</td>
                @else
                <td class="table-danger">Нет</td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection