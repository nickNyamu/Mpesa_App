<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        "FirstName",
        "MiddleName",
        "LastName",
        "TransactionType",
        "TransID",
        "TransTime",
        "BusiessShortCode",
        "BillRefNumber",
        "InvoiceNumber",
        "ThirdPartyTransID",
        "MSISDN",
        "TransAmount",
        "OrgAccountBalance",
    ];

    
}
