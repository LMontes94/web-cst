<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File as RulesFile;

class StaffRequest extends FormRequest
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
        /*return [
            'name' => ['required', 'max:255'],
            'surname' => ['required', 'max:255'],
            'department_id' => ['required', 'exists:departments,id'],
            'positions.*' => ['exists:staff_positions,id'],
            'url_image' => ['nullable', RulesFile::image(10 * 1024)]
        ];*/

        return [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'department_id' => 'required|exists:departments,id',
            'positions.*' => 'exists:staff_positions,id',
            'url_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4048'
        ];
    }
}
