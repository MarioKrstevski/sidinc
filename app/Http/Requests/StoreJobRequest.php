<?php

namespace App\Http\Requests;

use App\Job;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreJobRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('job_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'status_id' => [
                'required',
                'integer'],
            'user_id'   => [
                'required',
                'integer'],
            'task_id'   => [
                'required',
                'integer'],
        ];
    }
}
