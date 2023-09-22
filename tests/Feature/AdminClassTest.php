<?php

namespace Tests\Feature;

use Tests\TestCase;
use Modules\AdminProfessor\Entities\Admin;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminClassTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    // public function test_example(): void
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }
    public function testAdminClassExists()
    {
        $admin = new Admin();
        $this->assertInstanceOf(Admin::class, $admin);
    }
}
