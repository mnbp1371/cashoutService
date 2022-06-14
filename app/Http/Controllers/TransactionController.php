<?php

namespace App\Http\Controllers;

use App\Helper\HttpHelper;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    use HttpHelper;

    /**
     * @param Request $request
     *
     * @return View|Factory|RedirectResponse|Application
     */
    public function index(Request $request): View|Factory|RedirectResponse|Application
    {
        try {
            $transactions = $this->call('transactions', 'GET', $request->toArray());
            return view('transactions.index')->with([
                'transactions' => $transactions['data'],
                'meta' => $transactions['meta'],
            ]);
        } catch (\Throwable $exception) {
            return $this->errorResponse($exception);
        }
    }

    /**
     * @return Factory|View|Application
     */
    public function cashOutPage(): Factory|View|Application
    {
        return view('transactions.cashOut');
    }

    /**
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function cashOutCall(Request $request): RedirectResponse
    {
        try {
            $this->call("cash-out", 'post', $request->toArray());
            return redirect()->route('user.transactions.index');
        } catch (\Throwable $exception) {
            return $this->errorResponse($exception);
        }
    }
}
