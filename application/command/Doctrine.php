<?php
namespace app\command;

use think\console\Command;
use think\console\Input;
use think\console\Output;

class Doctrine extends Command
{
    protected function configure()
    {
        $this->setName('doctrine') //设置命令
             ->setDescription('update sql table'); //设置命令描述
    }

    protected function execute(Input $input, Output $output)
    {
        passthru('vendor/bin/doctrine orm:schema-tool:update --force');
    }
}