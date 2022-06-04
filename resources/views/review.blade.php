@extends('layouts.main')

@section('container')
    <br><br>
    <div class="card col-sm-6 mx-auto">
        <div class="card-body">
            <form method="post" action="{{ route('review.store') }}" enctype="multipart/form-data">
                @csrf
                <h1 class="text-center">Review</h1>
                <div class="form-floating">
                    <textarea class="form-control" id="coment" name="coment" style="height: 100px" required></textarea>
                    <label for="floatingTextarea2">Comments</label>
                </div>
                <div class="mb-3">
                    <div class="rating" required>

                        <label>
                            <input type="radio" name="star" value="1" />
                            <span class="icon">★</span>
                        </label>
                        <label>
                            <input type="radio" name="star" value="2" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                        </label>
                        <label>
                            <input type="radio" name="star" value="3" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                        </label>
                        <label>
                            <input type="radio" name="star" value="4" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                        </label>
                        <label>
                            <input type="radio" name="star" value="5" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <br>

    @foreach ($review as $rv)
        <div class="card col-sm-6 mx-auto">
            <div class="card-body">
                <h5 class="card-title" style="color"><b>{{ $rv->user->name }}</b> - <span style="color:gold">★{{ $rv->star }}</span></h5>
                {{-- <h5 class="card-title" style="color:gold">★{{ $rv->star }}</h5> --}}
                <h5 class="card-title" style="font-size: 10px">{{ $rv->created_at }}</h5>
                <h5 class="card-title">{{ $rv->coment }}</h5>
            </div>
        </div>
        <br>
    @endforeach
@endsection
