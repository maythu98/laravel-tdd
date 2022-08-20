<?php

namespace Tests\Unit;

use App\Models\Project;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    /** @test */
    public function test_it_has_a_path()
    {
        $project = Project::factory()->create();

        $this->assertEquals($project->path(), "/projects/".$project->id);
    }
}
