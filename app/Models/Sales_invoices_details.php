<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales_invoices_details extends Model
{
    use HasFactory;
    protected $table="sales_invoices_details";
    protected $fillable=[
        'sales_invoices_auto_serial', 'com_code', 'quantity',
         'uom_id', 'isparentuom', 'unit_price', 'total_price',
          'invoice_date', 'added_by', 'created_at', 'updated_by',
           'updated_at', 'item_code', 'sales_item_type', 'batch_id',
            'production_date', 'expire_date', 'item_card_type','is_normal_orOther'
    ];
    }

