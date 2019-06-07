<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
 <meta http-equiv="content-type" content="text/html;charset=UTF-8">
 <meta http-equiv="refresh" content="1000">
 <title>Dimecash</title>

</head>

<h1>Welcome to Dimecash! </h1>
<div>

TLDR, test this out: <a href=http://dime.cash/Doge/form.php > here. </a>
<hr>
This is the home of the dimecash project.  The goal is to fork litecoin into a new linguistic currency that exploits two curiosities of being an alt-coin. The first is that (unlike bitcoin) currencies such as Dogecoin can function and thrive in a certain niche, while being worth only a fraction of a penny each.  This allows for an system of Advances Satoshi Codes to be used to express complicated ideas with a series of up to eight (or potentially more) digits.  The second expoit which feeds into this system involves the Base58Check (base-58) numerical representation which is inherited from bitcoin. Finally, this site will bring the two elements together with the use of portable "secret" files that can contain a fair amount of text which a human could make sense of, and which can also always be reduced to various small hashes.
</div>
<h2>Dimecash Dilemma</h2>

<h3> Repurposing Obviously Unspendable proof-of-burn addresses </h3>
When someone creates a cryptocurrency wallet, what they are really doing is letting the computer randomly pick a very large number which is specially altered and then mathematically reduced into a smaller number.  But even the smaller number is quite large.  To make this number easier for people to deal with, an alphanumeric system is used. 

<pre>
Hash
----------------------------------
6DMzA8Vw8o91GKneBLehZp6Y29A75P2kY8
ZYAzeF4uNLMj68ziNKeMRvb4ZGBazawXd
UCa3wJJSB5Ywt2jaaFdsCxcNttqseHsAA6
AVhWW1eEvhjPtxbmVnyqsSdmChWNK2tVLu
</pre>

The last six characters in these sets refer back to the first, as a check system.  The addresses could be understood as two parts that are stuck together:

<pre>
Hash                         Check
---------------------------- ------
6DMzA8Vw8o91GKneBLehZp6Y29A7 5P2kY8
EZYAzeF4uNLMj68ziNKeMRvb4ZGB azawXd
UCa3wJJSB5Ywt2jaaFdsCxcNttqs eHsAA6
AVhWW1eEvhjPtxbmVnyqsSdmChWN K2tVLu
</pre>

The following addresses are also valid in that their hash and check are balanced together, but they are not "spendable". This means that money sent to these addresses will essentially be destroyed or "burned".  Readable addresses with messages this large are never spendable.

<pre>
Hash                         Check
---------------------------- ------
1bitcoineateraddressdontsend f59kue
DDogepartyxxxxxxxxxxxxxxxxxx w1dfzr
1CounterpartyXXXXXXXXXXXXXXX UWLpVr
</pre>

These human-readable addresses are created by short-circuiting the process in a way where the check can be figured out, but where no secret very large number is used.  No private key could exist to "unlock" these.  They can be understood to act as a monetary black-hole.  Because the world doesn't have anything close to the raw computing power necessary to process trillions of large numbers until one of these human-readable addresses were to be generated, these addresses can be understood to never have a private key.  These addresses are called Obviously Unspendable because of this. I would rather use a different name, however.  I will call them Public Anchors since they are impossible to own or regulate and can come into existence as soon as they are first referenced.
<p>
I became fascinated with this process and now use a python script to create DogeCoin Public Anchors. The script is available <a href=https://github.com/johnrigler/unspendable> here. </a>
<p>
As an avid fan of James Joyce, I immediately discovered the Anchors for the first paragraph of "Finnegans Wake" on the Dogecoin blockchain.  

<pre>
DCxxxRiVERRUNxPASTxEVExANDxxJ92X19
DCxxADAMkSyFRoMxSWERVExoFxxxHtXrfA
DCxxSHoRExxxToxBENDxoFxBAYxxCCJXLy
DCxBRiNGSxUSxBYxAxCoMMoDiUSx9gNhNy
DCViCUSxoFxRECiRCULATioNxxxxDTm2kZ
DCBACKxToxHoWTHxCASTLExxxxxxGBesZt
DCxxxxxANDxENViRoNSxxxxxxxxxD2nMSf
</pre>

By removing the small 'x' characters and making a few other changes, we get:

<pre>
DC   RiVERRUN PAST EVE AND    J92X19
DC  ADAM'S. FRoM SWERVE oF    HtXrfA
DC  SHoRE   To BEND oF BAY    CCJXLy
DC BRiNGS US BY A CoMMoDiUS   9gNhNy
DC ViCUS oF RECiRCULATioN     DTm2kZ     
DC BACK To HoWTH CASTLE       GBesZt
DC     AND ENViRoNS.          D2nMSf
</pre> 

I will soon provide a way to simply run the unspendable command from this website.

<h3> Advances Satoshi Codes </h3>

The term <a href=https://en.bitcoin.it/wiki/Satoshi_codes> Satoshi Code</a> initally referred to the last two digits of a bitcoin transaction and was intended as a standardized convention to embed simple meaning into the transaction.  More conventionally, messages can be created in the ledger with a string of text encoded into  Opt-Return codes.  This is widely used in the BCH protocol.  Satoshi Codes are simpler, much more human readable without the aid of a block explorer (which must be trusted), and can be entered into any currency with the simplest of wallets.  These codes could live nicely in their own field, but cryptocurrency core engines (bitcoind, litecoind, etc.) simply don't have this option.
<p>
The bitcoin community also feels that Opt-Return codes should be used for their original intended purpose only.  Dimecash does not rule out the use of Opt-Return codes.  Public Anchors can go up to eight character (or beyond).  The original Satoshi Code system did not rule this out.  With each digit, the code becomes more expensive to send, but is still trivially small in most cases.
<p>
The codes that I find myself most often sending are four or five digits, but the length itself can even contain a meaning:

<pre>

Digits Meaning
------ -----------------------------------
  2    The length of a traditional Satoshi Code

  3    Very simple messages, bit logic can be used for 
         messages such as a tic-tac-toe game or simply
         something like '0.00000888' to mean 'crash'

  4    Either a two characters in a twice-shifted Octal
         (Shoctal) system or an example of a CRC Unix sum that 
         happens to be four digits long.

  5    This could be a US ZIP code, or any similar code, but
       is most likely to be a five digit CRC Unix sum uses as 
       a weak or "light" hash.  
  
  6    A Three character Shoctal code

  7    An advanced hash or shoctal code which is far superior to
       the five-digit code above, but is far from a SHA-256 hash.

</pre>
      
While the five and seven digit hashes are prone to collision, any
danger would be mitigated by the fact that linting, expectation of
content (a legal agreement would look very different from a piece of
code that controls an IOT device), and the fact that people can and 
should engage with this system at a very basic level.  

Just as the unspendable addresses above are readable, data put into
these small hashes should also be readable by both human and machine.
This innovation is really critical to the viability of the entire system.

<h3> Secret Bourne Again (bash) functions </h3>

Bash is the name of a shell which is popular on Linux.  For years, I 
used IBM's AIX native shell-- The Korn Shell (ksh) but now exclusively 
use bash.  I suspect that these function would work with many shells, 
but have only tested them on bash.
<p>
Bash is not only available on Linux and Unix server, but on modern Macintosh 
and Windows servers, as well as smart phones and devices such as the Raspberry Pi.  I also will provide on this site, a bash function wrapper that allows people to simple create these function on this site.  This (along with the ability to create Obviously Unspendable Addresses) essentially means that anyone with a wallet and some cryptocurrency could use this system on the currency of their choice.

Here is an example of the text above represented as one five-digit code:

<pre>

river.run() {
: past even atoms
# Phoenetic second meaning 
: from swerve of shore
: to bend of bay
: brings us by a commodious
: vicus
# Reference to Giambattista Vico and The New Science
: back to howthe.castle.environs
# Reference to HCE aka Finn McCool aka Porter
}
 
</pre>

After typing in the above text (which is programatically valid) I cut and pasted it into a bash shell.  Then the command to call it back.

<pre>
bash> declare -f river.run
river.run ()
{
    : past even atoms;
    : from swerve of shore;
    : to bend of bay;
    : brings us by a commodious;
    : vicus;
    : back to howthe.castle.environs
}
</pre>

Notice that is now looks different, the spacing is changed, semi-colons are added to all but the last line, and every line starting with a pound symbol has been lost.  These changes will be made the same each time, regardless of my spacing.  This makes the function, like the base-58 code, easy for human beings to keep track of.  I could have just as easily chosen JSON and used the jq command for linting, but I prefer this.
<p>
Now the function is again retrieved from the live memory session of the shell and is piped into another command, which is called "sum":

<pre>
bash> declare -f river.run | sum
37497      1
</pre>

Thus the river.run function can be reliably tied to the five-digit number 37497, especially if sent to a Public Anchor that makes reference its origin.  This simple system is, I believe suprisingly robust and versatile.  If the sum command becomes inadequate, then here are some other choices.

<pre>
Hash Type     Hash Value
------------  -------------------------------------------------------------
sum           37497     1
cksum         2449369253 175
shasum -a 1   5ec757d1f48398a6f0fe520f9cf3a25dddf16d9b
shasum -a 224 8f8a077ab4ef7026456df6be253751acbb6bac4253d40222320e8c2c00f969a8
</pre>

My preference would be to convert one of these (maybe cksum) into octal and show only the first seven digits using the numerals two through nine with two representing zero and nine representing seven.  I call this shoctal.  It allows a seven digit number to be uses as a Satoshi Code without any zeroes to confuse its meaning.  The numeral one can be essentially used as a decimal point or to break the data into two sets if necessary.  In fact, if a one is seen in the seven-digit string, then it could be assumed to not be a hash.
<p>
The easiest seven-digit hash above would be from the cksum.
<p>
Now, because I am working directly from the shell with no special software, I need to place the function into a file with a very specific name.

<pre>
declare -f river.run > river.run-37497.1
</pre>

I will also go back and manually add the lost comments into the file.

<pre>
river.run ()
{
    : past even atoms;
    # Phoenetic second meaning
    : from swerve of shore;
    : to bend of bay;
    : brings us by a commodious;
    : vicus;
    # Reference to Giambattista Vico and The New Science
    : back to howthe.castle.environs
    # Reference to HCE aka Finn McCool aka Porter
}
</pre>

The file now has the odd feature that is could generate two different hashes, depending on if the pounded out comments are included.
<p>
That is basically the whole of the system. Transactions can be registered into the  Public Anchor.  Here is a live example of this on the Doge Chain:

<p>
<a href=https://dogechain.info/address/DCULToFTHEDoLPHiNZZZZZZZZZZZZLkeq5> Cult of The Dolphin</a>

Below are the meanings of some of the codes.
<pre>

Satoshi Code Meaning
------------ -------------------------------------------
   39692     A Wakean Reference to Myself, my crypto-sigel
   76051     A ZIP Code in Grapevine, TX
   39692     (see above)
    1001     A personal joke and reference to a Fort Worth Restaurant
      25     My bill for burgers and beer in US dollars
   48797     Probably a reference to visiting the Courthouse
69696969     A silly code that is visually stunning
   18890    
    8614
   33494
   39642     (see above)    
</pre>

<p>
This brings us to the name of this section, the "dimecash dilemma". Like embedding messages into Opt-Return codes, these systems are still very much hacks of existing solutions that did not anticipate or account for their usefulness.  Sending many tiny transactions will potentially break a wallet and cause part or all of the funds to become inaccessible.  This is because of how the currency deals with Unspent Transaction Output (UTXO) and a phenomena called dust.  Basically, if a wallet shows 40 bitcoin exactly, and if the underlying ledger shows that the currency is stored as a record of 40 whole coins, then the ledger would easily be able to represent the results.  If however, the 40 whole coins were transferred into the address as thousands of tiny transactions, the system would have significantly more trouble.  In a traditional database, a field could very easily store either the value 40 or the value 39.81455123, but the ledger must deal with the data in a very different way that is beyond the scope of this document.
<p>
Also, another very different problem exists.  Because this system pushes for wide (general public) adoption of a low (or no) mandatory software structure, one could easily get confused and send a large sum of money into an obviously unspendable address as if it were a "vanity address".  What is obvious to a cryptography expert is not obvious to the general public.
<p>
These two issues form the basic problem with using this system with existing currency and thus drove the need for the dimecash fork.

<h2>Dimecash Diamonds</h2>

The github page for dimecash, and the following whitepaper, further explains the needs and goals of dimecash.

<a href=https://github.com/johnrigler/dimecash> Dimecash on Github </a>

The most obvious and useful way to use dimecash is as a stub or registry. 

</html>
