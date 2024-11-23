# module-yii2
### Module folder and structure for Yii2

@ Tags, Yii2, Module, Modules, Structure, Simplify, Logic, Tests, DDD, TDD

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

Why i have modules in common, using the advanced?

Because i use the mdmsoft/yii2-admin rbac

And on params.php

```
	/** To change the Users database external do main company database */
	'mdm.admin.configs' => [
		'userDb' => 'dbusers',
		'menuTable' => 'menu',
		'advanced' => [
			'app-backend' => [
				'@common/config/main.php',
				'@common/config/main-local.php',
				'@backend/config/main.php',
				'@backend/config/main-local.php',
			],
			'app-frontend' => [
				'@common/config/main.php',
				'@common/config/main-local.php',
				'@frontend/config/main.php',
				'@frontend/config/main-local.php',
			],
			'app-funcionario' => [
				'@common/config/main.php',
				'@common/config/main-local.php',
				'@funcionario/config/main.php',
				'@funcionario/config/main-local.php',
			],
		],
	],
```
And with this config, in common are almost all the modules and still be used by others subApps and secured between 
Backend and Frontend

Not perfect bt it works and the main logic of each module, is all inside of it.

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
