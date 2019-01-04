<?php

/*
 * This file is part of the Sericode package.
 *
 * (c) Nguyễn Xuân Quỳnh <nguyen.xuan.quynh@sericode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sericode\Laravel\Support\Interaction;

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
