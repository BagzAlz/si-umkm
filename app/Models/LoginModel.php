<?php
namespace App\Models;
use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = [
        'username',
        'password'
    ];
    protected $useTimestamps = false;
}
