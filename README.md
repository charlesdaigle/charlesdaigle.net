# charlesdaigle.net

## Getting Started

First, clone this repository. Make sure

To develop in this codebase, install the following tools:
### [MAMP](https://www.mamp.info/en/downloads/)
Note: this site uses PHP version 7.4.1. To configure MAMP for this version of PHP, [use this tutorial.](https://stackoverflow.com/questions/16783558/how-can-i-add-additional-php-versions-to-mamp)

To use MAMP, either run it from Windows or use the [start_mamp_scss.sh](https://github.com/charlesdaigle/charlesdaigle.net/blob/a55d07655c5a3a267f08e6d6142802ce3784d237/start_mamp_scss.sh) (discussed later).

Make sure to point 



### Optional: SASS --> CSS Autocompiler
The script [start_mamp_scss.sh](https://github.com/charlesdaigle/charlesdaigle.net/blob/a55d07655c5a3a267f08e6d6142802ce3784d237/start_mamp_scss.sh) both starts MAMP and opens a change-watcher. 

The change watcher allows the user to edit [/scss/styles.scss](https://github.com/charlesdaigle/charlesdaigle.net/blob/a55d07655c5a3a267f08e6d6142802ce3784d237/start_mamp_scss.sh), and each time the file is saved, compiles the SCSS to standard CSS (readable by the browser). Do **not** directly edit the file /css/styles.css!

To download 