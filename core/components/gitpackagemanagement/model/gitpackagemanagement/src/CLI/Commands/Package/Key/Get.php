<?php
namespace GPM\CLI\Commands\Package\Key;

use GPM\CLI\Commands\GPMCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Get extends GPMCommand
{
    protected function configure()
    {
        $this
            ->setDescription('Get package\'s key.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln($this->package->key);
    }
}
