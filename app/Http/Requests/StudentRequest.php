<?php

namespace App\Http\Requests;

class StudentRequest extends DefaultRequest
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
            'age' =>'required|integer',
            'phone' =>'required|unique:students,phone,NULL,id,deleted_at,NULL',
        ];
        return $rule;
    }
}
