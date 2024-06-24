<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'post_type_id' => 'required|exists:posts_type,id',
            'discharge_date' => 'required|date',
            'date' => 'required|date',
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'departments' => 'nullable|array',
            'departments.*' => 'exists:departments,id',
            'image_files.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'document_files.*' => 'nullable|mimes:pdf,doc,docx|max:2048',
            'video_files.*' => 'nullable|mimes:mp4,mov,avi|max:10240',
        ];
    }
}
