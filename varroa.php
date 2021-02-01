<?php
    date_default_timezone_set('America/New_York');
    include 'database.php';
    include 'comments.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="beetle.css">
    <title>The Varroa Mite </title>
</head>
<body>
    <a href="index.php"><img src="Images/honeycomb.png" alt="Bee hive" width="5%" height="5%"></a>
    <h3>Back to the Hive!!</h3>
    <h1>Varroa Destructor <span>These things suck(literally)</span></h1>
    <p>
        The Varroa Destructor, or Varroa Mite is singlehandly the reason for most
        bee hive failures. A small mite(or tick) that feeds on honeybees and honeybee 
        larvae. Left unchecked they will decimate even the strongest of hives. Every year 
        nearly all beekeepers must treat the hives for varroa. Some do a spring and then fall
        treatment, I myself have been able to do only a once a year treatment and so far that 
        has worked. I alternate every year with my treatments between Mite Away Quick Strips  
        and Apivar. It has been noted that the varroa  can become resistent to some
        treatments if they are used contiounssly. 
    </p>
    <img src="beeMite.jpeg" alt="varroa">
    <h2>How bad is my varroa count?</h2>
    <p>Their are a few methods to determine how bad the mite count is in your hive.
        <ul>
            <li>The Alcohol Wash
                <p>This method can be the most accurate and effective method. The downside of 
                    this method is that this will kill the bees sampled. You will need 
                    about 300 bees, which is around 1/2 a cup, bees are dumped in a jar with 
                    Isopropyl alcohol. It is then shaken and swirled (with the lid on) for 
                    around 2 minutes. The bees are then dumped on a wire mesh so that the mites
                    fall through. The mites are then counted and divided by 3 to determine how many
                    mites your hive has per 100 bees. MAKE 100% SURE YOU DO NOT HAVE THE QUEEN IN THE 
                    SAMPLE!!!!!!
                </p>
            </li>
            <li>The Sugar Shake Shake Senora
                <p>
                    I have used this method a few times, it's not as affective for the count
                    but the upside is it doesnt kill the bees. Similar set up as the alcohol 
                    wash, 1/2 cup of bees, jar (with a lid with small holes) to dump them in and instead of alcohol you use 
                    powdered sugar. Shake the bees toward the jar lid so the mites will fall out of
                    the jar but the bees stay in. Do this for a minute or so, then dump the bees back
                    in the hive, dont worry about the sugar as the other bees will help them clean it off.
                    Go back to where you shook out the sugar and look for tiny dark specks, those are the mites. 
                    Count and then divide by 100. If you have more then 3-5 while counting it is time 
                    to treat.
            </li>
        </ul>
    </p>
    <h2>Treatments</h2>
    <p>A variety of chemical treatments exist to control Varroa. These are just 
        to name a few.
    </p>
    <ol>
        <li>Apivar</li>
        <li>Mite Away Quick Strips</li>
        <li>Oxalic Acid</li>
    </ol>
    <p>Many other treatments exist but regardless of which treatment you choose remember to 
        read the instructions carefully, wear gloves, remove all honey supers and also to alternate
        treatments. 
        <br>
        Another idea to keep in mind is the use of screened bottom boards. When mites fall down 
        they have no way of getting back up to the bees, they fall through the holes in the board. 
        The use of screened versus solid bottom boards will be brought up in another disucssion. 

    </p>

</body>
<?php
    echo "<form method ='POST' action='".setComments ($conn)."'>
    <input type='hidden' name='uid' value='Anonymous'>
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <textarea name='message'></textarea><br>
    <button type='submit' name='commentSubmit'>Comment</button>

</form>";
?>
<footer>&copy; Copyright 2021 kellerbee.com</footer>
</html>