<?php 
ob_start();
require_once("library/sponsors.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<!--[if IE 7]><body class="ie7"><![endif]-->
<!--[if lt IE 9]> 
	<script src="js/html5.js"></script>
<![endif]-->
<!--[if (gte IE 6)&(lte IE 8)]>
  <script type="text/javascript" src="js/selectivizr.js"></script>
<![endif]-->
<!--[if lte IE 8]>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet" type="text/css">
<![endif]-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-2311935-32', 'auto');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');
</script>
<title>ThinkEdu Conclave 2020 | Partners</title>

<link rel="stylesheet" type="text/css" media="screen, projection" href="style.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.1.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#menu').superfish();
});
</script>

<script type="text/javascript" src="js/jquery.carousel.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('#my-carousel-3').carousel({
		itemsPerPage: 5,
		itemsPerTransition: 3,
		easing: 'linear',
		noOfRows: 6
	});
	$(".mask ul li").mouseenter( function () {
		var index1 = $(this).index();
		var left_pos = $(this).offset().left - 25;
		var top_pos = $(this).offset().top - 22;
		$("#right-col .preview-new").empty();
		$(".mask ul li .preview").eq(index1).clone().prependTo("#right-col .preview-new");
		$("#right-col .preview-new").css("top", top_pos+"px");
		$("#right-col .preview-new").css("left", left_pos+"px");
		$("#right-col .preview-new").show();
		$("#right-col .preview-new").mouseenter(function () {
			$("#right-col .preview-new").show();
		}).mouseleave( function () {
			$("#right-col .preview-new").hide();
		});
	}).mouseleave( function () {
		$("#right-col .preview-new").hide();
    });
});
</script>


</head>

<body>
    <?php require_once("header.php"); ?>
    
    <section id="three-column">
    	<div class="container">
        	<div class="top-heading-container">
            	<h3>Thinkedu CONCLAVE 2020</h3>
                <h1>Partners</h1>
            </div> <!--End of top-heading-container -->
            <div class="clear"></div>


<!--<div id="right-col" class="margin-top-30 overflow">
<ul class="sponsors">
<li>Presenting Partner : Sastra University</li><br/>
<li>Gold Partners : Wave, Yes Bank</li><br/>
<li>Silver Partner: Galgotias University</li><br/>
<li>Associate Partners : BPCL, HPCL</li><br/>
<li>Travel Partner: Air India</li>
</ul>
</div>-->
 
<!-- <div id="col-three" class="margin-top-30"><div><br/><br/><br/><img src="images/partner-page-tcs.jpg" alt="" /></div></div>
<div id="col-two" class="margin-top-30">
<h4>Presenting Partner : TCS</h4>
<p>Tata Consultancy Services (TCS) is an IT services, consulting and business solutions organisation that has been partnering with many of the world's largest businesses in their transformation journeys for the last fifty years. TCS offers a consulting-led, cognitive-powered, integrated portfolio of business, technology and engineering services and solutions. This is delivered through its unique Location Independent Agile delivery model, recognised as a benchmark of excellence in software development.<br/><br/>
A part of the Tata Group, India's largest multinational business group, TCS has over 4,17,000 of the world's best-trained consultants in 46 countries. The company generated consolidated revenues of US $19.09 billion in the fiscal year ending March 31, 2018, and is listed on the BSE (formerly Bombay Stock Exchange) and the NSE (National Stock Exchange) in India. TCS' proactive stance on climate change and award-winning work with communities across the world have earned it a place in leading sustainability indices such as the Dow Jones Sustainability Index (DJSI), MSCI Global Sustainability Index and the FTSE4Good Emerging Index.</p> 
                <div class="divider">&nbsp;</div></div> -->
<div id="col-three" class="margin-top-30"><div><br/><br/><br/><img src="images/partner-page-sastra-18.jpg" alt="" /></div></div>
<div id="col-two" class="margin-top-30">
<h4>Presenting Partner : Sastra University</h4>
<p>SASTRA was established in 1984 in the historic temple town of Thanjavur in Tamilnadu as Shanmugha College of Engineering and conferred with Deemed University status during April 2001.</p>
<p> The University offers various UG, PG & Ph. D. programmes in Engineering, Science, Management, Law and Arts
SASTRA is a comprehensive university engaged in quality teaching, contemporary training, vibrant research & active consultancy 
SASTRA is recognized as a Scientific & Industrial Research Organization (SIRO) by the Government of India and is undertaking research for various agencies like DST, DBT, AYUSH, DRDO, DRDL, ISRO, BRNS, etc. besides for corporates  </p>
<p>SASTRA is re-accredited (III cycle) by the National Assessment & Accreditation Council (NAAC) with the maximum 'A' grade and also ranked amongst the top universities by the Government of India through the NIRF and other global ranking agencies like Times Higher Education & QS. </p>
<p>SASTRA is recognized as a Category I University as per the UGC’s Graded Autonomy Regulations, 2018
Transparent admission, High quality of placements of SASTRA graduates, publication output from on-going research, social-engagement for translational research & service, etc. have gained acclaim from various stakeholders </p>
<p>
SASTRA is also actively involved in various social & community development projects for the betterment & upliftment of the society & its people from differently challenged environments.</p>
                <div class="divider">&nbsp;</div></div>
<!--<div id="col-three" class="margin-top-30"><div><br/><br/><br/><img src="images/SBI_parter.jpg" alt="" /></div></div>
<div id="col-two" class="margin-top-30">
<h4>Banking Partner : SBI</h4>
<p>State Bank of India (SBI) is the largest commercial bank in terms of assets, deposits, branches, customers and employees. It is also the largest mortgage lender in the country. As on September 30, 2019, the bank has a deposit base of over Rs. 30 lakh crore with CASA ratio of little more than 45% and advances of nearly Rs. 22.5 lakh crore. SBI commands 25% market share each in home loans and auto loans. The Bank has the largest network of nearly 22,000 branches in India with an ATM / CDM network of over 58,500. The number of customers using internet banking facility are 66 million and mobile banking services stand more than 15 million. Downloads for YONO - an integrated digital and lifestyle platform by SBI - are over 28 million, with more than 4 million logins per day. On social media platforms, SBI has the highest number of followers on Facebook, YouTube, LinkedIn and Pinterest. The Bank tops the list of followers on Facebook and YouTube across all banks worldwide.</p>
                <div class="divider">&nbsp;</div></div>
<div id="col-three" class="margin-top-30"><div><br/><br/><br/><img src="images/Petronet-LNG-235x133.jpg" alt="" /></div></div>
<div id="col-two" class="margin-top-30">
<h4>Associate Partners : PETRONET LNG</h4>
<p>Petronet LNG Limited formed in 1998, as a joint venture by India’s four major Oil and Gas public sector undertakings to import LNG and set up LNG terminals in the country. Today, itis one of the fastest growing world-class companies in the Indian energy sector. It has set up the country's first LNG receiving and regasification terminal at Dahej, Gujarat, and another terminal at Kochi, Kerala. While the Dahej terminal has a nominal capacity of 17.5 MMTPA, the Kochi terminal has a capacity of 5 MMTPA. The company is also exploring suitable opportunities within and outside India to expand its business presence. </p>
<p>
Petronet LNG is promoting and developing LNG as motor vehicle fuels and for other small scale consumption. It is at the forefront of India's all-out national drive to ensure the country's energy security in the years to come. </p>

<p>Promoted by India's leading oil and natural gas industry players namely GAIL (India) Limited (GAIL), Oil & Natural Gas Corporation Limited (ONGC), Indian Oil Corporation Limited (IOCL) and Bharat Petroleum Corporation Limited (BPCL). It is shaping the dream of cleaner and greener India
</p>
                <div class="divider">&nbsp;</div></div>

				<div id="col-three" class="margin-top-30"><div><br/><br/><br/><img src="images/PFC-235x133.jpg" alt="" /></div></div>
<div id="col-two" class="margin-top-30">
<h4>Associate Partners : Power Finance Corporation Ltd</h4>
<p>Incorporated on July 16th, 1986, Power Finance Corporation Ltd. is a Schedule-A Navratna CPSE, and is a leading Non-Banking Financial Corporation in the Country. PFC's registered office is located at New Delhi and regional offices are located at Mumbai and Chennai. </p>
<p>
PFC is under the administrative control of the Ministry of Power. PFC was conferred the title of a 'Navratna CPSE' in June,2007, and was classified as an Infrastructure Finance Company by the RBI on 28th July,2010.</p>

<p>PPFC plays a crucial role in the rise of India as a global player. Increasingly, a country's development is gauged by measuring its energy usage. With a large fraction of our nation still, unfortunately, without any access to electricity, PFC will become an increasingly important factor in the years to come.
</p>
<p>Our shareholders and clients place their full faith in our ability to deliver unbeatable results. Despite the hardships played by the power and financial sectors, PFC continues to maintain a healthy loan book, as well as low levels of NPAs. This is thanks to PFC's robust evaluation and appraisal processes.</p>
<p><br>
<b> Key Strengths</b>
<ul style="list-style-type:square;">
<li>	Largest NBFC by Networth (all reserves) </li>
<li>	A specialized Financial Institution in Power Sector  </li>
<li>	A dominant player with around 20% market share  </li>
<li>	A lean and professionally-managed organization  </li>
<li>	Designated as a "Nodal Agency" for development of Integrated Power Development Scheme(IPDS), Ultra Mega Power Projects (UMPPs) and "Bid Process Coordinator" for Independent Transmission Projects (ITPs)  </li>
<li>	ISO 9001:2015 certified  </li>
<li>	A consistently profit-making and dividend-paying company  </li>
<li>	Strong asset quality reflected in low NPAs  </li>
<li>	Lowest Administrative cost in the industry  </li>
<li>	Consultancy & Advisory services in strategic, financial, regulatory and capacity building skills under one umbrella </li> <br>
<b> Ratings  </b>
<li>	Rating for Long Term Borrowings  </li>
</ul>
</p>
                <div class="divider">&nbsp;</div></div>

<div id="col-three" class="margin-top-30"><div><br/><br/><br/><img src="images/Chhattisgarh-235x133.jpg" alt="" /></div></div>
<div id="col-two" class="margin-top-30">
<h4>Principal Partner : Chhattisgarh</h4>
<p>Carved out of Madhya Pradesh on 1 November, 2000, with its 28 Chhattisgarhi speaking districts, it is the perfect advertisement for the adage small is beautiful and plentiful. Chhattisgarh is rich in mineral wealth. It is first in coal production, with 21 per cent of Inda's coal production, as well as second in steel production with 16 per cent of the country's iron ore production. Surplus in power, its investor friendly industrial policy (2019 to 2024) has special incentives for establishing industries in backward areas. Its proactive, pro-people government offers administrative innovations based on new technology. Its abundant biodiversity means that it contributes 12.25 per cent to India's forest cover, and is home to over 200 varieties of medicinal plants, The rice bowl of India, it produces over 23,000 varieties of rice. But it is equally a knowledge centre for central India, with the presence of NIITs, IIT, IIM, Hidayatullah National Law University and the Indira Gandhi Agriculture University. Surrounded by seven states : Madhya Pradesh, Maharashtra, Andhra Pradesh, Telangana, Orissa, Jharkhand and Uttar Pradesh, it is part of a hub that contributes 40 per cent of India's GDP. What's more, since 2018 it has been led by the visionary chief minister Bhupesh Baghel. His hands-on approach has yielded splendid results for the state, the biggest of which is a decline in Naxal violence by 40 per cent, the result of a belief that every gun should be replaced with a plough. Having fulfilled both the election promises of a farm loan waiver and purchasing paddy from farmers at Rs 25 per kg the state under the chief minister's leadership can proudly say its slogan is vishwas, vikas and suraksha. With a literacy rate of 71 per cent (2011) and some of the prime tourist locations in the country, the state is emerging as a powerful driver in the region.</p>
                <div class="divider">&nbsp;</div></div>

 <div id="col-three" class="margin-top-30"><div><br/><br/><br/><img src="images/partner-page-air-india-18.jpg" alt="" /></div></div>
<div id="col-two" class="margin-top-30">
<h4>Airline Partners  : Air India</h4>
<p>
Generations of air travelers in India and overseas have made Air India their preferred airline. Air India makes a special emotional connect with India. And that is what sets it apart. The endearing Maharajah, the airline’s mascot, symbolises a service brand and trust that has endured and grown. Air India pioneered aviation in India and carved for itself a special place in India’s civil aviation history. It has been connecting homes and hearts for generations of people all over the world. Over the years, the airline has kept pace with trends and technology; changing consumer needs and preferences and has constantly evolved in sync with changing times. It is not just an airline that transports people and cargo. It is an institution by itself. The massive infrastructure Air India has built over the years, like its engineering and maintenance facilities, well-equipped training schools and simulators for pilot training and extensive ground handling facilities, help to keep its resources of men and material in top gear. Air India makes that special emotional connect with India. And that is what sets it apart.  </p>
<p>
Air India is a young at heart airline with one of the youngest fleet in the world. Together with its subsidiaries, Air India has a fleet size of over 156 aircraft with a mix of B737 Dreamliner, B777s, A 320 family, CRJs and ATRs.  As a national carrier, Air India connects every corner of India & international with over 80 destinations across the length and breadth of India and 46 international destinations, spread across US, Australia, Europe, Far and South-east Asia and the Gulf.
Being the national carrier of India, Air India is truly connecting people and hearts all over the world.

</p>
                <div class="divider">&nbsp;</div></div> -->
<!--
<div id="col-three" class="margin-top-30"><div><br/><br/><br/><img src="images/partner-page-bpcl.jpg" alt="" /></div></div>
<div id="col-two" class="margin-top-30">
<h4>Associate Partner : BPCL</h4>
<p>BPCL came into existence in January 1976 when Burmah-Shell was taken over by the Government of India. A Fortune Global 500 Company, BPCL is one of India's premier integrated refining and marketing companies with a vision to be the most admired global energy company leveraging talent and technology. The company refineries at Mumbai and Kochi, subsidiary Numaligarh Refinery in Assam, and joint venture Bina Refinery in MP have a combined refining capacity of over 30 MMT. Subsidiary Bharat PetroResources has acquired participating interests in 17 oil & gas blocks in India and abroad.<br/><br/>
BPCL markets its products through a robust marketing and distribution network comprising 13,439 Retail Outlets, 4,494 LPG distributorships, 131 storage depots/ installations, 50 LPG Bottling Plants, 40 Aviation Service Stations, Lube blending plants, cross-country pipelines etc. In 2015-16, BPCL's market sales were 36.53 MMT and its market share among public sector oil companies was 22.94%. In 2015-16, its gross revenue from operations stood at `2,18,011.04 crore and net profit was a record `7,431.88 crore–a 46.17% leap over the previous year's record of `5,084.51 crore. BPCL's net worth stood at `27,158.69 crore on 31.3.2016. For its outstanding global, financial and industry performance, BPCL was ranked among the top 20 Oil & Gas Refining and Marketing companies in the Platts Top 250 Global Energy Company Rankings for 2015.</p>
                <div class="divider">&nbsp;</div></div>
<div id="col-three" class="margin-top-30"><div><br/><br/><br/><img src="images/partner-page-welspun.jpg" alt="" /></div></div>
<div id="col-two" class="margin-top-30">
<h4>Associate Partner : Welspun</h4>
<p>A US$ 2.3 billion enterprise, Welspun Group is one of India's fastest growing conglomerates with businesses in large diameter line pipes, home textiles, infrastructure, advanced textiles and flooring solutions. Headquartered in Mumbai, India, Welspun Group's core manufacturing facilities are based in India, USA and Saudi Arabia.<br/><br/>
Welspun Group has made its mark within the line pipe and the home textiles sector to become one of the most recognised global leaders. The group has a strong foothold in over 50 countries with more than 26,000 plus employees. It is also the largest Home Textiles business globally and a leading supplier to 17 of the top 30 US retailers in the home textiles sector. In addition to various business activities, the group also invests in a multitude of CSR programmes. With a focus on 3Es, that is, Education, Empowerment, Environment and Health, the group's efforts are directed towards protecting the environment, fostering economic performance, creating opportunities and empowering people. Welspun Corp is the flagship company of Welspun Group and a global giant in the large diameter line pipe segment. Welspun India is one of the world's leading home textile manufacturers and suppliers and is the largest in the terry towel business globally. The company has state-of-the-art manufacturing facilities in India. Welspun Enterprise operates in the infrastructure sector (road and water infra) with investments in the oil and gas space. Welspun Flooring is Welspun Group's newest brainchild. With a state-of-the-art manufacturing facility over an area of 600 acres in Hyderabad, Welspun is set to disrupt the world of flooring.</p>
                <div class="divider">&nbsp;</div></div>
<div id="col-three" class="margin-top-30"><div><br/><br/><br/><img src="images/partner-page-hpcl.jpg" alt="" /></div></div>
<div id="col-two" class="margin-top-30">
<h4>Associate Partner : HPCL</h4>
<p>Hindustan Petroleum Corporation Ltd (HPCL) is a Platts Top 250 Global Energy Company with Annual Gross Sales of Rs 2,43,227 crore and Profit after Tax of Rs 6,357 crore during FY 2017-18. HPCL has a strong presence in Refining and Marketing of petroleum products in the country. The total sale of products for HPCL during 2017-18 was 36.87 Million Metric Tonnes (MMT). During 2017-18, HPCL processed 18.28 MMT of crude, achieving capacity utilisation of 116%. HPCL owns and operates Refineries in Mumbai and Visakhapatnam with designed capacities of 7.5 Million Metric Tonnes Per Annum (MMTPA) and 8.3 MMTPA respectively. HPCL also owns the largest Lube Refinery in the country at Mumbai for producing Lube Oil Base Stocks with a capacity of 428 Thousand Metric Tonnes Per Annum (TMTPA).<br/><br/>
HPCL in collaboration with M/s Mittal Energy Investments Pte Ltd is operating a 11.3 MMTPA capacity Refinery at Bathinda, Punjab with 48.99% equity and also holds an equity of about 16.96% in the 15 MMTPA Mangalore Refinery and Petrochemicals Ltd (MRPL). A new 9 MMTPA capacity Refinery and Petrochemical Complex is being set up at Barmer, Rajasthan in joint venture with the Government of Rajasthan. HPCL has a vast marketing network consisting of 14 zonal offices in major cities and 133 regional offices facilitated by a Supply and Distribution infrastructure comprising 41 Depots, 42 Terminals/TOPs, 42 Aviation Service Stations, 48 LPG Bottling Plants and 6 Lube Blending plants. The customer touch points constitute of 15,357 Retail Outlets, 1638 SKO/LDO dealers, 267 Lube distributors, 116 Commissioning and Forwarding Agents, and 5,568 LPG Distributorships with a customer base of over 6.93 crore domestic LPG consumers.</p>
                <div class="divider">&nbsp;</div></div>
<!-- <div id="col-three" class="margin-top-30"><div><br/><br/><br/><img src="images/partner-page-skill-india.jpg" alt="" /></div></div>

<div id="col-two" class="margin-top-30">

<h4>Skill Partner : Skill India/NSDC</h4>

<p><b>About NSDC</b><br/><br/>
National Skill Development Corporation (NSDC) is a unique Public Private Partnership (PPP), where the government owns 49% and the private sector owns 51%. Launched in October 2009, it has a mandate to skill 150 million people by 2022 and catalyse the creation of sustainable, for-profit, quality skills training institutions across the country. NSDC is an executive arm of the Ministry of Skill Development and Entrepreneurship (MSDE) and manages its flagship programs including the Pradhan Mantri Kaushal Vikas Yojana among others.<br/><br/>
<b>NSDC's Mission</b><br/><br/>
*	Enhance, support and coordinate private sector initiatives for skill development through appropriate Public Private Partnership (PPP) models; strive for significant operational and financial involvement from the private sector<br/><br/>
*	Upgrade skills to international standards through significant industry involvement and develop necessary frameworks for standards, curriculum and quality assurance<br/><br/>
*	Play the role of a 'market-maker' by bridging financing gaps, particularly in sectors where market mechanisms are ineffective or missing<br/><br/>
*	Prioritize initiatives that can have a multiplier or catalytic effect as opposed to one-off impact<br/><br/>
*	Create new opportunities in the unorganized sector where more than 90 per cent of India's workforce is employed; create a level playing field for underprivileged sections of society, those from less-developed regions and persons with disabilities (PWDs)<br/><br/>
*	Operate special programs via National Skill Development Fund (NSDF)<br/><br/>

As of 1st January 2018, NSDC has partnered with 330+ training organizations and 39 Sector Skill Councils, who operating in 550+ districts and managing close to 8000 training centers across the country.  Since inception, NSDC has empowered more than 13 million youth with employable skills across 40+ sectors. For more information visit www.nsdcindia.org/New<br/><br/></p>
                <div class="divider">&nbsp;</div></div>
 -->
</div>
</div> <!--End of container -->
    </section>
    <?php require_once("footer.php"); ?>
</body>
</html>