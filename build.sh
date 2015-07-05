#!/bin/bash

WHERE=`pwd`

if [ -a .encoded ]; then
  TGZ_NAME="pslib-enc-1.0.0.tgz"
  DIR_NAME="pslib-enc"
else
  TGZ_NAME="pslib-1.0.0.tgz"
  DIR_NAME="pslib"
fi

cd ..
tar -cvz --exclude=OLD --exclude=*~ --exclude=CVS --exclude=.?* --exclude=np --exclude=.cvsignore -f $TGZ_NAME $DIR_NAME
cd $WHERE
