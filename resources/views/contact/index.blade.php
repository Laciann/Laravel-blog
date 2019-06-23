@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Contacts</div>

                @csrf
                <div class="card-body">

                    <table class="table table-striped">
                        <thead>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                            <tr>
                                <td>{{$contact->name}}</td>
                                <td>{{$contact->phone}}</td>
                                <td>{{$contact->address}}</td>
                                <td>
                                    <form action="{{route('contact.destroy',[$contact->id])}}" method="POST">
                                        <a href="{{route('contact.edit', [$contact->id])}}" class="btn btn-success">
                                            edit</a>

                                        <a class="btn btn-info"
                                            href="{{route('contact.show', [$contact->id])}}">view</a>

                                        @csrf
                                        <button type="submit" class="btn btn-primary">Delete</button> </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
