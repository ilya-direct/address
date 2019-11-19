<?php

use PHPUnit\Framework\TestCase;
use Address\Service;


class ServiceTest extends TestCase
{
    /** @var Service */
    private $service;

    public function setUp(): void
    {
        parent::setUp();
        $this->service = new Service();
    }

    public function testLocationExists()
    {
        $this->assertTrue($this->service->locationExists("Some address"));
    }

    public function test()
    {
        $this->assertEquals(['a1', 'a2'], $this->service->findSuggestions("Some address 2"));
    }
}
