install:
		composer install

update:
		composer update

validate:
		composer validate

autoload:
		composer dump-autoload

brain-games:
		./bin/brain-games

brain-even:
		./bin/brain-even

brain-calc:
		./bin/brain-calc

lint:
		composer run-script phpcs -- --standard=PSR12 src bin

.PHONY: test log