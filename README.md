INSTALL
=======

- git clone git@github.com:ircmaxell/php-src.git
- cd php-src
- git checkout -b scalar_type_hints_v5
- ./buildconf
- curl -sL https://gist.github.com/denji/8e50fcb13482c5d6c78a/raw/configure.bash | bash -s
- make


RFC
===

https://wiki.php.net/rfc/scalar_type_hints_v5


TEST
====

./sapi/cli/php --version
