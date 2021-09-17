<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Page;
use Livewire\Livewire;
use App\Http\Livewire\Pages;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DisplayPagesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_see_the_component()
    {
        $response = $this->get('/pages');

        $response->assertSuccessful($response);
        $response->assertSeeLivewire(Pages::class);
    }

    /** @test */
    public function the_page_contains_a_list_of_all_pages()
    {
        Page::factory(10)->create();

        $response = Livewire::test(Pages::class);

        $this->assertCount(10, $response->pages);
    }
}
