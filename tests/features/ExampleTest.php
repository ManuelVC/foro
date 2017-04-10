<?php

class ExampleTest extends FeatureTestCase
{
    function test_basic_example()
    {
        // Cremas un usuario de prueba
        $user = factory(\App\User::class)
            ->create();

        $this->actingAs($user, 'api')
            ->visit('api/user')
            ->see($user->name);
    }
}
