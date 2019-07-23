unspendable() {

~/unspendable/unspendable.py $*

}
# User specific aliases and functions
alias php=/usr/local/php70/bin/php

. ~/alp/alp.bash

: Change this to point to the dimecash directory
export _DC_DIR=~/dimecash
export _DC_LIB=$_DC_DIR/php_library
export _DC_SRC=$_DC_DIR/dc.bash
export _DC_WEB=~/public_html


dc.env()  {

env | grep "_DC_"

}
