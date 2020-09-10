<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Question\Question;

class QuestCommand extends Command
{
    protected static $defaultName = 'quest';

    protected function configure()
    {
        $this
            ->setDescription('Start quest.')
            ->setHelp('This command start quest')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $helper = $this->getHelper('question');

        $question_name = new Question('Введите ваше имя:');
        $name = $helper->ask($input, $output, $question_name);

        $question_age = new Question('Введите ваш возраст:');
        $age = $helper->ask($input, $output, $question_age);

        $question_gender = new ChoiceQuestion(
            'Ваш пол (М):',
            ['М', 'Ж'],
            0
        );
        $question_gender->setErrorMessage('Укажите корректный ответ.');

        $gender = $helper->ask($input, $output, $question_gender);

        $output->writeln('Здравствуйте '.$name.'. Ваш возраст: '.$age.'. Ваш пол: '.$gender);

        return Command::SUCCESS;
    }
}
