<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class helpersTest extends TestCase
{
    /** @test */
    public function page_title_should_return_the_base_title_if_is_empty()
    {
    
        $this->assertEquals('LaraCarte- list of artisans',page_title(''));
    }


    /** @test */
    public function page_title_should_return_the_correct_title_if_is_provided()
    {
    
        $this->assertEquals('About | LaraCarte- list of artisans',page_title('About'));
        $this->assertEquals('Home | LaraCarte- list of artisans',page_title('Home'));

    }
}
