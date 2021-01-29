@extends('layouts.index')

@section('content')
<div class="row">
    <div class="col text-center xalert xalert-warning">
        <h3>Список пользователей</h3>
    </div>
</div>
<div class="row">
    <div class="col">
        <!-- {{ $users }}-->
        @foreach($users as $i )
        {{ $i->id }}) &nbsp; {{ $i->name }} <a href="mailto:{{ $i->email }}" class="underline" >{{ $i->email }}</a>
        <br/>
        @endforeach
    </div>
</div>
@endsection
