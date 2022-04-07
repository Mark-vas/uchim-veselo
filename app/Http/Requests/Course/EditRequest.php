<?php

declare(strict_types=1);

namespace App\Http\Requests\Course;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
			'title' => ['required', 'string', 'min:5'],
            'description' => ['required', 'string', 'max:1000'],
            'text' =>['required', 'string'],
            'img' => ['nullable', 'file', 'image', 'mimes:jpg,png'],
        ];
    }

	public function messages(): array
	{
		return [
			'required' => 'Необходимо заполнить поле :attribute.'
		];
	}

	public function  attributes(): array
	{
		return [
			'title' => 'Наименование курса',
			'description' => 'Краткое описание курса',
            'text' => 'Полное описание курса'
		];
	}
}
