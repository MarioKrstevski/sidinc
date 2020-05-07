@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.wallet.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.wallets.update", [$wallet->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="credit_card">{{ trans('cruds.wallet.fields.credit_card') }}</label>
                <input class="form-control {{ $errors->has('credit_card') ? 'is-invalid' : '' }}" type="text" name="credit_card" id="credit_card" value="{{ old('credit_card', $wallet->credit_card) }}" required>
                @if($errors->has('credit_card'))
                    <span class="text-danger">{{ $errors->first('credit_card') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.wallet.fields.credit_card_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="current_amount">{{ trans('cruds.wallet.fields.current_amount') }}</label>
                <input class="form-control {{ $errors->has('current_amount') ? 'is-invalid' : '' }}" type="number" name="current_amount" id="current_amount" value="{{ old('current_amount', $wallet->current_amount) }}" step="0.01" required>
                @if($errors->has('current_amount'))
                    <span class="text-danger">{{ $errors->first('current_amount') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.wallet.fields.current_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="checkout_amount">{{ trans('cruds.wallet.fields.checkout_amount') }}</label>
                <input class="form-control {{ $errors->has('checkout_amount') ? 'is-invalid' : '' }}" type="number" name="checkout_amount" id="checkout_amount" value="{{ old('checkout_amount', $wallet->checkout_amount) }}" step="0.01" required>
                @if($errors->has('checkout_amount'))
                    <span class="text-danger">{{ $errors->first('checkout_amount') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.wallet.fields.checkout_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection