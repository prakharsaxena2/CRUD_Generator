<?php
    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class EmpwRequest extends FormRequest
    {
        public function authorize()
        {
            return true;
        }
        public function rules()
        {
            return [];
        }
    }