@extends('layout.main')

@section('main-content')
    <div class="container">
        <section>
            @foreach ($data as $item)
            <div class="single-comics">
                <div class="img">

                    <img src="{{$item['thumb']}}" alt="{{$item['title']}}">
                
                </div>
                <div class="title">
                    {{$item['series']}}
                </div>

            </div>
            @endforeach
        </section>
    </div>
@endsection

