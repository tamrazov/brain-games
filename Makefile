install:
		composer install

validate:
		composer validate

autoload:
		composer dump-autoload

brain-games:
		./bin/brain-games

lint:
		composer run-script phpcs -- --standard=PSR12 src bin

.PHONY: test log