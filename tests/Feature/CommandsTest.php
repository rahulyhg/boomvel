<?php

namespace Boomvel\Multiauth\Tests\Feature;

use Boomvel\Multiauth\Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CommandsTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_seed_command_can_publish_new_super_admin()
    {
        $this->artisan('multiauth:seed', ['--role'=>'super']);
        $this->assertDatabaseHas('admins', ['email'=>'super@admin.com']);
    }
}
