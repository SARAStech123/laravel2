<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('school_type');
            $table->string('schoolname');
            $table->string('institution');
            $table->string('Institution_Minority');
            $table->string('Government_approval_order');
            $table->string('Director_of_Education_Certificate');
            $table->string('Education_Sub_Inspector_First_Sanction_Order');
            $table->string('Information_Officer');
            $table->string('Letter_of_Academic_Intent');
            $table->string('Permanent_First_Sanction_Order');
            $table->string('Order_of_Natural_Detachment_Wadi');
            $table->string('Order_of_NOC_for_schools_of_other_boards');
            $table->string('RTE_School_Accreditation_Year_2013_to_2016');
            $table->string('RTE_School_Accreditation_Year_2016_to_2019');
            $table->string('RTE_School_Accreditation_Year_2019_to_2022');
            $table->string('School_Audit_Report');
            $table->string('School_fee_charges');
            $table->string('Bus_facility');
            $table->string('Employee_Salary');
            $table->string('Number_of_Minority_Students');
            $table->string('Total_number_of_students');
            $table->string('Total_Teachers_Workers');
            $table->string('Registration_letter_of_the_organization');
            $table->string('Plot_Ownership_Govt');
            $table->string('Nation_Building_Code_Certificate');
            $table->string('Occupancy_OC_certificate');
            $table->string('Fire_NOC');
            $table->string('Appellate_Authority');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};
