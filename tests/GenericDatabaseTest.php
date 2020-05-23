<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
include_once "env/database.php";

final class GenericDatabaseTest extends TestCase {

    public function testCanBeCreated(): void {
        $this->assertInstanceOf(
            GenericDatabase::class,
            GenericDatabase::fromString("dbcredentials.php")
        );
    }

    public function testConnectAndDisconnect(): void {
        $db = new GenericDatabase("dbcredentials.php");
        $db->connect();
        $db->disconnect();

        $this->assertTrue(True);
    }

    /*public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Email::fromString('invalid');
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'user@example.com',
            Email::fromString('user@example.com')
        );
    }*/
}