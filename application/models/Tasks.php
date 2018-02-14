<?php

/**
 * Models for the data/tasks.csv
 */
class Tasks extends CSV_Model {

        public function __construct()
        {
                parent::__construct(APPPATH . '../data/tasks.csv', 'id');
        }

}