@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Інформація вдало оновлена</div>

                <div class="panel-body">
                    <h3>Ви будете перенаправлені на сторінку кабінета</h3><br>
                    <a href="/">Перехід на сайт</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>

    function func() {

    location.href='/cabinet/{{ $id_user }}';
    }

    setTimeout(func, 4000);
</script>
