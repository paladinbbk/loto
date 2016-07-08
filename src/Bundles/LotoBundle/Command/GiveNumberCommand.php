<?php
namespace Bundles\LotoBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class GiveNumberCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('loto:give:number')
            ->setDescription('Generate number to active rooms')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $ng = $this->getContainer()->get('bundles_loto.numbers_generate');
        $ng->generate();
        
        
//        $output->writeln(11111);
    }
}
