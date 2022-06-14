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
     * @return View|Factory|RedirectResponse|Application
     */
    public function index(): View|Factory|RedirectResponse|Application
    {
        try {
            return view('transactions.index')->with([
                'transactions' => $this->call('transactions')
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
