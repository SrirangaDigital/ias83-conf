<script type="text/javascript">
$(document).ready(function() {

    var mTop = $('.navbar').height() - 10;
    $('#grid').css('margin-top', mTop + 'px');
    $('.schedule-text').hide();

    var hloc = window.location.href;
    
    var tab = 'day1';
    if(hloc.match('#')){ tab = hloc.split("#")[1]; }

    $('#' + tab).show(function(){

        $('a[href="#' + tab + '"').parent().addClass('active');
        $("html, body").animate({scrollTop: 0}, 1);
    });

    $('.schedule .nav li a').on('click', function(event){

        event.preventDefault();
        tab = $(this).attr('href');
        $('.schedule-text').hide();
        $(tab).show(function(){
            
            window.location.hash = tab;
            $("html, body").animate({scrollTop: 0}, 1);
        });
        $('.schedule .nav li').removeClass('active');
        $(this).parent().addClass('active');
    });
});
</script>

<div class="container">
    <div class="row">
        <!-- Column 1 -->
        <div class="col-md-12 text-center">
            <p>&nbsp;</p>    
        </div>
    </div>
</div>
<div id="grid" class="container gap-above">
    <div class="row">
        <div class="col-md-9 main">
            <h1>Programme Schedule</h1>
            <div class="schedule">
                <ul class="nav nav-justified">
                    <li><a href="#day1">Day 1</a></li>
                    <li><a href="#day2">Day 2</a></li>
                    <li><a href="#day3">Day 3</a></li>
                    <li><a href="#allied">Allied Events</a></li>
                    <li><a href="#spouse">Teachers &amp; Spouses</a></li>
                </ul>
                <div class="schedule-text" id="day1">
                    <h3>3 November 2017 (Friday)</h3>

                    <div class="session">
                        <dl class="dl-horizontal">
                            <dt>
                                0900 – 0930
                            </dt>
                            <dd>
                                <span class="aux">Registration</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 1A: Inauguration and Presidential Address</span><br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                0930 – 1100<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1508569913576">
                                <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Ram Ramaswamy</span><br />
                                JNU, New Delhi<br />
                                <span class="talk">The many flavours of synchrony</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1100 – 1115
                            </dt>
                            <dd>
                                <span class="aux">Group Photograph</span><br />
                                <span class="talk">Venue: Amphitheatre</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1115 – 1200
                            </dt>
                            <dd>Tea break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 1B: Inaugural Lectures by Fellows</span><br />
                        Chairperson: M M Sarin, Physical Research laboratory, Ahmedabad<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                1200 – 1220<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1508570403836">
                                <i class="fa fa-info-circle"></i></a></div>
                            </dt>
                            <dd>
                                <span class="speaker">Shailesh Nayak</span><br />
                                Ministry of Earth Sciences, New Delhi<br />
                                <span class="talk">Towards the Understanding of Triggered Earthquakes</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1225 – 1245<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1508571107398">
                                <i class="fa fa-info-circle"></i></a>&nbsp;
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Gobinda Majumder</span><br />
                                Tata Institute of Fundamental Research, Mumbai<br />
                                <span class="talk">A Journey to the Discovery of Higgs Boson</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1250 – 1400
                            </dt>
                            <dd>Lunch Break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 1C: Inaugural Lectures by Fellow/Associate</span><br />
                        Chairperson: S Ananthakrishnan, Savitribai Phule Pune University, Pune<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                1400 – 1420<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1508571423313">
                                <i class="fa fa-info-circle"></i></a></div>
                            </dt>
                            <dd>
                                <span class="speaker">G D Yadav</span><br />
                                Institute of Chemical Technology, Mumbai<br />
                                <span class="talk">Selectivity Engineering in Sustainable Production of Chemicals, Fuels and Energy from Biomass and Carbon Dioxide</span>
                            </dd>
                        </dl>                        
                        <dl class="dl-horizontal">
                            <dt>
                                1425 – 1445<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1508575237271"><i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Abhishek Banerjee</span><br />
                                Indian Institute of Science, Bengaluru<br />
                                <span class="talk">What is finiteness?</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1450 - 1520
                            </dt>
                            <dd>Tea break</dd>
                        </dl>
                    </div>                    
                    <div class="session">
                        <span class="type">Session 1D: Symposium: ‘New Technologies Changing our lives’</span><br />
                        Chairperson: N Viswanadham, Indian Institute of Science, Bengaluru<br /><br />      
                        <dl class="dl-horizontal">
                            <dt>
                                1520 – 1530
                            </dt>
                            <dd>
                                <span class="speaker">Introduction</span>
                            </dd>
                        </dl>                        
                        <dl class="dl-horizontal">
                            <dt>
                                1530 – 1600<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1508575295367"><i class="fa fa-info-circle"></i></a></div>
                            </dt>
                            <dd>
                                <span class="speaker">Navakanta Bhat</span><br />
                                Indian Institute of Science, Bengaluru<br />
                                <span class="talk">PathShodh: A Journey from Science to Product</span>
                            </dd>
                        </dl>                       
                        <dl class="dl-horizontal">
                            <dt>
                                1600 – 1630<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1508575347695"><i class="fa fa-info-circle"></i></a></div>
                            </dt>
                            <dd>
                                <span class="speaker">V Padmanabhan</span><br />
                                Microsoft Research India, Bengaluru<br />
                                <span class="talk">Low-cost IoT to address societal challenges</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1630 – 1700<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1508575417180"><i class="fa fa-info-circle"></i></a></div>
                            </dt>
                            <dd>
                                <span class="speaker">A Bharadwaj</span><br />
                                Indian Institute of Science, Bengaluru<br />
                                <span class="talk">IoT and its Applications for Smart Cities</span>
                            </dd>
                        </dl>                        
                        <dl class="dl-horizontal">
                            <dt>
                                1700 – 1730<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1508578388184"><i class="fa fa-info-circle"></i></a></div>
                            </dt>
                            <dd>
                                <span class="speaker">Jaywant H Arakeri</span><br />
                                Indian Institute of Science, Bengaluru<br />
                                <span class="talk">Technological and scientific issues related to precision agriculture</span>
                            </dd>
                        </dl>                        
                        <dl class="dl-horizontal">
                            <dt>
                                1730 – 1740
                            </dt>
                            <dd>
                                <span class="speaker">Discussion</span>
                            </dd>
                        </dl>                    
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1740 - 1800
                            </dt>
                            <dd>Tea Break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 1E - Public lecture</span><br />
                        Chairperson: Ram Ramaswamy, Jawaharlal Nehru University, New Delhi<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                1800 - 1900<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1508578479647"><i class="fa fa-info-circle"></i></a></div>
                            </dt>
                            <dd>
                                <span class="speaker">David R Syiemlieh</span><br />
                                Union Public Service Commission, New Delhi<br />
                                <span class="talk">Percival Spear: Historian and Indophile</span>
                            </dd>
                        </dl>                                                
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1930
                            </dt>
                            <dd>Dinner</dd>
                        </dl>
                    </div>                    
                </div>                        
                <div class="schedule-text" id="day2">
                    <h3>4 November 2017 (Saturday)</h3>
                    <div class="session">
                        <span class="type">Session 2A - Special Lecture</span><br />
                        Chairperson: S Chandrasekaran, Indian Institute of Science, Bengaluru<br /><br />                    
                        <dl class="dl-horizontal">
                            <dt>
                                0900 - 0940<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1508578565488"><i class="fa fa-info-circle"></i></a></div>
                            </dt>
                            <dd>
                                <span class="speaker">R Bhatia</span><br />
                                Ashoka University, Sonepat<br />
                                <span class="talk">Averaging of positive definite matrices</span>
                            </dd>
                        </dl>                                                
                    </div> 
                    <div class="session">
                        <span class="type">Session 2B: Inaugural Lectures by Fellows</span><br />
                        Chairperson: Veena K Parnaik, Centre for Cellular &amp; Molecular Biology, Hyderabad<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                0940 - 1000<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1508578634671"><i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">S Sankararaman</span><br />
                                Indian Institute of Technology Madras, Chennai<br />
                                <span class="talk">Restricting the rotation of triple bond through 
                                Π-stacking interactions in molecular hinges</span>
                            </dd>
                        </dl>                                            
                        <dl class="dl-horizontal">
                            <dt>
                                1005 - 1025<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1508578708917"><i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Maneesha S Inamdar</span><br />
                                Jawaharlal Nehru Centre for Advanced Scientific Research, Bengaluru<br />
                                <span class="talk">Stuck in traffic: Transport and energy regulation in blood stem cells</span>
                            </dd>
                        </dl>                        
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1030 - 1050
                            </dt>
                            <dd>Tea break</dd>
                        </dl>
                    </div>           
                    <div class="session">
                        <span class="type">Session 2C: Symposium: ‘Earth Science of the North-East’</span><br />
                        Chairperson: R Ramesh, National Institute of Science Education and Research, Bhubaneswar<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                1050 - 1100
                            </dt>
                            <dd>
                                <span class="speaker">Introduction</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1100 – 1130<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1508578754980"><i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Devesh Walia</span><br />
                                North-Eastern Hill University, Shillong<br />
                                <span class="talk">Study on active tectonics of Shillong Plateau</span>
                            </dd>
                        </dl>                        
                        <dl class="dl-horizontal">
                            <dt>
                                1130 – 1200<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1508578815850"><i class="fa fa-info-circle"></i></a></div>
                            </dt>
                            <dd>
                                <span class="speaker">Rajneesh Bhutani</span><br />
                                Pondicherry University, Puducherry
                                <br />
                                <span class="talk">Origin of Manipur Ophiolite Complex, Indo-Myanmar Range, North-Eastern India</span>
                            </dd>
                        </dl>                        
                        <dl class="dl-horizontal">
                            <dt>
                                1200 – 1230<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1508578881325"><i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Amalava Bhattacharyya</span><br />
                                Birbal Sahni Institute of Paleosciences, Lucknow
                                <br />
                                <span class="talk">Changes of vegetation vis-à-vis Climate since last several thousand years at North-East India</span>
                            </dd>
                        </dl>                        
                        <dl class="dl-horizontal">
                            <dt>
                                1230 – 1300<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1508578929762"><i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Jyotiranjan S Ray</span><br />
                                Physical Research Laboratory, Ahmedabad
                                <br />
                                <span class="talk">Cretaceous carbonatite-alkaline-basaltic magmatism in North-Eastern India and Gondwanaland breakup</span>
                            </dd>
                        </dl>                        
                        <dl class="dl-horizontal">
                            <dt>
                                1300 – 1310
                            </dt>
                            <dd>
                                <span class="speaker">Discussion</span>
                            </dd>
                        </dl>                        
                    </div>                           
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1310 - 1400
                            </dt>
                            <dd>Lunch break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 2D: Inaugural Lectures by Associates/Fellow</span><br />
                        Chairperson: H M Antia, Tata Institute of Fundamental Research, Mumbai<br /><br />                    
                        <dl class="dl-horizontal">
                            <dt>
                                1400 - 1420<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1508578970512"><i class="fa fa-info-circle"></i></a></div>
                            </dt>
                            <dd>
                                <span class="speaker">Aditya Kumar</span><br />
                                Tezpur University, Tezpur
                                <br />
                                <span class="talk">Unveiling DNA structural properties of promoter regions of prokaryotic transcriptome and their role in gene expression</span>
                            </dd>
                        </dl>                    
                        <dl class="dl-horizontal">
                            <dt>
                                1425 - 1445<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1508579173678"><i class="fa fa-info-circle"></i></a></div>
                            </dt>
                            <dd>
                                <span class="speaker">D K Ojha</span><br />
                                Tata Institute of Fundamental Research, Mumbai 
                                <br />
                                <span class="talk">Star formation in the Milky Way Galaxy</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1450 - 1510<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1508579240692"><i class="fa fa-info-circle"></i></a></div>
                            </dt>
                            <dd>
                                <span class="speaker">Giridhar U Kulkarni</span><br />
                                Centre for Nano &amp; Soft Matter Sciences, Bengaluru<br />
                                <span class="talk">From mud cracks to Optoelectronic devices – our efforts in translating invention to technology</span>
                            </dd>
                        </dl>                        
                        <dl class="dl-horizontal">
                            <dt>
                                1515 - 1535<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1508579345904"><i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Y Dhandapani</span><br />
                                Indian Statistical Institute, Bengaluru<br />
                                <span class="talk">Geometry and topology on random point clouds</span>
                            </dd>
                        </dl>                        
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1540 - 1600
                            </dt>
                            <dd>Tea break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        Venue: Auditorium, Old Guest House                        
                        <dl class="dl-horizontal">
                            <dt>
                                1600 - 1730
                            </dt>
                            <dd>
                                <span class="speaker">Business Meeting of Fellows</span>
                            </dd>
                        </dl>
                    </div>                                                                     
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1730 - 1800
                            </dt>
                            <dd>High Tea</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 2E - Public Lecture</span><br />
                        Chairperson: R Ramaswamy, Jawaharlal Nehru University, New Delhi<br /><br />                    
                        <dl class="dl-horizontal">
                            <dt>
                                1800 - 1900<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1508579421484"><i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Sanjoy Hazarika</span><br />
                                Commonwealth Human Rights Initiative, New Delhi
                                <br />
                                <span class="talk">Dilli door Ast? The Margins, Memory and Identity</span>
                            </dd>
                        </dl>                        
                    </div>
                    <div class="session">
                        <dl class="dl-horizontal">
                            <dt>
                                1900 – 2000
                            </dt>
                            <dd>
                                <span class="aux">Cultural Programme</span><br />
                                Venue: TBD
                            </dd>
                        </dl>                    
                    </div>                        
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                2000
                            </dt>
                            <dd>Dinner</dd>
                        </dl>
                    </div>
                </div>
                <div class="schedule-text" id="day3">
                    <h3>5 November 2017 (Sunday)</h3>
                    <div class="session">
                        <span class="type">Session 3A: Inaugural Lectures by Associates/Fellow</span><br />
                        Chairperson: S Sivasanker, Indian Institute of Technology Madras, Chennai<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                0900 – 0920<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1508579467434"><i class="fa fa-info-circle"></i></a></div>
                            </dt>
                            <dd>
                                <span class="speaker">K Yhoshu</span><br />
                                Nagaland University, Lumami<br />
                                <span class="talk">Remote sensing and GIS application for geohazard studies </span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                0925 – 0945<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1508579513314"><i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Ashutosh Ghosh</span><br />
                                University of Calcutta, Kolkata<br />
                                <span class="talk">Hetero-metallic complexes derived from N<sub>2</sub>O<sub>2</sub> donor ligands: Molecular shapes, supramolecular structures, catalysis and magnetism</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                0950 – 1010<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1508579567303"><i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Subhro Bhattacharjee</span><br />
                                International Centre for Theoretical Sciences, Bengaluru <br />
                                <span class="talk">Quantum matter: Life beyond symmetries</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1015 – 1045
                            </dt>
                            <dd>Tea break</dd>
                        </dl>
                    </div>           
                    <div class="session">
                        <span class="type">Session 3B: Inaugural Lectures by Associate/Fellows</span><br />
                        Chairperson: S N Tandon, Inter-University Centre for Astronomy &amp; Astrophysics, Pune<br /><br />                    
                        <dl class="dl-horizontal">
                            <dt>
                                1045 – 1105<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1508579612074"><i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Piyush Srivastava</span><br />
                                Tata Institute of Fundamental Research, Mumbai<br />
                                <span class="talk">Structure recovery in graphical models</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1110 – 1130<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1508580872780"><i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Kaustuv Sanyal</span><br />
                                Jawaharlal Nehru Centre for Advanced Scientific Research, Bengaluru<br />
                                <span class="talk">Molecular evolution of the process of chromosome segregation: Lessons from fungal pathogens</span>
                            </dd>
                        </dl>                        
                        <dl class="dl-horizontal">
                            <dt>
                                1135 – 1155<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1508580905111"><i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Swapan K Datta</span><br />
                                Visva-Bharati University, Santiniketan<br />
                                <span class="talk">Biofortified Rice with stable enhanced Nutrition</span>
                            </dd>
                        </dl>                        
                    </div>
                    <div class="session">
                        <span class="type">Session 3C - Special Lecture</span><br />
                        Chairperson: S S Krishnamurthy, Indian Institute of Science, Bengaluru<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                1200 – 1240<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1508581081913"><i class="fa fa-info-circle"></i></a></div>
                            </dt>
                            <dd>
                                <span class="speaker">Lalit Kumar</span><br />
                                All India Institute of Medical Sciences, New Delhi<br />
                                <span class="talk">Targeted therapy for cancer treatment: Have we found the magic bullet!</span>
                            </dd>
                        </dl>                                                                    
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1240
                            </dt>
                            <dd>Lunch Break</dd>
                        </dl>
                    </div>                                                                     
                </div>
                <div class="schedule-text" id="allied">
                    <br /><br /><span class="type">Allied Events</span>
                    <h3>1 November 2017 (Wednesday)</h3>
                    <div class="session">
                        <dl class="dl-horizontal">
                            <dt>
                                10.00 AM - 01.30 PM<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="#"><i class="fa fa-info-circle"></i></a></div>
                            </dt>
                            <dd>
                                <span class="speaker">The Academy Trust (TAcT) Programme for school students</span><br />
                                Venue: St. Anthony's Higher Secondary School, Don Bosco Square, Shillong<br />
                            </dd>
                        </dl>          
                    </div>
                    <h3>2 November 2017 (Thursday)</h3>
                    <div class="session">
                        <dl class="dl-horizontal">
                            <dt>
                                03.00 PM
                            </dt>
                            <dd>
                                <span class="speaker">Editorial Board Meeting – Pramana</span><br />
                                Venue: Committee room, New Guest House<br />
                                <span class="talk"></span>
                            </dd>
                        </dl>                        
                        <dl class="dl-horizontal">
                            <dt>
                                05.00 PM
                            </dt>
                            <dd>
                                <span class="speaker">Press Conference</span><br />
                                Venue: Committee room, Vice Chancellor's Office<br />
                                <span class="talk"></span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                05.30 PM - 06.30 PM
                            </dt>
                            <dd>
                                <span class="speaker">Meeting with Teachers</span><br />
                                Venue: Committee room, Vice Chancellor's Office<br />
                                <span class="talk"></span>
                            </dd>
                        </dl>                        
                    </div> 
                    <h3>4 November 2017 (Saturday)</h3>
                    <div class="session">
                        <dl class="dl-horizontal">
                            <dt>
                                09.30 AM
                            </dt>
                            <dd>
                                <span class="speaker">Editorial Board Meeting – Bulletin of Material Sciences</span><br />
                                Venue: Committee room, New Guest House<br />
                                <span class="talk"></span>
                            </dd>
                        </dl>                        
                        <dl class="dl-horizontal">
                            <dt>
                                04.00 PM
                            </dt>
                            <dd>
                                <span class="speaker">Business Meeting of Fellows</span><br />
                                Venue: Auditorium, Old Guest House<br />
                                <span class="talk"></span>
                            </dd>
                        </dl>
                    </div>                                               
                </div>
                <div class="schedule-text" id="spouse">
                    <br /><br /><span class="type">Programme for Teachers</span>
                    <h3>2 November 2017 (Thursday)</h3>
                    <div class="session">
                        <dl class="dl-horizontal">
                            <dt>
                                2.00 PM - 3.00 PM
                            </dt>
                            <dd>
                                <span class="speaker">Visit to Sophisticated Instrumentation Facility 
                                (SAIF), NEHU, (near Central Library)</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                3.00 PM - 4.30 PM
                            </dt>
                            <dd>
                                <span class="speaker">Visit to Central Instrumentation Facility, School of Life Sciences</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                05.30 PM - 06.30 PM
                            </dt>
                            <dd>
                                <span class="speaker">Meeting with Teachers</span><br />
                                Venue: Committee room, Vice Chancellor's Office<br />
                                <span class="talk"></span>
                            </dd>
                        </dl>
                    </div>
                    <br /><br /><span class="type">Programme for Spouses</span><br /><br /><br />
                    <span class="speaker">The LOC will facilitate an organized tour during the meeting days to places of tourist’s interest as per the details below:</span>                    
                    <h3>3 November 2017 (Friday)</h3>
                    <div class="session">
                        <dl class="dl-horizontal">
                            <dt>
                                9.00 AM – 1.00 PM
                            </dt>
                            <dd>
                                <span class="speaker">Visit to the Don Bosco Museum</span>
                            </dd>
                        </dl>                        
                        <dl class="dl-horizontal">
                            <dt>
                                1.00 PM – 2.00 PM
                            </dt>
                            <dd>
                                <span class="speaker">Lunch (NEHU Campus)</span>
                            </dd>
                        </dl>                        
                        <dl class="dl-horizontal">
                            <dt>
                                2.00 PM – 5.00 PM
                            </dt>
                            <dd>
                                <span class="speaker">Visit to Police Bazar (popular market)</span>
                            </dd>
                        </dl>
                    </div>
                    <h3>4 November 2017 (Saturday)</h3>
                    <div class="session">
                        <dl class="dl-horizontal">
                            <dt>
                                9.00 AM – 5.00 PM
                            </dt>
                            <dd>
                                <span class="speaker">Local Sight Seeing</span>
                            </dd>
                        </dl>
                    </div>                    
                    <h3>5 November 2017 (Sunday)</h3>
                    <div class="session">
                        <dl class="dl-horizontal">
                            <dt>
                                9.00 AM – 1.00 PM
                            </dt>
                            <dd>
                                <span class="speaker">On specific request</span>
                            </dd>
                        </dl>
                    </div>        
                </div>
            </div>
        </div>
        <div class="col-md-3 sidebar">
<?php require_once('application/views/generalSidebar.php');?>
        </div>
    </div>
</div>
