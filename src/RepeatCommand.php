<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class RepeatCommand extends Command
{
    protected static $defaultName = 'repeat';

    protected function configure()
    {
        $this
            ->setDescription('Repeat text.')
            ->setHelp('This command repeat text')
            ->addArgument('string', InputArgument::REQUIRED, 'string to repeat')
            ->addOption(
                'times',
                't',
                InputOption::VALUE_OPTIONAL,
                'how many times to repeat',
                2
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $times = (int) $input->getOption('times');
        for ($i = 0; $i < $times; ++$i) {
            $output->writeln($input->getArgument('string'));
        }

        return Command::SUCCESS;
    }
}
