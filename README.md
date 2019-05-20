


DimeCash forks its basic functionality from litecore.  I call it a language coin because it exploits some simple tricks to create records that are at times readable easily from the ledger.  Basically, a special 5-8 digit code (Advanced Satoshi Code)
is used in conjunction with an obviously unspendable address to write a message.  If, for example a zip code were sent, then one might surmise it as such.  All manner of codes (including octal systems) can achieve different goals.

Transactions can be based on a secret function which is at first addressed as its sum send to an unspendable address.  When the function executes successful, it will generate a second hash.  Any nodes that have the secret stored as a bash function on their local drives would be able to confirm the transaction and direct the previously unspendable funds.


Example: 
```
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
```
So a transaction of $X.00047358 send to an unspendable address 
something like DCFUNTiMESXXXXXXXXXXXXXXXferbre would be seen as going to an 
unspendable address.  

If some actually sends a large sum, then they may inadvertently 
lose their funds.  For this reason, dimecash will award one entire diamond (its token) once a whole diamond has been essentially burned.   Special codes must be sent to actually use proof-of-burn in a way that doesn't trigger this.

The question of what an obviously unspendable address actually consists of is going to be necessary to understand and deal with.

The name is Derrived from James Joyce's largely unread masterpiece-- Finnegans Wake: 

https://www.trentu.ca/faculty/jjoyce/fw-150.htm

```
      Professor Loewy-Brueller (though as I shall promptly prove	15
his whole account of the Sennacherib as distinct from the Shal-	    16
manesir sanitational reforms and of the Mr Skekels and Dr           17
Hydes problem in the same connection differs toto coelo from the	18
fruit of my own investigations  --   though the reason I went to	19
Jericho must remain for certain reasons a political secret      	20
especially as I shall shortly be wanted in Cavantry, I congratulate	21
myself, for the same and other reasons   --   as being again hope-	22
lessly vitiated by what I have now resolved to call the dime and	23  <-- dime 
cash diamond fallacy) in his talked off confession which recently	24  <-- cash diamond
met with such a leonine uproar on its escape after its confinement	25

```

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
