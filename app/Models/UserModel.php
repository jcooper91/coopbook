<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
	protected $table = 'users';
	protected $primaryKey = 'id';
	
	protected $returnType = 'array';
	protected $useSoftDeltes = true;
	
	protected $allowedFields = ['email', 'password'];
	
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';
}
