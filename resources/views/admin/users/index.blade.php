@extends('admin.layouts.master')

@section('title', 'User')

@section('content')
<!-- Content Header (Page header) -->
@include('admin.partials.entete')

<!-- Main content -->
<section class="content">

    <!-- Main row -->
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Table With Full Features</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-sm-6"></div>
                            <div class="col-sm-6"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Full Name: activate to sort column descending">Full Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending">Role</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">Email</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending">Phone</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending">Address</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Process: activate to sort column ascending">Process</th></tr>
                                    </thead>
                                    <tbody>
                                    @forelse($users as $user )
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{ $user['full_name'] }}</td>
                                            <td>{{ $user['role']['name'] }}</td>
                                            <td>{{ $user['email'] }}</td>
                                            <td>{{ $user['phone'] }}</td>
                                            <td>{{ $user['address'] }}</td>
                                            <td>
                                                <a href=""><i class="fa fa-fw fa-eye"></i></a>
                                                <a href=""><i class="fa fa-fw fa-close"></i></a>
                                                <a href=""><i class="fa fa-fw fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @empty
                                        <p>This page not data</p>
                                    @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                @include('admin.partials.showing_entries')
                            </div>
                            <div class="col-sm-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                    {!! $pagination['html'] !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->

            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.row (main row) -->

</section>
<!-- /.content -->
@stop

@push('js-page')

@endpush