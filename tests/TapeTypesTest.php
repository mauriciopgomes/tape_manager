<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;
use App\Models\TapeType;

class TapesTypesTest extends TestCase
{
    public function testTapeTypesHome()
    {
        $response = $this->call('GET', '/api/v1/tapetypes');
        $this->assertEquals(200, $response->status());
    }

    public function testTapeTypesDB()
    {
    $this->seeInDatabase('tape_types', ['type' => 'LTO-1']);
    }

    public function testTapeTypesCreate()
    {
        global $lastId;
        $this->json('POST', '/api/v1/tapetypes', ['type' => 'Test'])
            ->seeJson([
                'type' => 'Test',
            ]);
        $lastId = TapeType::all()->last()->id;
    }

    public function testTapeTypesUpdate()
    {
        global $lastId;
        $this->json('PUT', '/api/v1/tapetypes/'.$lastId, ['type' => 'Test OK'])
            ->seeJson([
                'type' => 'Test OK',
            ]);
    }

    public function testTapeTypesDelete()
    {
        global $lastId;
        $response = $this->call('DELETE', '/api/v1/tapetypes/'.$lastId);
        $this->assertEquals(200, $response->status());
    }
}
