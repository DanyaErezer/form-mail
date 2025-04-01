<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Services\ContactService;
use Illuminate\Http\JsonResponse;


class ContactController extends Controller
{
    protected $contactService;

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }

    public function store(StoreContactRequest $request): JsonResponse
    {
        try {
            $contact = $this->contactService->storeContact($request->validated());

            return response()->json([
                'success' => true,
                'message' => 'Данные успешно сохранены!',
                'data' => $contact
            ]);
        } catch (\Exception $e) {
            \Log::error('Ошибка: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Произошла ошибка при сохранении'
            ], 500);
        }
    }
}
