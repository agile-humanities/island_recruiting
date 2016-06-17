<?php
/**
 * @file
 * Templated output.
 */
$stop = 'here';
?>

<div>
    <div id='ir_logo'>
        <?php print $logo; ?>
    </div>

    <div id='ir_menu'>
        <br>
        <p id='recruiting_menu'>
            <a href="#about">ABOUT</a>
            <a href="#features">FEATURES</a>
            <a href="blog">BLOG</a>
            <?php print $login_link; ?>
        </p>
    </div>
    <?php print $splash; ?>
    <a name="about"></a>
    <div id = 'about_us_wrapper'>

        <div id = 'about_us'>
            <h1>ABOUT US</h1>
            <br />
            <?php print $mac; ?>
            <p>At LabourMine we love the saying “A picture is worth a thousand words” because data paints a big picture and we’re all about data at LabourMine.  
                The right picture provides insight, direction and value…. all in one package. So perhaps you could call us artists at LabourMine and not Data 
                Scientists.
            </p>
            <p>
                Labour Mine Data Analytics specializes in data analytics for the labour market in Canada. The popularity of data analytics has increased in recent 
                years due to the fact that data collection has increased so rapidly.  
            </p>
            <p>
                <strong>So what is Data Analytics?</strong> Data Analytics simply is the process of collecting large sets of data and discovering patterns and other useful information 
                that will allow you to see a different picture, to focus in on what is truly important and to see what ultimately engages customers.  LabourMine can 
                help your organization harvest data and use it to generate new opportunities and more efficient ways to do business. 
            </p>
            <p>

                For more information on our services contact us today and let us help you with your data.
            </p>
        </div>
        <input type="button" class="contact-button" onclick = "window.location.replace('#contact')" value="CONTACT US"/>
    </div>
    <div id='service-wrapper'>
        <div id='analysis' class='service'>
            <?php print $analysis; ?>
            <p class='headline'>ANALYSIS</p>
            <p class='about_text'>
                Our team will help you collect and analyze multiple data sources to provide data analysis tailored to your specific needs, large and small.              </p>
        </div>
        <div id='reporting' class='service'>
            <?php print $reporting; ?>
            <p class='headline'>REPORTING</p>
            <p class='about_text'>
                LabourMine will create custom reports for your organization from our data or yours. Whether it's labour market data, 
                compensation analysis, or customer experience data, we can gather the information and generate reports specifically 
                tailored to your organizational needs. 
            </p>
        </div>
        <div id='consulting' class='service'>
            <?php print $consulting; ?>
            <p class='headline'>CONSULTING</p>
            <p class='about_text'>
                If you’re trying to make sense of data that your organization currently has or if you’d like to collect data, our 
                consultants can help you. We can develop solutions from the ground up or help you improve what you currently have in place. 
            </p>
        </div>
    </div>
    <div></div>
    <a name="features"></a>
    <div id='ir_features'>
        <h1>FEATURES</h1>
        <p class='headline'>LabourMine has a range of data products for multiple industry verticals to suit your needs.</p>
        <?php print $features; ?>
    </div>

    <div id='sign_up'>
        <h1>SIGN UP FOR NEWSLETTER</h1>
        <p class='greeting'>
            LabourMine has a range of data products for multiple industry verticals to suit your needs.
        </p>
        <?php print $email_form; ?> <br />
    </div>

    <!--    <div id='products'>
            <h1>PRODUCTS</h1>
            <p class='greeting'>
                LabourMine has a range of data products for multiple industry verticals to suit your needs.
            </p>
            <ul>
                <li>LabourMine LMI-PAP (Labour Market Intelligence Predictive Analytics Platform)</li>
                <li>Labour Supply Resume Screening Service</li>
                <li>Employer Skill Inventory and Analysis</li>
                <li>Biz Metric – Key Indicator Performance Data Collection and Analysis</li>
                <li>Customer Behaviour Analytics </li>
                <li>Income Density Reporting</li>
                <li>Real Estate Inventory Toolset</li>
            </ul>
        </div>
    </div>-->

    <a name="contact"></a>
    <div id='questions'>
        <h1>CONTACT US</h1>
        <p class='greeting'>Contact the LabourMine Consultants if you have further questions? <br>
            We are here to help you!
        </p>
        <p id='contact_info'>
            <span id='envelope' class='icon'> <?php print $envelope; ?> support@free.com</span><span class='icon'> <?php print $receiver; ?> +48 504 176933 </span>   
        </p>

    </div>

</div>