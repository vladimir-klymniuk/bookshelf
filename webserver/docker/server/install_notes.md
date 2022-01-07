
##  Get IP Address of Container

```bash
sudo docker inspect -f "{{ .NetworkSettings.IPAddress }}" docker_bookshelf111_1
```
or 

```bash
docker inspect -f '{{range.NetworkSettings.Networks}}{{.IPAddress}}{{end}}' docker_bookshelf111_1
```

# launchctl stop com.openssh.sshd && launchctl start com.openssh.sshd ... sudo launchctl unload /System/Library/LaunchDaemons/ssh.plist.


```r

# Instruction for Dockerfile to create a new image on top of the base image (ubuntu)

# FROM ubuntu:16.04

# RUN apt-get update && apt-get install -y openssh-server
# RUN mkdir /var/run/sshd
# RUN echo 'root:mypassword' | chpasswd
# RUN sed -i 's/PermitRootLogin prohibit-password/PermitRootLogin yes/' /etc/ssh/sshd_config
# RUN sed 's@session\s*required\s*pam_loginuid.so@session optional pam_loginuid.so@g' -i /etc/pam.d/sshd
# EXPOSE 22
# CMD ["/usr/sbin/sshd", "-D"]

```

6. Run docker port to verify SSH connectivity between the Docker host and the container. The docker port command list’s the port mappings or a specific mapping for the container.

sudo docker port test_sshd_container


sudo docker port test_sshd_container
You should see the output of 22/TCP → 0.0.0.0:32769, which indicates the container’s port 22 is mapped to the external port 32769.

Running the docker port command.
Running the docker port command.

7. Next, find the IP address of the container. To do that, run the docker inspect command. The docker inspect command queries Docker information and renders the results in JSON array using a format parameter.


You’ll see the format parameter argument below uses the range attribute to find the container’s IP address by checking in NetworkSettings→Networks→ IPAddress.

format parameter argument
format parameter argument

docker inspect --format='{{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}' 


