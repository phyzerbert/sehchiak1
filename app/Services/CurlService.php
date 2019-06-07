<?php
namespace App\Services;

use Curl\Curl as Curl;
class CurlService{

    public function get($url,$data = [])
    {
        $curl = new Curl();
        //$curl->setBasicAuthentication('username', 'password');
//        $curl->setUserAgent('');
//        $curl->setHeader('X-Requested-With', 'XMLHttpRequest');
        $curl->get($url,$data);

        if ($curl->error) {
            return $curl->error_code;
        }
        return $curl->response;
    }

    public function post($url, $data = [])
    {
        $curl = new Curl();
        //$curl->setBasicAuthentication('username', 'password');
//        $curl->setUserAgent('');
//        $curl->setHeader('X-Requested-With', 'XMLHttpRequest');
        //$curl->setCookie('key', 'value');
        $curl->post($url, $data);
        // dump($data);
        if ($curl->error) {
            // return $curl->error_code;
            return $curl;
            die;
        }
        return $curl->response;

//        var_dump($curl->request_headers);
//        var_dump($curl->response_headers);
    }

    public function put($url, $data = [])
    {
        $curl = new Curl();
        //$curl->setBasicAuthentication('username', 'password');
//        $curl->setUserAgent('');
//        $curl->setHeader('X-Requested-With', 'XMLHttpRequest');
        //$curl->setCookie('key', 'value');
        $curl->put($url, $data);

        if ($curl->error) {
            return $curl->error_code;
        }
        return $curl->response;

//        var_dump($curl->request_headers);
//        var_dump($curl->response_headers);
    }

    public function patch($url, $data = [])
    {
        $curl = new Curl();
        //$curl->setBasicAuthentication('username', 'password');
//        $curl->setUserAgent('');
//        $curl->setHeader('X-Requested-With', 'XMLHttpRequest');
        //$curl->setCookie('key', 'value');
        $curl->put($url, $data);

        if ($curl->error) {
            return $curl->error_code;
        }
        return $curl->response;

//        var_dump($curl->request_headers);
//        var_dump($curl->response_headers);
    }

    public function delete($url, $data = [])
    {
        $curl = new Curl();
        //$curl->setBasicAuthentication('username', 'password');
//        $curl->setUserAgent('');
//        $curl->setHeader('X-Requested-With', 'XMLHttpRequest');
        //$curl->setCookie('key', 'value');
        $curl->put($url, $data);

        if ($curl->error) {
            return $curl->error_code;
        }
        return $curl->response;

//        var_dump($curl->request_headers);
//        var_dump($curl->response_headers);
    }

    // ******* PT Video**********

    public function pt_video_request($url, $x_entity_key)
    {
        $curl = new Curl();
        //$curl->setBasicAuthentication('username', 'password');
        // $curl->setUserAgent('');
        $data = [];
        $curl->setHeader('X_ENTITY_KEY', $x_entity_key);
        
        $curl->setOpt(CURLOPT_SSL_VERIFYPEER, 0);
        $curl->setOpt(CURLOPT_SSL_VERIFYHOST, 0);
        $curl->setOpt(CURLOPT_SSLCERT, public_path('/ssl/MYR.pem'));
        $curl->setOpt(CURLOPT_RETURNTRANSFER, 1);
        $curl->setOpt(CURLOPT_SSLKEY,  public_path('/ssl/MYR.key'));

        $curl->get($url,$data);

        if ($curl->error) {
            return $curl->error_code;
        }
        return $curl->response;
    }

}