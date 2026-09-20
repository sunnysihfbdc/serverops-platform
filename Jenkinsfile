pipeline {
    agent any

    stages {

        stage('Checkout') {
            steps {
                git(
                    url: 'https://github.com/sunnysihfbdc/serverops-platform.git',
                    branch: 'master',
                    credentialsId: 'github-serverops'
                )
            }
        }

        stage('Verify Checkout') {
            steps {
                sh '''
                    echo "===== Git Information ====="
                    git status
                    git log -1 --oneline

                    echo
                    echo "===== Project Files ====="
                    ls -la
                '''
            }
        }
    }
}
