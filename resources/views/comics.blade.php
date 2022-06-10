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
                    <img src="{{asset" alt="" />
                </div>
                <div class="card-text">
                    <p></p>
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
