<?php

namespace Tests\Unit;

use App\Models\Project;
use PHPUnit\Framework\TestCase;

class ProjectTest extends TestCase
{
    /** @test */
    public function model_has_a_path()
    {
        $project = Project::factory()->create();

        $this->assertEquals($project->path(), "/projects/".$project->id);

    }
}
