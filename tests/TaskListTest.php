<?php
use PHPUnit\Framework\TestCase;

class TaskListTest extends TestCase
{
    private $CI;

    // Load CI instance normally
    public function setUp()
    {
        $this->CI = &get_instance();
    }

    // Test get posting.
    public function testGetPost()
    {
        $_SERVER['REQUEST_METHOD'] = 'GET';
        $_GET['foo'] = 'bar';
        $this->assertEquals('bar', $this->CI->input->get_post('foo'));
    }
}
