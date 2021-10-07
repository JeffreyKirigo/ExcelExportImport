<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('Assigned_to')->nullable();
            $table->longText('Indicate_status_in_this_column_updated')->nullable();
            $table->longText('Current_Status_registered_withdrawn_or_expired)')->nullable();
            $table->longText('Application_No')->nullable();
            $table->longText('MA_Number')->nullable();
            $table->longText('Product_name_Brand_Name')->nullable();
            $table->longText('Generic_INN')->nullable();
            $table->longText('API_Active_Ingredients')->nullable();
            $table->longText('Product_Strength')->nullable();
            $table->longText('Dosage_Form')->nullable();
            $table->longText('Human_Veterinary_Allied_Medical_Device')->nullable();
            $table->longText('Category_of_Distribution')->nullable();
            $table->longText('Date_of_Issue_of_MA_CERTIFICATE')->nullable();
            $table->longText('Date_of_Expiry_of_MA_CERTIFICATE')->nullable();
            $table->longText('Name_of_Applicant_MA_Holder')->nullable();
            $table->longText('MAH_Telephone No')->nullable();
            $table->longText('MAH_Physical_Address')->nullable();
            $table->longText('MAH_Postal_Address')->nullable();
            $table->longText('MAH_Email_Address')->nullable();
            $table->longText('MAH_Region')->nullable();
            $table->longText('MAH_Country')->nullable();
            $table->longText('FPP_Manufacturer')->nullable();
            $table->longText('FPP_Telephone_No')->nullable();
            $table->longText('FPP_Physical_Address')->nullable();
            $table->longText('FPP_Postal_Address_Optional')->nullable();
            $table->longText('FPP_Email_Address')->nullable();
            $table->longText('FPP_Region_State_Optional')->nullable();
            $table->longText('FPP_Country')->nullable();
            $table->longText('Local_contact_person')->nullable();
            $table->longText('Physical_Address')->nullable();
            $table->longText('Region')->nullable();
            $table->longText('Email_Address')->nullable();
            $table->longText('Local_Contact_Country_Zambia')->nullable();
            $table->longText('Name_Clinical_Research_Org')->nullable();
            $table->longText('Physical_Address_Clinical_Research_Org')->nullable();
            $table->longText('Telephone_Clinical_Research_Org')->nullable();
            $table->longText('Email_Clinical_Research_Org')->nullable();
            $table->longText('Contact_Person_Clinical_Research_Org')->nullable();
            $table->longText('Study_Number')->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
