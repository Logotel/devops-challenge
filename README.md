# LOGOTEL DEV OPS

## Goal

You have been asked to create the infrastructure for running a web application (php based) on a cloud platform of your preference (AWS preferred, GCP or Azure are also fine).

The web application can be found in the webapplication/ directory. Its only requirements are to be able to connect to a MySQL database and perform api requests.
In the application are created some feature tests to check the correct development process.

The goal of the challenge is to demonstrate hosting, managing, documenting and scaling a production-ready system.

This is not about website content or UI.

## Requirements

- Provide basic architecture diagrams and documentation on how to initialise the infrastructure along with any other documentation you think is appropriate
- Provide and document a mechanism for scaling the service and delivering the application to a larger audience
- Describe a possible solution for CI and/or CI/CD in order to release a new version of the application to production without any downtime
- Create an endpoint to handle an health check, and describe what kind of tools is better to use to monitor the health status.
- Create a strategy to deploy the storage/media directory keeping in mind that files can be added by the application (see api/generate-image endpoint).
- Consider a phase 2 where you recieve the request to add a cache layer:
    - Choose the service you prefer, and update the infrastructure document
    - Configure the web application and implement two api endpoints: one for storing data in cache, and one for retrieving it
    - Update the web application in order to achive this goal

## Extra mile step

Create an automation script to deploy the infrastructure to a cloud provider. You can use an automation script like CDK, Terraform, Ansible.


## General guidance

- We recommend using this repository as a starting point, you can clone it and add your code/docs to that repository
- Please do no open pull request with your challenge against this repository
- Submission of the challenge can be done either via your own public repository or zip file containing .git folder.