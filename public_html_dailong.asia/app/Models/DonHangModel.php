<?php

namespace App\Models;

use CodeIgniter\Model;

class DonHangModel extends Model
{
    // ...
    protected $table = "don-hang";
    protected $primmaryKey = "id";
    protected $allowedFields = ['order_name', 'order_phone', 'order_adress', 'order_content', 'order_total', 'checked_order', 'created_at', 'updated_at'];
    protected $dateFormat = 'datetime';
    protected $useTimestamps = true;
    protected $createdField = 'created_at'; 
    protected $updatedField = 'updated_at'; 
}

?>