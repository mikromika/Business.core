#!/bin/bash
git add .
git status
git commit -m -i status-pull
git checkout master
git pull remote master && clear
