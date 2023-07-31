@if(Session()->has('Email') || Session()->has('SEmail'))
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>School Form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css1/stylesheet.css">
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> 

	@include('header')
</head>
<body>

	@csrf
	<div class="container">

		<form  action ="schools" method="post" class="form" enctype="multipart/form-data">
			@csrf
			<label style="margin-left:50px;">Type of school</label>
			<select class="form-select-sm" name="school_type"  aria-label=".form-select-sm example" style="width:12%; margin-left: 50px;">
				<option selected>Select...</option>
				<option name="school_type" value="Unsubsidized" selected>Unaided</option>
				<option name="school_type" value="Self funded" selected>Self funded</option>
				<option name="school_type" value="Swayam Artha Sahayyak" selected>Self-financing assistant</option>
				<option name="school_type" value="Other Board Schools" selected>Other Board Schools</option>
			</select>
 		<!--<div class=drop>
	  <div class="dropdown">
     <button type="button" class="btn btn-primary dropdown-toggle"  data-toggle="dropdown">शाळेचा प्रकार
     <span class="caret"></span></button>
     <ul class="dropdown-menu">
       <li><a href="#">विना अनुदानीत</a></li>
       <li><a href="#">स्वयम विना अनुदानित</a></li>
       <li><a href="#">स्वयम् अर्थ सहय्याक</a></li>
       <li><a href="#">इतर बोर्ड शाळा</a></li>
	   </ul>
	 </div></div><br>-->




	 <div class="row">
	 	<div class="col-md-6">
	 		<div class="btn1">
	 			<div class="field">
	 				<label for="schoolname">School Name</label>
	 				<input type="text" class="form-control" id="schoolname" name="schoolname">
	 			</div>
	 		</div>
	 	</div>


	 			<div class="col-md-6">

	 				<div class="btn2">
	 					<div class="field">

	 						<label for="institution">Institution</label>
	 						<input type="text" class="form-control" id="institution"  name="institution">

	 					</div>
	 				</div>
	 			</div>
	 		</div><br><br>



	 					<div class="row">			
	 						<div class="col-md-6"> 	
	 							<div class="btn1">		
	 								<label for="institution1">Institution (Language) Minority</label>
	 								<div class="yesno"> 
	 									<label>	 
	 										<input type="radio" class="form-check-input" name="Institution_Minority" value="yes"> Yes</label>
	 										<label  >
	 											<input type="radio" class="form-check-input" name="Institution_Minority" value="no"> No</label>
	 										</div>
	 									</div>
	 								</div>


	 									<div class="col-md-6">
	 										<div class="btn2">
	 											<label for="govord">Official Recognition Rrder</label>
	 											<div class="yesno">
	 												<label>

	 													<input type="radio" onclick="showHide(0,'smfile')"   value="yes" class="form-check-input" name="Government_approval_order"> Yes
	 												</label>

	 												<label>
	 													<input type="radio" class="form-check-input" checked="checked"  onclick="showHide(1,'smfile')" value="no" name=
	 													"Government_approval_order">
	 													No
	 												</label></div>
	 											</div>

	 											<div class="browsebtn2" id="smfile"  style="display: none;">
	 												<input type="file" id="selectedFile"   name="Government_approval_order" style="display: none;" />
	 												<input type="button" class="btn btn-primary btn-sm" name="Government_approval_order" value="Browse..." onclick="document.getElementById('selectedFile').click();" />
	 											</div></div>



	 										</div><br><br>

	 										<div class="row">
	 											<div class="col-md-6">
	 												<div class="btn1">
	 													<label for="educhairman">Teaching Director Certificate/Order</label>
	 													<div class="yesno"> 
	 														<label>
	 															<input type="radio" onclick="showHide(0,'smfile1')"   value="yes" class="form-check-input" name="Director_of_Education_Certificate">Yes</label>

	 															<label>
	 																<input type="radio" class="form-check-input" checked="checked" onclick="showHide(1,'smfile1')" value="no"   name="Director_of_Education_Certificate">
	 																No
	 															</label></div>
	 														</div>

	 														<div class="browsebtn1" id="smfile1" style="display: none;">
	 															<input type="file" id="sel" name="Director_of_Education_Certificate" style="display: none;" />
	 															<input type="button" class="btn btn-primary btn-sm" name="Director_of_Education_Certificate" value="upload..." onclick="document.getElementById('sel').click();" /> </div> 



	 														</div>

	 														<div class="col-md-6">
	 															<div class="btn2">
	 																<label for="chairmanord">Director/Education Sub-Inspector First Sanction Order</label>
	 																<div class="yesno">
	 																	<label>
	 																		<input type="radio" onclick="showHide(0,'smfile2')"   value="yes" class="form-check-input" name="Education_Sub_Inspector_First_Sanction_Order" >
	 																		Yes
	 																	</label>
	 																	<label>
	 																		<input type="radio"  onclick="showHide(1,'smfile2')" checked="checked" value="no" class="form-check-input" name="Education_Sub_Inspector_First_Sanction_Order">
	 																		No
	 																	</label></div>
	 																</div>
	 																<div class="browsebtn2" id="smfile2" style="display: none;" >
	 																	<input type="file"  id="File" name="Education_Sub_Inspector_First_Sanction_Order" style="display: none;" />
	 																	<input type="button"  class="btn btn-primary btn-sm" name="Education_Sub_Inspector_First_Sanction_Order" value="upload..." onclick="document.getElementById('File').click();" /> </div></div></div><br><br>



	 																	<div class="row">
	 																		<div class="col-md-6">
	 																			<div class="btn1">
	 																				<label for="firstord">Information Officer</label>
	 																				<div class="yesno"> 
	 																					<label>
	 																						<input type="radio" class="form-check-input" name="Information_Officer" value="yes">
	 																						Yes
	 																					</label>
	 																					<label>
	 																						<input type="radio" class="form-check-input" name="Information_Officer" value="no">
	 																						No
	 																					</label></div>
	 																				</div></div>


	 																				<div class="col-md-6">
	 																					<div class="btn2"> 
	 																						<label for="eduletter">Academic Intent Letter</label>
	 																						<div class="yesno">
	 																							<label>
	 																								<input type="radio" class="form-check-input" name="Letter_of_Academic_Intent" value="yes">
	 																								Yes
	 																							</label>
	 																							<label>
	 																								<input type="radio" class="form-check-input" name="Letter_of_Academic_Intent" value="no">
	 																								No
	 																							</label> </div>
	 																						</div></div></div> <br><br> 

	 																						<div class="row">
	 																							<div class="col-md-6">
	 																								<div class="btn1">
	 																									<label for="conford">Mandal Sanction Order / Permanent First Sanction Order</label>
	 																									<div class="yesno">
	 																										<label>
	 																											<input type="radio" class="form-check-input" name="Permanent_First_Sanction_Order" value="yes">
	 																											Yes
	 																										</label>
	 																										<label>
	 																											<input type="radio" class="form-check-input" name="Permanent_First_Sanction_Order" value="no">
	 																											No
	 																										</label></div></div>

	 																									</div>


	 																									<div class="col-md-6">
	 																										<div class="btn2">

	 																											<label for="natuward">Order of Natural Detachment Wadi</label>
	 																											<div class="yesno">
	 																												<label>
	 																													<input type="radio" class="form-check-input" name="Order_of_Natural_Detachment_Wadi" value="yes">
	 																													Yes
	 																												</label>
	 																												<label>
	 																													<input type="radio" class="form-check-input" name="Order_of_Natural_Detachment_Wadi" value="no">
	 																													No
	 																												</label></div></div><br><br>

	 																											</div>

	 																										</div>

	 																										<div class="row">
	 																											<div class="col-md-6">
	 																												<div class="btn1">

	 																													<label for="etcboard">Order of NOC for schools of other boards</label>
	 																													<div class="yesno">

	 																														<label>
	 																															<input type="radio" class="form-check-input" name="Order_of_NOC_for_schools_of_other_boards" value="yes">
	 																															Yes
	 																														</label>
	 																														<label>
	 																															<input type="radio" class="form-check-input" name="Order_of_NOC_for_schools_of_other_boards" value="no">
	 																															No
	 																														</label></div> </div>

	 																													</div>

	 																													<div class="col-md-6">
	 																														<div class="btn2">
	 																															<label for="rte"> RTE School Accreditation :</label><br>
	 																															<label style="padding-left: 100px;">Year: 2013-2016</label><label style="padding-left: 250px;"><input type="radio" class="form-check-input" name="RTE_School_Accreditation_Year_2013_to_2016" value="yes">Yes</label> <input type="radio" class="form-check-input" name="RTE_School_Accreditation_Year_2013_to_2016" value="no">No</label><br>
	 																															<label style="padding-left: 100px;">Year: 2016-2019</label><label style="padding-left: 250px;"><input type="radio" class="form-check-input" name="RTE_School_Accreditation_Year_2016_to_2019" value="yes">Yes</label> <input type="radio" class="form-check-input" name="RTE_School_Accreditation_Year_2016_to_2019" value="no">No</label><br>
	 																															<label style="padding-left: 100px;">Year: 2019-2022</label><label style="padding-left: 250px;"><input type="radio" class="form-check-input" name="RTE_School_Accreditation_Year_2019_to_2022" value="yes">Yes</label> <input type="radio" class="form-check-input" name="RTE_School_Accreditation_Year_2019_to_2022" value="no">No</label><br>


				   <!--<div class="browsebtn2">
			  <label><input type="radio" onclick="showHide(0,'smfile3')" class="form-check-input" name="choice-radio10">Yes</label>
			  <label><input type="radio" onclick="showHide(1,'smfile3')" checked="checked" class="form-check-input" name="choice-radio10">No</label>
			</div> -->




				          <!--  <div class="browsebtn2" id='smfile3' style="display: none"; >
				                <div class='input-group date'  >
				                    <input type='text' class="form-control" />
				                     <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
				                    </span>
				                </div>
				            </div>
				          </div>-->
				        </div>
				      </div>			





				      <div class="row">
				      	<div class="col-md-6">
				      		<div class="btn1">
				      			<label for="audit">School Audit Report(Balance Sheet)Last 3 yr</label>
				      			<div class="yesno">

				      				<label>
				      					<input type="radio" class="form-check-input" name="School_Audit_Report" value="yes">
				      					Yes
				      				</label>
				      				<label>
				      					<input type="radio" class="form-check-input" name="School_Audit_Report" value="no">
				      					No
				      				</label></div></div>

				      			</div>
				      			<div class="col-md-6">
				      				<div class="btn2">
				      					<div >
				      						<label for="schoolfee">School fee charges</label>

				      						<input type="text" class="form-control"  name="School_fee_charges"></div>

				      					</div>
				      				</div></div>




				      				<div class="row">
				      					<div class="col-md-6">
				      						<div class="btn1">
				      							<label for="bus">Bus Service</label>
				      							<div class="yesno">
				      								<label>
				      									<input type="radio" class="form-check-input" name="Bus_facility"  value="Ownership">
				      									Ownership
				      								</label>
				      								<label>
				      									<input type="radio" class="form-check-input" name="Bus_facility" value="contract">
				      									Contract
				      								</label></div></div>

				      							</div>
				      							<div class="col-md-6">
				      								<div class="btn2">
				      									<div class="field">
				      										<label for="payment"> Employee Salary</label>
				      										<div class="yesno"> 
				      											<label>
				      												<input type="radio" class="form-check-input" name="Employee_Salary" value="Govt.salary" >
				      												gov. पगार
				      											</label>
				      											<label>
				      												<input type="radio" class="form-check-input" name="Employee_Salary" value=" Management salary">
				      												मॅनेजमेंट पगार 
				      											</label></div> 

				      											<input type="text" class="form-control" name="Employee_Salary"  ></div> 
				      										</div></div></div>		


				      										<div class="row">
				      											<div class="col-md-6">
				      												<div class="btn1">
				      													<div class="field">
				      														<label for="minoritynum">Number of minority students Last(3 yr)</label>


				      														<input type="text" class="form-control" name="Number_of_Minority_Students" >

				      													</div></div></div>

				      													<div class="row">
				      														<div class="col-md-6">
				      															<div class="btn1">
				      																<div class="field">
				      																	<label for="totnum">Total number of students </label>


				      																	<input type="text" class="form-control" name="Total_number_of_students"  ></div> 

				      																</div>  </div>

				      															</div><br><br>

				      															<div >
				      																<div class="col-md-6">
				      																	<div class="btn2">
				      																		<div class="field">
				      																			<label for="staffnum">Total Teachers /Teachers Other /Class IV Workers </label>


				      																			<input type="text" class="form-control" name="Total Teachers_Workers"  >

				      																		</div></div></div>

				      																		<div class="col-md-6">
				      																			<div class="btn2">
				      																				<div class="field">
				      																					<label for="instlet">Registration letter of the organization </label>
				      																					<div class="yesno">
				      																						<label>
				      																							<input type="radio" onclick="showHide(0,'smfile4')"  value="yes" class="form-check-input" name="Registration_letter_of_the_organization">
				      																							Yes
				      																						</label>
				      																						<label>
				      																							<input type="radio" onclick="showHide(1,'smfile4')" checked="checked" value="no" class="form-check-input" name="Registration_letter_of_the_organization">
				      																							No
				      																						</label></div> </div>
				      																						<div class="browsebtn2" id="smfile4" style="display: none;" >
				      																							<input type="file" id="sFile"  name="Registration_letter_of_the_organization" style="display: none;" />
				      																							<input type="button" class="btn btn-primary btn-sm" name="Registration_letter_of_the_organization" value="upload..." onclick="document.getElementById('sFile').click();" /> </div>  

				      																						</div>

				      																					</div>   

				      																					<div class="row">
				      																						<div class="col-md-6">
				      																							<div class="btn1"> 
				      																								<div class="field">
				      																									<label for="landown">Plot Ownership / Govt  </label>
				      																									<div class="browsebtn1">
				      																										<input type="file" id="selected" name="Plot_Ownership_Govt" style="display: none;" />
				      																										<input type="button" class="btn btn-primary btn-sm" name="Plot_Ownership_Govt" value="upload..." onclick="document.getElementById('selected').click();" /> </div><br><br>
				      																									</div></div>

				      																									<div class="col-md-6">
				      																										<div class="btn2">
				      																											<label for="nbcc">Nation Building Code Certificate </label>
				      																											<div class="yesno">
				      																												<label>
				      																													<input type="radio" class="form-check-input" name="Nation_Building_Code_Certificate" value="yes">
				      																													Yes
				      																												</label>
				      																												<label>
				      																													<input type="radio" class="form-check-input" name="Nation_Building_Code_Certificate" value="no">
				      																													No
				      																												</label></div> </div>


				      																											</div>

				      																										</div> <br><br>



				      																										<div class="row">
				      																											<div class="col-md-6">
				      																												<div class="btn2">
				      																													<label for="oc">Sharing OC certificate </label>
				      																													<div class="yesno">
				      																														<label>
				      																															<input type="radio" class="form-check-input" name="Occupancy_OC_ertificate" value="yes">
				      																															Yes
				      																														</label>
				      																														<label>
				      																															<input type="radio" class="form-check-input" name="Occupancy_OC_ertificate" value="no">
				      																															No
				      																														</label></div></div>
				      																													</div>

				      																													<div class="col-md-6">
				      																														<div class="btn2">
				      																															<label for="Fnoc">Fire NOC</label>

				      																															<div class="yesno">
				      																																<label>

				      																																	<input type="radio" class="form-check-input" name="Fire_NOC" value="yes">
				      																																	Yes
				      																																</label>
				      																																<label>
				      																																	<input type="radio" class="form-check-input" name="Fire_NOC" value="no">
				      																																	No
				      																																</label>   


				      																															</div> </div>

				      																														</div> 
				      																													</div><br><br>

				      																													<div class="row">
				      																														<div class="col-md-6">
				      																															<div class="btn1">
				      																																<label for="firstord">Appellate Authority</label>
				      																																<div class="yesno"> 
				      																																	<label>
				      																																		<input type="radio" class="form-check-input" name="Appellate_Authority" value="yes">
				      																																		Yes
				      																																	</label>
				      																																	<label>
				      																																		<input type="radio" class="form-check-input" name="Appellate_Authority" value="no">
				      																																		No
				      																																	</label></div>
				      																																</div></div></div>

				      																															</div>


				      																															<div class="row">
				      																																<div class="col-md-6">
				      																																	<div class="submitbtn">
				      																																		<style type="css" text-align></style>
				      																																		<button class="btn btn-primary" type="submit" >submit</button>

				      																																		<button class="btn btn-primary" type="reset" >reset</button>
				      																																	</div>
				      																																</div>
				      																															</div>

				      																														</div></div> 	</div>
				      																													</form>
				      																												</div>

				      																											</body>

				      																											<script >

				      																												function showHide(x,id) {
		//alert(id);

				      																													if (x==0){ 
				      																														document.getElementById(id).style.display= "block"
				      																													}		else {
				      																														document.getElementById(id).style.display= "none"
				      																													}
				      																													return;
				      																												}
				      																											</script>
				      																											<footer>@include('footer')</footer>


				      																											</html>
				      																											@else
				      																											<p>You Have Login To Access This Page</p>
				      																											@endif