# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

  config.vm.box = "ubuntu/xenial64"

  # Nginx HTTP Server
  config.vm.define "web-1" do |app|
    app.vm.hostname = "web-1"
    #app.vm.network "public_network"
    app.vm.network "private_network", ip: "192.168.33.10"
    app.vm.provision "shell", path: "provision/provision-for-nginx.sh"
<<<<<<< HEAD
    #app.vm.provision "shell", path: "provision/provision-for-mysql.sh"
=======
    app.vm.provision "shell", path: "provision/provision-for-mysql.sh"
>>>>>>> 6ecdf65a2da2be13a8c0cb3dcfaad18a75d95ca7
  end

end