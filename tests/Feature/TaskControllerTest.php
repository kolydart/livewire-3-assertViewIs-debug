<?php

namespace Tests\Feature;

use App\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TaskControllerTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * @test
     */
    public function user_can_index_model(){

        Task::factory()->create(); // if disabled, test passes

        $response = $this->get(route("tasks.index"));
        $response->assertSessionHasNoErrors();
        $response->assertSuccessful();

        $response->assertViewIs("tasks.index");

    }

   /**
     * @test
     */
    public function debug(){

        $response = $this->get(route("tasks.index"));

        $response->assertSuccessful();

        // response (view) should be an object, not a string
        
        if (is_string($response->original)) {

            dump('$response is a string');

        } else if (is_object($response->original)) {

            dump('$response is an '.get_class($response->original).' object');

        }

    }



}
