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

* [jim-moser/zf2-validators-empty-or](https://github.com/jim-moser/zf2-validators-empty-or/)
* [jim-moser/zf2-validators-empty-or-test](https://github.com/jim-moser/zf2-validators-empty-or-test/)
* [jim-moser/zf2-validators-empty-or-plugin](https://github.com/jim-moser/zf2-validators-empty-or-plugin/)
* [jim-moser/zf2-validators-empty-or-plugin-test](https://github.com/jim-moser/zf2-validators-empty-or-plugin-test/)
	
A brief description of the related packages listed above can be found in the 
README.md file for the 
[jim-moser/zf2-validators-empty-or](https://github.com/jim-moser/zf2-validators-empty-or/) 
package. 

#Installation

##Alternative 1: Installation with Composer

1. For an existing Zend Framework installation, move into the parent of the 
	vendor directory. This directory should contain an existing composer.json 
	file. For a new installation, move into the directory you would like to 
	contain the vendor directory.
	
		$ cd <parent_path_of_vendor>	
	
2. Run the following command which will update the composer.json file, install 
	the zf2-validators-empty-or-plugin-test package and its dependencies into 
	their respective directories under the vendor directory, and update the 
	composer autoloading files.

		$ composer require jim-moser/zf2-validators-empty-or-test
	
##Alternative 2: Manual Installation to Vendor Directory

If you would like to install the packages manually and use a Module.php file to 
configure autoloading instead of using Composer to configure autoloading then 
use the [jim-moser/zf2-validators-empty-or-plugin-test](https://github.com/jim-moser/zf2-validators-empty-or-plugin-test/) 
package instead of this package. Follow the instructions in the README.md file 
of that package.

#Unit Testing

After installation unit testing can be run immediately from the 
vendor/jim-moser/zf2-validators-empty-or-test directory as follows:

	$ cd <vendor_directory>/jim-moser/zf2-validators-empty-or-test
	$ ../../phpunit/phpunit/phpunit

The second command above calls phpunit from the phpunit package installed under 
the vendor directory instead of any phpunit executable which may be installed 
system wide. This is done to ensure the version of PHPUnit executed is one that 
meets the version requirements specified in the composer.json file.