<?php

namespace App\Http\Requests;

use App\Transaction;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateTransactionRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('transaction_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'wallet_id' => [
                'required',
                'integer'],
            'task_id'   => [
                'required',
                'integer'],
        ];
    }
}
