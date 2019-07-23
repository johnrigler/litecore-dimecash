unspendable() {

~/unspendable/unspendable.py $*

}
# User specific aliases and functions
alias php=/usr/local/php70/bin/php

. ~/alp/alp.bash

export _DC_DIR=~/dimecash
export _DC_LIB=$DC_DIR/php_library
export _DC_SRC=$DC_DIR/dc.bash
export _DC_WEB=~/public_html


dc.env()  {

env | grep "_DC_"

}
