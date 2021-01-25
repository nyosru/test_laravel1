
@extends('layouts.index')

@section('title', 'ОДин фильм')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            111111111
            <!--                    {{ show }}-->

            <!-- <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center"> -->
            <!--                    @foreach($cinemas as $movie )
            
                                <a href="{{ route('show',[ 'id' => $movie->id ]) }}">
                                    <img src="{{ $movie->link }}/images/poster.jpg" style="float:left; padding-right: 10px;" />
                                    <b>{{ $movie->header }}</b>
                                </a>
                                <p>{{ $movie->opis }}</p>
                                <br clear="all" />
                                <br clear="all" />
                                @endforeach-->
            <!-- </div> -->
        </div>        
    </div>        
</div>        

@endsection