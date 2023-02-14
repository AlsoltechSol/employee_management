
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
        width:100%;
        margin-top: 10px;         
    }
    .leavetable th,td{
        text-align: center;
        border: 1px solid black;   
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
    .leavetype{
        margin-left: 5px;
        margin-right: 71px;
    }
    /* .radiotype{
        padding: 5px;
    } */
    input[type="number"]{
        width: 147px;
        height: 5vh;
        margin: auto;
        text-align: center;
      }
      .leave_buttons {
  /* padding: 10px 20px; */
  font-size: 20px;
  border: none;
  background-color: transparent;
}
.leavenumber{
margin-right:39px; 
}
.leave-catagory{
    width: 193px;
}
.leave-type{
    width: 193px;
}
input[type="file"]{
    width:390px;
}
.documents{
    margin-right: 25px;
}
.reason{
    width: 1101px;
}
.leavestatus{
    margin-top: 12px;
}
.status{
    font-size: 26px;
    font-weight: bold;
}
.submit{
    display: flex;
    justify-content: flex-end;    
}
.submit button{
    width: 188px;
    height: 5vh;
   
    color: white;
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
            <div class="form-row row d-flex">
                <div class="col-md-6 mb-3 ">
                    <label for="validationDefault04" class="leave">Leave Catagory</label>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-primary leave-catagory">
                            <input type="radio" name="options" id="option1">
                            CL
                        </label>&nbsp;&nbsp;&nbsp;&nbsp; 
                        <label class="btn btn-primary leave-catagory">
                            <input type="radio" name="options" id="option2">
                            EL
                        </label>
                    </div>
                </div>
                <div class="col-md-6 mb-3 d-flex ">
                    <label for="validationDefault04" class="leavetype">Leave type</label>
                    <div class="btn-group btn-group-toggle radiotype" data-toggle="buttons">
                        <label class="btn btn-primary leave-type ">
                            <input type="radio" name="options" id="option1">
                            Full Day
                        </label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label class="btn btn-primary leave-type">
                            <input type="radio" name="options" id="option2">
                            Half day
                        </label>
                    </div>
                </div>
                
                    
                 
                 
            </div>
            <div style="display: flex;">
                        
                <div >
                  <label for="leaves" class="leavenumber">Number of Leaves:</label>
                  <label for="CL">CL:</label>
                  <button type="button" id="decrease-CL" class="leave_buttons">-</button>
                  <input type="number" id="CL" name="CL" value="0" >
                  <button type="button" id="increase-CL" class="leave_buttons">+</button>
                </div>&nbsp;&nbsp;&nbsp;&nbsp;
                <div >
                  <label for="PL">PL:</label>
                  <button type="button" id="decrease-PL" class="leave_buttons">-</button>
                  <input type="number" id="PL" name="PL" value="0" >
                  <button type="button" id="increase-PL" class="leave_buttons">+</button>
                </div>
                <div class="col-md-6 mb-3 d-flex">
                    <label for="validationDefault03" class="documents">Upload Documents</label>
                    <input type="File" class="form-control" id="validationDefault03">
                </div>
            </div>
            
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="validationDefault03">Reason</label>
                    <textarea name="Reason" cols="100" rows="5" class="reason"></textarea>
                </div>
            </div>
        </form>
        <table class="leavetable">
            <h2>Leave distibution</h2>
           
                <tr>
                    <th>Paid Leaves</th>
                    <th>Unpaid Leaves</th>
                </tr>
            
                <tr>
                    <td>1</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
       
        </table>

<div class="leavestatus" d-flex" >
    <label class="status">Leave Status</label>
    <select name="appruval" id="">
        <option value="Appruved">Appruved</option>
        <option value="Rejected">Rejected</option>
    </select>
</div>
<div class="submit">
    <button class="btn-primary" type="submit">Submit</button>
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
<script>
    const decreaseOption1 = document.getElementById("decrease-CL");
const increaseOption1 = document.getElementById("increase-CL");
const CL = document.getElementById("CL");

const decreaseOption2 = document.getElementById("decrease-PL");
const increaseOption2 = document.getElementById("increase-PL");
const PL = document.getElementById("PL");

decreaseOption1.addEventListener("click", function() {
CL.value = parseInt(CL.value) - 1;
});

increaseOption1.addEventListener("click", function() {
CL.value = parseInt(CL.value) + 1;
});

decreaseOption2.addEventListener("click", function() {
PL.value = parseInt(PL.value) - 1;
});

increaseOption2.addEventListener("click", function() {
PL.value = parseInt(PL.value) + 1;
});

  </script>
@endsection