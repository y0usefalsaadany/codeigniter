<?php 
namespace App\Models;
use CodeIgniter\Model;
use \Config\Database;
class UserModel extends Model{
    protected $db;
    function __construct(){
        $this->db = Database::connect();
    }

    function addAdmin($data){
        return $this->db->table('users')
                ->insert($data);
    }

    function loginAdmin($data){
        $password = 'sasasa';
        $result = $this->db->table('users')
        ->where('email' ,$data['email']);
        if ($result != NULL) {
            if (password_verify($password, $result->password)) {
                return $result;
            }
        }
        print_r($result);
        
    }
}