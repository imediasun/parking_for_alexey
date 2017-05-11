@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Parking on Laravel</div>

                <div class="panel-body">
                    Ви залогінені!

                    <?php
                    if(Gate::denies('VIEW_ADMIN')){
                    ?>
                        <a href="/">Перехід на сайт</a>
                    <?
                    }
                    else{
                    ?>
                    <a href="/admin">Перехід в адмін частину</a><br>
                    <a href="/">Перехід на сайт</a>
                    <?

                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
