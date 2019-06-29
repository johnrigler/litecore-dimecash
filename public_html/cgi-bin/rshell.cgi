#!/bin/bash -r
echo "Content-type: text/html"
echo

this.is.fun() {

: this is excuted via a the bash shell
: it will verify and only run if it-s
: hash in on the allowed list. 
date
}

echo "<pre>"
declare -f this.is.fun

declare -f this.is.fun | sum

echo "</pre>"
