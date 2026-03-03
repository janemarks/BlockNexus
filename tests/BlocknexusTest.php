<?php
/**
 * Tests for BlockNexus
 */

use PHPUnit\Framework\TestCase;
use Blocknexus\Blocknexus;

class BlocknexusTest extends TestCase {
    private Blocknexus $instance;

    protected function setUp(): void {
        $this->instance = new Blocknexus(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blocknexus::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
