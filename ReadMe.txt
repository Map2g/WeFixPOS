ReadMe
Instructions on how to use WeFix
CSI 3450
Made By: Gurnirunjun Shergill, Melissa Palmer, Alexander Wardia, Mario Saad

*********************************************************************************************************************************************************************************************************************************************
Run the project using an AWS Instance

In order to use AWS Services you will need to make an account. Once you have made the account you will be able to use all the services provided by AWS. You will need to navigate to cloud9. Here you will create the environment and begin to setup the instance. Once you have made the instance you will be able to pull the master branch from the repo. You will then be able to setup the database using the mysql dump we provided. In order to access the website you will need to allow all traffic on port 80 which can be set in the EC2 instance settings. The website will now be usable and can be reached with the public IP. The instructions below describe the steps in greater detail.

1. Go to https://aws.amazon.com/console/ and select sign into the console.
2. Select Create a new AWS account and begin to create your account, for information on how to do this refer to the documentation by amazon here: https://aws.amazon.com/premiumsupport/knowledge-center/create-and-activate-aws-account/
3. Select the Services button in the top navbar or search cloud9 in the search bar.
**At this point you should be able to see all your cloud9 environments**
4. Select the Create environment button.
**This should take you to a page where you will be given the option to name your new environment.
5. We suggest naming the environment WeFix, and you may make the description what you find appropriate. Select the Next Step button.
6. In order to create an environment that will meet the requirements for the website input the following:
Environment Type - Create a new instance for enviroment EC2
Intanec Type - t2.micro (1 GiB RAM + 1 vCPU)
Platform - Amazon Linux
Cost-saving Setting - After 30 minutes (default)
IAM role - AWSServiceRoleForAWSCloud9
6. Select Next step. This will take you to the finalization step, so if you are satisfied and have entered in everything correctly select the Create environment button.
**You will now be taken to the environment that you have created**
7. Using the terminal, use the command git clone https://github.com/Map2g/WeFixPOS
**You should now have the files from the master branch of the repo of this website.**
8. Once you have all the files in your instance you should see a file called WeFix.sql. This file contains the structure and the records inside the WeFix database.
9. In the terminal type sudo service mysqld start, and then type in a new line mysql -u root -p in order to enter the mysql terminal. 
10. Once you are in the mysql terminal, type CREATE DATABASE WeFix;
11. Type USE WeFix in order to start using the database. Then type SET autocommit=0; source WeFix.sql; COMMIT;
**These commands will copy the whole database from the file WeFix.sql in order to recreate the database in the instance you have created.**
12. Exit the mysql database by closing the terminal window or holding control and pressing c on your keyboard. In the terminal type sudo service httpd start.
**This will start the httpd service**
13. Exit the Cloud9 service and navigate to the EC2 service.
14. Click on running instances and select the security groups option on the left navbar. Then select the instance that you have created for the WeFix website.
15. Select the Inbound tab and select the edit button. Add the rule HTTP and leave all the fields as default, select save, and exit ec2.
16. Navigate to the running instances button on the left navbar and select the instance.
17. In the description in the bottom you will find the IPv4 Public IP which you can then use to navigate to the website.
**You will then be able to use the webiste as intended.**