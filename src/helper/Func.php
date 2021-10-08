<?php

namespace Yangcp\helper;

/**
 * 通用函數
 * Class Func
 * @package library\tools
 */
class Func
{
    /**
     * @param string $uri
     * @param string $method
     * @param array $options
     * @param float|int $timeout
     * @return array
     */
    public static function guzzle_request(string $uri, string $method, array $options = [], float $timeout = 10)
    {
        $status = FALSE;
        $message = '';
        $data = [];

        try {

            $client = new \GuzzleHttp\Client();
            // 超时时间
            if ($timeout > 0) {
                $options['timeout'] = $timeout;
            }

            $response = $client->request(strtoupper($method), $uri, $options);
            $data = $response->getBody()->getContents();
            $status = TRUE;

        } catch (\GuzzleHttp\Exception\RequestException $e) {
            if ($e->hasResponse()) {
                $exception = (string)$e->getResponse()->getBody();
                $message = 'exception:' . $exception . ',  code:' . $e->getCode();

            } else {
                $message = 'message:' . $e->getMessage() . ',  code:503';
            }

        } catch (\Throwable $e) {
            $message = 'message:' . $e->getMessage() . ', file:' . $e->getFile() . 'line:' . $e->getLine();
        }
        $result = [];
        $result['status'] = $status;
        $result['message'] = $message;
        $result['data'] = $data;

        return $result;
    }
}
