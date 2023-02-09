
@extends('backend.layouts.master')

@section('title')
Holiday - Admin Panel
@endsection

@section('styles')
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
@endsection
<style>
   
</style>

@section('admin-content')

<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Holiday Master</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><span>All Holiday</span></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            @include('backend.layouts.partials.logout')
        </div>
    </div>
</div>
<!-- page title area end -->

<div class="main-content-inner">
    <div class="row">
        <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                <h4 class="header-title float-left">Holiday List - </h4>

                    <p class="float-right mb-1">

                        <a class="btn btn-primary text-white " href="{{ route('admin.holidayMaster.create') }}"><i class="fa fa-plus" aria-hidden="true"></i> &nbsp; Create</a>
                    </p>
                    <div class="clearfix"></div>
                    <div class="data-tables" style="display:grid;">
                        @include('backend.layouts.partials.messages')
                        <table id="dataTable" class="text-center">
                            <thead class="bg-light text-capitalize">
                                <tr>
                                    <th width="10%">Sl No.</th>
                                    <th width="20%">Holiday Date</th>
                                    <th width="20%">Holiday Day</th>

                                    <th width="30%">Title</th>
                                    <!-- <th width="10%">Sl No.</th> -->
                                    
                                    <!-- <th width="50%">Designation Name</th> -->
                                    
                                    <th width="20%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($holiday as $holidays)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$holidays->holiday_date}}</td>
                                    <td>{{$holidays->holiday_day}}</td>
                                    <td>{{$holidays->title}}</td>
                                    <td>
                                    <!-- <a class="btn" href="{{ route('admin.holidayMaster.show', $holidays->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a> -->
                                    <a class="btn" href="{{ route('admin.holidayMaster.edit', $holidays->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>

                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- data table end -->
        
    </div>
</div>
@endsection


@section('scripts')
     <!-- Start datatable js -->
     <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
     <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
     <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
     <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
     
     <script>
         /*================================
        datatable active
        ==================================*/
        if ($('#dataTable').length) {
            $('#dataTable').DataTable({
                responsive: true
            });
        }

     </script>
@endsection