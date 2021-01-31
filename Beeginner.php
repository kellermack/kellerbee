<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>beeginners</title>
    <link rel="stylesheet" href="aboutus.css">
</head>
<body>
    <h1>This is for the newbees</h1>
    <p>My first (and only) bee class I took was a once a week class
        that lasted 6 weeks. It was 2 hours every Tuesday Night at the 
        local community college. Some of what we were taught was great, some 
        of it was filler. Beekeeping can be very overwhelming when starting out. 
        So I have tried to think of things that will help new people, thing that 
        I wish I knew before I started. 
    </p>
    <ul>
        <li>You are going to be stung</li>
        <p>This is going to happen, so if you cant stand the thought
            of being stung then beekeeping is not for you. No suit will protect you. 
            Bee suits are sting resistant not sting proof. So be prepared!
        </p>
        <li>You will not get rich</li>
        <p>Beekeeping is not a get rich quick scheme. Can you make side money
            selling honey and other items from bees? Of course. But only commercial
            beekeepers can make a modest living from traveling the country with 
            their tractor trailers of bees. But unless you have around $300,000 to invest
            then you arent going to be making a living of beekeeping.
        </p>
        <li>You need to study</li>
        <p>Before you even buy your bees start studying. Read up 
            on different types of honey bees. What drone brood looks like,
            what nurse bees look like, how guard bees act. Make sure you know
            what capped brood looks like, what capped honey look likes. Be 
            able to identify what any and all pests an disease look like. It is 
            a lot to take in at first but with persistance you won't be surprised
            by anything.
        </p>

    </ul>

</body>
<?php
echo "<form>
    <input type='hidden' name='uid' value='Anonymous'>
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <textarea name='message'></textarea><br>
    <button type='submit' name='submit'>Comment</button>

</form>";
?>
<footer>&copy; Copyright 2021 kellerbee.com</footer>
</html>