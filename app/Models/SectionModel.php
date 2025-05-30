<?php

namespace App\Models;

use CodeIgniter\Model;

class SectionModel extends Model
{
    protected $table            = 'section_s';
    protected $primaryKey       = 'section_pr_iddds';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['section_namesss', 'class_pr_id_set'];

}
