<?php
use PHPUnit\Framework\TestCase;

class TaskListTest extends TestCase
{
    private $CI;

    // Setup
    public function setUp()
    {
        $this->CI = &get_instance();
        $this->CI->load->model('tasks');
        $this->tasks = new Tasks();
    }

    // Check if task list is a valid size.
    public function testListSize()
    {
        $completed = $this->tasks->getCompletedTask();
        $uncompleted = $this->tasks->getUncompletedTask();
        $this->assertLessThan($uncompleted, $completed);
    }
}
