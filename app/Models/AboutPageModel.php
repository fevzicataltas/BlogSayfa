<?php

namespace App\Models;

use CodeIgniter\Model;

class AboutPageModel extends Model
{
    protected $table = 'about_page';
    protected $primaryKey = 'id';
    protected $allowedFields = ['content'];
    protected $useTimestamps = false;
}
