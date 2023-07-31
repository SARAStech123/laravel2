<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\school;

class SchoolController extends Controller
{
    public function schools(Request $request)
{
      $file = $request->file('Government_approval_order');
        $director = $request->file('Director_of_Education_Certificate');
        $education = $request->file('Education_Sub_Inspector_First_Sanction_Order');
        $register = $request->file('Registration_letter_of_the_organization');
        $plot = $request->file('Plot_Ownership_Govt');

        $file->move(storage_path('app/public/upload'), $file->getClientOriginalName());
        $file= $file->getClientOriginalName();
        $director->move(storage_path('app/public/upload'), $director->getClientOriginalName());
        $director= $director->getClientOriginalName();
        $education->move(storage_path('app/public/upload'), $education->getClientOriginalName());
        $education= $education->getClientOriginalName();
        $register->move(storage_path('app/public/upload'), $register->getClientOriginalName());
        $register= $register->getClientOriginalName();
        $plot->move(storage_path('app/public/upload'), $plot->getClientOriginalName());
         $plot= $plot->getClientOriginalName();

              
        $school = new school();
        $school->schoolname =$request->schoolname;
        $school->institution =$request->institution;
        $school->Institution_Minority =$request->Institution_Minority;

          
        $school->Government_approval_order = $file;
        $school->Director_of_Education_Certificate =$director;
        $school->Education_Sub_Inspector_First_Sanction_Order =$education;
        $school->Information_Officer =$request->Information_Officer;
        $school->Letter_of_Academic_Intent =$request->Letter_of_Academic_Intent;
        $school->Permanent_First_Sanction_Order =$request->Permanent_First_Sanction_Order; 
        $school->Order_of_Natural_Detachment_Wadi =$request->Order_of_Natural_Detachment_Wadi;
        $school->Order_of_NOC_for_schools_of_other_boards =$request->Order_of_NOC_for_schools_of_other_boards;
        $school->RTE_School_Accreditation_Year_2013_to_2016 =$request->RTE_School_Accreditation_Year_2013_to_2016;
        $school->RTE_School_Accreditation_Year_2016_to_2019 =$request->RTE_School_Accreditation_Year_2016_to_2019;
        $school->RTE_School_Accreditation_Year_2019_to_2022 =$request->RTE_School_Accreditation_Year_2019_to_2022 ;
        $school->School_Audit_Report = $request->School_Audit_Report;
        $school->School_fee_charges = $request->School_fee_charges;
        $school->Bus_facility = $request->Bus_facility;
        $school->Employee_Salary = $request->Employee_Salary;
        $school->Number_of_Minority_Students = $request->Number_of_Minority_Students;
        $school->Total_number_of_students = $request->Total_number_of_students;
        $school->Total_Teachers_Workers =$request->Total_Teachers_Workers;
        $school->Registration_letter_of_the_organization =$register;
        $school->Plot_Ownership_Govt= $plot;
        $school->Nation_Building_Code_Certificate =$request->Nation_Building_Code_Certificate ;
        $school->Occupancy_OC_certificate =$request->Occupancy_OC_certificate;
        $school->Fire_NOC =$request->Fire_Noc;
        $school->Appellate_Authority =$request->Appellate_Authority;
        $school->save();
        return view('Dashboard');

}



}
