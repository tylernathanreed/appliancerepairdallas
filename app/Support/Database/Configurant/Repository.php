<?php

namespace App\Support\Database\Configurant;

use Config;

class Repository
{
    /**
     * The columns that should be returned.
     *
     * @var array
     */
    public $columns;

    /**
     * The table which the query is targeting.
     *
     * @var string
     */
    public $from;

    /**
     * Set the table which the query is targeting.
     *
     * @param  string  $table
     *
     * @return $this
     */
    public function from($table)
    {
        $this->from = $table;

        return $this;
    }

    /**
     * Execute the query as a "select" statement.
     *
     * @param  array  $columns
     *
     * @return \Illuminate\Support\Collection
     */
    public function get($columns = ['*'])
    {
        $original = $this->columns;

        if (is_null($original)) {
            $this->columns = $columns;
        }

        // $results = $this->processor->processSelect($this, $this->runSelect());
        $results = $this->runSelect();

        $this->columns = $original;

        return collect($results);
    }

    /**
     * Run the query as a "select" statement against the connection.
     *
     * @return array
     */
    protected function runSelect()
    {
    	// Determine all of the results
    	$results = Config::get("models.{$this->from}.records", []);

    	// Return the results
    	return $results;
    }
}