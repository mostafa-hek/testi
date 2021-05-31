<?php

namespace App\Http\Controllers\v1;
use App\Models\User;
use App\Http\Resources\v1\User as UserResource;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource as CourseResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Lumen\Routing\Controller;

class UserController extends Controller
{
    public function register(Request $request){

        //validate

        $this->validate($request,[
            'name' => 'required|string|max:255' ,
            'email' => 'required|string|email|max:255|unique:users' ,
            'phone'=> 'required|min:11',
            'password' => 'required|string|min:6'
        ]);

        //register
        $user=User::create([
            'name' => $request->input('name') ,
            'email' => $request->input('email') ,
            'phone' => $request->input('phone'),
            'password' => Hash::make($request->input('password')),
            'api_token' => Str::random(100)
        ]);

        return new UserResource($user);
        /* return User::create([
             'name' => $data['name'],
             'email' => $data['email'],
             'password' => Hash::make($data['password']),
         ]); */
    }

    public function login(Request $request){
        $this->validate($request,[
            'username'=> 'required',
            'password' => 'required'
        ]);

        if (false === \filter_var($request->username , FILTER_VALIDATE_EMAIL))
            $this->sendEmail();
        else
            $this->sendSms();
    }

    protected function sendSms(){

    }

    protected function sendEmail(){

    }




           /* if(isEmail($data['username'])){

                if(! Hash::check($data['password'], User::find('password'))){
                    return response([
                        'data' => 'اطلاعات صحیح نیست' ,
                        'status' => 'error'
                    ],403);
                }
                $user->update([
                    'api_token' => Str::random(100)
                ]);
                return new UserResource($user);
            }
            elseif ( isMobile($data['username'])){

                if(! Hash::check($data['password'], User::find('password'))){
                    return response([
                        'data' => 'اطلاعات صحیح نیست' ,
                        'status' => 'error'

                    ],403);
                }
                $user->update([
                    'api_token' => Str::random(100)
                ]);
                return new UserResource($user);
            }  */



    /**
     * @return mixed
     */


}
