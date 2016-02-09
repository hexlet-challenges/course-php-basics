include ../basic.mk

test: format
	phpunit --color TestSolution.php

format:
	phpcs --standard=psr2 Solution.php
