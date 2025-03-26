### DY-architecture shop

##### install
* Put the content under MAMP installation, e.g.: `/Applications/MAMP/htdocs/my_proj`
* Run the following commands:
```bash
cd /Applications/MAMP/htdocs/my_proj
export PHP_VERSION=8.1.31
export PATH=/Applications/MAMP/Library/bin:/Applications/MAMP/bin/php/php${PHP_VERSION}/bin:$PATH

php artisan migrate
php artisan serve
npm run dev
```
