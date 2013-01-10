vagrant-php
===========

Instead of polluting your local machine with several compiled versions of PHP,
Apache, Nginx, or M/XAMP, create a local sandbox for your project running
the same PHP environment TravisCI uses!


**THIS REPOSITORY IS CURRENTLY BEING PORTED FROM [ECVagrantBundle][https://github.com/ericclemmons/ECVagrantBundle]**


Dependencies
------------

- [Composer][3] (`curl -s https://getcomposer.org/installer | php`)


Installation
------------

Add `vagrant-php` to an existing project:

    $ cd /existing/php/project
    $ composer require ericclemmons/vagrant-php --dev

**(You may specify `*` as the version, if you want to always use the latest version.)**


Usage
-----

Run the command interactively and answer the prompts:

    $ ./bin/vagrant-php create

    Welcome to the Symfony2 Vagrant generator
    ...


Or provide the options at once:

    $ ./bin/vagrant-php create  \
        --no-interaction        \
        --host=vagrant          \
        --ip=10.33.33.33        \
        --url=http://files.vagrantup.com/lucid32.box

A `Vagrantfile` will be generated in your *current working directory*.  Now you're ready to work!

    $ vagrant up
    $ vagrant ssh


Authors
-------

- [Eric Clemmons][1]


License
-------

MIT


[1]: https://github.com/ericclemmons
[2]: https://github.com/seiffert
[3]: http://www.vagrantup.com/
[4]: http://getcomposer.org/download/
