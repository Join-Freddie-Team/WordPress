#!/bin/bash

MYDIR=jf-wordpress
MYZIP=$MYDIR-5.8.1_w3total.zip

cd ../
rm cms
ln -s $MYDIR cms
zip -r $MYZIP cms/*
cd $MYDIR
zip -r ../$MYZIP .ebextensions .platform

