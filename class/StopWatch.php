<?php
/*StopWatch
------------------
- private $startTime: int
- private $endTime: int
------------------
+ __construct(startTime): System time
+ getStartTime()
+ getEndTime()
+ start(): void
+ stop(): void
+ getElapsedTime(): time milisecond s

 */

class StopWatch
{
    private $startTime;
    private $endTime;

    public function __construct()
    {
        $this->startTime = time();
    }

    /**
     * @return int
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    public function start(){
        $this->startTime = time();
    }

    public function stop(){
        $this->endTime = time();
    }

    public function getElapsedTime(){
        return ($this->endTime-$this->startTime)*1000;
}
}