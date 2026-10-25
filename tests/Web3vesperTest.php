<?php
/**
 * Tests for Web3Vesper
 */

use PHPUnit\Framework\TestCase;
use Web3vesper\Web3vesper;

class Web3vesperTest extends TestCase {
    private Web3vesper $instance;

    protected function setUp(): void {
        $this->instance = new Web3vesper(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Web3vesper::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
