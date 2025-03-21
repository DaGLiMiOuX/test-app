<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Schemas\UserSchema;
use OpenApi\Attributes as OA;
use Illuminate\Http\Request;

#[OA\Info(title: "CRUD for user model", version: "0.1")]
class UserController extends Controller
{
    #[OA\Get(
        path: '/api/users',
        operationId: 'GetUsersList',
        tags: ['Users'],
        summary: 'Get list of users',
        description: 'Returns a list of users',
        responses: [
            new OA\Response(
                response: 200,
                description: 'OK',
                content: new OA\JsonContent(
                    type: 'array',
                    items: new OA\Items(
                        ref: UserSchema::class
                    )
                ),
                links: [
                    new OA\Link(
                        link: 'GetUserByUserId',
                        operationId: 'GetUser',
                        parameters: [
                            'id' => '$response.body#/id'
                        ],
                        description: 'The `id` property returned in each user can be used as the `id` parameter in `GET /api/users/{id}`'
                    )
                ]
            ),
            new OA\Response(
                response: 400,
                description: 'Bad Request'
            )
            // new OA\Response(response: 401, description: 'Not allowed'),
        ]
    )]
    public function index()
    {
        return User::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    #[OA\Get(
        path: '/api/users/{id}',
        operationId: 'GetUser',
        tags: ['Users'],
        summary: 'Get user details by id',
        description: 'Returns user details',
        responses: [
            new OA\Response(
                response: 200,
                description: 'OK',
                content: new OA\JsonContent(
                    type: 'json',
                    ref: UserSchema::class
                )
            ),
            new OA\Response(
                response: 400,
                description: 'Bad Request'
            ),
            new OA\Response(
                response: 404,
                description: 'Not Found'
            )
        ]
    )]
    public function show(string $id)
    {
        return User::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
