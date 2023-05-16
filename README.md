# charlesdaigle.net

## Getting Started

First, clone this repository. Make sure you have access to a text editor and some way to run programs (a mix of command line and Windows should be fine). I used [WSL2](https://learn.microsoft.com/en-us/windows/wsl/install), which is a great way to work on Windows filesystems through a bash shell, although any bash shell will do.

To develop in this codebase, install the following tools:
### [MAMP](https://www.mamp.info/en/downloads/)
Note: this site uses PHP version 7.4.1. To configure MAMP for this version of PHP, *[use this tutorial.](https://stackoverflow.com/questions/16783558/how-can-i-add-additional-php-versions-to-mamp)*

To use MAMP, either run it from Windows or use the *[start_mamp_scss.sh](https://github.com/charlesdaigle/charlesdaigle.net/blob/a55d07655c5a3a267f08e6d6142802ce3784d237/start_mamp_scss.sh)* (discussed later).

+ Click Preferences.
+ Under the Start/Stop tab, make sure the option to "Start Servers when running MAMP" is checked. Feel free to uncheck "Check for MAMP Pro when Starting MAMP" too.
+ Under Ports, click "Set Web and MySQL ports to 80 and 3306".
+ Under PHP, make sure there is the option to use 7.4.1. If its not available, you most likely need to make sure that "php7.4.1" is the highest version number in the MAMP install directory (most likely *C:\MAMP\bin\php*).
+ Make sure to point MAMP to the "public" folder (that is, the root folder of this repository containing *[/index.php](https://github.com/charlesdaigle/charlesdaigle.net/blob/bf764f8634a064effc3bd8d46293021d27596918/index.php))*.

### Optional: SASS --> CSS Autocompiler
#### Do **not** directly edit the file /css/styles.css unless you plan to skip this step. Editing CSS will be a little messier than using SCSS, but works out of the box.
The script *[start_mamp_scss.sh](https://github.com/charlesdaigle/charlesdaigle.net/blob/a55d07655c5a3a267f08e6d6142802ce3784d237/start_mamp_scss.sh)* both starts MAMP and opens a change-watcher.

The change watcher allows the user to edit *[/scss/styles.scss](https://github.com/charlesdaigle/charlesdaigle.net/blob/a55d07655c5a3a267f08e6d6142802ce3784d237/start_mamp_scss.sh)*, and each time the file is saved, compiles the SCSS to standard CSS (readable by the browser). 

To download SASS, use their [recommended instructions](https://sass-lang.com/install) for your platform.

## Running the In-Browser Preview
Run MAMP as described before. Make sure the "Apache Server" light is green.

Type "localhost" into your browser.

You should now see your page.

## Using PHP
With all existing PHP files, debugging should already be working.

At the top of any new *.php* file you create, use the following lines of code:
```php
<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); ?>
```

This will throw debug messages (with line numbers) into any bad PHP code. This allows the page to still load even with errors.

Any file that includes *[/head.php](https://github.com/charlesdaigle/charlesdaigle.net/blob/bf764f8634a064effc3bd8d46293021d27596918/head.php)* implements the following debugging tool:

```php
<?php
    // Used for debugging
    function console_log( $data ){
      echo '<script>';
      echo 'console.log('. json_encode( $data ) .')';
      echo '</script>';
    }

?>
```

Using this function to print out variable values serves very useful in PHP development.

To include PHP code from one file in another, use the following example code:
```php
<?php include_once './navbar.php'?>
<?php include_once './head.php'?>
.
.
.
<?php include './foot.php' ?>
```

This will check if the file is already included, and will include its contents on the current page. You can access public classes, functions, and render HTML code contained within any PHP file this way.



## Using JS
Any general JS scripts that you want to run on all pages should go into *[/foot.php](https://github.com/charlesdaigle/charlesdaigle.net/blob/bf764f8634a064effc3bd8d46293021d27596918/foot.php)* at the bottom.

## Plugins
[JQuery](https://api.jquery.com/), [CSS](https://developer.mozilla.org/en-US/docs/Web/CSS), and [animate.css](https://animate.style/) should already be usable as they are called via CDN in *[/head.php](https://github.com/charlesdaigle/charlesdaigle.net/blob/bf764f8634a064effc3bd8d46293021d27596918/head.php)* and *[/foot.php](https://github.com/charlesdaigle/charlesdaigle.net/blob/bf764f8634a064effc3bd8d46293021d27596918/foot.php)*.

Any JS plugin code should be stored in *[/js/](https://github.com/charlesdaigle/charlesdaigle.net/tree/bf764f8634a064effc3bd8d46293021d27596918/js)*.

## Writing Blog Posts
The file [/Parsedown.php](https://github.com/charlesdaigle/charlesdaigle.net/blob/e59495c537aed22fc3f00708a7dfed97d1e498ad/Parsedown.php) takes a Markdown file as input and renders it into HTML. 

However, you can embed much more content than just Markdown.

Use the file [/project_templates/.template.md]()




