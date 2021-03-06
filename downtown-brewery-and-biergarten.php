<?php $pageTitle = 'Downtown Brewery & Biergarten'; ?>
<?php include("verification.php");  ?>

<!DOCTYPE html>
<html lang='en'>

<head>
	<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/header.php"); ?>
</head>

<body>

<!-- Side Nav -->
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/side-nav.php"); ?>

<!-- Main Nav -->
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/nav.php"); ?>

<!-- Cover Image -->
<section class="cover" style="background-image: url('/img/cover/downtown-brewery-and-biergarten.jpg');"></section>

<!-- Location Subnav -->
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/subnav.php"); ?>

<!-- Downtown Brewery & Biergarten -->
<section id="about" class="info lg-pad">
    <div class="container">
        <div class="row">
            <div class="five columns biergarten center">
                <h1>Downtown Brewery</h1>
                <h2>&amp; Biergarten</h2>
                <button>MAP IT</button>
            </div>
            <div class="seven columns">
                <p>Our downtown Jacksonville production brewery opened in 2014. We brew on our custom built 20 barrel brewhouse into 60 barrel tanks. This location is dedicated to producing our core brands and some of our seasonal and limited offerings. We also house all of our packaging for distribution in bottles and kegs. Soon after commissioning this location we moved our original 1 barrel steam fired brewhouse downtown from the Jacksonville Beach Brewpub. We feel lucky to have been able to keep this little system that launched us, and we now use it to brew pilot batches of experimental beers, talk about fun! A tap room and biergarten are in the works at this location and will be opening soon!</p>
                <div class="details">
                    <p><strong>Hours&nbsp;</strong> Hours Of Operation</p>
                    <p><strong>Phone&nbsp;</strong> 555-555-5555</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Whats On Tap -->
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/tap.php"); ?>

<!-- Upcoming Events -->
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/events.php"); ?>

<!-- Our Menu - Downtown Brewery & Biergarten -->
<section id="menu" class="food-menu menu lg-pad">
    <div class="container">
        <div class="row">
            <div class="twelve columns center">
                <h1>Our Menu</h1>
                <a href="/img/Engine-15-Menu.pdf"><button>Download Our Menu</button></a>
            </div>
        </div>
        <div class="row">
            <div class="four columns description">
                <h3>Simple Snacks</h3>
                <ul>
                    <li>Snack-o-nuts</li>
                    <li class="right">$4.00</li>
                </ul>
                <ul>
                    <li>Mixed Olive &amp; Feta</li>
                    <li class="right">$5.50</li>
                </ul>
                <ul>
                    <li>Pretzel</li>
                    <li class="right">$3.50</li>
                </ul>
                <h3>Soups &amp; Salads</h3>
                <ul>
                    <li>House Made Tomato Soup &amp; Grilled Cheese Croutons</li>
                    <li class="right">$5.00</li>
                </ul>
                <ul>
                    <li>Engine 15 Chili</li>
                    <li class="right">$5.00</li>
                </ul>
                <ul>
                    <li>House Salad</li>
                    <li class="right">$4.00</li>
                </ul>
                <ul>
                    <li>Engine 15 Greek Salad</li>
                    <li class="right">$8.00</li>
                </ul>
                <h3>Small Plates</h3>
                <ul>
                    <li>Chips &amp; Beer Queso</li>
                    <li class="right">$5.00</li>
                </ul>
                <ul>
                    <li>Empanadas</li>
                    <li class="right">$3.50</li>
                </ul>
                <ul>
                    <li>Loaded Down Chili Nachos</li>
                    <li class="right">$9.00</li>
                </ul>
                <ul>
                    <li>Pigs In Blankets</li>
                    <li class="right">$6.00</li>
                </ul>
                <h3>Flatbreads</h3>
                <ul>
                    <li>Smoked Tomato</li>
                    <li class="right">$7.00</li>
                </ul>
                <ul>
                    <li>Smoked Chicken</li>
                    <li class="right">$8.50</li>
                </ul>
                <ul>
                    <li>Little Piggy</li>
                    <li class="right">$8.50</li>
                </ul>
                <h3>Deserts</h3>
                <ul>
                    <li>Snicker Dumplings</li>
                    <li class="right">$4.00</li>
                </ul>
                <ul>
                    <li>Smore's Empanada</li>
                    <li class="right">$4.00</li>
                </ul>
                <h3>Beer Flights</h3>
                <ul>
                    <li><p style="float: left;">Our beer flights are designed to allow you to compare and contrast the flavor profiles of varying styles of beer from all over the world. We pour your choice of four 4oz glasses from our current draft selection.</p></li>
                    <li class="right">$5.00</li>
                </ul>
            </div>
            <div class="eight columns description">
                <h3>Liquid Lunch</h3>
                <p>Choose any entree below or mix it up and get two half portions. Just $9 and it comes with a FREE Engine 15 draft beer! Only available from 11am – 3pm.</p>
                <ul class="list">
                    <li>The B-B-Cuban</li>
                    <li>Gyros</li>
                    <li>The Split Sheboygan</li>
                    <li>Smoked Tomato Flatbread</li>
                    <li>Beer Brats</li>
                    <li>Smoked Chicken Flatbread</li>
                    <li>Smoked Brisket Sandwich</li>
                    <li>Little Piggy Flatbread</li>
                    <li>Frito Pie</li>
                </ul>
                <h3>Big Plates</h3>
                <p>*Big Plates served with your choice of chips, house made macaroni salad or beans and rice.</p>
                <ul>
                    <li>The B-B-Cuban</li>
                    <li class="right">$8.50</li>
                    <p>Here is where Cuba &amp; Old Dixie meet. This pressed sandwich is stuffed with slow smoked pulled pork, ham, swiss, mustard and a stacker pickle.</p>
                </ul>
                <ul>
                    <li>The Split Sheboygan</li>
                    <li class="right">$8.00</li>
                    <p>Toasted Roll with two split beer brats piled with peppers, onions &amp; swiss cheese.</p>
                </ul>
                <ul>
                    <li>Beer Brats</li>
                    <li class="right">$5.00 or 2 for $8.00</li>
                    <p>Classic beer brats simmered in beer &amp; sauerkraut served on a toasted roll. Mustard on the side. Don’t like kraut? Make them chili brats for a $1 more.</p>
                </ul>
                <ul>
                    <li>Brisket Beer Dip Sandwich</li>
                    <li class="right">$8.00</li>
                    <p>House smoked brisket topped with peppers, onions and swiss cheese. Served with beer jus for dipping.</p>
                </ul>
                <ul>
                    <li>Frito Pie</li>
                    <li class="right">$7.50</li>
                    <p>A Texas tradition! It’s fritos topped with our beer queso then smothered with Engine 15 chili and then topped off with shredded cheese, diced onions &amp; sour cream.</p>
                </ul>
                <ul>
                    <li>Gyros</li>
                    <li class="right">$6.00 or 2 for $9.00</li>
                    <p>Lamb and beef gyros with diced tomatoes red onion and mixed greens. Finished with a cool &amp; creamy cucumber yogurt.</p>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Social -->
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/social.php"); ?>

<!-- Footer -->
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/footer.php"); ?>

</body>
</html>
