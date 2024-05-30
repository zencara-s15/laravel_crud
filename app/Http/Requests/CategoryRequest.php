<?php

namespace App\Http\Requests;

class CategoryRequest extends DefaultRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rule = [
            'name' =>'required',
        ];
        return $rule;
    }
}
