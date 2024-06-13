<?php

namespace Tests\Unit;

use App\Http\Controllers\TrainingClasses\TrainingClassesController;
use App\Http\Requests\TrainingClassesRequest;
use App\Models\TrainingClasses;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Tests\TestCase;

class TrainingClassesControllerTest extends TestCase
{
    use RefreshDatabase;

    private $controller;

    public function setUp(): void
    {
        parent::setUp();
        $this->controller = new TrainingClassesController();
    }

    public function testAdd()
    {
        // Mock the required parameter for TrainingClassesRequest
        $mockedParameter = $this->createMock(TrainingClassesRequest::class);

        $request = new TrainingClassesRequest($mockedParameter);


        $request = new TrainingClassesRequest();
        // Add necessary data to the request
        $response = $this->controller->add($request);
        $this->assertInstanceOf(TrainingClasses::class, $response);
    }

    public function testEdit()
    {
        $request = new Request();
        $trainingClassesRequest = new TrainingClassesRequest();
        // Add necessary data to the requests
        $response = $this->controller->edit($request, $trainingClassesRequest);
        $this->assertInstanceOf(TrainingClasses::class, $response);
    }

    public function testGet()
    {
        $request = new Request();
        // Add necessary data to the request
        $response = $this->controller->get($request);
        $this->assertInstanceOf(TrainingClasses::class, $response);
    }

    public function testList()
    {
        $request = new Request();
        // Add necessary data to the request
        $response = $this->controller->list($request);
        $this->assertIsArray($response);
    }

    public function testDelete()
    {
        $request = new Request();
        // Add necessary data to the request
        $response = $this->controller->delete($request);
        $this->assertEquals(204, $response->getStatusCode());
    }
}
