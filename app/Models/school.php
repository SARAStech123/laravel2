<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class school extends Model
{
    use HasFactory;

    public $fillable=[ 'school_type','schoolname','institution','Institution_Minority','Government_approval_order','Director_of_Education_Certificate','Education_Sub_Inspector_First_Sanction_Order','Information_Officer','Letter_of_Academic_Intent','Permanent_First_Sanction_Order','Order_of_Natural_Detachment_Wadi','Order_of_NOC_for_schools_of_other_boards','RTE_School_Accreditation_Year_2013_to_2016','RTE_School_Accreditation_Year_2016_to_2019','RTE_School_Accreditation_Year_2019_to_2022','School_Audit_Report','School_fee_charges','Bus_facility','Employee_Salary','Number_of_Minority_Students','Total_number_of_students','Total_Teachers_Workers','Registration_letter_of_the_organization','Plot_Ownership_Govt','Nation_Building_Code_Certificate','Occupancy_OC_certificate','Fire_NOC','Appellate_Authority',
           ];

}
