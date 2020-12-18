<?php

use App\Models\Tape;

class HomeTest extends TestCase
{
    public function testHome()
    {
        $this->get('/');

        $this->assertEquals(
            "Tape Manager",
            $this->response->getContent()
        );
    }

    public function testTapeHome()
    {
        $response = $this->call('GET', '/api/v1/tapes');
        $this->assertEquals(200, $response->status());
    }

    public function testTapeCreate()
    {
        global $lastId;
        $this->json('POST', '/api/v1/tapes', [
            'name_inside'   => 'Test',
            'name_outside'  => 'Test',
            'tape_type_id'  => 1,
            'tape_status_id'=> 1
        ])
            ->seeJson([
                'name_inside' => 'Test',
            ]);
        $lastId = Tape::all()->last()->id;
    }

    public function testTapeUpdate()
    {
        global $lastId;
        $this->json('PUT', '/api/v1/tapes/'.$lastId, ['name_inside' => 'Test OK'])
            ->seeJson([
                'name_inside' => 'Test OK',
            ]);
    }

    public function testTapeStatusDelete()
    {
        global $lastId;
        $response = $this->call('DELETE', '/api/v1/tapes/'.$lastId);
        $this->assertEquals(200, $response->status());
    }
}
