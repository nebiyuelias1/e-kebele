# e-kebele
E-Kebele is a system that automates the tasks that are done in the administrative kebeles.

## Requirements
* You can use [XAMP](https://www.apachefriends.org/index.html), [WAMP](http://www.wampserver.com/en/), [LAMP](https://bitnami.com/stack/lamp/installer) that contains everything needed for working on this project.
* Or if you prefer to install everything yourself, then you need the following for your OS:
  - [Apache](https://httpd.apache.org/)
  - [PHP](https://www.php.net/) version 5.6 or newer is recommended
  - [MySQL](https://www.mysql.com/) (5.1+)
  - [Git](https://git-scm.com/)
 *[Composer](https://getcomposer.org/doc/00-intro.md), which is a tool for dependency management in PHP. It allows you to declare the libraries your project depends on and it will manage (install/update) them for you.

## Steps to run this project
1. Clone this repository into your web servers root serving directory by using the Git **clone** command:
- git clone https://github.com/nebiyuelias1/e-kebele.git
2. Make sure Apache, PHP and MySQL are up and running.
3. Open your web browser and locate to: http://localhost/e-kebele/
4. Whenever you want to see the Code Igniter Guide go to: http://localhost/e-kebele/user_guide/

## Development Workflow
1. Whenever you are working on a task, it's better to create a separate branch of the master branch. While you are on the master branch you can use the following git command to create a new branch: 
  * ```git branch branch-name``` Replace branch-name with your a branch name of your chosing.
  * ```git checkout branch-name``` Use this command to check-out the new branch you just made.
2. After checking-out the new branch, make the necessary changes to the code base then make the necessary commits.
  * ```git commit -m "Your commit message"```
3. When you feel like you are done with the task given to you push your changes to Github:
  * ```git push```
4. Go to Github and create a Pull Request from the new branch to the master branch.

