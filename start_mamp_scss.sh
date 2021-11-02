#!/bin/bash

echo "Starting MAMP..."
/mnt/c/MAMP/MAMP.exe &
echo "Starting Sass..." &
sass --watch --poll scss:css
