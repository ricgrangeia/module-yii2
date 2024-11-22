# module-yii2
### Module folder and structure for Yii2

Yii2 is MVC, but in big projects all get messy.

So, this is not new stuff, but to help who wants to simplify the structure of the code, making easier to work.

I use Yii2 Advanced but it should work on Yii2 Basic also

How to get everything working

My main structure

```
app .
    |-> frontend
    |-> backend 
    |-> common .
               |-> base
               |-> helpers
               |-> modules .
                           | -> All modules inside
    |-> console
    
```

Ex Module:
TaskManager

```
common/TaskManager -> Folder
common/TaskManager/ModuleTaskManager -> Module.php

ModuleTaskManager::t('module-taskmanager', 'ID') -> translation

the 'sourceLanguage' => 'en', -> common/base/Module
````

common/TaskManager -> Folder
common/TaskManager/ModuleTaskManager -> Module.php
ModuleTaskManager::t('module-taskmanager', 'ID'),

On my project, i only need to have the module inside common, the other where more simple

And to setup the main.php

- To add the module
  - common/config/main.php

    ```
    modules' => [
        ...
        'TemplateModule' => [ 'class' => \common\modules\TemplateModule\ModuleTemplate::class ],
    ],
    ```

if you need the console

- in console/config/main.php

  ```
  ...
      'bootstrap' => [
          ...
          'TemplateModule'
  
      ],
  ...
  ```

This way the will everything it needs even translation

To call the translation it should be like:
```
ModuleTemplate::t('module-moduletemplate', 'Notes'),
```

Hope help someone.
