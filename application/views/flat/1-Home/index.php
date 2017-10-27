<script type="text/javascript">
$(document).ready(function() {

    var htmlWidth = $('html').outerWidth();

    if(htmlWidth >= 768)
        $('#social .info-icon i').css("line-height", $('#twitterContainer').height() + "px");

    var containerWidth = $('.container').outerWidth();

    var gutter = $('.fancy .text').css('margin-left').replace("px", "");

    $('.fancy .text').each(function(){

        $(this).before('<span class="before">&nbsp;</span>');
        $(this).after('<span class="after">&nbsp;</span>');

        var fancyWidth = Math.round((containerWidth - $(this).outerWidth() - (2 * gutter)) / 2);

        $(this).prev('.before').css("width", fancyWidth);
        $(this).next('.after').css("width", fancyWidth);
    });    
});
</script>

<script src='https://www.google.com/recaptcha/api.js'></script>

<div class="container clear-paddings" id="home">
    <div class="row first-row">
        <div class="col-md-12 clear-paddings">
            <div class="fixOverlayDivHome">
                <!-- <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/banner.jpg" alt="Credits: Nohkalikai Falls, 50 kilometres outside Shillong, is among several stunning waterfalls in Meghalaya. Daniel J. Rao / Alamy / phocalmedia.com"> -->
                <div class="OverlayTextMain">
                    <div class="mainpage">
                        <h2>83<sup>rd</sup> Annual Meeting</h2>
                        <p>3&ndash;5 November 2017 <br />North-Eastern Hill University, Shillong</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container clear-paddings">
    <div class="row">
        <div class="col-md-2 col-xs-12">
            <div class="intro logos">
                <p>
                    <img src="<?=PUBLIC_URL?>images/logo.png" alt="IAS Logo" /><br />
                    <img src="<?=PUBLIC_URL?>images/stock/nehulogo.png" alt="North-Eastern Hill University Logo" />
                </p>
            </div>
        </div>
        <div class="col-md-10">
            <div class="intro">
                <p>The Indian Academy of Sciences, Bengaluru, through many scientific meetings, symposia, and public lectures it organizes, aims to facilitate scientific exchange among researchers and to highlight novel findings both within the scientific community and the public. The Mid-Year Meetings held during July at Bengaluru and the Annual Meetings held during November at different scientific institutions in the country are the two major annual events of the Academy in this context. The events every year see enthusiastic participation of the Fellowship of the Academy along with researchers, teachers, students, and other invitees across the nation.</p>
                <p>The <strong>83rd Annual Meeting of the Academy</strong> is being organized during <strong>3&ndash;5 November 2017 at North-Eastern Hill University, Shillong.</strong></p>
            </div>
        </div>
    </div>        
</div>


<!-- Registration -->
<!-- <div class="container clear-paddings" id="registration">
    <div class="row">
        <div class="col-md-12">
           <p class="subtitle fancy"><span class="text">Registration</span></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="reg">Fellows of the Academy and invited teachers who have not yet registered,<br /> please register <a href="http://web-japps.ias.ac.in:8080/Annualmeeting2017/annual/register/Register.jsp" target="_blank">here</a></p>
        </div>
    </div>
</div> -->

<!--Speakers -->
<div class="container clear-paddings" id="speakers">
    <div class="row">
        <div class="col-md-12">
            <p class="subtitle fancy"><span class="text">Speakers</span></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="speaker-type">Presidential Address</p>
            <a href="<?=BASE_URL?>describe/profile/1508569913576">
                <img src="http://www.ias.ac.in/ias-cms/public/data/meetings/1508569913576/profile.jpg" class="speaker-thumbnail" alt="Ramakrishna Ramaswamy" title="Ramakrishna Ramaswamy"/>
                <figcaption class="figure-caption text-xs-right">Ramakrishna Ramaswamy</figcaption>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="speaker-type">Inaugural Lectures of Fellows &amp; Associates / Special Lectures / Public Lectures / Symposia Lectures</p>
            <a href="<?=BASE_URL?>describe/profile/1508570403836">
                <img src="http://www.ias.ac.in/ias-cms/public/data/meetings/1508570403836/profile.jpg" class="speaker-thumbnail" alt="Shailesh Nayak" title="Shailesh Nayak"/>
                <figcaption class="figure-caption text-xs-right">Shailesh Nayak</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1508571107398">
                <img src="http://www.ias.ac.in/ias-cms/public/data/meetings/1508571107398/profile.jpg" class="speaker-thumbnail" alt="Gobinda Majumder" title="Gobinda Majumder"/>
                <figcaption class="figure-caption text-xs-right">Gobinda Majumder</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1508571423313">
                <img src="http://www.ias.ac.in/ias-cms/public/data/meetings/1508571423313/profile.jpg" class="speaker-thumbnail" alt="G D Yadav" title="G D Yadav"/>
                <figcaption class="figure-caption text-xs-right">G D Yadav</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1508575237271">
                <img src="http://www.ias.ac.in/ias-cms/public/data/meetings/1508575237271/profile.jpg" class="speaker-thumbnail" alt="Abhishek Banerjee" title="Abhishek Banerjee"/>
                <figcaption class="figure-caption text-xs-right">Abhishek Banerjee</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1508575295367">
                <img src="http://www.ias.ac.in/ias-cms/public/data/meetings/1508575295367/profile.jpg" class="speaker-thumbnail" alt="Navakanta Bhat" title="Navakanta Bhat"/>
                <figcaption class="figure-caption text-xs-right">Navakanta Bhat</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1508575347695">
                <img src="http://www.ias.ac.in/ias-cms/public/data/meetings/1508575347695/profile.jpg" class="speaker-thumbnail" alt="V Padmanabhan" title="V Padmanabhan"/>
                <figcaption class="figure-caption text-xs-right">V Padmanabhan</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1508575417180">
                <img src="http://www.ias.ac.in/ias-cms/public/data/meetings/1508575417180/profile.jpg" class="speaker-thumbnail" alt="Amrutur Bharadwaj" title="Amrutur Bharadwaj"/>
                <figcaption class="figure-caption text-xs-right">Amrutur Bharadwaj</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1508578388184">
                <img src="http://www.ias.ac.in/ias-cms/public/data/meetings/1508578388184/profile.jpg" class="speaker-thumbnail" alt="Jaywant H Arakeri" title="Jaywant H Arakeri"/>
                <figcaption class="figure-caption text-xs-right">Jaywant H Arakeri</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1508578479647">
                <img src="http://www.ias.ac.in/ias-cms/public/data/meetings/1508578479647/profile.jpg" class="speaker-thumbnail" alt="David R Syiemlieh" title="David R Syiemlieh"/>
                <figcaption class="figure-caption text-xs-right">David R Syiemlieh</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1508578565488">
                <img src="http://www.ias.ac.in/ias-cms/public/data/meetings/1508578565488/profile.jpg" class="speaker-thumbnail" alt="R Bhatia" title="R Bhatia"/>
                <figcaption class="figure-caption text-xs-right">R Bhatia</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1508578634671">
                <img src="http://www.ias.ac.in/ias-cms/public/data/meetings/1508578634671/profile.jpg" class="speaker-thumbnail" alt="S Sankararaman" title="S Sankararaman"/>
                <figcaption class="figure-caption text-xs-right">S Sankararaman</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1508578708917">
                <img src="http://www.ias.ac.in/ias-cms/public/data/meetings/1508578708917/profile.jpg" class="speaker-thumbnail" alt="Maneesha S Inamdar" title="Maneesha S Inamdar"/>
                <figcaption class="figure-caption text-xs-right">Maneesha S Inamdar</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1508578754980">
                <img src="http://www.ias.ac.in/ias-cms/public/data/meetings/1508578754980/profile.jpg" class="speaker-thumbnail" alt="Devesh Walia" title="Devesh Walia"/>
                <figcaption class="figure-caption text-xs-right">Devesh Walia</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1508578815850">
                <img src="http://www.ias.ac.in/ias-cms/public/data/meetings/1508578815850/profile.jpg" class="speaker-thumbnail" alt="Rajneesh Bhutani" title="Rajneesh Bhutani"/>
                <figcaption class="figure-caption text-xs-right">Rajneesh Bhutani</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1508578881325">
                <img src="http://www.ias.ac.in/ias-cms/public/data/meetings/1508578881325/profile.jpg" class="speaker-thumbnail" alt="Amalava Bhattacharyya" title="Amalava Bhattacharyya"/>
                <figcaption class="figure-caption text-xs-right">Amalava Bhattacharyya</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1508578929762">
                <img src="http://www.ias.ac.in/ias-cms/public/data/meetings/1508578929762/profile.jpg" class="speaker-thumbnail" alt="Jyotiranjan S Ray" title="Jyotiranjan S Ray"/>
                <figcaption class="figure-caption text-xs-right">Jyotiranjan S Ray</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1508578970512">
                <img src="http://www.ias.ac.in/ias-cms/public/data/meetings/1508578970512/profile.jpg" class="speaker-thumbnail" alt="Aditya Kumar" title="Aditya Kumar"/>
                <figcaption class="figure-caption text-xs-right">Aditya Kumar</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1508579173678">
                <img src="http://www.ias.ac.in/ias-cms/public/data/meetings/1508579173678/profile.jpg" class="speaker-thumbnail" alt="Devendra Ojha" title="Devendra Ojha"/>
                <figcaption class="figure-caption text-xs-right">Devendra Ojha</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1508579240692">
                <img src="http://www.ias.ac.in/ias-cms/public/data/meetings/1508579240692/profile.jpg" class="speaker-thumbnail" alt="Giridhar U Kulkarni" title="Giridhar U Kulkarni"/>
                <figcaption class="figure-caption text-xs-right">Giridhar U Kulkarni</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1508579345904">
                <img src="http://www.ias.ac.in/ias-cms/public/data/meetings/1508579345904/profile.jpg" class="speaker-thumbnail" alt="Y Dhandapani" title="Y Dhandapani"/>
                <figcaption class="figure-caption text-xs-right">Y Dhandapani</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1508579421484">
                <img src="http://www.ias.ac.in/ias-cms/public/data/meetings/1508579421484/profile.jpg" class="speaker-thumbnail" alt="Sanjoy Hazarika" title="Sanjoy Hazarika"/>
                <figcaption class="figure-caption text-xs-right">Sanjoy Hazarika</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1508579467434">
                <img src="http://www.ias.ac.in/ias-cms/public/data/meetings/1508579467434/profile.jpg" class="speaker-thumbnail" alt="Kedovikho Yhoshu" title="Kedovikho Yhoshu"/>
                <figcaption class="figure-caption text-xs-right">Kedovikho Yhoshu</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1508579513314">
                <img src="http://www.ias.ac.in/ias-cms/public/data/meetings/1508579513314/profile.jpg" class="speaker-thumbnail" alt="Ashutosh Ghosh" title="Ashutosh Ghosh"/>
                <figcaption class="figure-caption text-xs-right">Ashutosh Ghosh</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1508579567303">
                <img src="http://www.ias.ac.in/ias-cms/public/data/meetings/1508579567303/profile.jpg" class="speaker-thumbnail" alt="Subhro Bhattacharjee" title="Subhro Bhattacharjee"/>
                <figcaption class="figure-caption text-xs-right">Subhro Bhattacharjee</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1508579612074">
                <img src="http://www.ias.ac.in/ias-cms/public/data/meetings/1508579612074/profile.jpg" class="speaker-thumbnail" alt="Piyush Srivastava" title="Piyush Srivastava"/>
                <figcaption class="figure-caption text-xs-right">Piyush Srivastava</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1508580872780">
                <img src="http://www.ias.ac.in/ias-cms/public/data/meetings/1508580872780/profile.jpg" class="speaker-thumbnail" alt="Kaustuv Sanyal" title="Kaustuv Sanyal"/>
                <figcaption class="figure-caption text-xs-right">Kaustuv Sanyal</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1508580905111">
                <img src="http://www.ias.ac.in/ias-cms/public/data/meetings/1508580905111/profile.jpg" class="speaker-thumbnail" alt="Swapan K Datta" title="Swapan K Datta"/>
                <figcaption class="figure-caption text-xs-right">Swapan K Datta</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1508581081913">
                <img src="http://www.ias.ac.in/ias-cms/public/data/meetings/1508581081913/profile.jpg" class="speaker-thumbnail" alt="Lalit Kumar" title="Lalit Kumar"/>
                <figcaption class="figure-caption text-xs-right">Lalit Kumar</figcaption>
            </a>
        </div>
    </div>
</div>

<!-- Schedule -->
<div class="container-fluid clear-paddings" id="schedule">
    <div class="row">
        <div class="col-md-12">
            <p class="subtitle fancy"><span class="text">Schedule</span></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <a href="<?=BASE_URL?>Schedule#day1">
                <div id="block1" class="col-md-3 schedule-block">
                    <p class="dayNum">Day 1</p>
                    <p class="date">3 Nov 2017</p>
                    <p class="day">Friday</p>
                </div>
            </a>
            <a href="<?=BASE_URL?>Schedule#day2">
                <div id="block2" class="col-md-3 schedule-block">
                    <p class="dayNum">Day 2</p>
                    <p class="date">4 Nov 2017</p>
                    <p class="day">Saturday</p>
                </div>
            </a>
            <a href="<?=BASE_URL?>Schedule#day3">
                <div id="block3" class="col-md-3 schedule-block">
                    <p class="dayNum">Day 3</p>
                    <p class="date">5 Nov 2017</p>
                    <p class="day">Sunday</p>
                </div>
            </a>
            <a href="<?=BASE_URL?>Schedule#allied">
                <div id="block4" class="col-md-3 schedule-block" style="padding: 43px 0 42px">
                    <p class="date">Allied Events</p>
                    <p class="day">1, 2 &amp; 4 Nov 2017</p>
                </div>
            </a>
            <a href="<?=BASE_URL?>Schedule#spouse">
                <div id="block5" class="col-md-3 schedule-block" style="padding: 43px 0 43px">
                    <p class="date" style="width: 80%">Teachers &amp; Spouses</p>
                    <p class="day">2 &amp; 5 Nov 2016</p>
                </div>
            </a>
        </div>
    </div>
</div>

<!-- Information for participants -->
<div class="container clear-paddings" id="information">
    <div class="row">
        <div class="col-md-12">
            <p class="subtitle fancy"><span class="text">For Participants</span></p>
        </div>
    </div>
    <div class="row" style="line-height: 150px">
        <div class="col-md-12">
            <a href="<?=BASE_URL?>Information/List_of_Participants" class="info-icon"><i class="fa fa-list-ul"></i><br />List of Participants</a>
            <a href="<?=BASE_URL?>Information/Venue" class="info-icon"><i class="fa fa-map-marker"></i><br />Venue</a>
            <a href="<?=BASE_URL?>Information/Accommodation" class="info-icon"><i class="fa fa-bed"></i><br />Hospitality</a>
            <a href="<?=BASE_URL?>Information/Transport" class="info-icon"><i class="fa fa-bus"></i><br />Logistics</a><br />
            <a href="<?=BASE_URL?>Information/Contact" class="info-icon"><i class="fa fa-phone"></i><br />Contact</a>
            <a href="<?=BASE_URL?>Information/Downloads" class="info-icon"><i class="fa fa-download"></i><br />Downloads</a>
            <a href="<?=BASE_URL?>Information/Other" class="info-icon"><i class="fa fa-ellipsis-h"></i><br />Other information</a>
        </div>
    </div>
</div>

<!-- Information for participants -->
<div class="container clear-paddings" id="social">
    <div class="row">
        <div class="col-md-12">
            <p class="subtitle fancy"><span class="text">Follow</span></p>
        </div>
    </div>
    <div class="row" id="twitterContainer">
        <div class="col-md-6 col-sm-12">
            <a class="twitter-timeline"  href="https://twitter.com/search?q=%23IASc83AM%20from%3A%40IAScBng" data-widget-id="923905220559519744">Tweets about #IASc83AM from:@IAScBng</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
        <div class="col-md-6 text-center col-sm-12">
            <a target="_blank" title="YouTube" href="https://www.youtube.com/channel/UC5Aq2JESu0QLmP9WveZSvbQ" class="info-icon"><i class="fa fa-youtube"></i></a>
            <a target="_blank" title="Twitter" href="https://twitter.com/IAScBng" class="info-icon"><i class="fa fa-twitter"></i></a>
            <a target="_blank" title="Facebook" href="https://www.facebook.com/IAScBng" class="info-icon"><i class="fa fa-facebook"></i></a>
            <a target="_blank" title="Blog" href="http://www.ias.ac.in/public/blog/index.php/about-this-blog/" class="info-icon"><i class="fa fa-wordpress"></i></a>
        </div>
    </div>
</div>