# Zend Framwork 3 FlashMessenger 

![alt tag](https://raw.githubusercontent.com/juuce/laminas-flashmessenger/master/asset/screen-shot.png)

Register the module. (to be able to use the ViewHelper)

 **config/modules.config.php**

```php
'modules' => array(
    '...',
     'Laminas\Mvc\Plugin\FlashMessenger',
     'Juuce\Laminas\Flashmessenger'
),
```

## Installer

Add this to your layout.phtml file. Should already have inlineScript() so above that

```php
 <?php $this->FlashMsg(); ?>
 <?php echo $this->inlineScript() ?>
```
## **Utilisation**

Add for each message type<br/>
4 types available

```php
<?php
$this->flashMessenger()->addSuccessMessage('Sample success message');
$this->flashMessenger()->addErrorMessage('Sample error message');
$this->flashMessenger()->addInfoMessage('Sample Info message');
$this->flashMessenger()->addWarningMessage("Sample warning message");
```