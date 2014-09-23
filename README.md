# neelabhgupta.com
My personal website at [neelabhgupta.com](http://neelabhgupta.com/).
Built in PHP and uses the [Gumby Framework](http://gumbyframework.com/).

## Set up Gumby
* [Install Ruby](http://gumbyframework.com/docs/#!/installing-ruby).

* [Install Gem dependencies](http://gumbyframework.com/docs/#!/gem-dependencies):  
```
$ gem install compass modular-scale sass
```

* Install [Claymate](http://gumbyframework.com/docs/claymate/#!/installation):  
```
$ npm install -g claymate
```

## Set up FTP deployment
* [Install git-ftp](https://github.com/git-ftp/git-ftp/blob/releases/0.9.x/INSTALL.md)

* Set up the FTP config for git-ftp:  
```
$ git config git-ftp.url ftp.neelabhgupta.com/public_html/
$ git config git-ftp.user <ftp_username>
$ git config git-ftp.password <ftp_password>
```

* Initialize git-ftp on FTP site, if not done already:  
```
$ git ftp init
```

## Development

* PHP has a [built-in](http://php.net/manual/en/features.commandline.webserver.php) web server for development:  
```
$ php -S localhost:8000
```

* Compile Sass:  
```
$ compass compile
```

* Watch changes to Sass files and compile automatically:  
```
$ compass watch
```

* Build JS files (configured in `gumby.json`):  
```
$ claymate build
```

* Deploy:  
```
$ git ftp push
```

## Licence
(c) 2014, Neelabh Gupta
