# marist-mscs621-devin

## Introduction

This is a simple web application that utilizes the Watson Visual Recognition API in a single page PHP webapp to demonstrate how containers can be used to deploy web applications that utilize cloud-based APIs.

## Deployment
The webapp is deployed using the official PHP Apache docker container and runs a simple PHP file as the application. Steps to download and deploy application are below.
```
git clone https://github.com/dtoverington/marist-mscs621-devin.git

docker run --rm -p 8080:80 -v $(pwd)/marist-mscs621-devin/htdocs:/var/www/html php:apache
```
Go to [Host IP Address]:8080 and you should see the application webpage

## Architecture diagram

The project is made up of two primary components. First, the Amazon AWS EC2 virtual server that is running the container with the web application and second, the IBM cloud Watson Visual Recognition APIs. The server utilizes an Apache/PHP based docker container to execute the application and communicate with the IBM API over the Internet. I also have another instance of the same application running on a local virtual server that connects to the same IBM API.

![Architecture Diagram Image](https://github.com/dtoverington/marist-mscs621-devin/raw/master/docs/images/Cloud_Computing_Final_Project_Diagram.png)