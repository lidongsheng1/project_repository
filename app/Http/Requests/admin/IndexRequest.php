<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>['required','exists:users'],
            'password'=>['required',function($attribute,$value,$flag) {
                if($test=\App\User::where('name',$this->name)->first()){
                    if(!Hash::check($value,$test->password)){
                        return $flag($attribute.'is not true');
                    }
                }
                
            }]
        ];
    }
}
