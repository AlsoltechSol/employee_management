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
<style></style>
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
<!-- page title area end -->
<div class="main-content-inner">
    <div class="row">
        <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Weekly Work Tracker</h4>
                    @include('backend.layouts.partials.messages')
                </div>
            </div>
            
            
        </div>
        <div class="col-6 md-5">
            <form class="d-flex list">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">year</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>2022</option>
                        <option>2023</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Month</label>
                    <select class="form-control" id="exampleFormControlSelect1">
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
                        <th>Houre</th>
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
        <!-- data table end -->
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
