<?php

namespace PlayPatterns\Behavioral\Command;

use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{

    public function testEmailSenderAndReportSaveLoadRun()
    {
        $sender = new EmailSender();
        $commandSend = new CommandSend($sender, 'from', 'to', 'text');
        $commandReport = new CommandReport('report');

        $queue = new Queue();
        $queue->add($commandSend);
        $queue->add($commandReport);
        $serializedCommands = $queue->save();
        $queue->unload();
        $queue->load($serializedCommands);
        $result = $queue->run();
        $this->assertEquals([
            'email',
            'report'
        ], $result);
    }

}
