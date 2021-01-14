<?php
    date_default_timezone_set('America/New_York');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="beetle.css">
    
</head>
<body>
	
<a href="index.php"><img src="honeycomb.png" alt="Bee hive" width="5%" height="5%"></a>
 <div class="beetle">
    <h1>The Small Hive Beetle.</h1>
    <p>The Small Hive Beetle, I hate these things. These small insects
        were the cause of destruction for one of my best and strongest hives.
        I was caught off guard by their appearance and failed to act in a timely manner,
        by the time I knew what was going on it was far to late. However I was able to 
        keep them out of my other hives. I'll share what happened and what I did and 
        I would like everyone to leave a comment below to share any tips that might 
        have to keep these things out. 
    </p>
    <br>
    <img src="beetle.jpeg" alt="Hive Beetle">
    <h2>What is a hive beetle?</h2>
    <p>
        The small hive beetle (Aethina tumida) is a beekeeping pest.It is endemic to 
        sub-Saharan Africa, 
        but has spread to many other locations, including North America, 
        Australia, and the Philippines.The small hive beetle can be a destructive
        pest of honey bee colonies, 
        causing damage to comb, stored honey, and pollen. 
        If a beetle infestation is sufficiently heavy, 
        they may cause bees to abandon their hive. 
        Its presence can also be a marker in the diagnosis of colony collapse disorder for honey bees. The beetles can also be a pest of stored combs, 
        and honey (in the comb) awaiting extraction. 
        Beetle larvae may tunnel through combs of honey, feeding and defecating, 
        causing discoloration and fermentation of the honey.
</p>
<h2>How Do I stop it?</h2>
<p>After realizing what it was I decided to try the <a href="https://www.mannlakeltd.com/beetle-blaster">Beetle Blaster Traps</a>
    Fill them part way up with vegetable oil, do it over the sink and 
    try to have someone hold it or pour the oil in. Also when finished make sure
    all oil is wiped off the edges. Bees cant remove oil, and we don't want that. Then 
    place the traps (I used 2) between the outer frames on your highest hive body. Bees
    will chase the hive beetles around, the beetles fall in the oil and drown. After 
    about 4 days I checked on the traps and had about 10-15 beetles per trap. 
    <br>
    In conjunction with this I also did one more thing, around the hives I dug up all
    the grass within a 10 inch radius. Some of you are probably wondering why I would
    do that to my grass. Well in the life cycle of a small hive beetle, mainly after 
    they hatch the larvae will crawl towards the nearest light source which is usually 
    the entrance, then they topple over the edge and mature in the grass. At that time 
    they will then be able to fly and return inside the hive and the process starts 
    over again. Well if the grass is gone it reduces their chances of survival, they 
    will either bake in the hot sun or be devoured by other insect or nematodes. 
    <br>
    <br>
    Now their are other solutions to hive beetles, I know a beekeeper who uses unscented
    Swiffer pads. Lay one on the frames of the hive body in the corner, the hive 
    beetles actually get stuck in the fibers of the pad. It does not have any
    effect on the bees. They will try to pull it out of the hive as it is a nuisance.
    <br>
    Also on the market are different chemicals that can be used, I personally
    try to keep chemicals out of bee hives. (The exception is the Varroa Mite)
    As for grass, I dug mine up with a spade and I watched a beekeeper on Youtube 
    spray a mixture of salt and vinegar around his hives that eventually killed all the
    grass.  
</p>
</div>
<?php
echo "<form>
    <input type='hidden' name='uid' value='Anonymous'>
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <textarea name='message'></textarea><br>
    <button type='submit' name='submit'>Comment</button>

</form>";
?>
</body>
</html>
