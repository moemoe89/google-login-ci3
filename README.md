# google-login-ci3
Google Login with Codeigniter 3

## Demo
> https://google-login-ci3.herokuapp.com/

change
```
$config['googleplus']['application_name'] = '';
$config['googleplus']['client_id']        = '';
$config['googleplus']['client_secret']    = '';
$config['googleplus']['redirect_uri']     = '';
$config['googleplus']['api_key']          = '';
$config['googleplus']['scopes']           = array();
```

on application->config->googleplus.php with your key and configuration

the $config['googleplus']['redirect_uri']     = ''; is callback url for authenticate user info..in my case i put authenticate in Welcome controller and index function..so for example my redirect uri is :
```
$config['googleplus']['redirect_uri']     = 'http://localhost/my_directory/';
```

## Tutorial based on
> http://www.9lessons.info/2012/09/login-with-google-account-oauth.html
