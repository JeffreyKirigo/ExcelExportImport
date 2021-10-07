<?php

namespace App\Exports;

use App\Models\Transaction;
use Maatwebsite\Excel\Concerns\FromCollection;

class TransactionsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Transaction::all();
    }
    public function headings(): array
    {
        return [

            'Assigned_to',
            'Indicate_status_in_this_column_updated',
            'Current_Status_registered_withdrawn_or_expired)',
            'Application_No',
            'MA_Number',
            'Product_name_Brand_Name',
            'Generic_INN',
            'API_Active_Ingredients',
            'Product_Strength',
            'Dosage_Form',
            'Human_Veterinary_Allied_Medical_Device',
            'Category_of_Distribution',
            'Date_of_Issue_of_MA_CERTIFICATE',
            'Date_of_Expiry_of_MA_CERTIFICATE',
            'Name_of_Applicant_MA_Holder',
            'MAH_Telephone No',
            'MAH_Physical_Address',
            'MAH_Postal_Address',
            'MAH_Email_Address',
            'MAH_Region',
            'MAH_Country',
            'FPP_Manufacturer',
            'FPP_Telephone_No',
            'FPP_Physical_Address',
            'FPP_Postal_Address_Optional',
            'FPP_Email_Address',
            'FPP_Region_State_Optional',
            'FPP_Country',
            'Local_contact_person',
            'Physical_Address',
            'Region_Optional',
            'Email_Address',
            'Local_Contact_Country_Zambia',
            'Name_Clinical_Research_Org',
            'Physical_Address_Clinical_Research_Org',
            'Telephone_Clinical_Research_Org',
            'Email_Clinical_Research_Org',
            'Contact_Person_Clinical_Research_Org',
            'Study_Number'
        ];
    }

    public function map($transaction): array
    {
        return [


            $transaction->Assigned_to,
            $transaction->Indicate_status_in_this_column_updated,
            $transaction->Current_Status_registered_withdrawn_or_expired,
            $transaction->Application_No,
            $transaction->MA_Number,
            $transaction->Product_name_Brand_Name,
            $transaction->Generic_INN,
            $transaction->API_Active_Ingredients,
            $transaction->Product_Strength,
            $transaction->Dosage_Form,
            $transaction->Human_Veterinary_Allied_Medical_Device,
            $transaction->Category_of_Distribution,
            $transaction->Date_of_Issue_of_MA_CERTIFICATE,
            $transaction->Date_of_Expiry_of_MA_CERTIFICATE,
            $transaction->Name_of_Applicant_MA_Holder,
            $transaction->MAH_Telephone_No,
            $transaction->MAH_Physical_Address,
            $transaction->MAH_Postal_Address,
            $transaction->MAH_Email_Address,
            $transaction->MAH_Region,
            $transaction->MAH_Country,
            $transaction->FPP_Manufacturer,
            $transaction->FPP_Telephone_No,
            $transaction->FPP_Physical_Address,
            $transaction->FPP_Postal_Address_Optional,
            $transaction->FPP_Email_Address,
            $transaction->FPP_Region_State_Optional,
            $transaction->FPP_Country,
            $transaction->Local_contact_person,
            $transaction->Physical_Address,
            $transaction->Region,
            $transaction->Email_Address,
            $transaction->Local_Contact_Country_Zambia,
            $transaction->Name_Clinical_Research_Org,
            $transaction->Physical_Address_Clinical_Research_Org,
            $transaction->Telephone_Clinical_Research_Org,
            $transaction->Email_Clinical_Research_Org,
            $transaction->Contact_Person_Clinical_Research_Org,
            $transaction->Study_Number,
        ];
    }
}
