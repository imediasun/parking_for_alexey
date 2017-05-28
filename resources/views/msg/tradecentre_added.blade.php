@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Parking on Laravel</div>

                <div class="panel-body">
                    <p>Trade Centre Added!</p><br>
                    <?php if(Gate::denies('VIEW_ADMIN')) { ?>
                        <a href="/">Go to Site</a>
                    <? } else { ?>
                        <a href="/admin">Go to Admin</a><br>
                        <a href="/admin/add_trade_center">Go to Add Trade Centre</a><br>
                        <a href="/">Go to Site</a>
                    <? } ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
