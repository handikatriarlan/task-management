<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TaskRequest extends FormRequest
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
        $rule_task_unique = Rule::unique('tasks', 'task');
        if ($this->method() !== 'POST') {
            $rule_task_unique->ignore($this->route()->parameter('id'));
        }
        return [
            'task' => ['required', $rule_task_unique],
            'user' => ['required']
        ];
    }

    public function messages()
    {
        return [
            'task.required' => 'Task Harus Diisi.',
            'user.required' => 'Nama Pengguna Harus Diisi.'
        ];
    }
}
