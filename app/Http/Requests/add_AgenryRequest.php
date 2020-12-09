<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class add_AgenryRequest extends FormRequest
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
            'name_agencies'=>'required',
            'phone'=>'required|numeric',
            'email'=>'required|email',
            'address'=>'required',
            'name_manager'=>'required',

        ];
    }
    public function messages()
    {
        $messages=[
            'name_agencies.required'=>'*Không được để trống',
            'phone.required'=>'*Không được để trống',
            'phone.numeric'=>'*Vui lòng nhập số',
            'email.required'=>'*Không được để trống',
            'email.email'=>'*Không đúng định dạng',
            'address.required'=>'*Không được để trống',
            'name_manager.required'=>'*Không được để trống',
        ];
        return $messages;
    }
}
