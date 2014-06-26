<?php

class PagesController extends BaseController
{

    public function all()
    {
        $data = User::all()->lists('username');
        return View::make('hello')->with('data',$data);
    }

    public function create($username)
    {
        $user = new User();
        $put = $user->createUser($username);
        if ($put) {
            return "User has been added successfully!";
        }


    }

    public function delete($username)
    {
        $user = new User();
        $delete = $user->deleteUser($username);
        if ($delete) {
            return "User has been deleted successfully!";
        }


    }

    public function update($username, $new)
    {

        $user = new User();
        $update = $user->updateUser($username, $new);
        if ($update) {
            return "User has been successfully updated";
        }
    }


}