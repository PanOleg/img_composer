Component for downloading images by URL
======================================

This is component for downloading images by URL from another servers.

Installation
------------
The preferred way to install the component is through [composer](https://getcomposer.org/download/).

Either run
```
composer require ok/image-downloader-from-url
```
or add
```json
"ok/image-downloader-from-url": "dev-master"
```
to the require section of your composer.json.

Using
-----
Create component instance
```php
$downloader = new \ok\tools\ImageDownloader([
    'class' => \ok\tools\validators\ImageValidator::class
]);
```
in array you should specify the validator class. It used for validation of downloaded files.
If you don't want run validation, you can use a `\ok\tools\validators\FakeValidator::class`.

Then you should call method for downloading
```php
$downloader->download($url, $imagesRoot, $file_name);
```
this method takes as agruments: URL to image, path to catalog where file will be saved and name for downloaded file.