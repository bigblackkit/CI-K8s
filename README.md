![CI_CD_k8s_7](https://github.com/user-attachments/assets/e7e7d34c-463f-4e9e-b76a-60224428d851)

CD : https://github.com/bigblackkit/CD-K8s.git



############################################################################

1. После того как в Main ветку репозитория СI-K8s внесли изменения,
отправляется Webhook в Jenkins.
2. Jenkins в свою очередь использует файл с инструкциями с репозитория
В дженкинс файле:
 - Build docker image
 - Login on DockerHub
 - Push Docker image on DockerHub
 - Logout from DockerHub
 - Delete local Docker Image
 - Update Docker Image Tag on CD : https://github.com/bigblackkit/CD-K8s.git

Что касается стенда на котором всё это выполнялось:
OS ubuntu-22.04.5-live-server-amd64 , в качестве средства виртуализации использовал Oracle VirtualBox
Данный проект выполнялся для самообучения, хотелось всё развернуть своими руками используя документацию и сторонние гайды конечно, куда без них ))

##############################################################################

1. After the Main branch of the CI-K8s repository has been modified, a Webhook is sent to Jenkins.
2. Jenkins in turn uses a file with instructions from the repository
In the Jenkins file:
- Build docker image
- Login on DockerHub
- Push Docker image on DockerHub
- Logout from DockerHub
- Delete local Docker Image
- Update Docker Image Tag on CD : https://github.com/bigblackkit/CD-K8s.git

As for the stand on which all this was performed:
OS ubuntu-22.04.5-live-server-amd64, Oracle VirtualBox was used as a virtualization tool
This project was carried out for self-study, I wanted to deploy everything myself using documentation and third-party guides, of course, where without them))
