FROM ubuntu:latest

RUN apt-get update

RUN apt-get install -y ansible

RUN mkdir -p /root/.ssh

RUN cp ./keys/* /root/.ssh/*

RUN mkdir -p /etc/ansible/roles/nginx/tasks && \
    mkdir -p /etc/ansible/roles/nginx/handlers

RUN cp ./ansible/hosts /etc/ansible/hosts


# ./ansible/hosts /etc/ansible/hosts

# /etc/ansible/play.yml
# /etc/ansible/roles/nginx/tasks
# /etc/ansible/roles/nginx/tasks/main.yml
# /etc/ansible/roles/nginx/handlers

# /etc/ansible/roles/nginx/handlers/main.yml

#   /etc/ansible/roles/epel/tasks
# RUN useradd -rm -d /home/ansible -s /bin/bash -g root -G sudo -u 1000 test 

# RUN mkdir -p /home/ansible/.ssh && touch /home/ansible/.ssh/authorized_keys
# RUN mkdir -p /root/.ssh && touch /root/.ssh/authorized_keys
# RUN echo 'ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABgQDfzELPwTGkmPTqGW9k5V/bNXiZ0fhGJiih3ugd/+NU5kL+GeQSjbPHtAqemaV3K/5lYSn/V4OcLJpkEUsGreENhlYX7s0BpKq3Xj20W5VqNLgPky2CX3+ngzsumH/1wMZJ3ca7bU8Febmn7xEBJ/xYIokH9tCUwAz6cPbct2qPiOyO5hnynewklwABZHZbxiBu33dYtx+hO8HGrCSCk8N1KM9e7vC4hbEOOYKQiPES5qrtJyL8burzOYbAKKRmgVDdIlAqLgwyZXponOi86hNVjpmqSxUWhwhl+btCAyCp/n7cTHxexhEuI8dGkqG5WnAsUZI7jpZ5BF5QYSc9JMu5RdfTPrh2ZKJIRjOzYoKQhm6J+h/Lz7MolAJ9yku5g5dUN8UKynC5wsOf8RuM9TIkaFIhAEdaXrJtL+Yowj2E5N1dEBA431IxMK5660jdVg7MOw/oh/LNTGH3h2xzkvcuOMm5m8Mo8cyrV/XI41pxx54mWimE/GIvckggWzRsiGk= dk@Users-MacBook-Pro.local'  > /home/ansible/.ssh/authorized_keys
# RUN echo 'ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABgQDfzELPwTGkmPTqGW9k5V/bNXiZ0fhGJiih3ugd/+NU5kL+GeQSjbPHtAqemaV3K/5lYSn/V4OcLJpkEUsGreENhlYX7s0BpKq3Xj20W5VqNLgPky2CX3+ngzsumH/1wMZJ3ca7bU8Febmn7xEBJ/xYIokH9tCUwAz6cPbct2qPiOyO5hnynewklwABZHZbxiBu33dYtx+hO8HGrCSCk8N1KM9e7vC4hbEOOYKQiPES5qrtJyL8burzOYbAKKRmgVDdIlAqLgwyZXponOi86hNVjpmqSxUWhwhl+btCAyCp/n7cTHxexhEuI8dGkqG5WnAsUZI7jpZ5BF5QYSc9JMu5RdfTPrh2ZKJIRjOzYoKQhm6J+h/Lz7MolAJ9yku5g5dUN8UKynC5wsOf8RuM9TIkaFIhAEdaXrJtL+Yowj2E5N1dEBA431IxMK5660jdVg7MOw/oh/LNTGH3h2xzkvcuOMm5m8Mo8cyrV/XI41pxx54mWimE/GIvckggWzRsiGk= dk@Users-MacBook-Pro.local'  > /root/.ssh/authorized_keys

# RUN  echo 'ansible:test' | chpasswd

# RUN cd /etc/ssh && echo 'AllowTcpForwarding yes' >> sshd_config \
#     && echo 'PermitTunnel yes' >> sshd_config \
#     && echo 'X11Forwarding yes' >> sshd_config \
#     && echo 'PasswordAuthentication yes' >> sshd_config \
#     && echo 'PermitRootLogin yes' >> sshd_config \
#     && echo 'PubkeyAuthentication yes' >> sshd_config
#     # && echo 'HostKey /etc/ssh/ssh_host_rsa_key' >> sshd_config \
#     # && echo 'HostKey /etc/ssh/ssh_host_ecdsa_key' >> sshd_config \
#     # && echo 'HostKey /etc/ssh/ssh_host_ed25519_key' >> sshd_config

# RUN service ssh restart

# EXPOSE 22

# CMD ["/usr/sbin/sshd","-D"]