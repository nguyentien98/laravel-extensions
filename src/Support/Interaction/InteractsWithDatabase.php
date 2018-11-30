<?php

namespace XuanQuynh\Laravel\Support\Interaction;

use Illuminate\Database\DatabaseManager;

trait InteractsWithDatabase
{
    /**
     * The database manager instance.
     *
     * @var DatabaseManager
     */
    protected $database;

    /**
     * Get the database manager instance.
     *
     * @return DatabaseManager
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * Set the database manager instance.
     *
     * @param  DatabaseManager  $database
     * @return $this
     */
    public function setDatabase(DatabaseManager $database)
    {
        $this->database = $database;

        return $this;
    }
}
