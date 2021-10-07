<?php

namespace App\Imports;

use App\Models\Transaction;
use Maatwebsite\Excel\Concerns\ToModel;

class TransactionsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return Transaction
     */
    public function model(array $row)
    {
        return new Transaction([

       'Assigned_to'  => $row[1],
       'Indicate_status_in_this_column_updated'  => $row[2],
       'Current_Status_registered_withdrawn_or_expired)'  => $row[3],
       'Application_No'  => $row[4],
        'MA_Number' => $row[5],
       'Product_name_Brand_Name'   => $row[6],
       'Generic_INN'  => $row[7],
       'API_Active_Ingredients'  => $row[8],
       'Product_Strength'  => $row[9],
        'Dosage_Form'  => $row[10],
        'Human_Veterinary_Allied_Medical_Device'  => $row[11],
        'Category_of_Distribution'  => $row[12],
       'Date_of_Issue_of_MA_CERTIFICATE'  => $row[13],
       'Date_of_Expiry_of_MA_CERTIFICATE'  => $row[14],
        'Name_of_Applicant_MA_Holder'  => $row[15],
        'MAH_Telephone No'  => $row[16],
       'MAH_Physical_Address'  => $row[17],
        'MAH_Postal_Address'  => $row[18],
        'MAH_Email_Address'  => $row[19],
       'MAH_Region'  => $row[20],
       'MAH_Country'  => $row[21],
       'FPP_Manufacturer'  => $row[22],
        'FPP_Telephone_No'  => $row[23],
       'FPP_Physical_Address'  => $row[24],
       'FPP_Postal_Address_Optional'  => $row[25],
       'FPP_Email_Address'  => $row[26],
       'FPP_Region_State_Optional'  => $row[27],
        'FPP_Country'  => $row[28],
        'Local_contact_person'  => $row[29],
        'Physical_Address'  => $row[30],
       'Region'  => $row[31],
        'Email_Address'  => $row[32],
        'Local_Contact_Country_Zambia'  => $row[33],
        'Name_Clinical_Research_Org'  => $row[34],
        'Physical_Address_Clinical_Research_Org'  => $row[35],
       'Telephone_Clinical_Research_Org'  => $row[36],
        'Email_Clinical_Research_Org'  => $row[37],
        'Contact_Person_Clinical_Research_Org'  => $row[38],
        'Study_Number'  => $row[39],
        ]);
    }
}
