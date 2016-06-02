<?php
/**
 * @file
 * Templated output.
 */
?>

<div>
    <?php print $splash; ?>
    <div id='page_title'>
        <h1>SOURCE OF LABOUR MARKET DATA</h1>
        <p class='header_text'>
            Our comprehensive labour market and talent management reports provides organizations with vital information for
            forecasting, planning and execution on labour strategies
        </p>
        <input id = 'join' type="button" class="contact-button" value="JOIN THE BETA"/>
    </div>

    <div id = 'about_us_wrapper'>
        <div id = 'about_us'>
            <h1>ABOUT US</h1>
            <?php print $mac; ?>
            <p class = 'leadin'>Bacon ipsum dolor amet labore ham hock dolore ad, tri-tip spare ribs commodo meatloaf minim sed tongue. Dolore alcatra shoulder aliqua landjaeger.</p>
            <p> Shank deserunt commodo, shankle turducken doner sausage occaecat exercitation. Pastrami tongue chuck commodo duis non filet mignon boudin.

                Officia laboris shankle meatloaf salami. Velit officia nulla ad laborum. Qui pancetta doner in, sirloin rump brisket filet mignon porchetta turducken excepteur fatback dolor. Nisi pork chop ribeye ad tenderloin cow spare ribs hamburger exercitation fugiat esse commodo irure.</p>
        </div>
        <input type="button" class="contact-button" value="CONTACT US"/>
    </div>
    <div id='service-wrapper'>
        <div id='analysis' class='service'>
            <?php print $analysis; ?>
            <p>ANALYSIS</p>
            <p class='about_text'>
                Beard  tote bag occupy messenger bag. Gastropub sriracha raw denim franzen, artisan hella slow-carb microdosing lo-fi sustainable.
            </p>
        </div>
        <div id='reporting' class='service'>
            <?php print $reporting; ?>
            <p>REPORTING</p>
            <p class='about_text'>
                Salvia seitan franzen cardigan wayfarers. Gluten-free twee health goth flannel leggings tilde, blue bottle helvetica raw denim. Man bun paleo kombucha selvage schlitz yuccie. Skateboard tumblr tacos locavore godard. 
            </p>
        </div>
        <div id='consulting' class='service'>
            <?php print $consulting; ?>
            <p>CONSULTING</p>
            <p class='about_text'>
                Lo-fi tote bag freegan whatever. 8-bit gentrify plaid VHS forage, mlkshk tote bag master cleanse readymade keffiyeh typewriter. Pork belly bitters yuccie, biodiesel cray street art bicycle rights flannel chia pug slow-carb seitan hammock. Ramps YOLO church-key vinyl, flexitarian flannel lo-fi ethical pabst sriracha gluten-free small batch helvetica brooklyn gochujang.
            </p>
        </div>
    </div>
    <div></div>
    <div id='ir_features'>
        <h1>FEATURES</h1>
        <?php print $features; ?>
    </div>

    <div id='sign_up'>
        <h1>SIGN UP FOR BETA</h1>
        <p class='greeting'>Try the beta version to get an idea of how things work.  We'd be happy to have you on board!</p>
        <?php print $user; ?> <br />
        <?php print $email; ?> <br />
        <?php print $password; ?> <br />
        <input type="button" class="signup-button" value="SIGN UP"/>
    </div>

    <div id='questions'>
        <h1>GOT QUESTIONS?</h1>
        <p class='greeting'>Contact our customer support team if you have further questions? <br>
            We are here to help you!
        </p>
        <p id='contact_info'>
            <span id='envelope' class='icon'> <?php print $envelope; ?> support@free.com</span><span class='icon'> <?php print $receiver; ?> +48 504 176933 </span>   
        </p>
         
    </div>

