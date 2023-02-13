@extends('backend.layouts.master')

@section('title')
Admin Create - Admin Panel
@endsection

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet">
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
    crossorigin="anonymous"
>
<style>
    table {
      border: 1px solid #0069D9;
      width: 50%;
      margin-top:10px; 
    }
  
    th, td {
      text-align: center;
      padding: 8px;
      border: 1px solid #0069D9;
    }
    table tr th{
        border: 1px solid #0069D9;
    }
    thead{
        /* border: 1px solid #0069D9; */
        outline: 1px solid #0069D9;
    }
    table tbody tr:hover {
    background-color: #bdb0b0;
    color:rgb(13, 12, 12);
  }

  select:hover{
    background: #0069D9;
    color:white;
  }
  .underline{
    height: 2px;
    width: 100px;
    background: #0069D9;
    border-radius: 30px;
  }
  </style>
@endsection


@section('admin-content')
<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Admin Create</h4>
                <ul class="breadcrumbs pull-left">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.admins.index') }}">All Admins</a>
                    </li>
                    <li>
                        <span>Create Admin</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            @include('backend.layouts.partials.logout')
        </div>
    </div>
</div>
<div class="main-content-inner">
    <div class="row">
        <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Monthly Work Tracker</h4>
                    <div class="underline"></div>
                    @include('backend.layouts.partials.messages')
                    <div class="d-flex">
                      
                        <div class="col-6 md-5 d-flex flex-wrap card2">
                            <form class="d-flex ">
                                <div class="form-group mr-4">
                                    <label for="exampleFormControlSelect1">Year</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>2022</option>
                                        <option>2023</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">Month</label>
                                    <select class="form-control" id="exampleFormControlSelect2">
                                        <option>January</option>
                                        <option>Mebruary</option>
                                        <option>March</option>
                                        <option>April</option>
                                        <option>May</option>
                                        <option>June</option>
                                        <option>July</option>
                                        <option>August</option>
                                        <option>September</option>
                                        <option>October</option>
                                        <option>November</option>
                                        <option>December</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="col-6 md-5">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Week</th>
                                        <th>Hours</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Week 1</td>
                                        <td>24</td>
                                        <td>
                                            <button type="submit" class="btn btn-primary edit">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Week 2</td>
                                        <td>24</td>
                                        <td>
                                            <button type="submit" class="btn btn-primary edit">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Week 3</td>
                                        <td>24</td>
                                        <td>
                                            <button type="submit" class="btn btn-primary edit">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Week 4</td>
                                        <td>24</td>
                                        <td>
                                            <button type="submit" class="btn btn-primary edit">Edit</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
    })
</script>
@endsection
