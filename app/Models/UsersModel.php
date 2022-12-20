<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    // ...
    protected $table = "users";
    protected $primmaryKey = "id";
    protected $allowedFields = ['name', 'email', 'password', 'user_image', 'favicon_image'];
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at'; 
    protected $updatedField = 'updated_at'; 
}

?>