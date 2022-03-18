# Structure

```
└── thinkingcap
    ├── bin
    │   └── GenerateFiles.sh
    ├── docs
    ├── spec
    ├── src
    │   ├── Client
    │   │   ├── ApiKeySetterSubscriber.php
    │   │   ├── CourseClientFactory.php
    │   │   └── LearnerClientFactory.php
    │   ├── DependencyInjection
    │   ├── Resources
    │   └── WebService
    │       ├── CourseManagement
    │       │   ├── Type
    │       │   │   ├── AccreditationDetails.php
    │       │   │   ├── Activity.php
    │       │   │   ├── .
    │       │   │   ├── .
    │       │   │   └── Xml.php
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
    │           ├── LearnerManagementClassmap.php
    │           ├── LearnerManagementSoapClient.php
    │           └── LearnerManagementSoapClientConfig.php
    └── tests
```

**Note:** To know how to use the package as an end-user, please see the [usage](usage.md) doc.

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
    ├── LearnerManagementClassmap.php
    ├── LearnerManagementSoapClient.php
    └── LearnerManagementSoapClientConfig.php
```

In case of any changes from the thinking cap in its web services, only this folder will be affected.
More information about how we can [generate Client, ClassMap and Types](mapping.md)
