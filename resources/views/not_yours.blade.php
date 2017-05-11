@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Учетная запись принадлежит не залогиненому пользователю
                </br>
                Или вы пытаетесь войти в не свою учетную запись
                </div>

                <div class="panel-body">

                    <?php
                    if(Auth::guest()){
                    ?>

                    <a href="<?php echo route('login') ?>" class="dropdown-toggle text-right">
                        <span style="color:#fff" class="username hidden-xs">Логін</span></a>

                    <a href="<?php echo route('register') ?>" class="dropdown-toggle text-right">
                        <span style="color:#fff" class="username hidden-xs">Регістрація</span>
                    </a>
                    <?
                    }
                   else{
                     ?>

                        <a href="{{ url('/logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                            Вийти из своей учетной записи и войти под другой
                        </a>

                        <form id="logout-form" action="<?php echo url('/logout') ?>" method="POST" style="display: none;">
                            <?php echo csrf_field() ?>
                        </form>


                    <?

                   }

                        ?>
                    </br>
                    <a href="/">Переход на сайт</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
