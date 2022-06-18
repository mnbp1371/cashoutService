<?php

namespace App\Helper;

use App\Exceptions\ServiceException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Http;

trait HttpHelper
{
    /**
     * @param string $url
     * @param string $method
     * @param array $params
     *
     * @return mixed
     * @throws ServiceException
     */
    public function call(string $url, string $method = 'get', array $params = []): mixed
    {
        $basUrl = config('services.cash_out.base_url');
        $response = Http::withHeaders([
            'x-api-key' => config('services.cash_out.api_key')
        ])->{$method}("{$basUrl}/{$url}", $params);

        if ($response->failed()) {
            throw new ServiceException('Bad Request', 400, $response->json());
        }

        return $response->json();
    }

    /**
     * @param \Throwable $exception
     *
     * @return RedirectResponse
     */
    protected function errorResponse(\Throwable $exception): RedirectResponse
    {
        $errors = match (get_class($exception)) {
            ServiceException::class => $exception->getErrors(),
            default => $exception->getMessage(),
        };

        return back()->withErrors(
            filter_errors($errors)
        )->withInput();
    }
}
