#Overview

This package contains the unit tests for the jim-moser/zf2-validators-empty-or 
package. The unit tests were separated from the zf2-validators-empty-or package 
to make it easier for the package user to select whether they want to install 
the unit tests or not. This also makes it easier to uninstall only the tests at 
a later time if desired.

This package depends on the zf2-validators-empty-or 
package so adding this package to the "require" field of a composer.json file 
will instruct Composer to install both this package and the 
zf2-validators-empty-or package.

Related packages:
	jim-moser/zf2-validators-empty-or
	jim-moser/zf2-validators-empty-or-test
	jim-moser/zf2-validators-empty-or-plugin
	jim-moser/zf2-validators-empty-or-plugin-test
	
A brief description of the related packages listed above can be found in the 
README.md file for the jim-moser/zf2-validators-empty-or package available at 
[Github] (https://github.com/jim-moser/zf2-validators-emtpy-or/README.md). 

<dl>
	<dt>jim-moser/zf2-validators-empty-or</dt>
	<dd><p>Base package containing EmptyValidator, OrChain, and VerboseOrChain
		validators for Zendframework 2. Does not use the Zend Framework module 
		manager to provide configuration to the validator plugin manager.</p>
		
		<p>This package has the fewest	dependencies. Depends directly only on 
		zendframework/zend-validator and zendframework/zend-stdlib.</p>
		
		<p>The zendframework/zend-validator package has dependencies on 
		zendframework/zend-servicemanager and zendframework/zend-i18n which are 
		not listed in its' composer.json file. These dependencies are needed  
		only if using the validator plugin manager 
		(Zend/Validator/ValidatorPluginManager). If your application uses the 
		validator plugin manager then you should either add these dependencies 
		to your application's composer.json file or use the 
		jim-moser/zf2-validators-empty-or-plugin instead of the 
		jim-moser/zf2-validators-empty-or package.</p>
		
		<p>The JimMoser\OrChain and	JimMoser\VerboseOrChain classes use the 
		validator plugin manager to add validators by name. For example, the 
		code below used the validator plugin manager to create an instance of 
		the Zend/Validators/NotEmpty class.</p>
		
			$orChain = new \JimMoser\OrChain();
			$orChain->attachByName('NotEmpty');
			
	</dd>
	<dt>jim-moser/zf2-validators-empty-or-test</dt>
	<dd><p>Package containing unit tests for 
		jim-moser/zf2-validators-empty-or package.</p>
		
		<p>Depends directly only on jim-moser/zf2-validators-empty-or, 
		zendframework/zend-servicemanager, and phpunit/phpunit.</p>
	</dd>
	<dt>jim-moser/zf2-validators-empty-or-plugin</dt>
	<dd>
		<p>This package adds a Module.php file which is used to add 
		configuration for the Zend Framework 2 validator plugin manager. This 
		configuration allows the plugin manager to return instances of the 
		EmptyValidator, OrChain, and VerboseOrChain validators given strings 
		containing their names.</p>
		
		<p>This package depends directly on jim-moser/zf2-validators-empty-or, 
		zendframework/zend-modules, zendframework/zend-servicemanager, and 
		zendframework/zend-i18n. However it appears that zend-modules or its' 
		dependencies has many dependencies on various zendframework packages not 
		specified in their composer.json files. Thus in practice using 
		jim-moser/zf2-validators-empty-or-plugin requires a dependency on 
		zendframework/zendframework.</p>
	</dd>
	<dt>jim-moser/zf2-validators-empty-or-plugin-test</dt>
	<dd><p>Package containing unit tests for
		jim-moser/zf2-validators-empty-or-plugin package.</p>
		
		<p>Depends directly only on jim-moser/zf2-validators-empty-or-test, 
		jim-moser/zf2-validators-empty-or-plugin, and 
		zendframework/zendframework.</p>
	</dd>
</dl>

#Installation

##Alternative 1: Installation with Composer

1. Move to desired installation directory.

	To install into an existing Zend Framework 2 installation that was installed 
	using Composer, locate the `composer.json` file located in the directory 
	containing the vendor directory and move into that directory. 
	
	Otherwise if creating a new installation, move into the directory that you  
	would like to contain the vendor directory.

		$ cd <parent_path_of_vendor>	
	
2. Use composer to update the composer.json file and install the 
	jim-moser/zf2-validators-empty-or-test package and its dependencies.

		$ composer require jim-moser/zf2-validators-empty-or-test
	
This should first update the composer.json file and then install the 
zf2-validators-empty-or package into the 
vendor/jim-moser/zf2-validators-empty-or directory, install the 
zf2-validators-empty-or-test package into the 
vendor/jim-moser/zf2-validators-empty-or-test directory, and update the 
composer autoloading files (vendor/composer/autoload_classmap.php and/or 
autoload_psr4.php) such that the added validators should now be accessible from 
within your Zend Framework application.

##Alternative 2: Manual Installation to Vendor Directory

If you would like to install the packages manually and use a Module.php file to 
configure autoloading instead of using Composer to configure autoloading then 
use the jim-moser/zf2-validators-empty-or-plugin-test package instead of this 
package. Follow the instructions in the README.md file of that package.

#Unit Testing

After installation unit testing can be run immediately from the 
vendor/jim-moser/zf2-validators-empty-or-test directory as follows:

	$ cd <vendor_directory>/jim-moser/zf2-validators-empty-or-test
	$ php ../../phpunit/phpunit/phpunit

The second command above calls phpunit from the phpunit package installed under 
the vendor directory instead of any phpunit executable which may be installed 
systemwide. This is done to ensure the version of PHPUnit executed is one that 
meets the version requirements specified in the composer.json file.