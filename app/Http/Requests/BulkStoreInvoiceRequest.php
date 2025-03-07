<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BulkStoreInvoiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            '*.customer_id' => ['required', 'integer'],  
            '*.amount' => ['required', 'numeric'],
            '*.status' => ['required', Rule::in(['B', 'P', 'V', 'b', 'p', 'v'])],
            '*.biller_dated' => ['required', 'date_format:Y-m-d H:i:s'],  // Corrección: 'biller_dated'
            '*.paid_dated' => ['nullable', 'date_format:Y-m-d H:i:s']  
        ];
    }
    
    

    protected function prepareForValidation()
    {
        $data = [];
        foreach ($this->toArray() as $obj) {
            $obj['customer_id'] = $obj['customerId'] ?? null;
            $obj['amount'] = $obj['amount'] ?? null;
            $obj['status'] = $obj['status'] ?? null;
            $obj['biller_dated'] = $obj['billedDate'] ?? null; // Corrección: 'biller_dated'
            $obj['paid_dated'] = $obj['paidDate'] ?? null;
            $data[] = $obj;
        }
        $this->merge($data);
    }
    
    
    
}
