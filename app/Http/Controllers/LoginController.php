<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('login.login');
    }

    public function loginsuccess(Request $req)
    {
        $validate = $req->validate(
            [
                'username' => 'required|min:5',
                'password' => 'required|min:8'
            ],
            [
                'username.required' => 'Username Cannot left Empty',
                'password.required' => 'Enter a valid Password',
                'username.min' => 'Username should be at least 5 character long!',
                'password.min' => 'Password should be at least 8 character long!'
            ]
            );
            return "<br><h1>Login Success</h1>";
    }

    public function registration()
    {
        return view('registration.registration');
    }

    public function register(Request $req)
    {
        $validate = $req->validate(
            [
                'name' => 'required|min:8|string',
                'username' => 'required|min:5',
                'email' => 'email|required',
                'phone' => 'required|digits:11',
                'password' => 'required|min:8'
            ],
            [
                'username.required' => 'Username Cannot left Empty',
                'password.required' => 'Enter a valid Password',
                'username.min' => 'Username should be at least 5 character long!',
                'password.min' => 'Password should be at least 8 character long!'
            ]
            );
            $output="<table>
                            <tr>
                                <td>
                                    Name:
                                </td>
                                <td>
                                    ". $req->name ."
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    UserName:
                                </td>
                                <td>
                                ". $req->username ."
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Email:
                                </td>
                                <td>
                                ". $req->email ."
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Phone Number:
                                </td>
                                <td>
                                ". $req->phone ."
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Password:
                                </td>
                                <td>
                                ". $req->password ."
                                </td>
                            </tr>
                        </table>";
        return $output;
    }

    public function contact()
    {
        return view('contacts');
    }
}
