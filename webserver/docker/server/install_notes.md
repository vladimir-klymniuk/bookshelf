
##  Get IP Address of Container

```bash
sudo docker inspect -f "{{ .NetworkSettings.IPAddress }}" docker_bookshelf111_1
```
or 

```bash
docker inspect -f '{{range.NetworkSettings.Networks}}{{.IPAddress}}{{end}}' docker_bookshelf111_1
```