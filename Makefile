all:
	pwd
	/usr/local/bin/phpunit --bootstrap src/autoload.php src/tests/
