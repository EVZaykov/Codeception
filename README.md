# Test for yandex video service
### Preparation
You have two ways for run this test:

  - Docker
  - On your machine
### Docker
Need install docker for your OS:
https://www.docker.com/get-docker
It be do next:
Launch docker
Clear output directory

rm -rf tests/_output

Run tests in docker

docker-compose run codecept build

docker-compose run codecept run acceptance -vv --html=report.html

Stop docker

docker-compose kill -s SIGINT


### On your machine
You must do next:

Remove from tests/acceptance.suite.yml line host: chrome

Install codeception from composer.json

Add to project path selenium server

http://www.seleniumhq.org/download/

Add to project path chrome driver

https://sites.google.com/a/chromium.org/chromedriver/downloads

Run selenium server by command:

java -jar selenium-server-standalone-3.5.3.jar

Run tests by codecept, for example if your codeception in vendor folder:

vendor/codeception/codeception/codecept run acceptance -vv
