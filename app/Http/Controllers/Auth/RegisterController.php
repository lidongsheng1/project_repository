<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\UserDetail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        $result=Validator::make($data, [
            'name' => 'required|string|max:255',
            'email1' => ['required','string','email','max:255',function($attribute, $value, $fail){
                if (User::where('email',$value)->get()->toArray()) {
                    return $fail($attribute.' is unique.');
                }
            }],
            'password1' => 'required|string|min:6',
            'phone'=>'required|regex:/^1[34578]\d{9}$/|unique:users',
            'key'=>'required',
            'code'=>['min:4',function($attribute, $value, $fail) use($data) {
                if ($value != \Cache::get($data['key'])['code']) {
                    return $fail($attribute.' is invalid.');
                }
            }],
        ]);
        return $result;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
       // dd($data);
        $result=User::create([
            'name' => $data['name'],
            'email' => $data['email1'],
            'password' => bcrypt($data['password1']),
            'phone' => $data['phone'],
        ]);

        UserDetail::create(['user_id'=>$result->id]);

        return $result;
    }
}
