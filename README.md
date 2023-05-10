# LOGOTEL DEV OPS

## Goal

You have been asked to create the infrastructure for running a web application (php based) on a cloud platform of your preference (AWS preferred, GCP or Azure are also fine).

You can use an automation script like CDK, Terraform, Ansible.

The web application can be found in the webapplication/ directory. Its only requirements are to be able to connect to a MySQL database and perform api requests.
In the application are created some feature tests to check the correct development process.

The goal of the challenge is to demonstrate hosting, managing, documenting and scaling a production-ready system.

This is not about website content or UI.

## Requirements

- Provide basic architecture diagrams and documentation on how to initialise the infrastructure along with any other documentation you think is appropriate
- Provide and document a mechanism for scaling the service and delivering the application to a larger audience
- Describe a possible solution for CI and/or CI/CD in order to release a new version of the application to production without any downtime
- Create an endpoint to handle an healthcheck to handle possible downtime


## General guidance

- We recommend using this repository as a starting point, you can clone it and add your code/docs to that repository
- Please do no open pull request with your challenge against this repository
- Submission of the challenge can be done either via your own public repository or zip file containing .git folder-