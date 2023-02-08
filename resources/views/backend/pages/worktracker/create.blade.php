
@extends('backend.layouts.master')

@section('title')
Admin Create - Admin Panel
@endsection

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<style>
    input[type="text"]{
        outline: none;
        border: none;
        background: none;
        font-weight: 300;
    }
    .list{
        display: flex;
        flex-direction: row;
     text-align: left;
   
    }
    .outer{
        margin-left: 40px;
    }
    .month{
        font-size: 20px;
        font-weight: 700;
    }
    table tr{
        border: none;
        outline: none;
    }
    .layout{
        display: flex;
        flex-direction: row;
        margin-top: 0;
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
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('admin.admins.index') }}">All Admins</a></li>
                    <li><span>Create Admin</span></li>
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
                  
                  
                            
                        </head>
                        <body>
                           
                            <div class="layout">
                                <div class="outer">
                                    <form class="List">
                                        <div class="month">Month</div>
                                        <div class="present">
                                            <form action="">
                                                <input type="text" value="January" disabled>
                                            </form>
                                        </div>
                                    </form>
                                </div>
                                <div class="table">
                                    <table border="1px">
                                        
                                        <thead>
                                            <tr>
                                                <th>Day</th>
                                                <th>Monday</th>
                                                <th>Twesday</th>
                                                <th>Wednesday</th>
                                                <th>Thurshday</th>
                                                <th>Friday</th>
                                                <th>Saturday</th>
                                                <th>Total Hours</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Week 1</td>
                                                <td>24</td>
                                                <td>41</td>
                                                <td>15</td>
                                                <td>10</td>
                                                <td>74</td>
                                                <td>10</td>
                                                <td>174</td>
                                            </tr>
                                            <tr>
                                                <td>Work Done</td>
                                                <td>Html</td>
                                                <td>html</td>
                                                <td>html</td>
                                                <td>html</td>
                                                <td>html</td>
                                                <td>html</td>
                                            </tr>
                                            <tr>
                                                <td>Appruval</td>
                                                <td>Appruved</td>
                                                <td>Appruved</td>
                                                <td>Pending</td>
                                                <td>Appruved</td>
                                                <td>Appruved</td>
                                                <td>Appruved</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        
                    


                  
                </div>
            </div>
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