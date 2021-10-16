@extends('admin.layout.master-layout')
@section('content')
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3">Details</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('tickkets.destroy', $tickket->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <div class="row">
                                <div class="mb-3 col-md-5">
                                    <label class="form-label" for="inputEmail4"><h4>Event name</h4></label>
                                    <p>{{$tickket->eventName}}</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 col-md-5">
                                    <label class="form-label" for="inputEmail4"><h4>Band name</h4></label>
                                    <p>{{$tickket->bandName}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-5 mt-5">
                                    <a href=""><button type="button" class="btn btn-primary">Edit</button></a>
                                    <a href=""><button type="button" class="btn btn-danger">Delete</button></a>
                                    <a href="{{ route('tickkets.index'}}"><button type="button" class="btn btn-dark float-right">Back to list</button></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
