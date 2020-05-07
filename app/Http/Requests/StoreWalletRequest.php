<?php

namespace App\Http\Requests;

use App\Wallet;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreWalletRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('wallet_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'credit_card'     => [
                'required',
                'unique:wallets'],
            'current_amount'  => [
                'required'],
            'checkout_amount' => [
                'required'],
        ];
    }
}
