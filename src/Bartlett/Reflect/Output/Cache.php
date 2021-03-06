<?php
/**
 * Default console output class for Cache Api.
 *
 * @category PHP
 * @package  PHP_Reflect
 * @author   Laurent Laville <pear@laurent-laville.org>
 * @license  https://opensource.org/licenses/BSD-3-Clause The 3-Clause BSD License
 * @link     http://php5.laurent-laville.org/reflect/
 */

namespace Bartlett\Reflect\Output;

use Bartlett\Reflect\Console\Formatter\OutputFormatter;

use Symfony\Component\Console\Output\OutputInterface;

/**
 * Cache results default render on console
 *
 * @category PHP
 * @package  PHP_Reflect
 * @author   Laurent Laville <pear@laurent-laville.org>
 * @license  https://opensource.org/licenses/BSD-3-Clause The 3-Clause BSD License
 * @link     http://php5.laurent-laville.org/reflect/
 * @since    Class available since Release 3.0.0-alpha1
 */
class Cache extends OutputFormatter
{
    /**
     * Cache clear results
     *
     * @param OutputInterface $output   Console Output concrete instance
     * @param array           $response Render cache:clear command
     */
    public function clear(OutputInterface $output, $response)
    {
        $output->writeln(
            sprintf(
                '<info>%d cache entries cleared</info>',
                $response
            )
        );
    }
}
