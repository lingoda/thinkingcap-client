#!/bin/bash

# We are using `phpro/soap-client` package to create thinkingcap soap client.
# This package generates the most of the required classes to communicate with soap web services.

courseFolder=src/WebService/CourseManagement
learnerFolder=src/WebService/LearnerManagement
bold=$(tput bold)
normal=$(tput sgr0)


# Steps to generates the files:

# 1- Download the wsdl file:
echo "${bold}Downloading the WSDL files ...${normal}"$'\n'
curl -o $courseFolder/CourseManagement.wsdl https://lingoda.thinkingcap.com/WebService/CourseManagement.asmx?WSDL
curl -o $learnerFolder/LearnerManagement.wsdl https://lingoda.thinkingcap.com/WebService/LearnerManagement.asmx?WSDL
echo $'\n'"${bold}Downloading the WSDL files completed.${normal}"$'\n'

## 2- Check if the previous files are not exist
shopt -s nullglob       # don't return literal glob if matching fails
shopt -s dotglob        # make * match "almost all" like ls -A

courseClassMapFile=$courseFolder/CourseManagementClassmap.php
courseClientFile=$courseFolder/CourseManagementSoapClient.php
learnerClassMapFile=$learnerFolder/LearnerManagementClassmap.php
learnerClientFile=$learnerFolder/LearnerManagementSoapClient.php

set -- $courseFolder/Type/* $learnerFolder/Type/*

if [[ $# > 0 || -f $courseClassMapFile || -f $courseClientFile || -f $learnerClassMapFile || -f $learnerClientFile ]]
then
  while true; do
      read -p "${bold}The previous files were detected, do you want to overwrite them [y|N]? ${normal}" answer
      answer=${answer:-N}
      case $answer in
          [Yy]* ) rm -rf $courseFolder/Type/* $learnerFolder/Type/* $courseClassMapFile $courseClientFile $learnerClassMapFile $learnerClientFile; break;;
          [Nn]* ) exit;;
          * ) echo "Please answer y or n.";;
      esac
  done
fi

# 3- Generate the Types:
./vendor/bin/soap-client generate:types --config=$courseFolder/CourseManagementSoapClientConfig.php
./vendor/bin/soap-client generate:types --config=$learnerFolder/LearnerManagementSoapClientConfig.php

# 4- Generate the Client
./vendor/bin/soap-client generate:client --config=$courseFolder/CourseManagementSoapClientConfig.php
./vendor/bin/soap-client generate:client --config=$learnerFolder/LearnerManagementSoapClientConfig.php

# 5- Generate the ClassMap
./vendor/bin/soap-client generate:classmap --config=$courseFolder/CourseManagementSoapClientConfig.php
./vendor/bin/soap-client generate:classmap --config=$learnerFolder/LearnerManagementSoapClientConfig.php

echo $'\n'"${bold}Completed successfully.${normal}"$'\n'
