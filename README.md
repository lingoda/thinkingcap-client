# Thinkingcap Bundle

Thinkingcap API integration for Symfony apps.

## Documentation

To start using this package, read the [documentation](docs/index.md).

## Installation

```bash
composer req lingoda/thinkingcap
```

### Bundle configuration

```yaml
# config/packages/thinkingcap.yaml

lingoda_thinkingcap:
    api_key: '...here comes the API key...'
    wsdl_urls:
        course_management: '...here comes the course management WSDL URL...'
        learner_management: '...here comes the learner management WSDL URL...'
```

TBR
