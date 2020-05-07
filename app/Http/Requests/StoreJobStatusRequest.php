<?php

namespace App\Http\Requests;

use App\JobStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreJobStatusRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('job_status_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'                       => [
                'required'],
            'description'                => [
                'required'],
            'allowed_status_transitions' => [
                'required'],
        ];
    }
}
