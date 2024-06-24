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

    public function messages()
    {
        return [
            'title.required' => 'El título es obligatorio.',
            'subtitle.max' => 'El subtítulo no puede superar los 255 caracteres.',
            'description.required' => 'La descripción es obligatoria.',
            'post_type_id.required' => 'El tipo de post es obligatorio.',
            'post_type_id.exists' => 'El tipo de post seleccionado no es válido.',
            'discharge_date.required' => 'La fecha de publicación es obligatoria.',
            'discharge_date.date' => 'La fecha de publicación no tiene un formato válido.',
            'date.required' => 'La fecha es obligatoria.',
            'date.date' => 'La fecha no tiene un formato válido.',
            'departments.*.exists' => 'Uno o más departamentos seleccionados no son válidos.',
            'image_files.*.mimes' => 'Formato incorrecto, solo se aceptan imágenes JPEG, JPG y PNG.',
            'image_files.*.max' => 'La imagen no puede superar los 2048 kB.',
            'document_files.*.mimes' => 'Formato incorrecto, solo se aceptan PDF, DOC y DOCX.',
            'document_files.*.max' => 'El documento no puede superar los 10240 kB.',
            'video_files.*.mimes' => 'Formato incorrecto, solo se aceptan MP4, MOV, AVI.',
            'video_files.*.max' => 'El video no puede superar los 10240 kB.',
        ];
    }
}
