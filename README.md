### Prerequisites : 

October prerequisites : 

    PHP version 7.0 or higher
    PDO PHP Extension
    cURL PHP Extension
    OpenSSL PHP Extension
    Mbstring PHP Library
    ZipArchive PHP Library
    GD PHP Library


### Installation

- Clone the repository 

- Import the database from /database

- Run this command and follow the instructions:

```shell
php artisan october:install
```
- Run : 
```shell
sudo chmod -R 777 storage
```
- Set up yur localhost to point to the folder's root, and go to your localhost. For some still unknown reasons I needed to go to <b> [localhost]/index.php </b>, so you might need to add /index.php to the next localhost tags
  
  The  admin interface is located at [localhost]/backend 
  <br>
  username : admin 
  <br>
  
  password : admin 
  
  
### Check plugin : 
  
  
- You can enable/ disable plugins from here :  

   [localhost]/backend/system/updates/manage
   
- And see the " it works " page from [localhost]/simplon

The plugins files are in plugin/simplon/evaluation

### Theme : 

The theme's files are in theme/evaluation

#### Plugin installation : 

I installed : https://github.com/rainlab/blog-plugin . 
Its a plugin providing better ressources to create a blog 

