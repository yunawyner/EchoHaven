<?php
/**
 * Tests for EchoHaven
 */

use PHPUnit\Framework\TestCase;
use Echohaven\Echohaven;

class EchohavenTest extends TestCase {
    private Echohaven $instance;

    protected function setUp(): void {
        $this->instance = new Echohaven(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Echohaven::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
