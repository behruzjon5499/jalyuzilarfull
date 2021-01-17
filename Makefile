du: memory
	docker-compose up -d

dd:
	docker-compose down

db: memory
	docker-compose up --build -d

def:
	docker-compose exec frontend bash

memory:
	sudo sysctl -w vm.max_map_count=262144

perm:
	sudo chgrp -R www-data storage bootstrap/cache
	sudo chmod -R ug+rwx storage bootstrap/cache
