vagrant-php
===========

Instead of polluting your local machine with several compiled versions of PHP,
Apache, Nginx, or M/XAMP, create a local sandbox for your project running
the same PHP environment TravisCI uses!


**THIS REPOSITORY IS CURRENTLY BEING PORTED FROM [ECVagrantBundle][https://github.com/ericclemmons/ECVagrantBundle]**


Installation
------------

**TODO**


Usage
-----

Run the command interactively and answer the prompts:

    $ vagrant-php create

    Welcome to the Symfony2 Vagrant generator
    ...


Or provide the options at once:

    $ vagrant-php create    \
        --no-interaction    \
        --host=vagrant      \
        --ip=10.33.33.33    \
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
