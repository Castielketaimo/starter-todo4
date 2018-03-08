<?php

// Class for testing.
class Task extends CI_Model
{
    public $id;
    public $task;
    public $priority;
    public $size;
    public $group;
    public $deadline;
    public $status;
    public $flag;

    public function setId($value)
    {
        $this->id = $value;
    }

    public function setTask($value)
    {
        if (strlen($value) < 65)
        {
            $this->task = $value;
        }
    }

    public function setSize($value)
    {
        if (!is_int($value) || $value > 4)
        {
            return;
        }

        $this->size = $value;
    }

    public function setGroup($value)
    {
        if (!is_int($value) || $value > 5)
        {
            return;
        }

        $this->group = $value;
    }

    public function setPriority ($value)
    {
        if (!is_int($value) || $value > 4)
        {
            return;
        }

        $this->priority = $value;
    }

    public function setDeadline($value)
    {
        $this->deadline = $value;
    }

    public function setStatus($value)
    {
        $this->status = $value;
    }

    public function setFlag($value)
    {
        $this->flag = $value;
    }
}