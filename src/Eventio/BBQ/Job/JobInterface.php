<?php

namespace Eventio\BBQ\Job;

use Eventio\BBQ\Job\Payload\JobPayloadInterface;
use Eventio\BBQ\Queue\QueueInterface;

/**
 *
 * @author Ville Mattila <ville@eventio.fi>
 */
interface JobInterface
{

    /**
     * @return JobPayloadInterface
     */
    public function getPayload();

    public function setPayload(JobPayloadInterface $payload);

    /**
     * @return QueueInterface
     */
    public function getQueue();

    public function setQueue(QueueInterface $queue);
}
