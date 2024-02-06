<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\ApiLog;

class ApiController extends Controller
{
    public function sendRequest(Request $request)
    {
        // Получаем данные из запроса
        $requestData = $request->all();

        // Преобразуем запрос в JSON объект
        $requestJson = json_encode($requestData);

        // Отправляем запрос на API
        $response = Http::post('https://api.example.com/endpoint', $requestData);

        // Получаем ответ от API
        $responseData = $response->json();

        // Преобразуем ответ в JSON объект
        $responseJson = json_encode($responseData);

        // Сохраняем запрос и ответ в базе данных
        $apiLog = new ApiLog;
        $apiLog->request = $requestJson;
        $apiLog->response = $responseJson;
        $apiLog->save();

        // Возвращаем ответ клиенту
        return response()->json($responseData);
    }
}