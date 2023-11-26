<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormTaskAddRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "task_type" => "required|min:4|max:50",
            "task_description" => "required|min:10|max:150",
            "task_start_date" => "required",
            "task_progress" => "required",
            "task_status" => "required"
        ];
    }
}