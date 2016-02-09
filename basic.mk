IMAGE=course-php-basics

all: build run

run:
	docker run -v $(CURDIR)/..:$(CURDIR)/.. $(IMAGE) make -C $(CURDIR) test

attach:
	docker run -v $(CURDIR)/..:$(CURDIR)/.. -it $(IMAGE) /bin/bash

build:
	docker build -t $(IMAGE) ..

