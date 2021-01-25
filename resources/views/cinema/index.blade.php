
@extends('layouts.index')


@if ( !empty($warning) )

@section('content')
<div class="row">
    <div class="col text-center alert alert-warning">
        <h3>ДАнные обновлены</h3>
    </div>
</div>
@endsection

@elseif ( !empty($id) )

@section('title', ' супер фильм | ' . $info->header )

@section('content')
<div class="row">
    <div class="col">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Фильмы</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $info->header }}</li>
            </ol>
        </nav>

    </div>
</div>

<div class="row">
    <div class="col">
        <!--            {{ $info }}-->
        <img src="{{ $info->link }}/images/poster.jpg" style="float:left; padding-right: 10px;" />
        <h3>{{ $info->header }}</h3>
        <p><a href="{{ $info->link }}" target="_blank" >{{ $info->link }}</a></p>
        <p>{{ $info->opis }}</p>
        <br clear="all" />
        <br clear="all" />
        <center>
        <img src="{{ $info->link }}/images/background.jpg" style="xfloat:left; xpadding-right: 10px;" />
        </center>
    </div>
</div>
<!--</div>-->
<!--<div class="container-fluid">-->
<!--    <div class="row">
        <div class="col">
            <iframe style="width:100%; height: 80vh;" src="{{ $info->link }}" ></iframe>

        </div>        
    </div>        -->
    @endsection

    @else

    @section('title', 'Список сайтов')

    @section('content')
    <div class="row">
        <div class="col">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Фильмы</li>
                </ol>
            </nav>

        </div>
    </div>

    <div class="row">
        <div class="col">
            <!-- <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center"> -->
            @foreach($cinemas as $movie )
            <a href="{{ route('show',[ 'id' => $movie->id ]) }}">
                <img src="{{ $movie->link }}/images/poster.jpg" style="float:left; padding-right: 10px;" />
                <b>{{ $movie->header }}</b>
            </a>
            <p>{{ $movie->opis }}</p>
            <br clear="all" />
            <br clear="all" />
            @endforeach
            <!-- </div> -->
        </div>        
    </div>        
    @endsection

    @endif