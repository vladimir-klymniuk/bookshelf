FROM ubuntu:latest

RUN apt update && apt install  openssh-server sudo -y

RUN useradd -rm -d /home/ubuntu -s /bin/bash -g root -G sudo -u 1000 test 

RUN mkdir -p /home/ubuntu/.ssh && touch /home/ubuntu/.ssh/authorized_keys
RUN echo 'ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABgQDfzELPwTGkmPTqGW9k5V/bNXiZ0fhGJiih3ugd/+NU5kL+GeQSjbPHtAqemaV3K/5lYSn/V4OcLJpkEUsGreENhlYX7s0BpKq3Xj20W5VqNLgPky2CX3+ngzsumH/1wMZJ3ca7bU8Febmn7xEBJ/xYIokH9tCUwAz6cPbct2qPiOyO5hnynewklwABZHZbxiBu33dYtx+hO8HGrCSCk8N1KM9e7vC4hbEOOYKQiPES5qrtJyL8burzOYbAKKRmgVDdIlAqLgwyZXponOi86hNVjpmqSxUWhwhl+btCAyCp/n7cTHxexhEuI8dGkqG5WnAsUZI7jpZ5BF5QYSc9JMu5RdfTPrh2ZKJIRjOzYoKQhm6J+h/Lz7MolAJ9yku5g5dUN8UKynC5wsOf8RuM9TIkaFIhAEdaXrJtL+Yowj2E5N1dEBA431IxMK5660jdVg7MOw/oh/LNTGH3h2xzkvcuOMm5m8Mo8cyrV/XI41pxx54mWimE/GIvckggWzRsiGk= dk@Users-MacBook-Pro.local'  > /home/ubuntu/.ssh/authorized_keys

RUN  echo 'test:test' | chpasswd

# RUN service ssh start

RUN cd /etc/ssh && echo 'AllowTcpForwarding yes' >> sshd_config \
    && echo 'PermitTunnel yes' >> sshd_config \
    && echo 'X11Forwarding yes' >> sshd_config \
    && echo 'PasswordAuthentication yes' >> sshd_config \
    && echo 'PermitRootLogin yes' >> sshd_config \
    && echo 'PubkeyAuthentication yes' >> sshd_config

    # && echo 'HostKey /etc/ssh/ssh_host_rsa_key' >> sshd_config \
    # && echo 'HostKey /etc/ssh/ssh_host_ecdsa_key' >> sshd_config \
    # && echo 'HostKey /etc/ssh/ssh_host_ed25519_key' >> sshd_config

RUN service ssh restart

EXPOSE 22

CMD ["/usr/sbin/sshd","-D"]

# CMD ["tail", "-f", "/dev/null"]
# FROM centos:8

# # RUN yum install openssh-server

# # RUN mkdir -p ~/.ssh && touch ~/.ssh/authorized_keys
# # RUN echo 'ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABgQCci5OwOtxCXGJUwv9tFZ5cR13hMcDSW/rrIOD08rtC0wCo0KL2wSH/tDEhwdjt3ahxGsT3lSUkPJy3LAiitaT+Uhtdi/82mN79k+J5As2LBypO5ZW3s6U5f2/vpmiXQaJUHswxjLHQgS70csVKY2khr1VMMWus9rSiNY6uT1OSibTIDm9p3cjZGeUjlh61zFNqRJhfq1mUwgS5ORkSSyZzW7aUSYdKtqGtEzBKRCaFocnt8rGo27/etyj4XPYf+5rsqa6C7+Mh+KMpMNHn3om7xBjc6mDDWwKw8Um0Q2SA96SKo+r4Qh1ZoLzFKuYHH3mKK1mwzZxWQqaXWUqH+EckluzsCmbzgglhaJCUPFFBTHUj5XJg6kuBBAjUCnrzQXbfGontvJ+BUWONr9RuBVUwRnheH51OTQDaW3Vy9fiTQ2o4j19ERdaFH3dgCDfmGpsqJsQA6bCWb7pbDHb892QC1E8BwtYp1fGhoHX38cM9xLQJIj68aeTRB4Gl2qv0oXU= dk@Users-MacBook-Pro.local'  > ~/.ssh/authorized_keys

# EXPOSE 99

#  useradd arch -p arch \
#     && tee -a /etc/sudoers <<< 'arch ALL=(ALL) NOPASSWD: ALL' \
#     && mkdir /home/arch \
#     && chown arch:arch /home/arch

# mkdir -m 700 /root/.ssh

# allow ssh to container
# RUN mkdir -m 700 /root/.ssh

# WORKDIR /root/.ssh
# RUN touch authorized_keys \
#     && chmod 644 authorized_keys

# RUN touch enable-ssh.sh \
#     && chmod +x ./enable-ssh.sh \
#     && tee -a enable-ssh.sh <<< '[[ -f /etc/ssh/ssh_host_rsa_key ]] || \' \
#     && tee -a enable-ssh.sh <<< '[[ -f /etc/ssh/ssh_host_ed25519_key ]] || \' \
#     && tee -a enable-ssh.sh <<< '[[ -f /etc/ssh/ssh_host_ed25519_key ]] || \' \
#     && tee -a enable-ssh.sh <<< 'sudo /usr/bin/ssh-keygen -A' \
#     && tee -a enable-ssh.sh <<< 'nohup sudo /usr/bin/sshd -D &'

# CMD ["tail", "-f", "/dev/null"]