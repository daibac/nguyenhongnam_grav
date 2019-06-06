<?php
namespace Grav\Plugin\Console;

use Grav\Common\Grav;
use Grav\Console\ConsoleCommand;
use Grav\Plugin\Email\Email;
use Symfony\Component\Console\Input\InputOption;

/**
 * Class FlushQueueCommand
 * @package Grav\Console\Cli\
 */
class FlushQueueCommand extends ConsoleCommand
{
    /**
     * @var array
     */
    protected $options = [];

    /**
     *
     */
    protected function configure()
    {
        $this
            ->setName('flush-queue')
            ->setAliases(['flushqueue'])
            ->addOption(
                'env',
                'e',
                InputOption::VALUE_OPTIONAL,
                'The environment to trigger a specific configuration. For example: localhost, mysite.dev, www.mysite.com'
            )
            ->setDescription('Flushes the email queue of any pending emails')
            ->setHelp('The <info>flush-queue</info> command flushes the email queue of any pending emails');
    }

    /**
     * @return int|null|void
     */
    protected function serve()
    {
        $grav = Grav::instance();

        $this->output->writeln('');
        $this->output->writeln('<yellow>Current Configuration:</yellow>');
        $this->output->writeln('');

        dump($grav['config']->get('plugins.email'));

        $this->output->writeln('');

        require_once __DIR__ . '/../vendor/autoload.php';

        $output = Email::flushQueue();

        $this->output->writeln('<green>' . $output . '</green>');

    }
}
