#!/bin/sh

while ! nc -w 1 -z 127.0.0.1 9000; do sleep 0.1; done;

/var/www/html/rr serve
