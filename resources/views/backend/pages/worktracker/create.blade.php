
@extends('backend.layouts.master')

@section('title')
Admin Create - Admin Panel
@endsection

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<style>
    input[type="text"]{
        font-weight: 500;
        border:1px solid #0069D9;;
        color: black;
        height:4vh;
        width: 100px;
        text-align: center;
        font-size: 20px;
       margin-right: 10px;
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
        border: 2px solid #0069D9;
        text-align: center;
    }
    table thead tr th{
        border: 1px solid #0069D9;
    }
       .layout{
        display: flex;
        flex-direction: row;
        margin-top: 0;
    }
    .bl,th{
        font-size: 20px;
    }
    .bl{
        font-weight: bold;
       text-align: left;
    }
    .underline{
    height: 2px;
    width: 100px;
    background: #0069D9;
    border-radius: 30px;
  }
  .confirm{
    background: #0069D9;
    color: white;
  }
  .cancel{
    background: #f40303;
    color: white;
  }
  .confirm,.cancel{
    width: 200px;
    height: 40px;
    border-radius: 9px;
    border: none;
    outline: none;
  }
  .buttons{
    display: flex; 
    justify-content: flex-end;
    margin-top: 3rem;
 
  }
  .buttons button{
  margin-left: 1em;
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
                    <div class="underline"></div>
                    @include('backend.layouts.partials.messages')                           
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
                                          <td class="bl">Week 1</td>
                                          <td>24</td>
                                          <td>41</td>
                                          <td>15</td>
                                          <td>10</td>
                                          <td>74</td>
                                          <td>10</td>
                                          <td>174</td>
                                        </tr>
                                        <tr>
                                          <td class="bl">Work Done</td>
                                          <td>Html</td>
                                          <td>html</td>
                                          <td>html</td>
                                          <td>html</td>
                                          <td>html</td>
                                          <td>html</td>
                                          <td></td>
                                        </tr>
                                        <tr>
                                          <td class="bl">Appruval</td>
                                          <td>Appruved</td>
                                          <td>Appruved</td>
                                          <td>Pending</td>
                                          <td>Appruved</td>
                                          <td>Appruved</td>
                                          <td>Approved</td>
                                          <td></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <div >
                                      <div class="buttons">
                                        <button class="confirm" type="submit">Confirm</button>
                                        <button class="cancel" type="submit">Cancel</button>
                                      </div>
                                    </div>
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