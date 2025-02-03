<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MusicRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'music.title' => 'required|string|max:100',
            'music.body' => 'required|string|max:4000',
        ];
    }
}
