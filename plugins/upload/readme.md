# Upload Plugin v0.1 #

A CakePHP plugin that will upload multiple types of files. 

## Requirements ##

* CakePHP 1.3.x
* PHP 5.2.x, 5.3.x

## Features ##

Uploads file to Amazon S3

## Example Usuage ##

    <?php

    class ImagesController extends AppController {
  
      var $name = 'Images';
      var $components = array('Upload.Upload');
  
      function avatar () {
        if (!empty($this->data)) {
          $url = $this->Upload->put($this->data['Model']['field'], 'your_bucket');
        }
      }
    }

## Installation ##

1. Clone the repo into a folder called "upload" within your plugins directory.
2. rename config/config.default to config/config.php and put your access and secret key
