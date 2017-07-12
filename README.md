# Sinri Version Aliyun Open API SDK

`composer require sinri/aliyun-openapi-php-sdk`

Make it available with Composer/Packagist.

这是一个经过魔改的阿里云公开接口，支援在composer上安装。
消灭了对时区的恶心修改。
加上了对AliDNS的autoload.

# Open API SDK for php developers

## Requirements

- PHP 5.3+

## Build

- to run unit tests, you will have to configure aliyun-sdk.properties files in your user directory, and make sure your project has corresponding service enabled, eg. openmr.

## Example

```php
include_once '../aliyun-php-sdk-core/Config.php';
use Ecs\Request\V20140526 as Ecs;

$iClientProfile = DefaultProfile::getProfile("cn-hangzhou", "<your accessKey>", "<your accessSecret>");
$client = new DefaultAcsClient($iClientProfile);

$request = new Ecs\DescribeRegionsRequest();
$request->setMethod("GET");
$response = $client->getAcsResponse($request);
print_r($response);
```
## Authors && Contributors

- [Zuhe]()
- [Ma Lijie](https://github.com/malijiefoxmail)

## License

licensed under the [Apache License 2.0](https://www.apache.org/licenses/LICENSE-2.0.html)
