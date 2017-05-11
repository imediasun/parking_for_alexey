@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Відгук вдало видалено</div>

                <div class="panel-body">
                    <h3>Ви будете перенаправлені на сторінку товара</h3><br>
                    <a href="/">Перехід на сайт</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>

    function func() {

    location.href='/good/{{ $id_good }}';
    }

    setTimeout(func, 4000);
</script>
