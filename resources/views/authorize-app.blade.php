@if(isset($invalid))
    Авторизация не прошла.
@else
    <div class="error"> Разрешить приложению "{{$app->name}}" доступ к личным данным.</div>

    @if(session('message'))
        <div class="error"> {{session('message')}} </div>
    @endif

    <form method="POST" action="{{ url('/authorize') }}">
        {!! csrf_field() !!}
        <input type="hidden" name="app_key" value="{{ request('app_key') }}">
        <input type="hidden" name="redirect_uri" value="{{ request('redirect_uri') }}">

        <input type="email" name="email">
        <input type="password" name="password">

        <button type="submit">authorize</button>
    </form>
@endif