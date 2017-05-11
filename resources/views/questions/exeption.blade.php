@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Помилка доступу - немає прав для додавання запитання - зарегеструйтесь</div>

                <div class="panel-body">
                    <a href="/register">Реєстрація</a><br>
                    <a href="/">Перехід на сайт</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
