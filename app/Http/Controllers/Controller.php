<?php

namespace App\Http\Controllers;

use http\Client\Response;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function success($data = [], $msg = "成功！", $code = 200, $status = 'success')
    {
        return response()->json([
            'code' => $code,
            'status' => $status,
            'msg' => $msg,
            'data' => $this->delNull($data),
        ]);
    }

    public function error($msg = "失败！", $code = 400, $status = 'error')
    {
        return response()->json([
            'code' => $code,
            'status' => $status,
            'msg' => $msg
        ]);

    }

    private function delNull($arr)
    {
        foreach ($arr as $key => $value) {
            if (is_array($value)) {
                $arr[$key] = $this->delNull($value);
            } else {
                $arr[$key] = $value ?? '';
            }
        }
        return $arr;
    }

    public function formatPaginate($paginate)
    {
        $data = [];
        $paginate = $paginate->toArray();
        $data['currentPage'] = $paginate['current_page'];
        $data['totalPage'] = $paginate['last_page'];
        $data['data'] = $paginate['data'];
        return $data;
    }
}
