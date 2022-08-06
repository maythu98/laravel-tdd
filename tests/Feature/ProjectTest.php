<?php

namespace Tests\Feature;

use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    use WithFaker;

    /** @test */
    public function a_user_can_create_project()
    {
        $this->withoutExceptionHandling();

        $attributes = Project::factory()->raw();

        $this->post('/projects', $attributes)->assertRedirect('/projects');

        $this->assertDatabaseHas('projects', $attributes);
 
        $this->get('/projects')->assertSee($attributes['title']);
    }

     /** @test */
     public function a_user_can_views_a_project()
     {
        $this->withoutExceptionHandling();

        $project = Project::factory()->create();

        $this->get("/projects/". $project->id)
            ->assertSee($project->title)
            ->assertSee($project->description);
     }


    /** @test */
    public function a_project_requies_a_title()
    {
        $attributes = Project::factory()->raw(['title' => null]);

        $this->post('/projects', $attributes)->assertSessionHasErrors('title');
    }
    
    /** @test */
    public function a_project_requies_a_description()
    {
        $attributes = Project::factory()->raw(['description' => null]);

        $this->post('/projects', $attributes)->assertSessionHasErrors('description');
    }
}
