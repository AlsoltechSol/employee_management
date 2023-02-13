
@extends('backend.layouts.master')

@section('title')
Admin Create - Admin Panel
@endsection

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<style>
.salary-slip {
  width: 90%;
  margin: 30px auto;
  font-family: 'Roboto', sans-serif;
  color: #333;
}

table {
  width: 100%;
  margin-top: 20px;
  border-collapse: collapse;
  border: 2px solid black;
}

th, td {
  padding: 5px;
  border: 1px solid black;
  outline: 1px solid black;
}

th {
  font-weight: bold;
  
}

td.earnings, td.deductions {
  width: 40%;
  text-align: right;
}

img {
  display: block;
  margin: 0 auto;
  width: 100px;
}
.left{
  text-align: left;
}
.right{
  text-align: right;
}  
.text{
    text-align: center;
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
        <div class="salary-slip">
            <table>
                <tr>
                    <th colspan="4">
                        <img src="{{url('public/image/logo.png')}}" alt="Company Logo" style="display: block; margin: 0 auto;"/>
                        
                    </th>
                </tr>
                <tr>
                    <th colspan="4" style="text-align: center;">
                        Alsol Technology Solution Pvt.Ltd.
                    </t>
                </tr>
                <tr>
                    <th colspan="4" style="text-align: center;">Aurora Water Front,Sector v,Salt Lake,Kolkata-700091</th>
                </tr>
                <tr>
                    <th colspan="4" style="text-align: center;">U72900WB2021PTC246046</th>
                </tr>
                <tr>
                    <th class="left">Emp Id:</th>
                    <th class="left">AST7584</th>
                    <th class="left">Pay Of month/Year:</th>
                    <th class="left">September/2023</th>
                </tr>
                <tr>
                    <th class="left">Employee Name:</th>
                    <th class="left">Manthan Mukherjee</th>
                    <th class="left">Pay Days:</th>
                    <th class="left">30</th>
                </tr>
                <tr>
                    <th class="left">Designation:</th>
                    <th class="left">Junior Content Creator</th>
                    <th class="left">Leaves Taken:</th>
                    <th class="left">
                        1
                    </tr>
                    <tr>
                        <th class="left">Mode of Payment:</th>
                        <th class="left">HDFC BANK</th>
                        <th class="left">Bank A/C:</th>
                        <th class="left">7452147896412547e</th>
                    </tr>
                </table>
                <table>
                    <thead>
                        <tr>
                            <th>Earnings</th>
                            <th>Gross</th>
                            <th class="left" colspan="2">Deductions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="left">BASIC</th>
                            <th class="right">₹6500.00</th>
                            <th class="left">Unapproved Leave</th>
                            <th class="right">₹0.00</th>
                        </tr>
                        <tr>
                            <th class="left">HRA</th>
                            <th class="right">₹3120.00</th>
                            <th class="left">PF</th>
                            <th class="right">₹0.00</th>
                        </tr>
                        <tr>
                            <th class="left">Travelling Allowance</th>
                            <th class="right">₹390</th>
                            <th class="left">ESI</th>
                            <th class="right">₹0.00</th>
                        </tr>
                        <tr>
                            <th class="left">Speacial Allowance</th>
                            <th class="right">₹2990</th>
                            <th class="left">PT</th>
                            <th class="right">₹0.00</th>
                        </tr>
                        <tr>
                            <th class="left">Incentive</th>
                            <th class="right">₹0.00</th>
                            <th class="left">late days joined</th>
                            <th class="right">₹0.00</th>
                        </tr>
                        <tr>
                            <th class="left">Other Allowance</th>
                            <th colspan="3"></th>

                        </tr>
                        <tr>
                            <th class="left">Gross:</th>
                            <th class="right">₹13000.00</th>
                            <th class="right" colspan="2">₹0.00</th>
                        </tr>
                        <tr>
                            <th class="left">Net Pay:</th>
                            <th class="right" colspan="3">₹13,000.00</th>
                        </tr>
                        <tr>
                            <th class="left">In Words</th>
                            <th colspan="3" class="text">THIRTEEN THOUSAND ONLY</th>
                        </tr>
                        <tr>
                            <th colspan="4" class="text">This is a System Genareted Pay Slip And Doesnot require Any signature</th>
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