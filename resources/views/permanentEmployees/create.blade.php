@extends('admin.master')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><strong>PERMANENT/CO-TERMINUS EMPLOYEE</strong></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('permanentEmployees.index')}}">Permanent</a></li>
              <li class="breadcrumb-item active">Add Permanent Employee</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class ="card">
    <form action="{{ route('casualEmployees.create') }}" method="get" name="formWithAutoCal">
    @csrf
        <!-- general form elements -->
        <!-- /.card-header -->

    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Type</label>
                    <select class="form-control select1" name="emp_type" id="emp_type" required>
                        <option value="CASUAL">CASUAL EMPLOYEE</option>
                        <option value="PERMANENT" selected="selected">PERMANENT/CO-TERMINUS EMPLOYEE</option>
                        <option value="JO" >JO/COS EMPLOYEE</option>
                    </select>
                </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary swalDefaultSuccess">Change Employee Type</button>
                    </div>
                </div>
            </div>
        </form>
</div>

<form action="{{ route('permanentEmployees.store') }}" method="POST" name="formWithAutoCal">
@csrf
<!-- general form elements -->
<!-- /.card-header -->


<br>
<br>

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add New Permanent Employoee</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Type</label>
                    <select class="form-control select1" name="emp_type" id="emp_type" required>
                        <option value="" disabled selected hidden>Select Employee Type</option>
                        <option value="PERMANENT">PERMANENT EMPLOYEE</option>
                        <option value="PERMANENT">CO-TERMINUS</option>
                    </select>
                </div>
                    <!-- /.form-group -->
                <div class="form-group">
                <label>Name of Appointee</label>
                <input type="text" name="emp_name" class="form-control" placeholder="Name" required>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Position Title</label>
                    <select class="form-control select2" name="emp_title" id="emp_title" required>
                        <option value="" disabled selected hidden>Select Position Title</option>
                        <option value="Utility worker B">Utility worker B</option>
                        <option value="Utility worker B">Utility worker B</option>
                        <option value="Utility worker A">Utility worker A</option>
                        <option value="Utility worker A/ Ditch Tender">Utility worker A/ Ditch Tender</option>
                        <option value="Admin Aide">Admin Aide</option>
                        <option value="WRFO B">WRFO B</option>
                        <option value="Survery Aide A">Survery Aide A</option>
                        <option value="Sr. Carpenter A">Sr. Carpenter A</option>
                        <option value="Data Encoder">Data Encoder</option>
                        <option value="Driver-Mechanic B">Driver-Mechanic B</option>
                        <option value="Driver Mechanic B">Driver Mechanic B</option>
                        <option value="Data Encode/ IDO">Data Encode/ IDO</option>
                        <option value="Engineering Assistant B">Engineering Assistant B</option>
                        <option value="Industrial Security Guard A">Industrial Security Guard A</option>
                        <option value="Accounting Processor A">Accounting Processor A</option>
                        <option value="Computer File Librarian 1">Computer File Librarian 1</option>
                        <option value="Welder A">Welder A</option>
                        <option value="Foreman B">Foreman B</option>
                        <option value="Draftsman">Draftsman</option>
                        <option value="Heavy Equipment Operator">Heavy Equipment Operator</option>
                        <option value="Driver Mechanic A">Driver Mechanic A</option>
                        <option value="Auto Mechanic A">Auto Mechanic A</option>
                        <option value="Heavy Equip Operator">Heavy Equip Operator</option>
                        <option value="Collective Representative A">Collective Representative A</option>
                        <option value="Foreman A">Foreman A</option>
                        <option value="Engineering Assistant A">Engineering Assistant A</option>
                        <option value="Plant Mechanic">Plant Mechanic</option>
                        <option value="Senior Draftsman">Senior Draftsman</option>
                        <option value="Procurement Analyst B">Procurement Analyst B</option>
                        <option value="Senior Accounting Processor A">Senior Accounting Processor A</option>
                        <option value="Property Officer B">Property Officer B</option>
                        <option value="SWRFT">SWRFT</option>
                        <option value="Engineer B">Engineer B</option>
                        <option value="Irrigator's Development Officer A">Irrigator's Development Officer A</option>
                        <option value="Economist A">Economist A</option>
                        <option value="Engineer A">Engineer A</option>
                        <option value="Cashier B">Cashier B</option>
                        <option value="Hydrologist">Hydrologist</option>
                        <option value="Sr. IDO">Sr. IDO</option>
                        <option value="Senior Corporate Accounts Analyst">Senior Corporate Accounts Analyst</option>
                        <option value="Administrative Services Officer A">Administrative Services Officer A</option>
                        <option value="Senior Engineer A">Senior Engineer A</option>
                        <option value="Supervising IDO">Supervising IDO</option>
                        <option value="Supervising Engineer A">Supervising Engineer A</option>
                        <option value="Administrative Services Chief C">Administrative Services Chief C</option>
                        <option value="Principal Engineer C">Principal Engineer C</option>
                        <option value="Principal Engineer A">Principal Engineer A</option>
                        <option value="Division Manager A">Division Manager A</option>
                    </select>
                 </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Item No</label>
                    <input type="text" class="form-control" name="emp_itemNo" placeholder="Item Number" required>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Age</label>
                    <input type="number" class="form-control" name="emp_age" placeholder="Age" required>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Date of Birth</label>
                          <input type="date" class="form-control" name="emp_dateOfBirth" required/>
                </div>
                <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
                <div class="form-group">
                <label>Salary Grade:</label>
                <select class="form-control select2" name="emp_sg" id="emp_sg" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                    <option value="32">32</option>
                    <option value="33">33</option>
                </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Step:</label>
                    <select class="form-control select2" name="emp_step" id="emp_step" required>
                        <option value="1">Step 1</option>
                        <option value="2">Step 2</option>
                        <option value="3">Step 3</option>
                        <option value="4">Step 4</option>
                        <option value="5">Step 5</option>
                        <option value="6">Step 6</option>
                        <option value="7">Step 7</option>
                        <option value="8">Step 8</option>
                    </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Division</label>
                    <input type="text" class="form-control" name="emp_division" placeholder="Division" required>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>IMO</label>
                    <input type="text" class="form-control" name="emp_imo" placeholder="IMO" required>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Sex</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="F" name="emp_sex" value="F" required>
                        <label for="F" class="form-check-label">Female</label>
                        <br>
                        <input class="form-check-input" type="radio" id="M" name="emp_sex" value="M">
                        <label for="M" class="form-check-label">Male</label>
                    </div>
                </div>
                <!-- /.form-group -->
        </div>
        <!-- /.col -->

    </div>
    <!-- /.row -->
<!--DATES -->
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Dates</h3>
              </div>
              <div class="card-body">
                <!-- Date -->
                <div class="form-group">
                    <label>Date of Application</label>
                          <input type="date" class="form-control" name="emp_dateOfApp" required/>
                </div>
                <!-- Date -->
                <!-- Date -->
                <div class="form-group">
                    <label>Date of Last Promotion</label>
                          <input type="date" class="form-control" name="emp_dateOfLastProm"/>
                </div>
                <!-- Date -->
            </div>
        </div>
    </div>
<!--Attainment & Eligibility-->
        <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Educational Attainment & Eligibility</h3>
              </div>
              <div class="card-body">
                <!--Attainment & Eligibility-->
                <div class="form-group">
                    <label>Highest Educational Attainement</label>
                    <input type="text" class="form-control" name="emp_attainment" placeholder="Highest Educational Attainment" required>
                </div>
                <!--Attainment & Eligibility-->
                <!--Attainment & Eligibility-->
                <div class="form-group">
                    <label>Eligibility</label>
                    <input type="text" class="form-control" name="emp_eligible" placeholder="Eligibility" required>
                </div>
                <!--Attainment & Eligibility-->
            </div>
        </div>
        </div>
    </div>
<!--SALARY -->
<div class="row">
    <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Salary</h3>
          </div>
          <div class="card-body">
            <!-- Monthly Salary -->
            <div class="form-group">
                <label>Monthly Salary</label>
                <input type="number" class="form-control" onchange="calculateAmount(this.value);" step=".01"  name="emp_monthly" placeholder="Monthly Salary" required>
            </div>
            <!-- Monthly Salary -->
            <!-- Annual Salary -->
            <div class="form-group">
                <label>Annual Salary</label>
                <input type="number" class="form-control input-filled" step=".01" onblur="getTotal();"  id="emp_annual" name="emp_annual" placeholder="Annual Salary" required>
            </div>
            <!-- Annual Salary -->
        </div>
    </div>

</div>
<!--SPECIFIC PURPOSE ALLOWANCE -->
<div class="col-md-6">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">SPECIFIC PURPOSE ALLOWANCE</h3>
      </div>
      <div class="card-body">
        <!-- Date -->
        <div class="form-group">
              <!-- RATA -->
              <div class="form-group">
                <label>RATA</label>
                <input type="number" class="form-control input-filled"  step=".01" onblur="getTotal();" name="emp_rata" placeholder="RATA">
            </div>
            <!-- RATA -->
        </div>
        <!-- Date -->
    </div>
</div>
</div>
</div>
<!-- STANDARD ALLOWANCES -->
<div class="row">
    <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Standard Allowances</h3>
          </div>
          <div class="card-body">
                <!-- PERA -->
                <div class="form-group">
                    <label>PERA</label>
                    <input type="number" class="form-control input-filled" step=".01" onblur="getTotal();"  name="emp_pera" placeholder="PERA" required>
                </div>
                <!-- PERA -->

                <!-- MIDYEAR AND YEAREND BONUS -->
                <div class="form-group">
                    <label>MIDYEAR AND YEAREND BONUS</label>
                    <input type="number" class="form-control input-filled" step=".01" onblur="getTotal();"  name="emp_midEndBonus" placeholder="MIDYEAR AND YEAREND BONUS" required>
                </div>
                <!-- MIDYEAR AND YEAREND BONUS -->

                <!-- CLOTHING ALLOWANCE -->
                <div class="form-group">
                    <label>Clothing Allowance</label>
                    <input type="number" class="form-control input-filled" step=".01" onblur="getTotal();"  name="emp_uniAllow" placeholder="Clothing Allowance" required>
                </div>
                <!-- CLOTHING ALLOWANCE -->

            <!-- Cellphone Allowance -->
            <div class="form-group">
                <label>Cellphone Allowance</label>
                <input type="number" class="form-control input-filled" step=".01" onblur="getTotal();"  name="emp_cellAllow" placeholder="Cellphone Allowance">
            </div>
            <!-- Cellphone Allowance -->

            <!-- Cash Gift -->
            <div class="form-group">
                <label>Cash Gift</label>
                <input type="number" class="form-control input-filled" step=".01" onblur="getTotal();"  name="emp_cashGift" placeholder="Cash Gift" required>
            </div>
            <!-- Cash Gift -->
        </div>
    </div>
</div>
    <!-- INCENTIVES AND BENEFITS -->
    <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">INCENTIVES AND BENEFITS</h3>
          </div>
          <div class="card-body">
                <!-- Anniversary Bonus -->
                <div class="form-group">
                    <label>Anniversary Bonus</label>
                    <input type="number" class="form-control input-filled" step=".01" onblur="getTotal();"  name="emp_annivBonus" placeholder="Anniversary Bonus">
                </div>
                <!-- Anniversary Bonus -->

                <!-- No. of Dependent -->
                <div class="form-group">
                    <label>No. of Dependent</label>
                    <input type="number" class="form-control" name="emp_noOfDependent"  placeholder="No. of Dependent">
                </div>
                <!-- No. of Dependent -->

                <!-- Children Allowance -->
                <div class="form-group">
                    <label>Children Allowance</label>
                    <input type="number" class="form-control input-filled" step=".01" onblur="getTotal();"  name="emp_childrenAllow" placeholder="Children Allowance">
                </div>
                <!-- Children Allowance -->

                <!-- Meal Subsidy -->
                <div class="form-group">
                    <label>Meal Subsidy</label>
                    <input type="number" class="form-control input-filled" step=".01"  onblur="getTotal();"  name="emp_mealSubsi" placeholder="Meal Subsidy">
                </div>
                <!-- Meal Subsidy -->

                <!-- Medical -->
                <div class="form-group">
                    <label>Medical</label>
                    <input type="number" class="form-control input-filled" step=".01"  onblur="getTotal();"  name="emp_medical" placeholder="Medical">
                </div>
                <!-- Medical -->

                <!-- PEI -->
                <div class="form-group">
                    <label>PEI</label>
                    <input type="number" class="form-control input-filled" step=".01"  onblur="getTotal();"  name="emp_pei" placeholder="PEI" required>
                </div>
                <!-- PEI -->
        </div>
    </div>
     <!-- INCENTIVES AND BENEFITS -->
</div>

   <!-- FIXED EXPENDITURE -->
<div class="row">
    <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">FIXED EXPENDITURE</h3>
          </div>
          <div class="card-body">
                <!-- ECCC -->
                <div class="form-group">
                    <label>ECC</label>
                    <input type="number" class="form-control input-filled" step=".01"  onblur="getTotal();"  name="emp_ecc" placeholder="ECC" required>
                </div>
                <!-- ECC -->

                <!-- PAGIBIG -->
                <div class="form-group">
                    <label>PAGIBIG</label>
                    <input type="number" class="form-control input-filled" step=".01"  onblur="getTotal();"  name="emp_pagibig" placeholder="PAGIBIG" required>
                </div>
                <!-- PAGIBIG -->

                <!-- PHIC -->
                <div class="form-group">
                    <label>PHIC</label>
                    <input type="number" class="form-control input-filled" step=".01"  onblur="getTotal();"  name="emp_phic" placeholder="PHIC" required>
                </div>
                <!-- PHIC -->

                <!-- GSIS -->
                <div class="form-group">
                    <label>GSIS</label>
                    <input type="number" class="form-control input-filled" step=".01"  onblur="getTotal();"  name="emp_gsis" placeholder="GSIS" required>
                </div>
                <!-- GSIS -->
        </div>
    </div>
</div>
    <!-- REMARKS -->
    <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Remarks</h3>
          </div>
          <div class="card-body">

                <!-- Remarks -->
                <div class="form-group">
                    <label>Remarks</label>
                    <input type="text" class="form-control" name="emp_remarks" placeholder="Remarks">
                </div>
                <!-- Remarks -->
                 <!-- Total -->
                 <div class="form-group">
                    <label>Total</label>
                    <input type="text" class="form-control total" step=".01"  name="emp_total"  id="total" placeholder="0" readonly>
                </div>
                <!-- Total -->

            </div>
        </div>
    <!-- REMARKS -->
<div class="row">
    <div class="col-md-12">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary swalDefaultSuccess">Submit</button>
        </div>
    </div>
</div>

</form>


@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<script>
    //Auto Calculation of Annual Salary
        function calculateAmount(val) {
            var total = val * 12;
            var result = document.getElementById('emp_annual');
            result.value =total;
        }
        function getTotal(){
            var arr = document.querySelectorAll('.input-filled');
            var total = 0;
            for(var i = 0; i < arr.length; i++){
                if(parseFloat(arr[i].value)){
                    total += parseFloat(arr[i].value);
                }
            }
            document.getElementById('total').value = total.toFixed(2);
        }
</script>


<script>
    $('.alert').alert();

    $(function() {
      var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });

      $('.swalDefaultSuccess').click(function() {
        Toast.fire({
          icon: 'success',
          title: 'Employee data created successfully'
        })
      });

    });
</script>
@endsection
