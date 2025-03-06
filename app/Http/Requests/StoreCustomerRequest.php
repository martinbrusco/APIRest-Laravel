<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
<<<<<<< HEAD
use Illuminate\Validation\Rule;
=======

>>>>>>> 098bc7f83705b979a71eebf2d9d5fd62c493e5d0
class StoreCustomerRequest extends FormRequest
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
        return [
<<<<<<< HEAD
            'name'=>['required'],
            'type'=>['required',Rule::in(['I','B','i','b'])],
            'mail'=>['required','email'],
            'address'=>['required'],
            'city'=>['required'],
            'state'=>['required'],
            'postalCode'=>['required']
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'postal_code'=>$this->postalCode
        ]);
    }
=======
            //
        ];
    }
>>>>>>> 098bc7f83705b979a71eebf2d9d5fd62c493e5d0
}
