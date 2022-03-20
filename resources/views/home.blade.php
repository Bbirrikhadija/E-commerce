@extends('master.layout')
@section('title', 'Home')
@section('content')
    <div class="row">
        <div class="col s12 m6">
            @if (Session::has('message'))
                <p class="card-panel green lighten-2">
                    <span class="material-icons">check</span>{{ Session::get('message') }}
                </p>
            @endif
        </div>
    </div>
    <div class="row m6">
        @foreach ($products as $product)
                <div class="col s4 ">
                    <div class="card hoverable">

                        <div class="card-image">
                            <img src="assets/{{ $product->image }}">
                            {{-- <a class="btn-floating halfway-fab waves-effect waves-transparent transparent"><span
                                    class="material-icons">visibility</span></a> --}}
                        </div>
                        <div class="card-content">
                            <h6 class="center-align   red-text text-lighten-1">{{ $product->name }}</h6>
                            @if ($product->quantity)
                                <p class="center-align   grey-text text-darken-4  " style="font-weight: 600">
                                    {{ $product->price }} DH
                                </p>
                            @else
                                <p class="center-align   red-text text-darken-4  " style="font-weight: 600">
                                    Products out of stock!!
                                </p>
                            @endif
                        </div>

                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection