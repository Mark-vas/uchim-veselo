<?php
declare(strict_types=1);

namespace App\Http\Requests\Course;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'description' => ['required', 'string',  'min:20', 'max:255'],
            'text' =>['required', 'string', 'min:20'],
            'img' => ['nullable', 'file', 'image'],
            'author_id' => ['required', 'integer' ],
            'painter_id' => ['required', 'integer' ],
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
			'title' => 'Наименование комикса',
			'description' => 'Краткое описание комикса',
            'text' => 'Полное описание комикса',
            'author_id' => 'Автор',
            'painter_id' => 'Художник'
		];
	}
}
