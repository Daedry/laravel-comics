@extends('layouts.app')

@section('page-title', 'Comics Page')

@section('content')

<div class="container">
    <div class="content">
        <div class="jumbo">
            <button>Current series</button>
        </div>
        <div class="wrapper">
            <div class="content-cards">
                @forelse($comics as $comic)
                <div class="content-card">
                    <div class="content-card-img">
                        <img src="{{$comic['thumb']}}" alt="" />
                    </div>
                    <div class="content-card-text">
                        <h4>{{$comic['series']}}</h4>
                    </div>
                </div>
                @empty
                <div class="col">No results to show</div>
                @endforelse
            </div>
            <!-- /.content-cards -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content -->

    <div class="info-buy">
        <div class="cards">

            <div class="card">
                <div class="card-img">
                    <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="" />
                </div>
                <div class="card-text">
                    <p>digital comics</p>
                </div>
            </div>
            <!-- /.card -->

            <div class="card">
                <div class="card-img">
                    <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="" />
                </div>
                <div class="card-text">
                    <p>dc merchandise</p>
                </div>
            </div>
            <!-- /.card -->

            <div class="card">
                <div class="card-img">
                    <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="" />
                </div>
                <div class="card-text">
                    <p>subscription</p>
                </div>
            </div>
            <!-- /.card -->

            <div class="card">
                <div class="card-img">
                    <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="" />
                </div>
                <div class="card-text">
                    <p>comic shop locator</p>
                </div>
            </div>
            <!-- /.card -->

            <div class="card">
                <div class="card-img visa-img">
                    <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="" />
                </div>
                <div class="card-text">
                    <p>dc power visa</p>
                </div>
            </div>
            <!-- /.card -->
            
        </div>
        <!-- /.cards -->
    </div>
    <!-- /.info-buy -->
</div>
<!-- /.container -->

@endsection