DimeCash forks is basic functionality from litecore.  It adds in functionality that attempts to interpret its unspent addresses as bash fuctions and will release funds given a hashed paring.  It uses johnrigler/unspendable.  DimeCash also will initialize and continue to add empty transactions as addresses of other cryptocurrencies change.  This allows it to have a great understanding of how to do atomic swaps.  

Transactions are based on a secret function which is at first addressed as its sum send to an unspendable address.  When the function executes successful, it will generate a second hash.  Any nodes that have the secret stored as a bash function on their local drives would be able to confirm the transaction and direct the previously unspendable funds.


Example: 

bash-3.2$ Fun.Times() {
############################################
# None of this will get executed
# And will not be part of the hash
############################################
: This is a comment that will not disappear 
pwd
}
bash-3.2$ declare -f Fun.Times
Fun.Times () 
{ 
    : This is a comment that will not disappear;
    pwd
}

bash-3.2$ declare -f Fun.Times | sum
47358 1

So a transaction of $X.00047358 send to an unspendable address 
something like DCFUNTiMESXXXXXXXXXXXXXXXferbre would be release back 
30% to the sender and 70% to the recipient after two weeks or 
make a different transaction as specified in a bash function.

The cksum of the function would then become the key to releasing the funds
unless otherwise specified

declare -f Fun.Times | cksum | cut -c 1-8
14684603

Solution is transaction of 0.14684603 to unlock.


Litecoin Core integration/staging tree
=====================================

[![Build Status](https://travis-ci.org/litecoin-project/litecoin.svg?branch=master)](https://travis-ci.org/litecoin-project/litecoin)

https://litecoin.org

What is Litecoin?
----------------

Litecoin is an experimental digital currency that enables instant payments to
anyone, anywhere in the world. Litecoin uses peer-to-peer technology to operate
with no central authority: managing transactions and issuing money are carried
out collectively by the network. Litecoin Core is the name of open source
software which enables the use of this currency.

For more information, as well as an immediately useable, binary version of
the Litecoin Core software, see [https://litecoin.org](https://litecoin.org).

License
-------

Litecoin Core is released under the terms of the MIT license. See [COPYING](COPYING) for more
information or see https://opensource.org/licenses/MIT.

Development Process
-------------------

The `master` branch is regularly built and tested, but is not guaranteed to be
completely stable. [Tags](https://github.com/litecoin-project/litecoin/tags) are created
regularly to indicate new official, stable release versions of Litecoin Core.

The contribution workflow is described in [CONTRIBUTING.md](CONTRIBUTING.md).

The developer [mailing list](https://groups.google.com/forum/#!forum/litecoin-dev)
should be used to discuss complicated or controversial changes before working
on a patch set.

Developer IRC can be found on Freenode at #litecoin-dev.

Testing
-------

Testing and code review is the bottleneck for development; we get more pull
requests than we can review and test on short notice. Please be patient and help out by testing
other people's pull requests, and remember this is a security-critical project where any mistake might cost people
lots of money.

### Automated Testing

Developers are strongly encouraged to write [unit tests](/doc/unit-tests.md) for new code, and to
submit new unit tests for old code. Unit tests can be compiled and run
(assuming they weren't disabled in configure) with: `make check`

There are also [regression and integration tests](/qa) of the RPC interface, written
in Python, that are run automatically on the build server.
These tests can be run (if the [test dependencies](/qa) are installed) with: `qa/pull-tester/rpc-tests.py`

The Travis CI system makes sure that every pull request is built for Windows, Linux, and OS X, and that unit/sanity tests are run automatically.

### Manual Quality Assurance (QA) Testing

Changes should be tested by somebody other than the developer who wrote the
code. This is especially important for large or high-risk changes. It is useful
to add a test plan to the pull request description if testing the changes is
not straightforward.

Translations
------------

We only accept translation fixes that are submitted through [Bitcoin Core's Transifex page](https://www.transifex.com/projects/p/bitcoin/).
Translations are converted to Litecoin periodically.

Translations are periodically pulled from Transifex and merged into the git repository. See the
[translation process](doc/translation_process.md) for details on how this works.

**Important**: We do not accept translation changes as GitHub pull requests because the next
pull from Transifex would automatically overwrite them again.
