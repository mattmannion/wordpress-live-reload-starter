#!/bin/bash

cd mu-plugins
mkdir -p ../../../mu-plugins &&
sleep 1 &&
rm -rf ../../../mu-plugins/*.php &&
cp *.php ../../../mu-plugins

echo 'plugins cloned'