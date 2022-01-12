<!DOCTYPE html>
<html>
<head>
    <title>Confirmation</title>
    <link rel="stylesheet" type="text/css" href="layout.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h2>Order Confirmed</h2>
<?php
    
    // date and time

    $date = date('m/d/Y h:i:s a', time());
    
    // ~ FORM ~ // 
    
    // Personal Info
    
    $name = $_POST['name'];
    $idNum = $_POST['idNum'];
    $bunkNum = $_POST['bunkNum'];
    
    
    //Produce
    
    $bananas = $_POST['bananas'];
    $oranges = $_POST['oranges'];
    $avacados = $_POST['avacados'];
    $pineapple = $_POST['pineapple'];
    $celery = $_POST['celery'];
    $yellowOnions = $_POST['yellowOnions'];
    $yelloPot = $_POST['yellowPot'];
    $coriander = $_POST['coriander'];
    $pear = $_POST['pear'];
    $thyme = $_POST['thyme'];
    $papaya = $_POST['papaya'];
    $carrots = $_POST['carrots'];
    $plantain = $_POST['plantain'];
    $lettuce = $_POST['lettuce'];
    $yam = $_POST['yam'];
    $whitePot = $_POST['whitePot'];
    $brocolli = $_POST['brocolli'];
    $okra = $_POST['okra'];
    $spinach = $_POST['spinach'];
    $apples = $_POST['apples'];
    $grapes = $_POST['grapes'];
    $grapeType = $_POST['grapeType'];
    $lemons = $_POST['lemons'];
    $redOnion = $_POST['redOnion'];
    $greenOnion = $_POST['greenOnion'];
    $sweetPot = $_POST['sweetPot'];
    $cabbage = $_POST['cabbage'];
    $wheatBread = $_POST['wheatBread'];
    $whiteBread = $_POST['whiteBread'];
    $marbleLoaf = $_POST['marbleLoaf'];
    $goldenLoaf = $_POST['goldenLoaf'];
    $muffins = $_POST['muffins'];
    $spicedBuns = $_POST['spicedBuns'];
    $bunType = $_POST['bunType'];
    $hdBuns = $_POST['hdBuns'];
    $bulla = $_POST['bulla'];
    $bullaType = $_POST['bullaType'];
    $chknThigh = $_POST['chknThigh'];
    $chknLeg = $_POST['chknLeg'];
    $porkPull = $_POST['porkPull'];
    $porkLoins = $_POST['porkLoins'];
    $chzSausage = $_POST['chzSausage'];
    $smokies = $_POST['smokies'];
    $chknSausage = $_POST['chknSausage'];
    $weiners = $_POST['weiners'];
    $tilapia = $_POST['tilapia'];
    $beef = $_POST['beef'];
    $beefType = $_POST['beefType'];
    $halalDogs = $_POST['halalDogs'];
    $baconChed = $_POST['baconChed'];
    $cod = $_POST['cod'];
    $eggs = $_POST['eggs'];
    $cheese = $_POST['cheese'];
    $margerine = $_POST['margerine'];
    $yogurt = $_POST['yogurt'];
    $bigOJ = $_POST['bigOJ'];
    $almondMilk = $_POST['almondMilk'];
    $milkType = $_POST['milkType'];
    $whitener = $_POST['whitener'];
    $cartonOJ = $_POST['cartonOJ'];
    $boost = $_POST['boost'];
    $mangoJuice = $_POST['mangoJuice'];
    $oats = $_POST['oats'];
    $pomJuice = $_POST['pomJuice'];
    $milk = $_POST['milk'];
    $coffeeMate = $_POST['coffeeMate'];
    $pb = $_POST['pb'];
    $pbType = $_POST['pbType'];
    $coffee = $_POST['coffee'];
    $tea = $_POST['tea'];
    $guavaNectar = $_POST['guavaNectar'];
    $pearNec = $_POST['pearNec'];
    $grapeJuice = $_POST['grapeJuice'];
    $hotChoc = $_POST['hotChoc'];
    $cornBeef = $_POST['cornBeef'];
    $sardines = $_POST['sardines'];
    $sardineType = $_POST['sardineType'];
    $sugar = $_POST['sugar'];
    $salt = $_POST['salt'];
    $ketchup = $_POST['ketchup'];
    $bbqSeason = $_POST['bbqSeason'];
    $ribSauce = $_POST['ribSauce'];
    $soySauce = $_POST['soySauce'];
    $mayo = $_POST['mayo'];
    $flour = $_POST['flour'];
    $cornMeal = $_POST['cornMeal'];
    $oil = $_POST['oil'];
    $conMilk = $_POST['conMilk'];
    $wwFlour = $_POST['wwFlour'];
    $tomBeans = $_POST['tomBeans'];
    $chaoMein = $_POST['chaoMein'];
    $rice = $_POST['rice'];
    $spag = $_POST['spag'];
    $shellNoods = $_POST['shellNoods'];
    $mrNood = $_POST['mrNood'];
    $mrNoodType = $_POST['mrNoodType'];
    $nestle = $_POST['nestle'];
    $nestleType = $_POST['nestType'];
    $compWater = $_POST['compWater'];
    $compType = $_POST['compType'];
    $aquafina = $_POST['aquafina'];
    $aquaType = $_POST['aquaType'];
    $smallOJ = $_POST['smallOJ'];
    $smallApple = $_POST['smallApple'];
    $coke = $_POST['coke'];
    $cokeType = $_POST['cokeType'];
    $seven = $_POST['seven'];
    $sevenType = $_POST['sevenType'];
    $monster = $_POST['monster'];
    $powerade = $_POST['powerade'];
    $powerType = $_POST['powerType'];
    $pACol = $_POST['pACol'];
    $gatorade = $_POST['gatorade'];
    $gatorType = $_POST['gatorType'];
    $gACol = $_POST['gACol'];
    $mackerel = $_POST['mackerel'];
    $macType = $_POST['macType'];
    $cracklings = $_POST['cracklings'];
    $refried = $_POST['refried'];
    $blackBeans = $_POST['blackBeans'];
    $ltRedBeans = $_POST['ltRedBeans'];
    $drkRedBeans = $_POST['drkRedBeans'];
    $chknSoup = $_POST['chknSoup'];
    $pepperSauce = $_POST['pepperSauce'];
    $cRSeasoning = $_POST['cRSeasoning'];
    $maseca = $_POST['maseca'];
    $curry = $_POST['curry'];
    $ruskCake = $_POST['ruskCake'];
    $waterCrackers = $_POST['waterCrackers'];
//    $horchata = $_POST['horchata'];
    $milo = $_POST['milo'];
    $browning = $_POST['browning'];
//    $islandPunch = $_POST['islandPunch'];
    $coconutMilk = $_POST['coconutMilk'];
    $cREnergy = $_POST['cREnergy'];
    $ting = $_POST['ting'];
    $irishMoss = $_POST['irishMoss'];
    $pnutPunch = $_POST['pnutPunch'];
    $islandSoda = $_POST['islandSoda'];
    $shirley = $_POST['shirley'];
    $shirleyType = $_POST['shirleyType'];
    $vitamalt = $_POST['vitamalt'];
    $tigermalt = $_POST['tigermalt'];
    $tropRhythm = $_POST['tropRhythm'];
    $cocowater = $_POST['cocowater'];
    $tylenol = $_POST['tylenol'];
    $toothpaste = $_POST['toothpaste'];
    $toothbrush = $_POST['toothbrush'];
    $babyOil = $_POST['babyOil'];
    $barSoap = $_POST['barSoap'];
    $bodyWash = $_POST['bodyWash'];
    $sssTonic = $_POST['sssTonic'];
    $sponges = $_POST['sponges'];
    $dishSoap = $_POST['dishSoap'];
    $vim = $_POST['vim'];
    $pinesol = $_POST['pinesol'];
    $fantastik = $_POST['fantastik'];
    $paperTowels = $_POST['paperTowels'];
    $garbage = $_POST['garbage'];
    $laundry = $_POST['laundry'];
    $laundryType = $_POST['laundryType'];
    $bleach = $_POST['bleach'];
    $kleenex = $_POST['kleenex'];
    $lysol = $_POST['lysol'];
    $iceCream = $_POST['iceCream'];
    $corn = $_POST['corn'];
    $peas = $_POST['peas'];
    $corona = $_POST['corona'];
    $coronaType = $_POST['coronaType'];
    $dragon = $_POST['dragon'];
    $dragonType = $_POST['dragonType'];
    $guinness = $_POST['guinness'];
    $guinType = $_POST['guinType'];
    $bud = $_POST['bud'];
    $budType = $_POST['budType'];
    $belmont = $_POST['belmont'];
    $extra1 = $_POST['extra1'];
    $quan1 = $_POST['quan1'];
    $extra2 = $_POST['extra2'];
    $quan2 = $_POST['quan2'];
    $extra3 = $_POST['extra3'];
    $quan3 = $_POST['quan3'];
    $extra4 = $_POST['extra4'];
    $quan4 = $_POST['quan4'];
    $extra5 = $_POST['extra5'];
    $quan5 = $_POST['quan5'];
    $extra6 = $_POST['extra6'];
    $quan6 = $_POST['quan6'];
    $moreInfo = $_POST['moreInfo'];
    $listerine = $_POST['listerine'];
    
    // Email
    
    $to = 'amanda_gayer@mail.ca';
    $subject = 'Order for ' . $name;
    $email = 'groceries@farm.com';
    
    
    // CAN I CREATE A .TXT FILE IN THE FOLDER WITH THE MESSAGE TO SKIP THIS...
    
    // EX.  $msg = "msg.txt"  ?????
    
    
    $msg = "Name: $name \n" .
        "Employee Number: $idNum \n" .
        "Bunkhouse: $bunkNum \n \n \n" .
        
        // Produce
        
        "Produce \n \n" .
        
        "Bananas: $bananas \n" .
        "Plantain: $plantain \n" .
        "Okra: $okra \n" .
        "Celery: $celery \n" .
        "Coriander: $coriander" .
        "Green Onion: $greenOnion \n" .
        "Lettuce: $lettuce \n" .
        "Spinach: $spinach \n" .
        "Brocolli: $brocolli \n" .
        "Cabbage: $cabbage \n" .
        "Papaya: $papaya \n" .
        "Pineapple: $pineapple \n" .
        "Oranges: $oranges \n" .
        "Lemons: $lemons \n" .
        "Pear: $pear \n" .
        "Avacados: $avacados \n" .
        "Red Onions: $redOnion \n" .
        "Yellow Onions: $yellowOnions \n" .
        "Carrots: $carrots \n" .
        "Apples: $apples \n" .
        "Grapes: $grapes Type: $grapeType \n" .
        "Yam: $yam \n" .
        "Sweet Potato: $sweetPot \n" .
        "Thyme: $thyme \n" .
        "Yellow Potatoes: $yelloPot \n" .
        "White Potatoes: $whitePot \n \n" .
        
        // Bakery
        
        "Bakery \n \n" .
        
        "Marble Loaf: $marbleLoaf \n" .
        "Golden Loaf: $goldenLoaf \n" .
        "Hot Dog Buns: $hdBuns \n" .
        "Whole Wheat Bread: $wheatBread \n" .
        "White Bread: $whiteBread \n" .
        "Spiced Buns: $spicedBuns Type: $bunType \n" .
        "Bulla: $bulla Type: $bullaType \n" .
        "Choc Chip Muffins: $muffins \n \n" .
        
        
        // Meat
        
        "Meat \n \n" .
        
        "Tilapia: $tilapia \n" .
        "Bacon Chedder Sausages: $baconChed \n" .
        "Cheese Sausage: $chzSausage \n" .
        "Smokies: $smokies \n" .
        "Ultimate Chicken Sausages: $chknSausage \n" .
        "Weiners: $weiners \n" .
        "Pork n Pull: $porkPull \n" .
        "Pork Loins: $porkLoins \n" .
        "Chicken Thighs: $chknThigh \n" .
        "Chicken Legs: $chknLeg \n" .
        "Beef: $beef Type: $beefType \n" .
        "Halal Dogs: $halalDogs \n" .
        "Cod: $cod \n \n" .
        
        // Aisle 1
        
        "Aisle 1 \n \n" .
        
        "Almond Milk: $almondMilk Type: $milkType \n" .
        "Margerine: $margerine \n" .
        "Cheese: $cheese \n" .
        "Eggs: $eggs \n" .
        "Milk: $milk \n" .
        "Coffee Mate: $coffeeMate \n" .
        "Peanut Butter: $pb Type: $pbType \n" .
        "Boost: $boost \n" .
        "Oats: $oats \n" .
        "Yogurt: $yogurt \n" .
        "Big OJ: $bigOJ \n" .
        "Carton OJ: $cartonOJ \n" .
        "Mango Juice: $mangoJuice \n" .
        "Pomegranate Juice: $pomJuice \n \n" .
        
        // Aisle 2
        
        "Aisle 2 \n \n" .
        
        "Grape Juice: $grapeJuice \n" .
        "Guava Nectar: $guavaNectar \n" .
        "Pear Nectar: $pearNec \n" .
        "Hot Chocolate: $hotChoc \n" .
        "Tea: $tea \n" .
        "Coffee Whitener: $whitener \n" .
        "Coffee: $coffee \n \n" .
        
        // Aisle 3
        
        "Aisle 3 \n \n" .
        
        "Sardines: $sardines Type: $sardineType \n" .
        "Salt: $salt \n" .
        "Sugar: $sugar \n" .
        "Ketchup: $ketchup \n" .
        "Club House BBQ Chkn Seasoning: $bbqSeason \n" .
        "Chicken & Rib Sauce: $ribSauce \n" .
        "Mayo: $mayo \n" .
        "Flour: $flour \n" .
        "Corn Meal: $cornMeal \n" .
        "Canola Oil: $oil \n" .
        "Condensed Milk: $conMilk \n" .
        "Whole Wheat Flour: $wwFlour \n \n" .
        
        
        // Aisle 4
        
        "Aisle 4 \n \n" .
        
        "Mr. Noodle: $mrNood Type: $mrNoodType \n" .
        "Spaghetti: $spag \n" .
        "Shell Noodles: $shellNoods \n" .
        "Beans in Tomato Sauce: $tomBeans \n" .
        "Chao Mein: $chaoMein \n" .
        "Soy Sauce: $soySauce \n \n" .
        
        // Aisle 5
        
        "Aisle 5 \n \n" .
        
        "Nestle Water: $nestle Type: $nestleType \n" .
        "Compliments Water: $compWater Type: $compType \n" .
        "Aquafina: $aquafina Type: $aquaType \n" .
        "Small OJ: $smallOJ \n" .
        "Small Apple: $smallApple \n" .
        "Coke: $coke Type: $cokeType \n" .
        "7up: $seven Type: $sevenType \n" .
        "Monster: $monster \n" .
        "Powerade: $powerade Type: $powerType Colour: $pACol \n" .
        "Gatorade: $gatorade Type: $gatorType Colour: $gACol \n \n" .
        
        //Aisle 6
        
        "Aisle 6 \n \n" .
        
        "Milo: $milo \n" .
        "Cool Runnings Energy: $cREnergy \n" .
        "Ting: $ting \n" .
        "Irish moss: $irishMoss \n" .
        "Vitamalt: $vitamalt \n" .
        "Tigermalt: $tigermalt \n" .
        "Tropical Rhthym: $tropRhythm \n" .
        "Island Soda: $islandSoda \n" .
        "Shirley: $shirley Type: $shirleyType \n" .
        "Can Coconut Water: $cocowater \n" .
        "Water Crackers: $waterCrackers \n" .
        "Corned Beef: $cornBeef \n" .
        "Mackerel: $mackerel Type: $macType \n" .
        "Cracklings: $cracklings \n" .
        "Pepper Sauce: $pepperSauce \n" .
        "Browning: $browning \n" .
        "Chicken Soup Mix: $chknSoup \n" .
        "Coconut Milk Powder: $coconutMilk \n" .
        "Cool Runnings All Purpose: $cRSeasoning \n" .
        "Curry Powder: $curry \n" .
        "Refried Beans: $refried \n" .
        "MaSeCa: $maseca \n" .
        "Peanut Punch: $pnutPunch \n" .
        "Black Beans: $blackBeans \n" .
        "Light Red Beans: $ltRedBeans \n" .
        "Dark Red Beans: $drkRedBeans \n" .
        "Rusk Cake: $ruskCake \n" .
//        "Horchata: $horchata \n" .
        "Rice: $rice \n \n" .
//        "Tampico Island Punch: $islandPunch \n" .
        
        // Aisle 7
        
        "Aisle 7 \n \n" .
        
        "Tylenol: $tylenol \n" .
        "Toothpaste: $toothpaste \n" .
        "Toothbrush: $toothbrush \n" .
        "Baby Oil: $babyOil \n" .
        "Irish Spring Bar Soap: $barSoap \n" .
        "Body Wash: $bodyWash \n" .
        "Kleenex: $kleenex \n" .
        "Listerine: $listerine \n" .
        "SSSTonic: $sssTonic \n \n" .
        
        // Aisle 8
        
        "Aisle 8 \n \n" .
        
        "Vim: $vim \n" .
        "Pinesol: $pinesol \n" .
        "Fantastik: $fantastik \n" .
        "Paper Towels: $paperTowels \n" .
        "Dish Soap: $dishSoap \n \n" .
        "Sponges: $sponges \n" .
        "Garbage Bags: $garbage \n" .
        "Laundry Soap: $laundry Type: $laundryType \n" .
        "Bleach: $bleach \n" .
        "Lysol: $lysol \n" .
        "Ice Cream: $iceCream \n" .
        "Corn: $corn \n" .
        "Peas: $peas \n \n" .
        
        // Beer
        
        "Beer \n \n" .
        
        "Corona: $corona Type: $coronaType \n" .
        "Dragon: $dragon Type: $dragonType \n" .
        "Guinness: $guinness Type: $guinType \n" .
        "Bud Light: $bud Type: $budType \n \n" .
        
        // Cigarettes
        
        "Cigarettes \n \n" .
        
        "Belmont: $belmont \n \n" .
        
        // Extras
        
        "Extra: $extra1  -  $quan1 \n \n" .
        "Extra: $extra2  -  $quan2 \n \n" .
        "Extra: $extra3  -  $quan3 \n \n" .
        "Extra: $extra4  -  $quan4 \n \n" .
        "Extra: $extra5  -  $quan5 \n \n" .
        "Extra: $extra6  -  $quan6 \n \n \n \n " .
        "Submitted: $date";
            
        mail($to, $subject, $msg, 'From:' . $email);
    
    $textTo = '5199198989@msg.telus.com';
    $textSubject = 'Order for ' . $name;
    $textMsg = "Order ready for $name \n";
        mail($textTo, $textSubject, $textMsg,  'From:' . $email);
    
    
    
    
    echo '<strong>Thank You!</strong><br />';
    echo '<strong>Gracias!</strong><hr /><br />';
    echo 'Order/: <br /><br />';
    echo 'Bananas: ' . $bananas . '<br />';
    echo 'Oranges: ' . $oranges . '<br />';
    echo 'Avacados: ' . $avacados . '<br />';
    echo 'Pineapple: ' . $pineapple . '<br />';
    echo 'Celery: ' . $celery . '<br />';
    echo 'Yellow Onion: ' . $yellowOnions . '<br />';
    echo 'Yellow Potatoes: ' . $yelloPot . '<br />';
    echo 'Coriander: ' . $coriander . '<br />';
    echo 'Pear: ' . $pear . '<br />';
    echo 'Thyme: ' . $thyme . '<br />';
    echo 'Papaya: ' . $papaya . '<br />';
    echo 'Carrots: ' . $carrots . '<br />';
    echo 'Plantains: ' . $plantain . '<br />';
    echo 'Lettuce: ' . $lettuce . '<br />';
    echo 'Yams: ' . $yam . '<br />';
    echo 'White Potatoes: ' . $whitePot . '<br />';
    echo 'Brocolli: ' . $brocolli . '<br />';
    echo 'Okra: ' . $okra . '<br />';
    echo 'Spinach: ' . $spinach . '<br />';
    echo 'Apples: ' . $apples . '<br />';
    echo 'Grapes: ' . $grapes . '     --- Type: ' . $grapeType . '<br />';
    echo 'Lemons: ' . $lemons . '<br />';
    echo 'Red Onions: ' . $redOnion . '<br />';
    echo 'Green Onions: ' . $greenOnion . '<br />';
    echo 'Sweet Potato ' . $sweetPot . '<br />';
    echo 'Cabbage: ' . $cabbage . '<br />';
    echo 'Whole Wheat Bread: ' . $wheatBread . '<br />';
    echo 'White Bread: ' . $whiteBread . '<br />';
    echo 'Marble Loaf: ' . $marbleLoaf . '<br />';
    echo 'Golden Loaf: ' . $goldenLoaf . '<br />';
    echo 'Chocolate Chip Muffins: ' . $muffins . '<br />';
    echo 'Hot Dog Buns ' . $hdBuns . '<br />';
    echo 'Spiced Buns: ' . $spicedBuns . '     --- Type: ' . $bunType . '<br />';
    echo 'Bulla: ' . $bulla . '     --- Type: ' . $bullaType . '<br />';
    echo 'Chicken Thighs: ' . $chknThigh . '<br />';
    echo 'Chicken Legs: ' . $chknLeg . '<br />';
    echo 'Pork n Pull: ' . $porkPull . '<br />';
    echo 'Pork Loins: ' . $porkLoins . '<br />';
    echo 'Cheese Sausage: ' . $chzSausage . '<br />';
    echo 'Smokies: ' . $smokies . '<br />';
    echo 'Ultimate Chicken Sausage: ' . $chknSausage . '<br />';
    echo 'Weiners: ' . $weiners . '<br />';
    echo 'Tilapia: ' . $tilapia . '<br />';
    echo 'Beef: ' . $beef . '     --- Type: ' . $beefType . '<br />';
    echo 'Halal Dogs: ' . $halalDogs . '<br />';
    echo 'Bacon Chedder Sausages: ' . $baconChed . '<br />';
    echo 'Cod: ' . $cod . '<br />';
    echo 'Eggs: ' . $eggs . '<br />';
    echo 'Sliced Chedder Cheese: ' . $cheese . '<br />';
    echo 'Margerine: ' . $margerine . '<br />';
    echo 'Yogurt: ' . $yogurt . '<br />';
    echo 'Big Orange Juice: ' . $bigOJ . '<br />';
    echo 'Almond Milk: ' . $almondMilk . '     --- Type: ' . $milkType . '<br />';
    echo 'Coffee Whitener: ' . $whitener . '<br />';
    echo 'Orange Juice Carton: ' . $cartonOJ . '<br />';
    echo 'Boost: ' . $boost . '<br />';
    echo 'Mango Juice: ' . $mangoJuice . '<br />';
    echo 'Oats: ' . $oats . '<br />';
    echo 'Pomegranate Juice: ' . $pomJuice . '<br />';
    echo 'Milk: ' . $milk . '<br />';
    echo 'Coffee Mate: ' . $coffeeMate . '<br />';
    echo 'Peanut Butter: ' . $pb . '     --- Type: ' . $pbType . '<br />';
    echo 'Coffee: ' . $coffee . '<br />';
    echo 'Tea: ' . $tea . '<br />';
    echo 'Guava Nectar: ' . $guavaNectar . '<br />';
    echo 'Pear Nectar: ' . $pearNec . '<br />';
    echo 'Grape Juice: ' . $grapeJuice . '<br />';
    echo 'Hot Chocolate: ' . $hotChoc . '<br />';
    echo 'Corned Beef: ' . $cornBeef . '<br />';
    echo 'Sardines: ' . $sardines . '     --- Type: ' . $sardineType . '<br />';
    echo 'Sugar: ' . $sugar . '<br />';
    echo 'Salt: ' . $salt . '<br />';
    echo 'Ketchup: ' . $ketchup . '<br />';
    echo 'BBQ Chicken Seasoning: ' . $bbqSeason . '<br />';
    echo 'Soy Sauce: ' . $soySauce . '<br />';
    echo 'Mayonaisse: ' . $mayo . '<br />';
    echo 'Flour: ' . $flour . '<br />';
    echo 'Corn Meal: ' . $cornMeal . '<br />';
    echo 'Canola Oil: ' . $oil . '<br />';
    echo 'Condensed Milk: ' . $conMilk . '<br />';
    echo 'Whole Wheat Flour: ' . $wwFlour . '<br />';
    echo 'Beans in Tomato Sauce: ' . $tomBeans . '<br />';
    echo 'Chao Mein: ' . $chaoMein . '<br />';
    echo 'Rice: ' . $rice . '<br />';
    echo 'Spaghetti: ' . $spag . '<br />';
    echo 'Shell Noodles: ' . $shellNoods . '<br />';
    echo 'Mr. Noodle ' . $mrNood . '     --- Type: ' . $mrNoodType . '<br />';
    echo 'Nestle Water: ' . $nestle . '     --- Type: ' . $nestleType . '<br />';
    echo 'Compliments Water: ' . $compWater . '     --- Type: ' . $compType . '<br />';
    echo 'Aquafina Water: ' . $aquafina . '     --- Type: ' . $aquaType . '<br />';
    echo 'Case of Small Orange Juice: ' . $smallOJ . '<br />';
    echo 'Case of Small Apple Juice: ' . $smallApple . '<br />';
    echo 'Coke: ' . $coke . '     --- Type: ' . $cokeType . '<br />';
    echo '7up: ' . $seven . '     --- Type: ' . $sevenType . '<br />';
    echo 'Monster: ' . $monster . '<br />';
    echo 'Powerade: ' . $powerade . '     --- Type: ' . $powerType . '<br />';
    echo 'Gatorade: ' . $gatorade . '     --- Type: ' . $gatorType . '<br />';
    echo 'Mackeral: ' . $mackerel . '     --- Type: ' . $macType . '<br />';
    echo 'Cracklings: ' . $cracklings . '<br />';
    echo 'Refried Beans: ' . $refried . '<br />';
    echo 'Black Beans: ' . $blackBeans . '<br />';
    echo 'Light Red Beans: ' . $ltRedBeans . '<br />';
    echo 'Dark Red Beans: ' . $drkRedBeans . '<br />';
    echo 'Chicken Noodle Soup Mix: ' . $chknSoup . '<br />';
    echo 'Hot Pepper Sauce: ' . $pepperSauce . '<br />';
    echo 'Cool Runnings All Purpose Seasoning: ' . $cRSeasoning . '<br />';
    echo 'MaSeCa: ' . $maseca . '<br />';
    echo 'Cool Runnings Curry Powder: ' . $curry . '<br />';
    echo 'Rusk Cake: ' . $ruskCake . '<br />';
    echo 'Water Crackers: ' . $waterCrackers . '<br />';
//    echo 'Horchata: ' . $horchata . '<br />';
    echo 'Milo: ' . $milo . '<br />';
    echo 'Browning: ' . $browning . '<br />';
//    echo 'Tampico Island Punch: ' . $islandPunch . '<br />';
    echo 'Coconut Milk Powder: ' . $coconutMilk . '<br />';
    echo 'Cool Running Energy Drink: ' . $cREnergy . '<br />';
    echo 'Ting: ' . $ting . '<br />';
    echo 'Irish Moss: ' . $irishMoss . '<br />';
    echo 'Peanut Punch: ' . $pnutPunch . '<br />';
    echo 'Island Soda: ' . $islandSoda . '<br />';
    echo 'Shirley: ' . $shirley . '     --- Type: ' . $shirleyType . '<br />';
    echo 'Vitamalt: ' . $vitamalt . '<br />';
    echo 'Tiger Malt: ' . $tigermalt . '<br />';
    echo 'Tropical Rhythm: ' . $tropRhythm . '<br />';
    echo 'Coconut Water - Single Can ' . $cocowater . '<br />';
    echo 'Tylenol: ' . $tylenol . '<br />';
    echo 'Toothpaste: ' . $toothpaste . '<br />';
    echo 'Toothbrush: ' . $toothbrush . '<br />';
    echo 'Baby Oil: ' . $babyOil . '<br />';
    echo 'Irish Spring Bars of Soap: ' . $barSoap . '<br />';
    echo 'Body Wash: ' . $bodyWash . '<br />';
    echo 'SSSTonic: ' . $sssTonic . '<br />';
    echo 'Sponges: ' . $sponges . '<br />';
    echo 'Dish Soap: ' . $dishSoap . '<br />';
    echo 'Vim: ' . $vim . '<br />';
    echo 'Pine Sol: ' . $pinesol . '<br />';
    echo 'Fantastik: ' . $fantastik . '<br />';
    echo 'Paper Towels: ' . $paperTowels . '<br />';
    echo 'Large Garbage Bags: ' . $garbage . '<br />';
    echo 'Laundry Soap: ' . $laundry . '     --- Type: ' . $laundryType . '<br />';
    echo 'Bleach: ' . $bleach . '<br />';
    echo 'Kleenex ' . $kleenex . '<br />';
    echo 'Lysol ' . $lysol . '<br />';
    echo 'Ice Ceream ' . $iceCream . '<br />';
    echo 'Corn: ' . $corn . '<br />';
    echo 'Peas: ' . $peas . '<br />';
    echo 'Corona: ' . $corona . '     --- Type: ' . $coronaType . '<br />';
    echo 'Dragon: ' . $dragon . '     --- Type: ' . $dragonType . '<br />';
    echo 'Guinness: ' . $guinness . '     --- Type: ' . $guinType . '<br />';
    echo 'Bud Light: ' . $bud . '     --- Type: ' . $budType . '<br />';
    echo 'Belmont: ' . $belmont . '<br />';
    echo 'Extra: ' . $extra1 . ' Quan: ' . $quan1 . '<br />';
    echo 'Extra: ' . $extra2 . ' Quan: ' . $quan2 . '<br />';
    echo 'Extra: ' . $extra3 . ' Quan: ' . $quan3 . '<br />';
    echo 'Extra: ' . $extra4 . ' Quan: ' . $quan4 . '<br />';
    echo 'Extra: ' . $extra5 . ' Quan: ' . $quan5 . '<br />';
    echo 'Extra: ' . $extra6 . ' Quan: ' . $quan6 . '<br />';
    
      
?>
    
    
</body>
</html>














