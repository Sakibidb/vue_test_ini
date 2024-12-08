<?php

namespace App\Services;

use App\Http\Requests\PagianteRequest;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Log;


class UserService
{
    public array $userFilter = ['name', 'email', 'phone'];


  public function list(PagianteRequest $request)
  {
      try {
          $requests    = $request->all();
          $method      = $request->get('paginate', 0) == 1 ? 'paginate' : 'get';
          $methodValue = $request->get('paginate', 0) == 1 ? $request->get('per_page', 10) : '*';
          $orderColumn = $request->get('order_column') ?? 'id';
          $orderType   = $request->get('order_type') ?? 'desc';

            return User::where(function ($query) use ($requests) {
                foreach ($requests as $key => $request) {
                    if (in_array($key, $this->userFilter)) {
                        $query->where('id', '=', $request);
                    }
                }
            })->orderBy($orderColumn, $orderType)->$method(
                $methodValue
            );
        } catch (Exception $exception) {
            Log::info($exception->getMessage());
            throw new Exception($exception->getMessage(), 422);
        }
    }
}