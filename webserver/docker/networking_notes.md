### Network drivers

Docker's networking subsystem is pluggable, using drivers. Several drivers exist by default, and provide core networking functionality:

- `bridge`: The default network driver. If you don't specify a driver, this is the type of network you are creating. `Bridge networks are usually used when your applications run in standalone containers that need to communicate.`

- `host`: For standalone containers, remove network isolation between the container and the Docker host, and use the host's networking directly.

- `overlay`: Overlay networks connect multiple Docker daemons together and enable swarm services to communicate with each other. You can also use overlay networks to facilitate two standalone containers on different Docker daemons. This strategy removes the need to do OS-level routing between these containers.

- `ipvlan`: IPvlan networks give users total control IPv4 and IPv6 addressing. The `VLAN` tagging and even `IPvlan L3` routing for users interested in underlay network integration.

- `macvlan`: Macvlan networks allow you to assign a MAC address to a container, making it appear as a physical device on your network. The Docker daemon routes traffic to containers by their `MAC addresses`. Using the `macvlan` driver is sometimes the best choice when dealing with legacy applications that expect to be directly connected to the physical network, rather than routed through the Docker host's network stack. 

- `none`: For this container, disable all networking. Usually used in conjunction with a custom network driver.

- `Network plugins`: You can install and use third-party network plugins with Docker.

### Network driver summary
 - `User-defined bridge networks` are best when you need multiple containers to communicate on the same Docker host.

 - `Host networks` are best when the network stack should not be isolated from the Docker host, but you want other aspects of the container to be isolated.

 - `Overlay networks` are best when you need container running on different Docker hosts to comminicate, or when multiple applications work together using swarm services.

 - `Maclan networks` are best when you are migrating from a VM setup or need your container to look like physical hosts on your network, each with a unique MAC address.

- `Third-party network plugins` allow you to integrate Docker with specialized network stacks.