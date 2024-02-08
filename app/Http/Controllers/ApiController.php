<?php

namespace App\Http\Controllers;

use App\Services\APIService;
use App\Services\DatabaseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\ApiLog;

class ApiController extends Controller
{
    private $apiConnection;

    public function __construct(APIService $apiConnection)
    {
        $this->apiConnection = $apiConnection;
    }

    public function sendRequestAndDisplayResponse(Request $request)
    {   $apiData = new ApiLog();
        // Получение данных из запроса
        $requestData = $request->all();

        // Отправка запроса к API
        $response = $this->apiConnection->sendRequest($requestData['url'], $requestData['data']);

        if($response  == "success")
        {
            $apiData->request = json_encode($requestData);
            $apiData->response = $response;
            $apiData->save();
        }
        // Вывод ответа на экран
        return response()->json(['response' => $response]);

        // Сохранение запроса и ответа в базе данных
        
    }
}