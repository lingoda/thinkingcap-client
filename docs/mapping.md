# Generate Client, ClassMap and Types

We are using `phpro/soap-client` package to create thinkingcap soap client. This package generates the most of the
required classes to communicate with soap web services. [More information](https://github.com/phpro/soap-client)

In case of any changes from the thinking cap in its web services, we need to
regenerate the `Types`, the `Client` and the `ClassMap` for each web
services in `src/WebService` folder. More information about the thinkingcap package [structure](structure.md)

## What should be regenerated

We don't need to regenerate all the thing that `phpro/soap-client` package offers.
Only the following classes should be regenerated:

-   Types
-   Client
-   ClassMap

## Generate via the provided bash file:

We have provided a bash files including all the steps to generate the files.
To run it, run the following command in the root of the package:

```
bin/GenerateFiles.sh
```

## Generate manually:

If you want to generate the files manually, you need to follow these steps:

For example, we want to update the CourseManagement web service. So the only place that should be affected
is `src/WebService/CourseManagement`

1- Create the wsdl file:

Create `src/WebService/CourseManagement/CourseManagement.wsdl` file or download it via the following command:

```
curl -o src/WebService/CourseManagement/CourseManagement.wsdl https://www.lingoda.care/WebService/CourseManagement.asmx?WSDL
```

2- Install dev dependencies to have `laminas/laminas-code` package

```bash
composer install --dev
```

3- Generate the Types:

```bash
./vendor/bin/soap-client generate:types --config=src/WebService/CourseManagement/CourseManagementSoapClientConfig.php
```

4- Generate the Client

```bash
./vendor/bin/soap-client generate:client --config=src/WebService/CourseManagement/CourseManagementSoapClientConfig.php
```

5- Generate the ClassMap

```bash
./vendor/bin/soap-client generate:classmap --config=src/WebService/CourseManagement/CourseManagementSoapClientConfig.php
```
