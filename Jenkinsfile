pipeline{
    agent any
    environment {     
      DOCKERHUB_CREDENTIALS= credentials('dockerhubcredentials')     
    }    
    stages{
        stage('Login to Docker Hub') {
            steps{
                echo "========'Login to Docker Hub========"
                sh 'echo $DOCKERHUB_CREDENTIALS_PSW | docker login -u $DOCKERHUB_CREDENTIALS_USR --password-stdin'
                echo 'Login Completed'
            }
        }
        stage("Make Docker Image"){
            steps{
                echo "========Build========"
                sh 'docker build -t bigblackkit/site_on_k8s:$BUILD_ID .'
                 }
        }
        stage("Push Docker Image to DockerHub"){
            steps{
                echo "========Push Image========"
                sh 'docker push bigblackkit/site_on_k8s:$BUILD_ID'
                 }        
        }
        stage("Logout from DockerHub"){
            steps{
                echo "========Logout========"
                sh 'docker logout'
                 }
        }
        stage("Delete Docker Image"){
            steps{
                echo "========Delete local Image========"
                sh 'docker rmi bigblackkit/site_on_k8s:$BUILD_ID'
                 }
        }
        stage('Update Tag') {
            steps {
                sshagent(credentials: ['GitlabSSHKey']) {
                git branch: 'main', credentialsId: 'GitlabCred', url: 'http://192.168.0.31/kit/argocd.git'
                echo 'Updating Image TAG'
                sh '''#!/bin/bash            
                      sed -i "s/tag:.*/tag: $BUILD_ID/g" /home/kit/argocd/HelmChart/KitChart/values.yaml
                '''
                echo 'Value was changed'
                echo 'Git push'
                sh '''#!/bin/bash            
                      git config --global user.email "Jenkins@kit.com"
                      git config --global user.name "Jenkins-CI"
                      git config --global --add safe.directory /home/kit/argocd
                      git -C /home/kit/argocd add .
                      git -C /home/kit/argocd commit -am "Update Image tag"
                      git remote set-url origin git@192.168.0.31:kit/argocd.git
                      git -C /home/kit/argocd push origin main
                '''
                }
            }            
        }       
    }
}


