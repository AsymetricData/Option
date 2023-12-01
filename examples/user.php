<?php

require 'vendor/autoload.php';

use AsymetricData\Option\Contracts\Option;
use AsymetricData\Option\None;
use AsymetricData\Option\Some;

class User {

    public function __construct(
        public string $nickname)
    {}

    public static function find(int $id) : User
    {
        return new User('AsymetricData');
    }
    public function getNickname() : string
    {
        return $this->nickname;
    }
}

/**
 * @return Option<User>
 */
function findUser(int $id) : Option{
    //Some logic
    $user = User::find($id);
    // Alternate with this
    $user = null;

    return $user ? new Some($user) : new None('User not found');
}

$user = findUser(12);

if($user->isSome()){
    echo $user->unwrap()->getNickname();
}else{
    echo $user->error();
}