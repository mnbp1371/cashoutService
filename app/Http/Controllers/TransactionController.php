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
     * @param Request $request
     * @return Factory|View|Application
     */
    public function cashOutPage(Request $request): Factory|View|Application
    {
        return view('transactions.cashOut')->with([
            'owner_name' => $request->owner_name,
            'iban' => $request->iban,
        ]);
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

    /**
     * @return Application|Factory|View
     */
    public function ibanInquiryPage(): View|Factory|Application
    {
        return view('transactions.ibanInquiry');
    }

    /**
     * @param Request $request
     *
     * @return Application|Factory|View|RedirectResponse
     */
    public function ibanInquiryCall(Request $request): View|Factory|RedirectResponse|Application
    {
        try {
            return view('transactions.ibanInquiry')->with([
                'ibanInfo' => $this->call('accounts/iban-info', 'post', $request->toArray())['data'],
            ]);
        } catch (\Throwable $exception) {
            return $this->errorResponse($exception);
        }
    }
}
