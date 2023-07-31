<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Details</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css1/style.css">
  <link rel="stylesheet" type="text/javascript" href="js1/js.js">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: ;
}
</style>

</head>
<body>
  @include('header')
  @csrf
  <nav class="navbar navbar-expand-lg navbar-light"  style="background-color: #e3f2fd;">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">{{$schools->schoolname}}</a>
          </li></ul></div>
  </nav><br>
  <center>
    <div class="table">
<table class="col-sm-4" style="margin: 0 auto; text-align: center;" border="1">

<tr>
  <td>  School Name</td>
  <td>{{$schools->schoolname}}</td>
</tr>
<tr>
  <td>Type of school</td>
  <td>{{$schools['school_type']}}</td>
</tr>

<tr>
  <td>Institute</td>
  <td>{{$schools['institution']}}</td>
</tr>

<tr>
  <td>Government approval order</td>
  <td><a href="{{url('/download/'.$schools->id)}}">Download</a><button class="btn btn-info" id="OpenBtn">View</button>
  <div class="modal fade" id="myModal" data-backdrop="static">
   <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
      
     </div>
     <div class="modal-body">
      <div class="ExternalFile">
<iframe src="{{ asset('storage/upload/' . $schools->Government_approval_order) }}" height="420px" width="460px"></iframe>

      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-secondary" id="closeBtn" data-dismiss="modal">Close</button>
      </div>
     </div>
    </div>
   </div>
  </div></td>
</tr>


<tr>
  <td>Director of Education Certificate</td>
  <td><a href="{{url('/down/'.$schools->id)}}">Download</a><button class="btn btn-info" id="OpenBtn1">View</button>
  <div class="modal fade" id="myModal" data-backdrop="static">
   <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
      
     </div>
     <div class="modal-body">
      <div class="ExternalFile">
<iframe src="{{ asset('storage/upload/' . $schools->Director_of_Education_Certificate) }}" height="420px" width="460px"></iframe>

      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-secondary" id="closeBtn1" data-dismiss="modal">Close</button>
      </div>
     </div>
    </div>
   </div>
  </div></td>
</tr>
<tr>
  <td>School Fees</td>
  <td>{{$schools['School_fee_charges']}}</td>
</tr>
<tr>
  <td>Bus Facility</td>
  <td>{{$schools['Bus_facility']}}</td>

</tr>
<tr>
  <td>Total Students</td>
  <td>{{$schools['Total_number_of_students']}}</td>
</tr>
<tr>
  <td>Education Sub Inspector First Sanction Order</td>
  <td><a href="{{url('/file/'.$schools->id)}}">Download</a><button class="btn btn-info" id="OpenBtn2">View</button>
  <div class="modal fade" id="myModal" data-backdrop="static">
   <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
      
     </div>
     <div class="modal-body">
      <div class="ExternalFile">
<iframe src="{{ asset('storage/upload/' . $schools->Education_Sub_Inspector_First_Sanction_Order) }}" height="420px" width="460px"></iframe>

      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-secondary" id="closeBtn2" data-dismiss="modal">Close</button>
      </div>
     </div>
    </div>
   </div>
  </div></td>
</tr>

<tr>
  <td>Registration letter of the organization</td>
  <td><a href="{{url('/download/'.$schools->id)}}">Download</a><button class="btn btn-info" id="OpenBtn3">View</button>
  <div class="modal fade" id="myModal" data-backdrop="static">
   <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
      
     </div>
     <div class="modal-body">
      <div class="ExternalFile">
<iframe src="{{ asset('storage/upload/' . $schools->Government_approval_order) }}" height="420px" width="460px"></iframe>

      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-secondary" id="closeBtn3" data-dismiss="modal">Close</button>
      </div>
     </div>
    </div>
   </div>
  </div></td>
</tr>

<tr>
  <td>Plot Ownership Govt.</td>
  <td><a href="{{url('/files/'.$schools->id)}}">Download</a><button class="btn btn-info" id="OpenBtn4">View</button>
  <div class="modal fade" id="myModal" data-backdrop="static">
   <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
      
     </div>
     <div class="modal-body">
      <div class="ExternalFile">
<iframe src="{{ asset('storage/upload/' . $schools->Plot_Ownership_Govt) }}" height="420px" width="460px"></iframe>

      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-secondary" id="closeBtn4" data-dismiss="modal">Close</button>
      </div>
     </div>
    </div>
   </div>
  </div></td>
</tr>

<tr>
  <td>Total Minority student</td>
  <td>{{$schools['Number_of_Minority_Students']}}</td>
</tr>

<tr>
  <td>Total Teachers And workers</td>
  <td>{{$schools['Total_Teachers_Workers']}}</td>
</tr>
<tr>
  <td>Fire Facility </td>
  <td>{{$schools['Fire_NOC']}}</td>
</tr>

</table>
</div>
</center>
<hr>
<script> $("#OpenBtn").click(function() {
    $("#myModal").modal('show');
  });
 $("#closeBtn").click(function() {
    $("#myModal").modal('hide');
  });</script>

  <script> $("#OpenBtn1").click(function() {
    $("#myModal").modal('show');
  });
 $("#closeBtn1").click(function() {
    $("#myModal").modal('hide');
  });</script>

 <script> $("#OpenBtn2").click(function() {
    $("#myModal").modal('show');
  });
 $("#closeBtn2").click(function() {
    $("#myModal").modal('hide');
  });</script>

 <script> $("#OpenBtn3").click(function() {
    $("#myModal").modal('show');
  });
 $("#closeBtn3").click(function() {
    $("#myModal").modal('hide');
  });</script>

 <script> $("#OpenBtn4").click(function() {
    $("#myModal").modal('show');
  });
 $("#closeBtn4").click(function() {
    $("#myModal").modal('hide');
  });</script>



</body>
<footer>@include('footer')</footer>
</html>