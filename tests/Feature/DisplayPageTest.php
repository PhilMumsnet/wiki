<?php

namespace Tests\Feature;

use Tests\TestCase;
use Livewire\Livewire;
use App\Http\Livewire\Page;
use App\Models\Page as PageModel;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DisplayPageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_see_the_component()
    {
        $page = PageModel::factory()->create();

        $response = $this->get(route('pages.page.show', ['page' => $page]));

        $response->assertSuccessful($response);
        $response->assertSeeLivewire(Page::class);
    }

    /** @test */
    public function the_page_contains_a_single_page()
    {
        $page = PageModel::factory()->create();

        $response = Livewire::test(Page::class, ['page' => $page]);

        $this->assertTrue($response->page === $page);
    }
}
