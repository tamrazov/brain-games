install:
		composer install

validate:
		composer validate

autoload:
		composer dump-autoload

brain-games:
		./bin/brain-games

.PHONY: test log