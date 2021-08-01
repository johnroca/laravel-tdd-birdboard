<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProjectControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function it_register_user()
    {
        // Arrange

        // Act
        // $this->post('/register', [
        //     'first_name' => $this->faker
        // ]);

        // Assert
        $this->assertTrue(true);
    }
}
