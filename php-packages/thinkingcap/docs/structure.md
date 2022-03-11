# Structure

```
└── thinkingcap
    ├── bin
    │   └── GenerateFiles.sh
    ├── .
    ├── .
    ├── src
    │   ├── .
    │   ├── .
    │   └── WebService
    │       ├── CourseManagement
    │       │   ├── Type
    │       │   │   ├── AccreditationDetails.php
    │       │   │   ├── Activity.php
    │       │   │   ├── .
    │       │   │   ├── .
    │       │   │   └── Xml.php
    │       │   ├── CourseManagement.wsdl
    │       │   ├── CourseManagementClassmap.php
    │       │   ├── CourseManagementSoapClient.php
    │       │   └── CourseManagementSoapClientConfig.php
    │       └── LearnerManagement
    │           ├── Type
    │           │   ├── AccreditationDetails.php
    │           │   ├── Activity.php
    │           │   ├── .
    │           │   ├── .
    │           │   └── Xml.php
    │           ├── LearnerManagement.wsdl
    │           ├── LearnerManagementClassmap.php
    │           ├── LearnerManagementSoapClient.php
    │           └── LearnerManagementSoapClientConfig.php
    ├── .
    └── .
```

## Folder 'src/WebService'

There are three web services in thinkingcap:

-   Domain Mangement
-   Course Management
-   Learner Management

Currently, we only support CourseManagement and LearnerManagement. Therefore, in `src/WebService`,
there are two related folders that contain all the auto generated files and also wsdl file for each web service
in the following structure:

```
    ├── Type
    ├── LearnerManagement.wsdl
    ├── LearnerManagementClassmap.php
    ├── LearnerManagementSoapClient.php
    └── LearnerManagementSoapClientConfig.php
```

In case of any changes from the thinking cap in its web services, only this folder will be affected.
More information about how we can [generate Client, ClassMap and Types](mapping.md)
