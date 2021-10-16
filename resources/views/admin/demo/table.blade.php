@extends('admin.layout.master-layout')
@section('page-title', 'Table page | Hello World')

@section('content')
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Default Example <small>Users</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                        </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Event name</th>
                                    <th>Band name</th>
                                    <th>Start date</th>
                                    <th>End date</th>
                                    <th>portfolio</th>
                                    <th>Ticket price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tickkets as $tickket)
                                    <tr>
                                        <td>{{$tickket->eventName}}</td>
                                        <td>{{$tickket->bandName}}</td>
                                        <td>{{$tickket->startDate}}</td>
                                        <td>{{$tickket->endDate}}</td>
                                        <td>{{$tickket->portfolio}}</td>
                                        <td>{{$tickket->ticketPrice}}</td>
                                        <td>{{$tickket->status}}</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-3"> <a href="{{ route('tickkets.show', $tickket->id) }}"><i class="fa fa-info-circle"></i></a></div>
                                                <div class="col-3"><a href=""><i class="fa fa-edit"></i></a></div>
                                                <div class="col-3"><a href=""><i class="fa fa-trash-o"></i></a></div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <div aria-live="polite">Showing 1
                            to 10 of 57 entries
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="dataTables_paginate paging_simple_numbers">
                            <ul class="pagination">
                                <li id="datatable_previous"><a href="#" aria-controls="datatable" data-dt-idx="0"
                                                               tabindex="0">Previous</a>
                                </li>
                                <li><a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0">1</a></li>
                                <li><a href="#" aria-controls="datatable" data-dt-idx="2" tabindex="0">2</a></li>
                                <li><a href="#" aria-controls="datatable" data-dt-idx="3" tabindex="0">3</a></li>
                                <li><a href="#" aria-controls="datatable" data-dt-idx="4" tabindex="0">4</a></li>
                                <li><a href="#" aria-controls="datatable" data-dt-idx="5" tabindex="0">5</a></li>
                                <li><a href="#" aria-controls="datatable" data-dt-idx="6" tabindex="0">6</a></li>
                                <li><a href="#" aria-controls="datatable" data-dt-idx="7" tabindex="0">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
