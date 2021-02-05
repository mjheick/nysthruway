# nysthruway

Sometimes you need to be able to view specific things and see information in one place without abusing a system. This is it.

# usage

Access the website on a PHP hosted webserer. Javascript will take care of most of the necessities when it comes to refreshing information. It's technically a "set it and forget it but look at it"-kind of thing.

Images are refreshed every 15 seconds. Usually it's set for 6 seconds and throttled to 60 seconds, so 15 seems like a happy medium.

The Events feed appears to be updated every 30 seconds, so we update every 31 seconds.

# improvements

- Make all cameras available
- Parse out XML feed
- React to XML feed and show cameras that would be "around" the event to show traffic changes
- Tie in some additional information such as weather or news
