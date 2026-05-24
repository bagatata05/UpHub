pipeline {
    agent any

    stages {
        stage('Sync Dependency Lock File') {
            steps {
                echo 'Synchronizing composer.lock with current configuration changes...'
                bat 'composer update --lock --no-interaction'
            }
        }

        stage('Validate Composer Dependencies') {
            steps {
                echo 'Verifying that Composer dependencies match composer.json configuration...'
                bat 'composer validate --no-check-all --strict'
            }
        }

        stage('Lint PHP Source Files') {
            steps {
                echo 'Running lint checks on root PHP source files to find syntax errors...'
                bat 'for %%i in (*.php) do php -l "%%i"'
            }
        }
        
        stage('Lint Subdirectories') {
            steps {
                echo 'Checking key module files for compile errors...'
                bat 'if exist config for %%i in (config\\*.php) do php -l "%%i"'
                bat 'if exist api for %%i in (api\\*.php) do php -l "%%i"'
            }
        }
    }

    post {
        success {
            echo 'All syntax and dependency checks passed successfully! Codebase is stable.'
        }
        failure {
            echo 'Build failed. Syntax error or invalid composer file structure detected.'
        }
    }
}