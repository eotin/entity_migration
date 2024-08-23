<?php

namespace App\Entity\Technical;

use Symfony\Component\Process\Process;

class RunningTaskProcess
{
    /**
     * @var Task
     */
    private $task;

    /**
     * @var Process
     */
    private $process;

    public function getTask(): Task
    {
        return $this->task;
    }

    public function setTask(Task $task): void
    {
        $this->task = $task;
    }

    public function getProcess(): Process
    {
        return $this->process;
    }

    public function setProcess(Process $process): void
    {
        $this->process = $process;
    }
}
