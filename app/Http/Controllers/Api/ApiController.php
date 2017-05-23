<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;
use League\Fractal\Manager;
use App\Http\Controllers\Controller;

/**
 * Class ApiController
 * @package App\Http\Controllers\Api
 */
class ApiController extends Controller
{
    const CODE_FORBIDDEN      = 'PARKING-ERR-FORBIDDEN';
    const CODE_UNAUTHORIZED   = 'PARKING-ERR-UNAUTHORIZED';
    const CODE_INTERNAL_ERROR = 'PARKING-ERR-INTERNAL';
    const CODE_WRONG_ARGS     = 'PARKING-ERR-WRONG-ARGS';
    const CODE_NOT_FOUND      = 'PARKING-ERR-NOT-FOUND';

    /**
     * @var Manager
     */
    protected $fractal;

    /**
     * @var int
     */
    protected $statusCode = 200;

    /**
     * ApiController constructor.
     * @param Manager $fractal
     */
    public function __construct(Manager $fractal)
    {
        $this->fractal = $fractal;
    }

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param $statusCode
     * @return $this
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * @param $item
     * @param $callback
     * @return mixed
     */
    protected function respondWithItem($item, $callback)
    {
        $resource = new Item($item, $callback);
        $rootScope = $this->fractal->createData($resource);

        return $this->respondWithArray($rootScope->toArray());
    }

    /**
     * @param $collection
     * @param $callback
     * @return mixed
     */
    protected function respondWithCollection($collection, $callback)
    {
        $resource = new Collection($collection, $callback);
        $rootScope = $this->fractal->createData($resource);

        return $this->respondWithArray($rootScope->toArray());
    }

    /**
     * @param array $array
     * @param array $headers
     * @return mixed
     */
    protected function respondWithArray(array $array, array $headers = [])
    {
        return \Response::json($array, $this->statusCode, $headers);
    }


    // ERRORS
    // ------

    /**
     * @param $message
     * @param $errorCode
     * @return mixed
     */
    protected function respondWithError($message, $errorCode)
    {
        if ($this->statusCode === 200) {
            trigger_error(
                "You better have a really good reason for erroring on a 200...",
                E_USER_WARNING
            );
        }

        return $this->respondWithArray([
            'error' => [
                'code' => $errorCode,
                'http_code' => $this->statusCode,
                'message' => $message,
            ]
        ]);
    }

    /**
     * Generates a Response with a 403 HTTP header and a given message.
     *
     * @param string $message
     * @return mixed
     */
    public function errorForbidden($message = 'Forbidden')
    {
        return $this
            ->setStatusCode(403)
            ->respondWithError($message, self::CODE_FORBIDDEN);
    }

    /**
     * Generates a Response with a 401 HTTP header and a given message.
     *
     * @param string $message
     * @return mixed
     */
    public function errorUnauthorized($message = 'Unauthorized')
    {
        return $this
            ->setStatusCode(401)
            ->respondWithError($message, self::CODE_UNAUTHORIZED);
    }

    /**
     * Generates a Response with a 500 HTTP header and a given message.
     *
     * @param string $message
     * @return mixed
     */
    public function errorInternalError($message = 'Internal Error')
    {
        return $this
            ->setStatusCode(500)
            ->respondWithError($message, self::CODE_INTERNAL_ERROR);
    }

    /**
     * Generates a Response with a 400 HTTP header and a given message.
     *
     * @param string $message
     * @return mixed
     */
    public function errorWrongArgs($message = 'Wrong Arguments')
    {
        return $this
            ->setStatusCode(400)
            ->respondWithError($message, self::CODE_WRONG_ARGS);
    }

    /**
     * Generates a Response with a 404 HTTP header and a given message.
     *
     * @param string $message
     * @return mixed
     */
    public function errorNotFound($message = 'Resource Not Found')
    {
        return $this
            ->setStatusCode(404)
            ->respondWithError($message, self::CODE_NOT_FOUND);
    }
}
