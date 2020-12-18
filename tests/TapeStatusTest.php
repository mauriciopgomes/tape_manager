<?php

use App\Models\TapeStatus;

class TapeStatusTest extends TestCase
{
    public function testTapeStatusHome()
    {
        $response = $this->call('GET', '/api/v1/tapestatus');
        $this->assertEquals(200, $response->status());
    }

    public function testTapeStatusDB()
    {
        $this->seeInDatabase('tape_statuses', ['status' => 'Available']);
    }

    public function testTapeStatusCreate()
    {
        global $lastId;
        $this->json('POST', '/api/v1/tapestatus', ['status' => 'Test'])
            ->seeJson([
                'status' => 'Test',
            ]);
        $lastId = TapeStatus::all()->last()->id;
    }

    public function testTapeStatusUpdate()
    {
        global $lastId;
        $this->json('PUT', '/api/v1/tapestatus/'.$lastId, ['status' => 'Test OK'])
            ->seeJson([
                'status' => 'Test OK',
            ]);
    }

    public function testTapeStatusDelete()
    {
        global $lastId;
        $response = $this->call('DELETE', '/api/v1/tapestatus/'.$lastId);
        $this->assertEquals(200, $response->status());
    }
}
