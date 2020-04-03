<?php

use APP\ISchedulingTask;
use APP\MeetingResolver;
use APP\Scheduler;
use APP\SchedulingTask;
use APP\SchedulingTaskPane;
use PHPUnit\Framework\TestCase;

class SchedulingTaskPaneTest extends TestCase
{
    public function testCreate()
    {
        $SchedulingTask = new FakeSchedulingTask();
        $schedulingTaskPane = new SchedulingTaskPane($SchedulingTask);
        /// now we can start to write our test
    }
}

/**
 * 直接對SchedulingTask做 Extract Interface 並在interface中定義
 * SchedulingTask從SerialTask中繼承但沒有Override的method
 * Class FakeSchedulingTask
 */
class FakeSchedulingTask implements ISchedulingTask
{
    public function __construct()
    {
    }

    public function run()
    {
        // TODO: Implement run() method.
    }
}