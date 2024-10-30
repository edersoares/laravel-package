<?php

namespace VendorName\ClassName\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use VendorName\ClassName\Database\Factories\ClassNameFactory;

class ClassName extends Model
{
    /** @use HasFactory<ClassNameFactory> */
    use HasFactory;

    protected $table = 'migration_table_name';
}
