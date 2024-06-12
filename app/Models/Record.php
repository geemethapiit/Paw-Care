<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    protected $table = 'medical_records';

    protected $fillable = [
        'pet_name',
        'customer_name',
        'date_of_record',
        'treatment_given',
        'veterinarian_name',
    ];
}
