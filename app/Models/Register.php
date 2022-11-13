<?php 

namespace App\Models;

use App\Models\Model;

class Register extends Model
{
    public string $name;
    public string $email; 
    public string $password;
    public string $confirm_password;

    public function rules() : array
    {
        return [
           'name' => [self::REQUIRED],
           'email' => [self::REQUIRED, self::EMAIL],
           'password' => [self::REQUIRED, [self::MIN, 'min' => '4']],
           'confirm_password' => [self::REQUIRED, [self::MATCH, 'match' => 'password']],
        ];
    }
}