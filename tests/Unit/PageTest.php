<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function the_pages_table_has_the_expected_columns()
    {
        $this->assertTrue(
            Schema::hasColumns('pages', [
                'id', 'title', 'contents', 'created_at', 'updated_at',
            ])
        );
    }
}
