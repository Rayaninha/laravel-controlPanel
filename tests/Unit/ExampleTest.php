<?php

namespace Tests\Unit;

use App\Http\Controllers\UserController;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    use DatabaseTransactions;

    public function testCreateUser()
    {
        // $username = 'T';
        $username = 'Teste';
        $password = 's3nh@Teste';

        $request = new UserRequest();
        $request->merge([
            'username' => $username,
            'password' => $password,
        ]);

        $validatedData = $request->validate($request->rules());

        $this->assertEquals($username, $validatedData['username']);
        $this->assertEquals($password, $validatedData['password']);

        $controller = new UserController();
        $controller->create($request);

        $this->assertDatabaseHas('users', [
            'username' => $username,
        ]);

        /**
         * 'username' => 'required|min:3|max:150|unique:users'
         */
        $user = User::where('username', $username)->first();
        $this->assertEquals($username, $user->username);
    }
}
