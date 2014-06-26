<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface
{

    public $timestamps = false;

    use UserTrait, RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');

    public function createUser($username)
    {

        $user = new User();
        $user->username = $username;
        $user->password = Hash::make('1234');

        if ($user->save()) {
            return true;
        };
    }

    public function deleteUser($username)
    {

        $user = User::where('username', '=', $username);

        if ($user->delete()) {
            return true;
        };

    }

    public function updateUser($username, $new) {

        $user = User::where('username','=',$username)->first();
        $user->username = $new;

        if($user->save()) {
            return true;
        }
    }


}
