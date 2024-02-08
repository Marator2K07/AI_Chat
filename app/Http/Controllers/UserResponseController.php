<?php

namespace App\Http\Controllers;

use App\Models\ApiLog;

class UserResponseController extends Controller
{
    public function displayResponse($id)
    {
        // Получение данных запроса и ответа из базы данных
        $apiData = ApiLog::findOrFail($id);

        // Передача данных в представление для отображения
        return view('response', ['request' => $apiData->request, 'response' => $apiData->response]);
    }
}
