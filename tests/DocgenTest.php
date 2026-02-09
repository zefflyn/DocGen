<?php
/**
 * Tests for DocGen
 */

use PHPUnit\Framework\TestCase;
use Docgen\Docgen;

class DocgenTest extends TestCase {
    private Docgen $instance;

    protected function setUp(): void {
        $this->instance = new Docgen(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Docgen::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
