<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wax Moth</title>
    <link rel="stylesheet" href="beetle.css">
</head>
<body>
    <a href="index.php"><img src="Images/honeycomb.png" alt="Bee hive" width="5%" height="5%"></a>
    <h3>Back to the hive!</h3>
    <h1>Wax Moths/Wax Worms</h1>
    <p>Believe it or not, a moth can be a devastating pest to any beehive. Just 1 singular wax 
        moth can slip in the hive in the night, lay eggs and leave. And they
        wont stop at just one hive, they can fly up to 50 meters.
        So other hives in the area can also be infested by a single wax
        moth. This larvae can chew through
        comb and destroy entire brood frames. This in turn can cause the hive to abandon the nest
        and leave. Luckily preventing the wax moth isn't as difficult as other pests. 
    </p>
    <h2>Ways to stop and prevent</h2>
    <p>A strong hive will easily take care of wax moth larvae, even if the moth is able to breach 
        the hive and lay eggs they will immediately be taken out and discarded. If you suspect that
        a frame has wax moth eggs then take the frame and put it in your freezer for 2 days. This will
        kill eggs in the frame. 
    </p>
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