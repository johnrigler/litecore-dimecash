<html>

<title>
Discover a Ledger Title
</title>

<body>

<?php

echo "$_REQUEST[word]";
?>
<p>
Currently typechecking is not turned on, so if you enter an invalid character, this will throw up its hands.  You can't use "I", "l", "0", or "1" because they are too similar looking to each other.
<p>
<form action="unspendable.php?">
  Enter Desired Public Anchor:<br>
  <input type="text" name="word"><br>
  <input type="submit">
</form>

<a href=http://dime.cash> Take me back home</a>

<p>
Some examples which would work:
<pre>
xxxxHEATHxLEDGER
BiGxBoYxPANTZ23456789
xxWoWxxBoBxxWoWxx


</pre>

If you succeed, you will redirected to a page like the one below.  Use your smart phone wallet app to capture an image of the QR code that you discover and then simply send some very small transaction.  Coming soon will be a form that creates the special bash functions that I use, will tell you what hash to send, and will keep a copy of your secret.
<hr>
<img src=/images/bigboy.png width="50%" height="50%">
</body>
</html>
