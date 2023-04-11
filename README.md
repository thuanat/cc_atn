1. Xóa docker version cũ:
yum remove -y docker \
                  docker-client \
                  docker-client-latest \
                  docker-common \
                  docker-latest \
                  docker-latest-logrotate \
                  docker-logrotate \
                  docker-engine

2. Thêm link chứa docker version mới:
	yum install -y yum-utils
	yum-config-manager \
   	--add-repo \
    	https://download.docker.com/linux/centos/docker-ce.repo

3. Install docker
	yum install -y docker-ce docker-ce-cli containerd.io \
 	docker-buildx-plugin docker-compose-plugin

4. Start docker service:
systemctl start docker
systemctl enable docker

5. Vào thư mục chứa project
docker-compose up -d
