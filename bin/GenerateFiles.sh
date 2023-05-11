#!/bin/bash

# We are using `phpro/soap-client` package to create thinkingcap soap client.
# This package generates the most of the required classes to communicate with soap web services.

courseFolder=src/WebService/CourseManagement
learnerFolder=src/WebService/LearnerManagement
bold=$(tput bold)
normal=$(tput sgr0)


# Steps to generates the files:

# 1- Provide WSDL files:
courseWsdlUrl=https://lingoda.thinkingcap.com/WebService/CourseManagement.asmx?WSDL
learnerWsdlUrl=https://lingoda.thinkingcap.com/WebService/LearnerManagement.asmx?WSDL
while true; do
    read -p "${bold}Choose yes to download the WSDL files, or no to use the existing files [Y|n]? ${normal}" answer
    answer=${answer:-Y}
    case $answer in
        [Yy]* ) echo "- Downloading the WSDL files ..."$'\n'; curl --silent -o $courseFolder/CourseManagement.wsdl $courseWsdlUrl; curl --silent -o $learnerFolder/LearnerManagement.wsdl $learnerWsdlUrl; break;;
        [Nn]* ) break;;
        * ) echo "Please answer y or n.";;
    esac
done

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
      read -p "${bold}The previous generated files were detected, do you want to overwrite them [Y|n]? ${normal}" answer
      answer=${answer:-Y}
      case $answer in
          [Yy]* ) rm -rf $courseFolder/Type/* $learnerFolder/Type/* $courseClassMapFile $courseClientFile $learnerClassMapFile $learnerClientFile; break;;
          [Nn]* ) exit;;
          * ) echo "Please answer y or n.";;
      esac
  done
fi

# 3- Generate the Types:
echo "- Generating Types ..."
./vendor/bin/soap-client generate:types --config=$courseFolder/CourseManagementSoapClientConfig.php --quiet
./vendor/bin/soap-client generate:types --config=$learnerFolder/LearnerManagementSoapClientConfig.php --quiet

# 4- Generate the Client
echo "- Generating Clients ..."
./vendor/bin/soap-client generate:client --config=$courseFolder/CourseManagementSoapClientConfig.php --quiet
./vendor/bin/soap-client generate:client --config=$learnerFolder/LearnerManagementSoapClientConfig.php --quiet

# 5- Generate the ClassMap
echo "- Generating ClassMaps ..."
./vendor/bin/soap-client generate:classmap --config=$courseFolder/CourseManagementSoapClientConfig.php --quiet
./vendor/bin/soap-client generate:classmap --config=$learnerFolder/LearnerManagementSoapClientConfig.php --quiet

# 6- Fix code style
echo "- Fixing end of the files ..."
pre-commit run end-of-file-fixer --files $courseFolder/CourseManagement.wsdl $learnerFolder/LearnerManagement.wsdl > /dev/null
echo "- Mixing line ending ..."
pre-commit run mixed-line-ending --files $courseFolder/CourseManagement.wsdl $learnerFolder/LearnerManagement.wsdl > /dev/null
echo "- EasyCodingStandard is running ..."
../../linters/vendor/bin/ecs check src/WebService/ --fix --config=../../linters/ecs.php  --quiet

echo $'\n'"${bold}Completed successfully.${normal}"$'\n'
