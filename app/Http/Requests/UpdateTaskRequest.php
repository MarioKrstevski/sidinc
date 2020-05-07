<?php

namespace App\Http\Requests;

use App\Task;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateTaskRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('task_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'          => [
                'required'],
            'reward_amount' => [
                'required'],
            'deadline'      => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable'],
            'max_enrolled'  => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647'],
            'importance'    => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647'],
            'scheduled_at'  => [
                'date_format:' . config('panel.date_format'),
                'nullable'],
            'description'   => [
                'required'],
            'categories.*'  => [
                'integer'],
            'categories'    => [
                'array'],
            'tags.*'        => [
                'integer'],
            'tags'          => [
                'array'],
        ];
    }
}
