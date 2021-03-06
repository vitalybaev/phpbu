<?php
namespace phpbu\App\Backup\Source;

use phpbu\App\Backup\Source;
use phpbu\App\Backup\Target;
use phpbu\App\Result;

/**
 * Class FakeSource
 *
 * Dummy class to test phpbu Factory create methods.
 */
class FakeSource implements Source
{
    /**
     * Setup the source.
     *
     * @param array $conf
     */
    public function setup(array $conf = [])
    {
        // do something fooish
    }

    /**
     * Runner the backup
     *
     * @param  \phpbu\App\Backup\Target $target
     * @param  \phpbu\App\Result $result
     * @return \phpbu\App\Backup\Source\Status
     */
    public function backup(Target $target, Result $result) : Source\Status
    {
        return new Source\Status();
    }
}
