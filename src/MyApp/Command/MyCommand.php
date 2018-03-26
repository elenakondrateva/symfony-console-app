<?php

namespace MyApp\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MyCommand extends Command
{
    public function configure()
    {
        $this
            ->setName('console:helloworld')
            ->setDescription('Command to output "hello world"');
    }

    protected function execute(InputInterface $input, OutputInterface $output) {

        $output->writeln('Hello world!');

        return 0;
    }

}