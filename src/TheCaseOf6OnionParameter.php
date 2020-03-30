<?php
namespace APP;

class SchedulePane
{

}

/**
 * This is the test target
 * Class SchedulingTaskPane
 * @package APP
 */
class SchedulingTaskPane extends SchedulePane
{
    public function __construct(SchedulingTask $task)
    {
    }
}

class SchedulingTask extends SerialTask implements ISchedulingTask
{
    public function __construct(Scheduler $scheduler, MeetingResolver $resolver)
    {

    }
}

interface ISchedulingTask
{
    public function run();
}

class SerialTask
{
    public function run()
    {

    }
}

class Scheduler
{

}

class MeetingResolver
{

}