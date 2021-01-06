install:
		composer install

validate:
		composer validate

autoload:
		composer dump-autoload

brain-games:
		./bin/brain-games

brain-even:
		./bin/brain-even

lint:
		composer run-script phpcs -- --standard=PSR12 src bin

.PHONY: test log