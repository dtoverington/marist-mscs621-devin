# Image Analyzer

## Introduction

This application is designed to leverage the power of the cloud to analyze images on the internet quickly and accurately. The single page PHP application requires only a lightweight docker container to run on a server while the heavy lifting is taken care of by IBM's Watson Visual Recognition API. The docker application can be deployed anywhere - from local physical servers to cloud based virtual machines around the world. 

## The Future of Cloud Applications

Cloud services have been around for many years but recently, with major improvements in computing power, Internet access, and overall accessibility, cloud services are becoming more and more the norm for application developers and mission critical business systems. While simple, this application scratches the surface of the power of these systems. In a very short amount of time, one can deploy this web application and start analyzing images on their own machine or a cloud vm. Container technology goes hand in hand with cloud computing and allows for much faster and fluid development styles. As developers, we no longer need to have multiple servers dedicated to testing, we can deploy multiple containers on a single server or VM and get the same result to the end user. In addition, development on a local machine becomes simpler by creating a simulated environment that can perfectly mimic the production systems. From a business standpoint, the move to cloud and container technologies means less resources in hardware, software, energy, and space to deploy and maintain applications. Cloud computing solves a lot of the barriers to entry that smaller companies experience when they need to start developing and deploying internal applications. Container technologies on top of the cloud further reduce TCO of the servers by allowing multiple applications to easily be put on the same systems.

## A Bit About the Application

The Image Analyzer is designed to explore, at a high level, what cloud computing and cloud APIs are capable of. This simple app takes the URL of an image on the Internet, passes it along to IBM's Watson Visual Recognition API, and returns to the user the most likely matches for the subject of the image. In the example below, the API was able to quickly identify that the subject was very likely an avocado.

Going beyond analyzing photos for avocado content, Cloud APIs such as IBM's Watson series have great potential for countless applications including many in business, government, nonprofit, and public safety and security. This is just the beginning of cloud services and what they can provide us and it will be very interesting to watch as the field grows stronger and more robust with time.

![Avocado Analysis](https://github.com/dtoverington/marist-mscs621-devin/raw/master/docs/images/AvocadoAnalysis.JPG)