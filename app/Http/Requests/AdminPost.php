<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Validator;
use Hash;
use Auth;

class AdminPost extends FormRequest
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
     * 添加验证规则
     */
    public function addValidator()
    {
        //验证用户密码
        Validator::extend('check_password ', function ($attribute, $value, $parameters, $validator) {
            return Hash::check($value, Auth::guard('admin')->user()->password);
        });
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $this->addValidator();

        return [
            //验证规则
            'original_password'     => 'sometimes|required|check_password|alpha_num',
            'password'              => 'sometimes|required|alpha_num',
            'password_confirmation' => 'sometimes|required|alpha_num',
        ];
    }

    public function messages()
    {
//        return parent::messages(); // TODO: Change the autogenerated stub
        return [
            'original_password.required'        => '原密码不能为空',
            'original_password.check_password'  => '原密码填写错误',
            'password.required'                 => '新密码不能为空',
            'password_confirmation.required'    => '二次新密码不能为空',
            'password.alpha_num'                => '新密码必须完全是字母、数字',
            'password_confirmation.alpha_num'   => '二次新密码必须完全是字母、数字',
        ];
    }
}