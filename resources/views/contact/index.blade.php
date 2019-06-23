@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Contacts</div>
            <form action="{{route('contact.store')}}" method="post">
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
                                    <td><button class="btn btn-info">edit</button>
                                    <button class="btn btn-success">view</button>
                                    </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
