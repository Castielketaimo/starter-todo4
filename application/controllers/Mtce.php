<?php

class Mtce extends Application {

        // Specifies num of results per page.
        private $items_per_page = 10;

        public function index()
        {
                $this->data['pagetitle'] = 'TODO List Maintenance';
                $tasks = $this->tasks->all(); // get all the tasks
                $this->show_page($tasks);
        }

        // Show a single page of todo items
        private function show_page($tasks)
        {
        $this->data['pagetitle'] = 'TODO List Maintenance';
        // build the task presentation output
        $result = ''; // start with an empty array      
        foreach ($tasks as $task)
        {
                if (!empty($task->status))
                $task->status = $this->app->status($task->status);
                $result .= $this->parser->parse('oneitem', (array) $task, true);
        }
        $this->data['display_tasks'] = $result;

        // and then pass them on
        $this->data['pagebody'] = 'itemlist';
        $this->render();
        }

}