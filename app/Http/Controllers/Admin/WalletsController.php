<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyWalletRequest;
use App\Http\Requests\StoreWalletRequest;
use App\Http\Requests\UpdateWalletRequest;
use App\Wallet;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class WalletsController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('wallet_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Wallet::query()->select(sprintf('%s.*', (new Wallet)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'wallet_show';
                $editGate      = 'wallet_edit';
                $deleteGate    = 'wallet_delete';
                $crudRoutePart = 'wallets';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->editColumn('credit_card', function ($row) {
                return $row->credit_card ? $row->credit_card : "";
            });
            $table->editColumn('current_amount', function ($row) {
                return $row->current_amount ? $row->current_amount : "";
            });
            $table->editColumn('checkout_amount', function ($row) {
                return $row->checkout_amount ? $row->checkout_amount : "";
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.wallets.index');
    }

    public function create()
    {
        abort_if(Gate::denies('wallet_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.wallets.create');
    }

    public function store(StoreWalletRequest $request)
    {
        $wallet = Wallet::create($request->all());

        return redirect()->route('admin.wallets.index');
    }

    public function edit(Wallet $wallet)
    {
        abort_if(Gate::denies('wallet_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.wallets.edit', compact('wallet'));
    }

    public function update(UpdateWalletRequest $request, Wallet $wallet)
    {
        $wallet->update($request->all());

        return redirect()->route('admin.wallets.index');
    }

    public function show(Wallet $wallet)
    {
        abort_if(Gate::denies('wallet_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.wallets.show', compact('wallet'));
    }

    public function destroy(Wallet $wallet)
    {
        abort_if(Gate::denies('wallet_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $wallet->delete();

        return back();
    }

    public function massDestroy(MassDestroyWalletRequest $request)
    {
        Wallet::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
