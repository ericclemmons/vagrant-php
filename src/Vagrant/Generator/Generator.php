<?php

namespace Vagrant\Generator;

/**
 * @author Eric Clemmons <eric@smarterspam.com>
 */
class Generator
{
    private $skeletonDir;

    public function __construct($skeletonDir)
    {
        $this->skeletonDir = $skeletonDir;
    }

    static public function generateIp()
    {
        $blocks = array(
            array('10.0.0.0', '10.255.255.255'),
            array('172.16.0.0', '172.31.255.255'),
            array('192.168.0.0', '192.168.255.255'),
        );

        $block  = $blocks[array_rand($blocks)];
        $range  = array_map('ip2long', $block);

        $long   = rand(current($range) + 1, end($range) - 1);
        $ip     = long2ip($long);

        return $ip;
    }

    public function generate($dir, $context)
    {
        $file       = sprintf('%s/Vagrantfile', $dir);
        $success    = $this->renderFile($this->skeletonDir, 'Vagrantfile', $file, $context);

        if ($success) {
            return array($file);
        } else {
            throw new \Exception('Unable to generate '.$file);
        }
    }

    protected function render($skeletonDir, $template, $parameters)
    {
        $twig = new \Twig_Environment(new \Twig_Loader_Filesystem($skeletonDir), array(
            'debug'            => true,
            'cache'            => false,
            'strict_variables' => true,
            'autoescape'       => false,
        ));

        return $twig->render($template, $parameters);
    }

    protected function renderFile($skeletonDir, $template, $target, $parameters)
    {
        if (!is_dir(dirname($target))) {
            mkdir(dirname($target), 0777, true);
        }

        return file_put_contents($target, $this->render($skeletonDir, $template, $parameters));
    }
}
