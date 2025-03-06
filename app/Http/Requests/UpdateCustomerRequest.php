<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
<<<<<<< HEAD
use Illuminate\Validation\Rule;

=======
>>>>>>> 098bc7f83705b979a71eebf2d9d5fd62c493e5d0

class UpdateCustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
<<<<<<< HEAD
        return true;
=======
        return false;
>>>>>>> 098bc7f83705b979a71eebf2d9d5fd62c493e5d0
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
<<<<<<< HEAD
        $method=$this->method();

        if ($method=='PUT'){
            return [
                'name'=>['required'],
                'type'=>['required',Rule::in(['I','B','i','b'])],
                'mail'=>['required','email'],
                'address'=>['required'],
                'city'=>['required'],
                'state'=>['required'],
                'postalCode'=>['required']
            ];
        }else{
            return [
                'name'=>['sometimes','required'],
                'type'=>['sometimes','required',Rule::in(['I','B','i','b'])],
                'mail'=>['sometimes','required','email'],
                'address'=>['sometimes','required'],
                'city'=>['sometimes','required'],
                'state'=>['sometimes','required'],
                'postalCode'=>['sometimes','required']
            ];
        }
    }
    protected function prepareForValidation()
    {
        if ($this->postalCode){
            $this->merge([
                'postal_code'=>$this->postalCode
            ]);
        }
=======
        return [
            //
        ];
>>>>>>> 098bc7f83705b979a71eebf2d9d5fd62c493e5d0
    }
}
