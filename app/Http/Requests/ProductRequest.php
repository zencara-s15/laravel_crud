<?php

namespace App\Http\Requests;

class ProductRequest extends DefaultRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rule = [
            'name' =>'required|string|min:3',
            'category_id' =>'required|integer|exists:categories,id',
        ];
        return $rule;
    }
}
