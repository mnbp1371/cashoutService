<?php

namespace App\Exceptions;

use Exception;

class ServiceException extends Exception
{
    private mixed $errors;

    protected $code = 422;
    /**
     * ServiceException constructor.
     *
     * @param $message
     * @param int $code
     * @param array $errors
     * @param Exception|null $previous
     */
    public function __construct($message, $code = 0, array $errors = [], ?Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);

        if (! empty($errors['errors']['debugs'])) {
            unset($errors['errors']['debugs']);
        }

        $this->errors = $errors['errors'] ?? [];
    }

    /**
     * @return mixed
     */
    public function getErrors(): mixed
    {
        return $this->errors;
    }

    /**
     * @param $request
     *
     * @return mixed
     */
    public function render($request): mixed
    {
        return $this->errors;
    }
}
