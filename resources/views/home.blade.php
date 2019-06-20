@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                <form action="{{route('jobs.store')}}" method="POST">
                    <div class="input-group">
                        <input type="text" name="title" id="title" class="form-control">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>

                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
