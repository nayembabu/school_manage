<?php

namespace App\Models;

use CodeIgniter\Model;

class ClassModel extends Model
{
    protected $table      = 'class_name'; // Table Name
    protected $primaryKey = 'class_name_auto_id'; // Primary Key
    protected $allowedFields = ['class_name_s', 'class_roman', 'numerical', 'create_time', 'create_date']; // Allowed Fields



}
