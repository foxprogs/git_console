<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SayHelloCommand extends Command
{
    protected static $defaultName = 'say_hello';

    protected function configure()
    {
        $this
            ->setDescription('Say hello')
            ->setHelp('This command say hello')
            ->addArgument('string', InputArgument::REQUIRED, 'string to convert')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Привет '.$input->getArgument('string'));

        return Command::SUCCESS;
    }
}
