<?php

class ActorsTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/actors/index')
            ->see('Liste de mes acteurs');
    }

    public function testDatabase()
    {
        // Make call to application...

        $this->seeInDatabase('user', ['email' => 'zuzu38080@gmail.com']);
    }
}
