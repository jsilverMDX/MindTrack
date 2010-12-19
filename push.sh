#!/bin/bash
echo '...adding all...'
git add .
echo 'Enter your commit message (No strange characters!)'
read commitmessage
echo '...committing...'
git commit -am "$commitmessage"
echo 'pulling before pushing to merge'
git pull origin master
echo '...pushing...'
git push origin master
if [ "$1" = "deploy" ]; then
echo '...pulling remotely...'
ssh www-data@mindynamics.com /srv/www/mindynamics.com/pull.sh
fi
