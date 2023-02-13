
@extends('backend.layouts.master')

@section('title')
Admin Create - Admin Panel
@endsection

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<style>
    .form-check-label {
        text-transform: capitalize;
    }

    
  
    form{
        align-items: center;
    }
    input[type="date"]{
        width: 400px;
    }
    .leave{
      width: 200px;
    }
    .reason{
        width:758px;
        height:20vh;
    }
    .leavetable{
        width:50%;
  
        margin-top: 2px;
        
    }
    .leavetable th,td{
        text-align: center;
       
    }
    .fromdate,.todate{
        margin-right: 93px;
    }
    .disable{
        width: 397px;
    }
    .available{
        margin-right: 19px;
    }
    .total{
        margin-right: 70px;
    }
    .leave{
        margin-right: -44px;
    }
    .numberofleave{
        margin-left: -239px;
    margin-right: 56px;
    }
    /* .radiotype{
        padding: 5px;
    } */
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
                    <h4 class="header-title">Leave Request Form</h4>
                    @include('backend.layouts.partials.messages')
                    <!DOCTYPE html>

        <form>
            <div class="form-row row ">
                <div class="col-md-6 mb-3 d-flex">
                    <label for="validationDefault01 " class="fromdate">From date</label>
                    <input
                        type="date"
                        class="form-control"
                        id="validationDefault01"
                        value="Mark"
                        required
                    >
                </div>
                <div class="col-md-6 mb-3 d-flex">
                    <label for="validationDefault02"  class="todate">To date</label>
                    <input
                        type="date"
                        class="form-control"
                        id="validationDefault02"
                        required
                    >
                </div>
            </div>
            <div class="form-row row d-flex">
                <div class="col-md-6 mb-3 d-flex">
                    <label for="validationDefault03 " class="available">Available casual leaves</label>
                    <input
                        type="text"
                        class="form-control disable"
                        id="validationDefault03"
                        disabled
                    >
                </div>
                <div class="col-md-6 mb-3 d-flex">
                    <label for="validationDefault03" class="total">Total leaves</label>
                    <input
                        type="text"
                        class="form-control disable"
                        id="validationDefault03"
                        disabled
                    >
                </div>
               
            </div>
            <div class="form-row row">
                <div class="col-md-6 mb-3">
                    <label for="validationDefault04" class="leave">Leave Catagory</label>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-primary class=" leave " ">
                            <input type="radio" name="options" id="option1">
                            CL
                        </label>
                        <label class="btn btn-primary class=" leave "">
                            <input type="radio" name="options" id="option2">
                            EL
                        </label>
                    </div>
                </div>
                <div class="col-md-6 mb-3 d-flex">
                    <label for="validationDefault04" class="numberofleave">Leave type</label>
                    <div class="btn-group btn-group-toggle radiotype" data-toggle="buttons">
                        <label class="btn btn-primary class=" leave " ">
                            <input type="radio" name="options" id="option1">
                            Full Day
                        </label>
                        <label class="btn btn-primary class=" leave "">
                            <input type="radio" name="options" id="option2">
                            Half day
                        </label>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationDefault04" >Number of Leaves</label>
                    <div class="btn-group btn-group-toggle radiotype" data-toggle="buttons">
                        <label class="btn btn-primary class=" leave " ">
                            <input type="radio" name="options" id="option1">
                            -CL+
                        </label>&nbsp;
                        <label class="btn btn-primary class=" leave "">
                            <input type="radio" name="options" id="option2">
                            -EL+
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-row row">
                
                <div class="col-md-6 mb-3">
                    <label for="validationDefault03">Upload Documents</label>
                    <input type="File" class="form-control" id="validationDefault03">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="validationDefault03">Reason</label>
                    <textarea name="Reason" cols="100" rows="5"></textarea>
                </div>
            </div>
        </form>
        <table class="leavetable">
            <h2>Leave distibution</h2>
            <thead>
                <tr>
                    <th>Paid Leaves</th>
                    <th>Unpaid Leaves</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                </tr>
            </tbody>
        </table>


                  
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