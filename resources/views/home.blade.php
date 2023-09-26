
@extends("layouts.public")



@section("content")
<div class="container">
    <div class="row">
        @foreach ($films as $singleFilm )

        <div class="col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title"> {{ $singleFilm->title }}</h3>
                    <h4>{{ $singleFilm->original_title }}</h4>
                    <p class="card-text"><b>Nationality:</b> {{ $singleFilm->nationality }}</p>
                    <p class="card-text"><b>Date:</b> {{ $singleFilm->date }}</p>
                    <p class="card-text"><b>Vote: </b>{{ $singleFilm->vote }}</p>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection