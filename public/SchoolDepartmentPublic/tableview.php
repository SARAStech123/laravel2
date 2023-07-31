<?php include 'database.php' ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>School Education Departement</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css1/styletableview.css">
	<link rel="stylesheet" type="text/javascript" href="js1/js.js">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> 
	 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


</head>
<body>
<div class="heading">
	<h2>शालेय शिक्षण व क्रीडा विभाग- महाराष्ट्र</h2><h4>School and Sports Education Department- Maharashtra</h4><hr>  
            <!--<h5>/(ठाणे,मुंबई शहर,पालघर,रायगड)<br>(Thane,Mumbai City,Palghar,Raigad)</h5>  <hr>  </a>-->
</div>


<nav class="navbar navbar-expand-lg navbar-light"  style="background-color: #e3f2fd;">
   	 
  		  <div class="collapse navbar-collapse" id="navbarNav">
   		   <ul class="navbar-nav">
   		   	<li class="nav-item">
   		   	<a class="nav-link" href="http://localhost/SchoolDepartmentHome/#">मुखपृष्ठ</a>
   		   </li>
      		<li class="nav-item">
       		 <a class="nav-link" href="#">दृष्टीक्षेप</a>
      		</li>
      		<li class="nav-item">
       		 <a class="nav-link" href="#">आमच्या बद्दल</a>
      		</li>
      		<li class="nav-item">
        	 <a class="nav-link" href="http://localhost/schoolDepartmentPublic/#">शाळाची माहिती</a>
      		</li>
      		<li class="nav-item">
        	 <a class="nav-link" href="http://localhost/schoolDepartment/#">शाळाची</a>
      		</li>
      		<li class="nav-item"style="margin-left:990px;">
        	 <a class="nav-link" href="http://localhost/SchoolDepartmentLogin/login.php?">LogIn 
        	 <img src="img/login1.png" height="30" alt="login logo"></a>
      		</li>
    	   </ul>
 		 </div>
	</nav> <hr> <br><br>

	<h2 style="text-align: center;">शाळेची माहिती <br>SCHOOL INFORMATION</h2><br>


			<table align=center class="table table-striped">
			  <tr>
			    <th>शाळेचा ओळख क्रमांक(ID)<br>School Identity Number(ID)</th><!--School_Identity_Number-->
			    <td> null</td>
			  </tr>
			  <tr>
			    <th>स्थिती सत्यापित/प्रक्रियेत आहे<br>Status Verified/Process</th><!--Status_Verified_Process-->
			    <td> null</td>
			  </tr>
			  <tr>
			    <th>शाळेचा प्रकार<br>Type of school</th><!--Type_Of_School-->
			    <td> null</td>
			  </tr>
			  <tr>
			    <th>शाळेचे नाव<br>School Name</th><!--School_Name-->
			    <td>null</td>
			  </tr>
				<tr>
			    <th>संस्था<br>Institution Name</th><!--Institution_Name-->
			    <td>null</td>
			  </tr>
			  <tr>
			    <th>संस्था(भाषा) अल्पसंख्याक<br>Institution(Language) Minority</th><!--Institution_Lang_Minority-->
			    <td> null</td>
			  </tr>
			  <tr>
			    <th>सरकारी मान्यता आदेश<br>Government Approval Orders</th><!--Government_Approval_Orders-->
			    <td>null</td>
			  </tr>
			  <tr>
			    <th>शिक्षण संचालक प्रमाणपत्र/आदेश<br>Director of Education Certificate/Order<br></th><!--Di_Edu-->
			    <td>null</td>
			  </tr>
			  <tr>
			    <th>संचालक/शिक्षण उपनिरीक्षण प्रथम मंजुरी आदेश<br>Director/Education Sub-Inspector First Sanction Order</th><!--Di_Edu_Sub_Ins-->
			    <td> null</td>
			  </tr>
			  <tr>
			    <th>माहिती अधिकारी<br>Information Officer</th><!--Info_Officer-->
			    <td>null</td>
			  </tr>
			  <tr>
			    <th>शैक्षणिक इरादा पत्र<br>Letter of Academic Intent</th><!--Academic_Intent-->
			    <td>null</td>
			  </tr>
			  <tr>
			    <th>मंडल मंजुरी आदेश/कायम प्रथम मंजुरी आदेश<br>Mandal Sanction Order/Permanent First Sanction Order</th><!--Mandal_Sanction-->
			    <td> null</td>
			  </tr>
			  <tr>
			    <th>नैसर्गिक तुकडी वाडीचे आदेश<br>Order of Natural Detachment Wadi</th><!--Order_Natural_Detachment-->
			    <td>null</td>
			  </tr>
			  <tr>
			    <th>इतर बोर्डाची शाळा करिता NOC चे आदेश<br>Order of NOC for schools of other boards</th>
			    <!--Other_Schl_NOC-->
			    <td>null</td>
			  </tr>
			  <tr>
			    <th>RTE शाळा मान्यता<br>RTE School Accreditation</th><!--RTE_Schl_Accre-->
			    <td> null</td>
			  </tr>
			  <tr>
			    <th>शाळेचा लेखापरीक्षण अहवाल (शिल्लक पत्रक) मागील 3 वर्ष<br>School Audit Report (Balance Sheet) Last 3 years</th><!--Audit_Report-->
			    <td>null</td>
			  </tr>
			  <tr>
			    <th>शाळा फीस शुल्क<br>School Fee Charges</th><!--School_Fee-->
			    <td>null</td>
			  </tr>
			  <tr>
			    <th>बस सुविधा<br>Bus facility</th><!--Bus_Facility-->
			    <td> null</td>
			  </tr>
			  <tr>
			    <th>कर्मचारी पगार<br>Employee Salary</th><!--Emp_Salary-->
			    <td>null</td>
			  </tr>
			  <tr>
			    <th>अल्पसंख्यांक विद्यार्थ्यांची संख्या शेवटचे (३ वर्षे)<br>Number of Minority Students Last(3 year)</th>
			    <!--No_Minority_Students-->
			    <td>null</td>
			  </tr>
			  <tr>
			    <th>एकूण विद्यार्थी संख्या<br>Total number of students</th><!--Total_No_Students-->
			    <td>null</td>
			  </tr>
			  <tr>
			    <th>एकूण शिक्षक/शिक्षक इतर/चतुर्थ श्रेणी कामगार<br>Total Teachers/Teachers Other/Class IV Workers</th><!--Techers_Workers-->
			    <td>null</td>
			  </tr>
			  <tr>
			    <th>संस्थेचे नोंदणी पत्र<br>Registration letter of the organization</th><!--Registration_Letter-->
			    <td> null</td>
			  </tr>
			  <tr>
			    <th>भूखंड मालकी/शासनाचे<br>Plot Ownership/Govt</th><!--Plot_Ownership-->
			    <td>null</td>
			  </tr>
			  <tr>
			    <th>नेशन बिल्डिंग कोड प्रमाणपत्र<br>Nation Building Code Certificate</th><!--Nation_Building_Code-->
			    <td>null</td>
			  </tr>
			  <tr>
			    <th>भोगवाटा OC प्रमाणपत्र<br>Occupancy OC Certificate</th><!--Occupancy_Certificate-->
			    <td>null</td>
			  </tr>
			  <tr>
			    <th>फायर एनओसी<br>Fire NOC</th><!--Fire_NOC-->
			    <td>null</td>
			  </tr>
			  <tr>
			    <th>अपिलीय अधिकारी<br>Appellate Officer</th><!--Appellate_Officer-->
			    <td>null</td>
			  </tr>
			</table><br>
<div style="text-align: center;">
<a href='http://localhost/schoolDepartmentPublic/#'>
  <button class="GFG" id="btn">Go Back</button></a>
</div><br>


<?php 

  $sqls = "SELECT  School_Identity_Number,Status_Verified_Process,Type_Of_School,School_Name,Institution_Name,Institution_Lang_Minority, Government_Approval_Orders,Di_Edu,Di_Edu_Sub_Ins,Info_Officer,Academic_Intent,Mandal_Sanction,Order_Natural_Detachment,Other_Schl_NOC,RTE_Schl_Accre,Audit_Report,School_Fee,Bus_Facility,Emp_Salary,No_Minority_Students,
  No_Minority_Students,Techers_Workers,Registration_Letter,Plot_Ownership,Nation_Building_Code,
  Occupancy_Certificate,Fire_NOC,Appellate_Officer,FROM data_tableview ";
  $results = $conn->query($sqls);
  $rows=$results;
   while($rows = $results->fetch_assoc()) 
{  
?>
<section>
	<table align=center class="table table-striped">
		<tbody>
			<tr>
			    <th>शाळेचा ओळख क्रमांक(ID)<br>School Identity Number(ID)</th><!--School_Identity_Number-->
			    <td><?php echo $row["School_Identity_Number"]; ?></td>
			  </tr>
			  <th>स्थिती सत्यापित/प्रक्रियेत आहे<br>Status Verified/Process</th><!--Status_Verified_Process-->
			    <td><?php echo $row["Status_Verified_Process"]; ?></td>
			  </tr>
			  <tr>
			    <th>शाळेचा प्रकार<br>Type of school</th><!--Type_Of_School-->
			    <td><?php echo $row["Type_Of_School"]; ?></td>
			  </tr>
			  <tr>
			    <th>शाळेचे नाव<br>School Name</th><!--School_Name-->
			    <td><?php echo $row["School_Name"]; ?></td>
			  </tr>
				<tr>
			    <th>संस्था<br>Institution Name</th><!--Institution_Name-->
			    <td><?php echo $ro["Institution_Name"]; ?></td>
			  </tr>
			  <tr>
			    <th>संस्था(भाषा) अल्पसंख्याक<br>Institution(Language) Minority</th><!--Institution_Lang_Minority-->
			    <td><?php echo $row["Institution_Lang_Minority"]; ?></td>
			  </tr>
			  <tr>
			    <th>सरकारी मान्यता आदेश<br>Government Approval Orders</th><!--Government_Approval_Orders-->
			    <td><?php echo $row["Government_Approval_Orders"]; ?></td>
			  </tr>
			  <tr>
			    <th>शिक्षण संचालक प्रमाणपत्र/आदेश<br>Director of Education Certificate/Order<br></th><!--Di_Edu-->
			    <td><?php echo $row["Di_Edu"]; ?></td>
			  </tr>
			  <tr>
			    <th>संचालक/शिक्षण उपनिरीक्षण प्रथम मंजुरी आदेश<br>Director/Education Sub-Inspector First Sanction Order</th><!--Di_Edu_Sub_Ins-->
			    <td> <?php echo $row["Di_Edu_Sub_Ins"]; ?></td>
			  </tr>
			  <tr>
			    <th>माहिती अधिकारी<br>Information Officer</th><!--Info_Officer-->
			    <td> <?php echo $row["Info_Officer"]; ?></td>
			  </tr>
			  <tr>
			    <th>शैक्षणिक इरादा पत्र<br>Letter of Academic Intent</th><!--Academic_Intent-->
			    <td> <?php echo $row["Academic_Intent"]; ?></td>
			  </tr>
			  <tr>
			    <th>मंडल मंजुरी आदेश/कायम प्रथम मंजुरी आदेश<br>Mandal Sanction Order/Permanent First Sanction Order</th><!--Mandal_Sanction-->
			    <td> <?php echo $row["Mandal_Sanction"]; ?></td>
			  </tr>
			  <tr>
			    <th>नैसर्गिक तुकडी वाडीचे आदेश<br>Order of Natural Detachment Wadi</th><!--Order_Natural_Detachment-->
			    <td> <?php echo $row["Order_Natural_Detachment"]; ?></td>
			  </tr>
			  <tr>
			    <th>इतर बोर्डाची शाळा करिता NOC चे आदेश<br>Order of NOC for schools of other boards</th>
			    <!--Other_Schl_NOC-->
			    <td> <?php echo $row["Other_Schl_NOC"]; ?></td>
			  </tr>
			  <tr>
			    <th>RTE शाळा मान्यता<br>RTE School Accreditation</th><!--RTE_Schl_Accre-->
			    <td> <?php echo $row["RTE_Schl_Accre"]; ?></td>
			  </tr>
			  <tr>
			    <th>शाळेचा लेखापरीक्षण अहवाल (शिल्लक पत्रक) मागील 3 वर्ष<br>School Audit Report (Balance Sheet) Last 3 years</th><!--Audit_Report-->
			    <td> <?php echo $row["Audit_Report"]; ?></td>
			  </tr>
			  <tr>
			    <th>शाळा फीस शुल्क<br>School Fee Charges</th><!--School_Fee-->
			    <td> <?php echo $row["School_Fee"]; ?></td>
			  </tr>
			  <tr>
			    <th>बस सुविधा<br>Bus facility</th><!--Bus_Facility-->
			    <td> <?php echo $row["Bus_Facility"]; ?></td>
			  </tr>
			  <tr>
			    <th>कर्मचारी पगार<br>Employee Salary</th><!--Emp_Salary-->
			    <td> <?php echo $row["Emp_Salary"]; ?></td>
			  </tr>
			  <tr>
			    <th>अल्पसंख्यांक विद्यार्थ्यांची संख्या शेवटचे (३ वर्षे)<br>Number of Minority Students Last(3 year)</th>
			    <!--No_Minority_Students-->
			    <td> <?php echo $row["No_Minority_Students"]; ?></td>
			  </tr>
			  <tr>
			    <th>एकूण विद्यार्थी संख्या<br>Total number of students</th><!--Total_No_Students-->
			    <td> <?php echo $row["Total_No_Students"]; ?></td>
			  </tr>
			  <tr>
			    <th>एकूण शिक्षक/शिक्षक इतर/चतुर्थ श्रेणी कामगार<br>Total Teachers/Teachers Other/Class IV Workers</th><!--Techers_Workers-->
			    <td> <?php echo $row["Techers_Workers"]; ?></td>
			  </tr>
			  <tr>
			    <th>संस्थेचे नोंदणी पत्र<br>Registration letter of the organization</th><!--Registration_Letter-->
			    <td> <?php echo $row["Registration_Letter"]; ?></td>
			  </tr>
			  <tr>
			    <th>भूखंड मालकी/शासनाचे<br>Plot Ownership/Govt</th><!--Plot_Ownership-->
			    <td> <?php echo $row["Plot_Ownership"]; ?></td>
			  </tr>
			  <tr>
			    <th>नेशन बिल्डिंग कोड प्रमाणपत्र<br>Nation Building Code Certificate</th><!--Nation_Building_Code-->
			    <td> <?php echo $row["Nation_Building_Code"]; ?></td>
			  </tr>
			  <tr>
			    <th>भोगवाटा OC प्रमाणपत्र<br>Occupancy OC Certificate</th><!--Occupancy_Certificate-->
			    <td> <?php echo $row["Occupancy_Certificate"]; ?></td>
			  </tr>
			  <tr>
			    <th>फायर एनओसी<br>Fire NOC</th><!--Fire_NOC-->
			    <td> <?php echo $row["Fire_NOC"]; ?></td>
			  </tr>
			  <tr>
			    <th>अपिलीय अधिकारी<br>Appellate Officer</th><!--Appellate_Officer-->
			    <td> <?php echo $row["Appellate_Officer"]; ?></td>
			  </tr>
			</table>
		</tbody>
	</table>
</section>
<?php } ?>

<footer>
  <div><a href="https://education.maharashtra.gov.in/">Maharashtra Goverment</a></div>
</footer>

	</body>
</html>