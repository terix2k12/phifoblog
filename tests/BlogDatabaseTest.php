<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
include_once "env/blogdatabase.php";

final class BlogDatabaseTest extends TestCase {

    protected $db;

    protected function setUp(): void
    {
        $this->db = new BlogDatabase("dbcredentials.php");
        $this->db->connect();
    }

    protected function tearDown(): void
    {
        $this->db->disconnect();
    }

    public function testGetAllArticles(): void {

        $this->db->getAllArticles();        

        $this->assertTrue(True);
    }

    public function testGetArticle(): void {

        $this->db->getArticle(0);

        $this->assertTrue(True);
    }

}