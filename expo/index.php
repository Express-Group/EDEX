<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta name="viewport" content="width=device-width">
		<link rel="shortcut icon" href="https://images.edexlive.com/images/FrontEnd/images/favicon.ico">
		<title>Edexlive Expo</title>
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/collegea.css">
		<script src="assets/js/jquery.min.js"></script>
		<style>
		body{
			 background-image: url("assets/image/bg.jpg");
		}
		@font-face {
		  font-display: swap;
		  font-family: 'Noto Sans Tamil';
		  font-style: normal;
		  font-weight: 400;
		  src: url(http://fonts.gstatic.com/ea/notosanstamil/v3/NotoSansTamil-Regular.eot);
		  src: url(http://fonts.gstatic.com/ea/notosanstamil/v3/NotoSansTamil-Regular.eot?#iefix) format('embedded-opentype'), url(//fonts.gstatic.com/ea/notosanstamil/v3/NotoSansTamil-Regular.woff2) format('woff2'), url(//fonts.gstatic.com/ea/notosanstamil/v3/NotoSansTamil-Regular.woff) format('woff'), url(//fonts.gstatic.com/ea/notosanstamil/v3/NotoSansTamil-Regular.ttf) format('truetype')
		}

		@font-face {
		  font-display: swap;
		  font-family: 'Noto Sans Tamil';
		  font-style: normal;
		  font-weight: 700;
		  src: url(http://fonts.gstatic.com/ea/notosanstamil/v3/NotoSansTamil-Bold.eot);
		  src: url(http://fonts.gstatic.com/ea/notosanstamil/v3/NotoSansTamil-Bold.eot?#iefix) format('embedded-opentype'), url(//fonts.gstatic.com/ea/notosanstamil/v3/NotoSansTamil-Bold.woff2) format('woff2'), url(//fonts.gstatic.com/ea/notosanstamil/v3/NotoSansTamil-Bold.woff) format('woff'), url(//fonts.gstatic.com/ea/notosanstamil/v3/NotoSansTamil-Bold.ttf) format('truetype')
		}

		@font-face {
		  font-display: swap;
		  font-family: 'taun-tamil';
		  font-style: normal;
		  src: url(https://fea.assettype.com/vikatan/assets/taun-tamil-dde2bb17c34a229709e7.woff2) format('woff2'), url(https://fea.assettype.com/vikatan/assets/taun-tamil-84a3d093b5534fac8e78.woff) format('woff'), url() format('truetype')
		}
		.alert {
			padding: 10px; 
			text-align: center;
			font-weight: bold; 
			color: #fc1515;
			max-width: 400px;
			margin: 0 auto;
		}
		.alert_red{ 
			color: #fc1515;
		 }
		.alert_green{
			background-color: green !important;
			color: white;
			max-height:25px;
		 }
		</style>
	</head>
	<body>
		<button onclick="topFunction()" class="myBtn" title="Go to top">Top</button>
		<div class="main-page" id="top">
			<div class="header" id="myHeader">
				<img class="hidden-mobile" src="assets/image/header.jpg" alt="">
				<img class="visible-mobile" src="assets/image/headerm.jpg" alt="">
			</div>
			<div class="mainimage">
				<img class="hidden-mobile" src="assets/image/mainbanner.jpg" alt="">
				<img class="visible-mobile" src="assets/image/mainbannerm.jpg" alt="">
				 <div class="container verify-section">
					<form method="post" id="reg_form">
						<div id="error" style="display:none;" class="alert valert"></div> 
						<h1>வெபினார் மூலம் நிபுணர்களிடம் கலந்துரையாட</h1>
						<label for="name">பெயர்</label>
						<input type="text" placeholder="Your Name" name="name" id="name" >
						<label for="email">இ-மெயில்</label>
						<input type="email" placeholder="Your Email ID" name="email" id="email" >
						<label for="place">இடம்</label>
						<input type="text" placeholder="Your Place" name="place" id="place" >
						<label for="date">கலந்துகொள்ள விரும்பும் நாள்</label>
						<select class="date" id="date">
							<option value="">Date</option>
							<option value="09.05.2020: SESSION-01">09.05.2020: SESSION-01</option>
							<option value="09.05.2020: SESSION-02">09.05.2020: SESSION-02</option>
							<option value="09.05.2020: FULL SESSION">09.05.2020: FULL SESSION</option>
							<option value="10.05.2020: SESSION-01">10.05.2020: SESSION-01</option>
							<option value="10.05.2020: SESSION-02">10.05.2020: SESSION-02</option>
							<option value="10.05.2020: FULL SESSION">10.05.2020: FULL SESSION</option>
							<option value="DAY-01 & DAY-02">DAY-01 & DAY-02</option>
						</select>
						<label for="phone">தொடர்பு எண்</label>
						<input type="text" placeholder="Your Phone Number" name="phone" id="phone" >
						<input onclick="return check_mic_validation()" type="button" id="submit" name="submit" value="பதிவு செய்ய" class="btn"/>
					</form>
				</div>
			</div>
			<div class="mainheading">
				<h1>விகடன் மெகா டிஜிட்டல் கல்வி எக்ஸ்போ!</h1>
				<h2>வீட்டிலிருந்தபடியே, கல்லூரிகள்‌ மற்றும் மேற்படிப்புகள் குறித்த அனைத்து தகவல்களும் உங்கள் கைகளில்!</h2>
				<p>இதுவோ கல்லூரி தேடும் காலம்! கல்லூரிச் சேர்க்கைக்காக காத்திருக்கும் மாணவர்கள் நேரடியாக கல்வி மையங்களை அணுக முடியாத இந்நேரத்தில், கல்லூரிப் படிப்பு குறித்த தகவல்களையும் ஆலோசனைகளையும் உங்கள் இடம்தேடி கொண்டுவருகிறது விகடனின் 'மெகா டிஜிட்டல் கல்வி எக்ஸ்போ'.</p>
				<hr>
				<h3>எக்ஸ்போவின் முக்கிய அம்சங்கள்:</h3>
				<div class="mainheadingtab1">
					<h2>மாணவர்களுக்கு வேண்டிய அனைத்து தகவல்களும் வெபினார் வடிவில்!</h2>
				</div>
				<div class="mainheadingtab1">
					<h2>மேற்படிப்பு குறித்த தெளிவுபெற நிபுணர்களிடம் கலந்துரையாடலாம்!</h2>
				</div>
				<div class="mainheadingtab1">
					<h2>கல்லூரியில் இடத்தை முன்பதிவு செய்யலாம்!</h2>
				</div>
				<div class="mainheadingtab1">
					<h2>டிஜிட்டல் தலைமுறைக்கு ஏற்ற டிஜிட்டல் கவுன்சிலிங்!</h2>
				</div>
				<h2>மாணவர்களின் எதிர்காலக் கனவை நிறைவேற்றும் மாற்றுப்பாதை... விகடனின் மெகா டிஜிட்டல் கல்வி எக்ஸ்போ.</h2>
				<hr>
			</div>
			<!--speakers-->
			<div class="mainheading">
				<h3>சிறப்பு பேச்சாளர்கள்:</h3>
				<div class="days">
					<h8>DAY-01 (09.05.2020)</h8>
				</div>
				<div class="card">
					<img src="assets/image/speakers/speaker1.jpg" alt="speaker name" style="width:100%">
					<h5>Dr. சி.சைலேந்திரபாபு, ஐ.பி.எஸ்</h5>
					<p>டி.ஜி.பி, ரயில்வே & இயக்குநர், தீயணைப்பு மற்றும் மீட்புப் பணிகள் துறை.</p>
					<hr style="width:95%; text-alaign: center;">
					<h7>YOU CAN DO IT</h7>
					<button>09th MAY: SESSION-01(10:00am-12:30pm)</button>
				</div>
				<div class="card">
					<img src="assets/image/speakers/c_speaker4a.jpg" alt="speaker name" style="width:100%">
					<h5>B.சுப்பாராமன்</h5>
					<p>துணைத் தலைவர் மற்றும் மதுரை மையத் தலைவர், எச்.சி.எல்., நிறுவனம்.</p>
					<hr style="width:95%; text-alaign: center;">
					<h7>தொழிற்கல்வி பயிற்சிகளும்</br><span style="padding-left: 10px;">அதன் எதிர்காலமும்...</span></h7>
				    <button>09th MAY: SESSION-01(10:00am-12:30pm)</button>
				</div>
				<div class="card">
					<img src="assets/image/speakers/speaker3.jpg" alt="speaker name" style="width:100%">
					<h5>டி.நெடுஞ்செழியன், கல்வி ஆலோசகர்</h5>
					<p>நிறுவனர், டெக்னோகார்ட்ஸ் இந்தியா காலேஜ் ஃபைன்டர்.</p>
					<hr style="width:95%; text-alaign: center;">
					<h7>கல்வியும் கொரோனாவும்</h7>
				    <button>09th MAY: SESSION-01(10:00am-12:30pm)</button>
				</div>
				<div class="card">
					<img src="assets/image/speakers/speaker4.jpg" alt="speaker name" style="width:100%">
					<h5>டாக்டர். சங்கர சரவணன், கல்வியாளர்</h5>
					<p> துணை இயக்குநர், தமிழ்நாடு பாடநூல் கழகம்.</p>
					<hr style="width:95%; text-alaign: center;">
					<h7>கல்லூரிச் சாலை</h7>
				   <button>09th MAY: SESSION-02(03:00pm-04:30pm)</button>
				</div>
				<div class="card">
					<img src="assets/image/speakers/c_speaker5.jpg" alt="speaker name" style="width:100%">
					<h5>K.காசிராஜன்</h5>
					<p>இணை பேராசிரியர், ஹிந்துஸ்தான் இன்ஸ்டிட்யூட் ஆப் டெக்னாலஜி அண்ட் சயின்ஸ்.</p>
					<hr style="width:95%; text-alaign: center;">
					<h7>B-Arch எதிர்காலத்தில் இருக்கும்</br><span style="padding-left: 10px;">மிகப்பெரிய வளர்ச்சிகள்</span></h7>
				   <button>09th MAY: SESSION-02(03:00pm-04:30pm)</button>
			    </div>
			    </br></br>
				<div class="days">
					<h8>DAY-02 (10.05.2020)</h8>
				</div>
				<div class="card">
					<img src="assets/image/speakers/speaker6.jpg" alt="speaker name" style="width:100%">
					<h5>எம். ரமேஷ் பிரபா கல்வி ஆலோசகர்</h5>
					<p>தலைவர், கேலக்ஸி இன்ஸ்டிடியூட் ஆஃப் மேனேஜ்மென்ட்.</p>
					<hr style="width:95%; text-alaign: center;">
					<h7>என்ன படிக்கலாம்... எங்கு படிக்கலாம்?</h7>
					<button>10th MAY: SESSION-01(10:00am-12:30pm)</button>
				</div>
				<div class="card">
					<img src="assets/image/speakers/c_speaker2.jpg" alt="speaker name" style="width:100%">
					<h5>முனைவர் D.வாசுதேவன்., B.E.,M.E.,P.hD.,</h5>
					<p>முதல்வர், பிஸ்என்ஏ பொறியியல் மற்றும் தொழில் நுட்பக் கல்லூரி, திண்டுக்கல்.</p>
					<hr style="width:95%; text-alaign: center;">
					<h7>இஞ்ஜினியரிங்- எந்தப் படிப்புக்கு</br><span style="padding-left: 10px;">எதிர்காலம்?</span></h7>
					<button>10th MAY: SESSION-01(10:00am-12:30pm)</button>
				</div>
				<div class="card">
					<img src="assets/image/speakers/speaker8.jpg" alt="speaker name" style="width:100%">
					<h5>டாக்டர் சங்கர் வேணுகோபால்</h5>
					<p>துணைத் தலைவர்- டெக்னாலஜி இன்னோவேஷன் பிரிவு, மஹிந்திரா & மஹிந்திரா</p>
					<hr style="width:95%; text-alaign: center;">
					<h7>உயர்கல்வியைத் தேர்வு செய்வது எப்படி?</h7>
					<button>10th MAY: SESSION-01(10:00am-12:30pm)</button>												
				</div>
				<div class="card">
					<img src="assets/image/speakers/speaker9.jpg" alt="speaker name" style="width:100%">
					<h5>Dr. ஆர்.ராஜராஜன், கல்வி ஆலோசகர்</h5>
					<p>இயக்குநர், ஸ்டூடண்ட்ஸ் விஷன் அகாடமி.</p>
					<hr style="width:95%; text-alaign: center;">
					<h7>வாய்ப்புகளை அள்ளித்தரும்</br><span style="padding-left: 10px;">நுழைவுத்தேர்வுகள்</span></h7>
					<button>10th MAY: SESSION-02(03:00pm-05:30pm)</button>
				</div>
				<div class="card">
					<img src="assets/image/speakers/c_speaker1.jpg" alt="speaker name" style="width:100%">
					<h5>M.தவமணி கிறிஸ்டோபர்.,  M.Sc, M.Phil, Ph.D (Interdisciplinary)., Ph.D (Maths)</h5>
					<p>முதல்வர் மற்றும் செயலர், அமெரிக்கன் கல்லூரி, மதுரை.</p>
					<hr style="width:95%; text-alaign: center;">
					<h7>கலை / அறிவியல் கல்விமுறை மற்றும்</br><span style="padding-left: 10px;">அதன் வேலை வாய்ப்புகள்</span></h7>
				    <button>10th MAY: SESSION-02(03:00pm-05:30pm)</button>
				</div>
				<div class="card">
				   <img src="assets/image/speakers/c_speaker3.jpg" alt="speaker name" style="width:100%">
				   <h5>டாக்டர் E.N.கணேஷ்</h5>
				   <p>டீன், ஸ்கூல் ஆஃப் இன்ஜினீயரிங், வேல்ஸ் இன்ஸ்டிடியூட் ஆஃப் சயின்ஸ் டெக்னாலஜி மற்றும் அட்வான்ஸ் ஸ்டெடீஸ், பல்லாவரம், சென்னை.</p>
				   <hr style="width:95%; text-alaign: center;">
				   <h7>மாணவர்கள் பாடப்பிரிவைத் தேர்வு</br><span style="padding-left: 10px;">செய்வது எப்படி?</span></h7>
				   <button>10th MAY: SESSION-02(03:00pm-05:30pm)</button>
                </div>
				<div class="card">
				   <img src="assets/image/speakers/speaker12.jpg" alt="speaker name" style="width:100%">
				   <h5>பட்டிமன்றம் எஸ்.ராஜா</h5>
			       <p>ஓய்வு, யுனைடெட் பேங்க் ஆப் இந்தியா</p>
				   <hr style="width:95%; text-alaign: center;">
				   <h7>பெற்ற தாயும் பிறந்த பொன்நாடும்</h7>
				   <button>10th MAY: SESSION-02(03:00pm-05:30pm)</button>
				</div>
			</div>
			<!--end speakers-->
			<div class="collegea" id="hcl">
				<br>
				<div class="innerw">
					<div class="collegeheader">
						<img class="hidden-mobile" src="assets/image/collegeheaderhcl.jpg" alt="">
						<img class="visible-mobile" src="assets/image/collegeheaderhclm.jpg" alt="">
					</div>
					<div class="collegeheader">
						<img src="assets/image/hclm.gif" alt="">
					</div>
					<div class="mainheading">
						<h2 style="font-size: 30px;">வருமானம் + கல்வி</h2>
						<h3 style="font-size: 40px;">அதுதான் ஹெச்.சி.எல் டெக் பீ (HCL TechBee)!</h3>
					</div>
					<hr>
					<div class="mainheadingtab1">
						<h2>19 வயதிலேயே வேலை வாய்ப்பு</h2>
					</div>
					<div class="mainheadingtab1">
						<h2>வேலை பார்த்துக்கொண்டே உயர் படிப்பு</h2>
					</div>
					<div class="mainheadingtab1">
						<h2>ஹெச்.சி.எல்-ன் வித்தியாசமான முயற்சி!</h2>
					</div>
					<hr>
					<button class="accordion">கல்வி முறை பற்றி</button>
					<div class="panel">
						<p>பன்னிரண்டாம் வகுப்பு முடித்த மாணவர்களை பொருளாதார ரீதியாக தன்னிறைவு அடையச்செய்கிறது ஹெச்.சி.எல் டெக் பீ.</br></br>
						+2 விற்கு பின், மாணவர்களுக்கு ஆரம்பகட்டமாக, சாஃப்ட்வேர் டெவலப்பர் (Software Developer) /அனலிஸ்ட் (Analyst) / கேட் இன்ஜினியர் (CAD Engineer) ஆகிய பிரிவுகளில் 12 மாதங்கள் பயிற்சி அளித்து, பயிற்சி பெற்ற மாணவர்களை வேலைக்கு எடுத்துக்கொள்கிறது
						ஹெச். சி. எல்.</br></br>
						வேலையில் இருக்கும்போதே, பிட்ஸ், பிலானி அல்லது சாஸ்த்ரா நிகர்நிலைப் பல்கலைக்கழத்தில் உயர் படிப்பு பயிலும் வாய்ப்பினையும் வழங்குகிறது ஹெச். சி. எல் டெக் பீ!</br></br>
						மாணவர்களின் உயர் படிப்புக்கான கட்டணத்தை ஹெச். சி. எல். ஏற்றுக்கொள்வது* குறிப்பிடத்தக்கது.</br></br>
						இதனால் சம்பளம் பெற்றுக்கொண்டே மாணவர்களால் உயர் கல்வியைப் பெற முடிகிறது!</p></br>
						<img src="assets/image/hcl_4.jpg" alt="">
					</div>
					<button class="accordion">வேலைக்கான வழிகாட்டி</button>
					<div class="panel">
						<img style="margin: 0 auto;width: 100%; padding: 10px 0 10px 0;" src="assets/image/hcl_course.jpg" alt="">
					</div>
					<button class="accordion">சேர்க்கைக்கான இதர விவரங்கள்...</button>
					<div class="panel">
						<div class="container1">
							<form method="post" id="1sub_form">
								<div id="1sub_error" style="display:none;" class="alert valert"></div> 
							  <h1>FOR ENQUIRY</h1>
							 <label for="1sub_name">பெயர்</label></br>
							  <input type="text" placeholder="Your Name" name="name" id="1sub_name">
							  <label for="1sub_email">இ-மெயில்</label></br>
							  <input type="email" placeholder="Your Email ID" name="email" id="1sub_email">
							  <label for="1sub_place">இடம்</label></br>
							  <input type="text" placeholder="Your Place" name="place" id="1sub_place">
							  <label for="1sub_phn">தொடர்பு எண்</label></br>
							  <input type="text" placeholder="Your Phone Number" name="phone" id="1sub_phn">
							  <input onclick="return check_sub_validation('hcl',1)" type="button" name="submit" id="1sub_mit" value="SUBMIT" class="btn"/>
							</form>
						</div>
					</div>
					<button class="accordion">பயனுள்ள வீடியோக்கள்..</button>
					<div class="panel">
						</br>
						<iframe width="90%" height="300px" src="https://www.youtube.com/embed/dTFguStgnGk?playlist=dTFguStgnGk&amp;loop=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</br>
					</div>
					<div class="mainheading">
						<h2>For More Details & Admissions 2020</h2>
						<a href="https://registrations.hcltechbee.com/HCL/" target="_blank"><button style="width:200px; text-alaign: left; padding:10px 20px 10px 10px; margin-bottom: 20px; font-size: 30px; border-radius: 10px; background-color: #red;"
						  type="submit" class="btn">CLICK HERE</button></a>
					</div>
					<p style="font-family: Helvetica; padding: 0 0 10px 10px">HCL TechBee Information Centers, SPA IT Towers, Survey No. 155/1 and 155/2, 120 Feet Road, Opp. Mattuthavani Bus Stand, Madurai – 625020.</p>
				</div>
				<br>
			</div>
			
			<div class="collegeb" id="amer">
				<br>
				<div class="innerw">
					<div class="collegeheader">
						<img class="hidden-mobile" src="assets/image/collegeheaderamer.jpg" alt="">
						<img class="visible-mobile" src="assets/image/collegeheaderamerm.jpg" alt="">
					</div>
					<div class="collegeheader">
						<img src="assets/image/amermrev.gif" alt="">
					</div>
					<div class="mainheading">
						<h2 style="font-size: 30px;">140 வருட பாரம்பர்யம்!</h2>
						<h3 style="font-size: 40px;">தி அமெரிக்கன் காலேஜ்</h3>
					</div>
					<hr>
					<div class="mainheadingtab1">
						<h2>புகழ்பெற்ற அறிவியல் மற்றும் கலைக் கல்லூரி</h2>
					</div>
					<div class="mainheadingtab1">
						<h2>ஏழை மாணவர்கள் மற்றும் விளையாட்டு வீரர்களுக்கு முக்கியத்துவம்</h2>
					</div>
					<div class="mainheadingtab1">
						<h2>மாணவர்கள் விரும்பும் சாய்ஸ் பேஸ்டு கிரெடிட் சிஸ்டம்</h2>
					</div>
					<hr>
					<button class="accordion">கல்லூரியைப் பற்றி...</button>
					<div class="panel">
						<p>1881ஆம் ஆண்டு முதல் செயல்பட்டுவரும் புகழ் பெற்ற கல்லூரி 'தி அமெரிக்கன் காலேஜ்', மதுரை.</br></br>
						அறிவியல், கணினி அறிவியல், மொழி & இலக்கியம், நுண்கலைகள், வாழ்க்கைத் திறன்கள், உயிரியல், மனிதநேயம் மற்றும் சமூக அறிவியல் உள்ளடக்கிய பட்டப்படிப்புகள் மற்றும் MPhil தமிழ், MPhil இயற்பியல் போன்ற முதுகலை பாடப்பிரிவுகள் வழங்கப்படுகின்றன.
						பயன்பாட்டு அறிவியல் துறை & SCILET (ஆங்கிலம் மற்றும் மொழிபெயர்ப்பு ஆய்வு மையம்) இங்குள்ளது.</br></br>
						ஏழை மாணவர்கள் மற்றும் விளையாட்டு வீரர்களுக்கு நிதி உதவி, பாடத்திட்டத்தினை மாணவர்களே தேர்ந்தெடுக்கும் சாய்ஸ் பேஸ்டு கிரெடிட் சிஸ்டம் (CBCS), வேலைவாய்ப்புக் கூடம், வேலைவாய்ப்பு தொடர்பான பயிற்சி மற்றும் விழிப்புணர்வு நிகழ்ச்சிகள், கேம்பஸ் இன்டெர்வியூக்கள், அனைத்துவிதமான விளையாட்டுகளுக்கும் முக்கியத்துவம்... இவையனைத்தும் அமெரிக்கன் காலேஜின் பலங்கள்!</p></br>
						<img src="assets/image/amer_4.jpg" alt="">
					</div>
					<button class="accordion">பாடத் திட்டங்கள் குறித்த விவரங்கள்...</button>
					<div class="panel">
						</br>
						<ul style="background-color:#58595b;">AIDED</ul>
							<ul>Undergraduate Programmes</ul>
							<li>B.A.: Tamil Language and Literature, English, Economics(English Medium), Economics (Tamil Medium)Religion(Philosophy and Sociology)</li>
							<li>B.Com.</li>
							<li>B.Sc.: Mathematics, Physics, Chemistry, Botany, Zoology</li></br>
							<ul>Postgraduate Programmes</ul>
							<li> M.A.: Tamil, English, Economics</li>
							<li>M.Sc.: Mathematics, Physics, Chemistry, Botany, Zoology</li></br>
							<ul>M.Phil. Programme</ul>
							<li>M.Phil. Zoology</li></br>
							<ul style="background-color:#58595b;">SELF-FINANCED</ul>
							<ul>Undergraduate Programmes</ul>
							<b style="font-family:Helvetica;font-size:10pt;">Time Schedule: Morning 8.00 A.M. to 1.10 P.M.</b>
							<li>B.A.: Hindi, French, English (Morning Batch)</li>
							<li> Visual Communication, IT, Food Science and Nutrition, Psychology</li>
							<b style="font-family:Helvetica;font-size:10pt;">Time Schedule: Evening 2.00 P.M. to 6.45 P.M.</b>
							<li>B.A. English (Evening Batch)</li>
							<li>B.Com.</li>
							<li>B.Com. with Computer Applications</li>
							<li>B.Com.(IT)</li>
							<li>B. Com. Professional Accounting</li>
							<li> B.Sc.: Computer Science, Mathematics, Physics, Chemistry, Biochemistry, Microbiology, Physical Education</li>
							<li>Bachelor of Computer Applications</li>
							<li>Bachelor of Business Administration</li>
							<ul>Postgraduate Programmes</ul>
							<b style="font-family:Helvetica;font-size:10pt;">Time Schedule: Morning 8.00 A.M. to 1.10 P.M.</b>
							<li>M.Com.</li>
							<li>M.A. Social Work</li>
							<li>M.Sc. Microbiology</li>
							<li>M.Sc. Food Science</li>
							<li>M.C.A</li>
							<li>M.B.A  (Satellite Campus)</li>
							<b style="font-family:Helvetica;font-size:10pt;">Time Schedule: Evening 1.45 P.M. to 6.30 P.M.</b>
							<li>M.A. English</li>
							<li>M.Sc.: Mathematics, Physics, Visual Communication, Psychology, Data Science</li></br>
							<ul>M.Phil. Programmes</ul>
							<li>M.Phil. Tamil</li>
							<li>M.Phil. English</li>
							<li>M.Phil. Economics</li>
							<li>M.Phil. Commerce</li>
							<li>M.Phil. Mathematics</li>
							<li>M.Phil. Physics</li>
							<li>M.Phil. Chemistry</li>
							<li>M.Phil. Botany</li>
							<li>M.Phil. Business Administration</li></br>
							<ul>Ph.D. Programmes</ul>
							<li>Ph.D. Tamil</li>
							<li>Ph.D. English</li>
							<li>Ph.D. Economics</li>
							<li>Ph.D. Commerce</li>
							<li>Ph.D. Mathematics</li>
							<li>Ph.D. Physics</li>
							<li>Ph.D. Chemistry</li>
							<li>Ph.D. Botany</li>
							<li>Ph.D. Zoology</li></br>
							<ul>Satellite Campus Courses Offered</ul>
							<li>B.A. English</li>
							<li>B.Com </li>
							<li>B.Com (CA)</li>
							<li>B.Sc.: Mathematics, Physics, Computer Science</li>
							<li>BBA</li>
							<li>B.Sc. Data Science</li>
							<li>M.B.A</li></br>
							<ul>B.Voc. Degree Programmes</ul>
							<li>Diploma in Aquaculture (One Year)</li>
							<li>Diploma in Medical Laboratory Technology (One Year)</li>
							<li>Diploma in Food Processing & Preservation (One Year)</li>
							<li>Diploma in Media Technology (One Year)</li>
							<li> Advanced Diploma in Aquaculture (Two Year)</li>
							<li>Advanced Diploma in Medical Laboratory Technology (Two Year)</li>
							<li>Advanced Diploma in Food Processing & Preservation (Two Year)</li>
							<li>Advanced Diploma in Media Technology (Two Year)</li>
							<li>B-Voc. Programme in Aquaculture (Three Year)</li>
							<li>B-Voc. Programme in Medical Laboratory Technology (Three Year)</li>
							<li>B-Voc. Food Processing & Preservation (Three Year)</li></br>
					</div>
					<button class="accordion">சேர்க்கைக்கான இதர விவரங்கள்...</button>
					<div class="panel">
						<div class="container1">
							<form method="post" id="2sub_form">
								<div id="2sub_error" style="display:none;" class="alert valert"></div> 
							  <h1>FOR ENQUIRY</h1>
							  <label for="2sub_name">பெயர்</label></br>
							  <input type="text" placeholder="Your Name" name="name" id="2sub_name">
							  <label for="2sub_email">இ-மெயில்</label></br>
							  <input type="email" placeholder="Your Email ID" name="email" id="2sub_email">
							  <label for="2sub_place">இடம்</label></br>
							  <input type="text" placeholder="Your Place" name="place" id="2sub_place">
							  <label for="2sub_phn">தொடர்பு எண்</label></br>
							  <input type="text" placeholder="Your Phone Number" name="phone" id="2sub_phn">
							  <input onclick="return check_sub_validation('amer',2)" type="button" name="submit" id="2sub_mit" value="SUBMIT" class="btn"/>
							</form>
						</div>
					</div>
					<button class="accordion">பயனுள்ள வீடியோக்கள்...</button>
					<div class="panel">
					   </br>
					   <iframe width="90%" height="300px" src="https://www.youtube.com/embed/F0z9tSBkaZ4?playlist=F0z9tSBkaZ4&amp;loop=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					   </br>
					</div>
					<div class="mainheading">
						<h2>For More Details & Admissions 2020</h2>
						<a href="https://americancollege.edu.in/" target="_blank"><button style="width:200px; text-alaign: left; padding:10px 20px 10px 10px; margin-bottom: 20px; font-size: 30px; border-radius: 10px; background-color: #red;" type="submit" class="btn">CLICK HERE</button></a>
					</div>
					<p style="font-family: Helvetica; padding: 0 0 10px 10px">The American College, Tallakkulam, Madurai – 625002.</p>
				</div>
			</div>
			<!--footer-->
			<br><br><br><br><br><br><br>
			<div class="footer">
				<h7>டிஜிட்டல் எக்ஸ்போ: கல்லூரியின் விவரங்களுக்கு</h7></br>
				<a href="#hcl"><img src="assets/image/hcl.jpg" alt=""></a>
				<a href="#amer"><img src="assets/image/amer.jpg" alt=""></a>
				<a href="#psna"><img src="assets/image/psna.jpg" alt=""></a>
				<a href="#hita"><img src="assets/image/hita.jpg" alt=""></a>
				<a href="#vels"><img src="assets/image/vels.jpg" alt=""></a>
				<a href="#bhar"><img src="assets/image/bhar.jpg" alt=""></a>
			</div>
			<!--end footer-->
		</div>
		<script>
			function topFunction() {
				document.body.scrollTop = 0;
				document.documentElement.scrollTop = 0;
			}
			var acc = document.getElementsByClassName("accordion");
			var i;
			for (i = 0; i < acc.length; i++) {
			  acc[i].addEventListener("click", function() {

				var panel = this.nextElementSibling;
				if (panel.style.maxHeight) {
				  panel.style.maxHeight = null;
				} else {
				  panel.style.maxHeight = panel.scrollHeight + "px";
				}
			  });
			}
		</script>
	</body>
</html> 