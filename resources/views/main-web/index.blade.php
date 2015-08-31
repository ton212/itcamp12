<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<title>ITCamp#12 | ไอทีแคมป์ครั้งที่ 12 วันที่ 10-13 ธันวาคม 2558 ณ ไอทีลาดกระบังฯ</title>
		<link rel="stylesheet" href="main_assets/css/main.style.css" />
		<script src="main_assets/javascript/jquery.min.js"></script>
		<script src="main_assets/javascript/TweenMax.min.js"></script>
		<script src="main_assets/javascript/jquery.gsap.min.js"></script>
		<script src="main_assets/javascript/velocity.min.js"></script>
		<script src="main_assets/javascript/detectmobilebrowser.js"></script>
		<script src="main_assets/javascript/main.script.js"></script>

	</head>

	<body>

		<div class="preloader">
			<img src="main_assets/img/dinocute_loader.gif" />
		</div>

		<div class="c-overlay-shield" onclick="overlayToggle()"></div>
		<div class="c-overlay">
			<div class="c-container">
				<div class="close" onclick="overlayToggle()"></div>
			</div>
		</div>

		<div class="navbar">
			<div class="navbar-menu">
				<ul>
					<li><a href="javascript:;" onclick="scrollToBlock('home')">หน้าแรก</a></li>
					<li><a href="javascript:;" onclick="scrollToBlock('sponsor')">ผู้สนับสนุน</a></li>
					<li><a href="javascript:;" onclick="scrollToBlock('camp')">ค่ายย่อย</a></li>
					<li><a href="javascript:;" onclick="scrollToBlock('gallery')">ภาพกิจกรรม</a></li>
					<li class="navbar-logo"><a href="javascript:;" onclick="scrollToBlock('home')"><img src="main_assets/img/logo/itcamp12logo.png" height="95" /></a></li>
					<li><a href="javascript:;" onclick="scrollToBlock('opinion')">คำนิยม</a></li>
					<li><a href="javascript:;" onclick="scrollToBlock('timeline')">กำหนดการ</a></li>
					<li><a href="javascript:;" onclick="scrollToBlock('faq')">คำถามที่พบบ่อย</a></li>
					<li><a href="javascript:;" onclick="scrollToBlock('contact')">ติดต่อ</a></li>
				</ul>
				<div class="navbar-shield">
					<div class="navbar-shield-center"></div>
				</div>
			</div>
		</div>

		<section class="block block-sky">
			<div class="layer rainbow" data-addoffsety="0" data-scrollmodifier="1" id="home">
				<img src="main_assets/img/block1/rainbow.png" />
			</div>
			<div class="layer cloudgroup1" data-addoffsety="0" data-scrollmodifier="0.45">
				<div class="group">
					<img class="cloud1" src="main_assets/img/block1/cloud.png" width="399" />
					<img class="cloud2" src="main_assets/img/block1/cloud.png" width="396" />
					<img class="cloud3" src="main_assets/img/block1/cloud.png" width="360" />
				</div>
			</div>
			<div class="layer cloudgroup2" data-addoffsety="0" data-scrollmodifier="0.85">
				<div class="group">
					<img class="cloud1" src="main_assets/img/block1/cloud.png" width="346" />
					<img class="cloud2" src="main_assets/img/block1/cloud.png" width="375" />
				</div>
			</div>
			<div class="layer cloudback" data-addoffsety="60" data-scrollmodifier="1.15">
				<img src="main_assets/img/block1/cloudback.png" />
				<div class="background"></div>
			</div>
			<div class="layer cloudfront" data-addoffsety="0" data-scrollmodifier="1">
				<img src="main_assets/img/block1/cloudfront.png" />
				<div class="background">
					<div class="layer itcamp-description" data-addoffsety="0" data-scrollmodifier="0.56">
						<div class="container-center">
							<h1>ไอทีแคมป์<sup>ครั้งที่ 12</sup></h1>
							<hr />
							<p class="textbox">ยินดีต้อนรับน้องๆ เหล่านักผจญภัย ม.ปลาย และ ปวช. ทั้งหลาย นี่คือค่าย ITCAMP12 จากคณะเทคโนโลยีสารสนเทศ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง ที่ทุกคนรอคอย ค่ายที่เหล่านักผจญภัยทั้ง 120 คน จะได้มาเรียนรู้เทคโนโลยีที่พี่ๆ คัดมาแล้วว่าน่าสนใจ แปลกใหม่และไม่เหมือนใคร ตลอดเวลาค่าย 4 วัน 3 คืน โดยนักผจญภัยทั้งหลายสามารถเลือกดินแดนที่จะร่วมเดินทางไปค้นหาความรู้ได้ ซึ่งมีให้เลือกด้วยกัน 4 ดินแดน และน้องๆ จะต้องเลือกเพียงหนึ่งดินแดนที่สนใจเท่านั้น ได้แก่ ดินแดน T-Rex Network, Applicationosaurus, Game Maker Nodon และ IoT-Ceramus อย่ารอช้า! เริ่มรับสมัครตั้งแต่วันนี้ถึง 24 ตุลาคม 2558 นี้ แล้วเจอกันวันที่ 10 - 13 ธันวาคม 2558 พี่ๆ รอน้องๆ อยู่นะ แล้วเจอกัน!!</p>
						</div>
					</div>
				</div>
			</div>
			<div class="layer itcamp-head" data-addoffsety="0" data-scrollmodifier="0">
				<div class="background">
					<div class="layer itcamp-logo" data-addoffsety="40" data-scrollmodifier="1.25">
						<div class="container-center">
							<img src="main_assets/img/logo/itcamp12logo.png" width="700" />
							<div class="smoke"></div>
							<h1>ไอทีแคมป์ครั้งที่ 12</h1>
							<h2>คณะเทคโนโลยีสารสนเทศ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง</h2>
							<div class="sharebox">กล่องแชร์ไง</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="block block-mountain">
			<div class="layer mountainback" data-addoffsety="0" data-scrollmodifier="0.95">
				<img src="main_assets/img/block2/mtback.png" />
				<div class="background"></div>
			</div>
			<div class="layer cloudgroup3" data-addoffsety="-140" data-scrollmodifier="0.8">
				<div class="group">
					<img class="cloud1" src="main_assets/img/block2/cloud1.png" width="252" />
					<img class="cloud2" src="main_assets/img/block2/cloud2.png" width="195" />
					<img class="cloud3" src="main_assets/img/block2/cloud1.png" width="234" />
				</div>
			</div>
			<div class="layer cloudgroup4" data-addoffsety="-120" data-scrollmodifier="0.85">
				<div class="group">
					<img class="cloud1" src="main_assets/img/block2/cloud1.png" width="272" />
					<img class="cloud2" src="main_assets/img/block2/cloud2.png" width="169" />
				</div>
			</div>
			<div class="layer mountainfront" data-addoffsety="0" data-scrollmodifier="1">
				<img src="main_assets/img/block2/mtfront.png" />
				<div class="background">
					<div class="layer itcamp-sponsor" data-addoffsety="-270" data-scrollmodifier="0.56">
						<div class="container-center">
							<h1>ผู้สนับสนุน</h1>
							<hr />
							<div class="sponsor">
								<img src="main_assets/img/sponsor/kmitl.jpg" />
								<img src="main_assets/img/sponsor/itkmitl.jpg" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="block block-forest">
			<div class="layer tree" data-addoffsety="630" data-scrollmodifier="1.35">
				<img src="main_assets/img/block3/tree.png" />
				<div class="background"></div>
			</div>
			<div class="layer bush1" data-addoffsety="340" data-scrollmodifier="1.1655">
				<img src="main_assets/img/block3/bush1.png" />
				<div class="background"></div>
			</div>
			<div class="layer bush2" data-addoffsety="0" data-scrollmodifier="1">
				<img src="main_assets/img/block3/bush2.png" />
				<div class="background">
					<div class="itcamp-camp" data-addoffsety="0" data-scrollmodifier="1">
						<div class="container-center">
							<h1 id="content-camp">ค่ายย่อย</h1>
							<hr />
							<ul class="camp">
								<li id="content-camp-app">
									<img src="main_assets/img/logo/applicationsaurus.png" />
									<p>เปิดโลกกว้างไปกับดินแดนแห่งแอพพลิเคชั่น ที่จะพาน้องๆ ไปสัมผัสกับประสบการณ์การสร้างสรรค์ผลงานแอพพลิเคชั่นบนระบบปฏิบัติการ Windows 8.1 ให้ก้าวล้ำและไม่เหมือนใครในแบบของน้องๆ เอง ด้วยโปรแกรมสุดเจ๋งอย่าง Microsoft Visual Studio 2013 แล้วน้องจะพบว่าการสร้างแอพพลิเคชั่นด้วยตัวเองนั้นไม่ใช่เรื่องยากอีกต่อไป มาร่วมกันสร้างสรรค์ผลงานดีๆ ประสิทธิเยี่ยมไปพร้อมๆ กันนะ</p>
									<p>สำหรับน้องๆ คนไหนที่กลัวว่าตัวเองจะทำไม่ได้ ไม่มีพื้นฐานทางด้าน Programming หรือคิดว่าความรู้ยังไม่แน่นพอ ไม่ต้องเก็บเอาไปคิดมากนะครับ เพราะพี่ๆ พร้อมที่จะสอนพวกน้องๆ แน่นอน ขอเพียงแค่เรามีความตั้งใจ กล้าที่จะคิด กล้าที่จะทำ ที่เหลือปล่อยหน้าที่พวกพี่เอง</p>
									<a class="button pill camp-app" href="javascript:;">สมัครเข้าค่าย</a>
								</li>
								<li id="content-camp-game">
									<img src="main_assets/img/logo/gamemakernodon.png" />
									<p>ร่วมเดินทางไปด้วยกันบนเส้นทางแห่งเกมเมอร์ จากผู้เล่นสู่ผู้สร้าง ดินแดนที่จะทำให้น้องๆ ได้รับความรู้ในการสร้างสรรค์ผลงานเกมในแบบของน้องๆ เอง</p>
									<p>โดยน้องๆ จะได้เติมแต่งจินตนาการผ่านโปรแกรม Construct 2 ที่เรียกได้ว่าสะดวกในการใช้งานและง่ายมากมาก เพียงแค่ใช้วิธี drag-and-drop ก็สามารถสร้างผลงานเจ๋งๆ ได้แล้ว ไม่ต้องเสียเวลามาเขียนโค้ดให้ยุ่งยากจนเกินไป แล้วน้องจะพบว่าการสร้างเกมจะไม่ใช่เรื่องยากสำหรับน้องๆ อีกต่อไป</p>
									<a class="button pill camp-game" href="javascript:;">สมัครเข้าค่าย</a>
								</li>
							</ul>
							<ul class="camp">
								<li id="content-camp-network">
									<img src="main_assets/img/logo/trexnetwork.png" />
									<p>ผจญภัยสุดมันส์ไปบนระบบเครือข่ายคอมพิวเตอร์อันซับซ้อน รวมทั้งกระบวนการทำงานที่น่าทึ่ง ที่จะทำให้น้องๆ ได้เรียนรู้ขั้นตอนการทำงานที่แท้จริงว่าทำงานอย่างไร โดยเนื้อหาส่วนที่สอนนี้ส่วนหนึ่งมาจากวิชา Fundamentals of Computer Networks และ Computer Networking for Enterprise and ISP ของคณะเทคโนโลยีสารสนเทศ เรียกได้ว่าเป็นการปูพื้นฐานและได้ทดลองเรียนไปด้วยในตัว</p>
									<p>นอกจากความรู้ทางด้านทฤษฎีแล้ว น้องๆ ก็ยังจะได้ลองลงมือสร้างระบบจำลอง Internet บนโปรแกรม Packet Tracer พร้อมอุปกรณ์ที่ครบครัน โดยที่น้องไม่ต้องไปหาซื้อที่ไหนเลย เพราะพวกพี่ๆ ได้เตรียมไว้สอนน้องๆ เรียบร้อยแล้ว</p>
									<a class="button pill camp-network" href="javascript:;">สมัครเข้าค่าย</a>
								</li>
								<li id="content-camp-iot">
									<img src="main_assets/img/logo/iotceramus.png" />
									<p>เปิดโลกกว้างไปกับดินแดนแห่งแอพพลิเคชั่น ที่จะพาน้องๆ ไปสัมผัสกับประสบการณ์การสร้างสรรค์ผลงานแอพพลิเคชั่นบนระบบปฏิบัติการ Windows 8.1 ให้ก้าวล้ำและไม่เหมือนใครในแบบของน้องๆ เอง ด้วยโปรแกรมสุดเจ๋งอย่าง Microsoft Visual Studio 2013 แล้วน้องจะพบว่าการสร้างแอพพลิเคชั่นด้วยตัวเองนั้นไม่ใช่เรื่องยากอีกต่อไป มาร่วมกันสร้างสรรค์ผลงานดีๆ ประสิทธิเยี่ยมไปพร้อมๆ กันนะ</p>
									<p>สำหรับน้องๆ คนไหนที่กลัวว่าตัวเองจะทำไม่ได้ ไม่มีพื้นฐานทางด้าน Programming หรือคิดว่าความรู้ยังไม่แน่นพอ ไม่ต้องเก็บเอาไปคิดมากนะครับ เพราะพี่ๆ พร้อมที่จะสอนพวกน้องๆ แน่นอน ขอเพียงแค่เรามีความตั้งใจ กล้าที่จะคิด กล้าที่จะทำ ที่เหลือปล่อยหน้าที่พวกพี่เอง</p>
									<a class="button pill camp-iot" href="javascript:;">สมัครเข้าค่าย</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="block block-wave">
			<div class="layer waveback" data-addoffsety="-430" data-scrollmodifier="0.91">
				<div class="wavebackbg"></div>
				<div class="background"></div>
			</div>
			<div class="layer wavefront" data-addoffsety="0" data-scrollmodifier="1">
				<div class="wavefrontbg"></div>
				<div class="background">
					<div class="itcamp-gallery" data-addoffsety="0" data-scrollmodifier="1">
						<div class="container-center">
							<h1>ภาพกิจกรรม</h1>
							<hr />
							<ul>
								<li onclick="enlarge(1)"><img src="main_assets/img/pic/01.jpg" width="100%" height="100%" alt=""></li>
								<li onclick="enlarge(2)"><img src="main_assets/img/pic/02.jpg" width="100%" height="100%" alt=""></li>
								<li onclick="enlarge(3)"><img src="main_assets/img/pic/03.jpg" width="100%" height="100%" alt=""></li>
								<li onclick="enlarge(4)"><img src="main_assets/img/pic/04.jpg" width="100%" height="100%" alt=""></li>
								<li onclick="enlarge(5)"><img src="main_assets/img/pic/05.jpg" width="100%" height="100%" alt=""></li>
								<li onclick="enlarge(6)"><img src="main_assets/img/pic/06.jpg" width="100%" height="100%" alt=""></li>
								<li onclick="enlarge(7)"><img src="main_assets/img/pic/07.jpg" width="100%" height="100%" alt=""></li>
								<li onclick="enlarge(8)"><img src="main_assets/img/pic/08.jpg" width="100%" height="100%" alt=""></li>
								<li onclick="enlarge(9)"><img src="main_assets/img/pic/09.jpg" width="100%" height="100%" alt=""></li>
								<li onclick="enlarge(10)"><img src="main_assets/img/pic/10.jpg" width="100%" height="100%" alt=""></li>
								<li onclick="enlarge(11)"><img src="main_assets/img/pic/11.jpg" width="100%" height="100%" alt=""></li>
								<li onclick="enlarge(9)"><img src="main_assets/img/pic/09.jpg" width="100%" height="100%" alt=""></li>
							</ul>
							<div class="clearfloat"></div>
						</div>
					</div>
					<div class="layer wavegroup" data-addoffsety="0" data-scrollmodifier="1">
						<div class="group">
							<img src="main_assets/img/block4/littlewave1.png" />
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="block block-coral">
			<div class="layer bubblegroup" data-addoffsety="0" data-scrollmodifier="1">
			</div>
			<div class="layer coralback" data-addoffsety="430" data-scrollmodifier="1.08">
				<img src="main_assets/img/block5/coralback.png" />
				<div class="background"></div>
			</div>
			<div class="layer coralfront" data-addoffsety="0" data-scrollmodifier="1">
				<img src="main_assets/img/block5/coralfront.png" />
				<div class="background">
					<div class="itcamp-opinion" data-addoffsety="0" data-scrollmodifier="1">
						<div class="container-center">
							<h1>คำนิยม</h1>
							<hr />
							<ul class="profile">
								<li>
									<img class="profile-picture" src="main_assets/img/opinion/p_nut.jpg" />
									<div class="profile-data">
										<h1>นายศุภโชค พงษ์ขวัญ (พี่นัท)</h1>
										<ul class="profile-history">
											<li><span class="label label--badge">ITCamp 7, 9, 10</span> พี่ค่าย</li>
											<li><span class="label label--badge">ปัจจุบัน</span> Network engineer บริษัท Dimension data</li>
										</ul>
										<p>ไอทีแคมป์เป็นค่ายที่เต็มไปด้วยภาพของความสุข มีการผสมผสานความรู้ ควบคู่กับความสนุกสนานได้ลงตัวมากๆ น้องๆ หลายคนได้เรียนรู้อะไรใหม่ๆ ที่นี่ จนกลายเป็นแรงบันดาลใจในการศึกษาด้านเทคโนโลยีคอมพิวเตอร์ ก่อนที่จะก้าวเข้าสู่รั้วมหาวิทยาลัย บางคนที่มีพื้นฐานทางด้านนี้อยู่แล้วก็ได้มาพบปะพูดคุยกับพี่ๆ และได้เจอเพื่อนๆ ที่สนใจอะไรเหมือนกัน จับกลุ่มคุยกันสนุกถูกคอจนกลายมาเป็นเพื่อนสนิทกัน บางคนยังมีคำถามค้างอยู่ในใจของตัวเอง ว่าจริงๆ แล้วเราชอบอะไร? ก็ได้มาเจอกับคำตอบที่ตรงใจ ณ ที่แห่งนี้
	4วัน 3คืนในไอทีแคมป์จะเป็นเวลาแห่งความสุขที่น้องไม่มีวันลืม เหลือเป็นภาพความทรงจำที่สวยงามและมีคุณค่าใบหนึ่งของชีวิต</p>
									</div>
								</li>
								<li>
									<img class="profile-picture" src="main_assets/img/opinion/p_ton.jpg" />
									<div class="profile-data">
										<h1>นายทรงวุฒิ อมรอนุกูล (พี่ต้น)</h1>
										<ul class="profile-history">
											<li><span class="label label--badge">ITCAMP 11</span> ประธานค่าย</li>
											<li><span class="label label--badge">ปัจจุบัน</span> นักศึกษาคณะเทคโนโลยีสารสนเทศ สจล. ชั้นปีที่ 3</li>
										</ul>
										<p>เมื่อถึงเวลาที่ต้องเลือกเส้นทางอนาคต แต่ยังไม่รู้จะเลือกอะไร น้องๆ อาจจะกำลังสับสน เพราะพี่ก็เคยเป็นเช่นเดียวกัน เคยรู้สึกเสียดายที่ไม่เคยเข้าค่ายไอทีแคมป์มาก่อน แต่เมื่อได้มาเป็นคนจัดจึงได้รู้ว่าค่ายนี้ให้น้องทุกคนที่เข้าร่วมได้เห็นทางเลือกที่ใช่ จากบรรยากาศที่น้องจะได้สัมผัสความรู้ ทักษะด้านไอที และความสนุกที่เป็นเอกลักษณ์ของที่นี้ และพี่หวังเป็นอย่างยิ่งว่า น้องๆจะเปิดใจที่จะค้นหาสิ่งใหม่ๆ สิ่งที่น้องอาจจะยังไม่แน่ใจ หรือยังไม่เคยเจอมาก่อน อย่าติดอยู่ในโลกแห่งความคิดเดิมๆ เพราะพี่ๆค่ายนี้รอที่ให้คำตอบน้องอยู่ ขอเพียงมาสัมผัสเท่านั้น และสุดท้ายที่พี่อยากบอกคือเราสามารถเลือกได้เสมอ แต่เวลาที่ให้เลือกไม่ได้มีตลอด ดังนั้นเมื่อมีโอกาส ขอให้เลือก“ไอทีแคมป์” แล้วจะได้ไม่เสียดายที่ไม่ได้เข้าเหมือนพี่ จากใจคนที่ผ่านม.ปลายมาก่อนแล้วตอนนี้อยู่มหาลัย</p>
									</div>
								</li>
								<li>
									<img class="profile-picture" src="main_assets/img/opinion/p_oat.jpg" />
									<div class="profile-data">
										<h1>นายธีรโชติ จิวะรังสินี (พี่โอ๊ต)</h1>
										<ul class="profile-history">
											<li><span class="label label--badge">ITCAMP 10</span> Network</li>
											<li><span class="label label--badge">ITCAMP 11</span> พี่ค่าย</li>
											<li><span class="label label--badge">ปัจจุบัน</span> นักศึกษาคณะเทคโนโลยีสารสนเทศ สจล. ชั้นปีที่ 2</li>
										</ul>
										<p>IT CAMP เป็นค่ายแรกและค่ายเดียวที่พี่เคยเข้าร่วมในชีวิต ม.ปลาย พี่ขอบอกว่าเป็นค่ายที่สนุกและได้รับความรู้ ความประทับใจมาก จนทำให้พี่ไม่สนใจคณะไหนอีกเลยนอกจากที่นี่ ซึ่งหากน้องได้เข้าร่วม น้องจะได้รับความรู้ด้านวิชาการจากค่ายย่อยตามที่น้องสนใจ แต่นอกจากน้องจะได้ความรู้กลับไปแล้ว น้องยังจะได้ความสนุกสนาน ความเพลิดเพลินที่พี่เตรียมไว้ให้ตลอด 4 วัน 3 คืนของค่ายนี้ และสุดท้ายที่น้องจะได้จากค่ายนี้มิตรภาพที่ดีจากพี่ๆ และเพื่อนใหม่ที่หาไม่ได้จากที่ไหนอีกแล้ว</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="block block-dirt">
			<div class="layer dirtback" data-addoffsety="-480" data-scrollmodifier="0.95">
				<img src="main_assets/img/block6/dirtback.png" />
				<div class="background"></div>
			</div>
			<div class="layer dirtmid" data-addoffsety="-210" data-scrollmodifier="0.98">
				<img src="main_assets/img/block6/dirtmid.png" />
				<div class="background"></div>
			</div>
			<div class="layer dirtfront" data-addoffsety="0" data-scrollmodifier="1">
				<img src="main_assets/img/block6/dirtfront.png" />
				<div class="background">
					<div class="itcamp-contact" data-addoffsety="140" data-scrollmodifier="1">
						<div class="container-center">
							<!--
							<div class="box-history">
								<h2>ความเป็นมา</h2>
								<p>เนื่องจากปัจจุบันเทคโนโลยีสารสนเทศเป็นสิ่งที่มีความสำคัญและมีบทบาทอย่างมากไม่ว่าจะเป็นด้านการเรียนการสอน การวิจัยและด้านกิจกรรมต่างๆ ทางคณะเทคโนโลยีสารสนเทศ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง คณะที่มีความพร้อมทางด้านเทคโนโลยีคอมพิวเตอร์และการสื่อสาร ตลอดจนบุคลากรที่มีความรู้และความสามารถ จึงมีวัตถุประสงค์ให้เยาวชนมีโอกาสเพิ่มพูนความรู้ที่ได้ไปประยุกต์ใช้ให้เกิดประโยชน์</p>
								<p>ดังนั้นสโมสรนักศึกษาคณะเทคโนโลยีสารสนเทศ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบังจึงได้จัดทำค่ายไอทีแคมป์ครั้งที่ 12 ขึ้นมา เพื่อให้นักเรียนระดับชั้นมัธยมศึกษาตอนปลายและ ปวช. ได้มาเรียนรู้เกี่ยวกับเทคโนโลยีคอมพิวเตอร์ซึ่งประกอบด้วยค่ายย่อย Applicationosaurus, Game Maker Nodon, T-Rex Network และ IoT-Ceramus อีกทั้งยังเป็นการเปิดโอกาสให้น้องๆ ได้สอบถามข้อสงสัยที่น่าสนใจต่างๆ เพื่อเป็นแนวทางในการศึกษาต่อในอนาคตอีกด้วย</p>
							</div>
							-->
							<h1>กำหนดการ</h1>
							<hr />
							<div class="box">
								<div class="box-timeline">
									<div class="timeline-base"></div>
									<div class="timeline-tree">
										<img class="tree start" src="main_assets/img/timeline/tree.png" />
										<img class="tree endregis" src="main_assets/img/timeline/tree.png" />
										<img class="tree announce" src="main_assets/img/timeline/tree.png" />
										<img class="tree lastconday" src="main_assets/img/timeline/tree.png" />
										<img class="tree lastconop" src="main_assets/img/timeline/tree.png" />
										<img class="tree end" src="main_assets/img/timeline/camp.png" />
									</div>
									<div class="timeline-current">
										<img class="dinocute" src="main_assets/img/timeline/dinocute.gif" width="80" />
									</div>
									<div class="timeline-description">
										<span class="start">1 กันยายน 58<br />เปิดรับสมัคร</span>
										<span class="endregis">24 ตุลาคม 58<br />เปิดรับสมัครวันสุดท้าย</span>
										<span class="announce">1 พฤศจิกายน 58<br />ประกาศผลและโอนเงินยืนยันสิทธ์</span>
										<span class="lastconday">15 พฤศจิกายน 58<br />วันสุดท้ายของการยืนยันสิทธ์</span>
										<span class="lastconop">20 พฤศจิกายน 58<br />ตัวสำรองโอนเงินวันสุดท้าย</span>
										<span class="end">10 - 13 ธันวาคม 58<br />ITCAMP12 Day!</span>
									</div>
								</div>
								<div class="box-contact">
									<div class="box-faq">
										<h2>คำถามที่พบบ่อย</h2>
										<ul>
											<li>Q: ค่ายนี้จัดขึ้นที่ไหน อย่างไร ?</li>
											<li>A: ค่ายนี้จัดที่<b>คณะเทคโนโลยีสารสนเทศ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง</b> ตลอดระยะเวลา 4 วัน 3 คืน โดยที่น้องจะไม่ได้รับอนุญาตให้ออกจากบริเวณที่จัดกิจกรรม ยกเว้นในกรณีที่ติดธุระเร่งด่วน และมีผู้ปกครองมารับด้วยตนเอง การเดินทางมายังคณะเทคโนโลยีสารสนเทศ สามารถดูได้ที่<b><a href="http://www.it.kmitl.ac.th/about/contact/map" target="_blank">เว็บไซต์ของคณะ</a></b>ได้เลยนะครับ</li>
											<li>Q: มีค่าใช้จ่ายหรือไม่ จำนวนเท่าไหร่ และชำระตอนไหน สละสิทธิ์ได้เงินคืนหรือไม่ ? </li>
											<li>A: <b>มีค่าใช้จ่าย จำนวน 500 บาท</b> โดยชำระตามเวลาที่กำหนด (1 - 15 พฤศจิกายน 2558) หากน้องคนใดจะสละสิทธิ์ สามารถกดปุ่มสละสิทธิ์ที่หน้าเว็บและ<b>ขอให้น้องๆ คิดให้รอบคอบก่อนจะชำระเงิน เพราะหากน้องสละสิทธิ์จะไม่ได้รับเงินคืนครับ</b></li>
											<li>Q: ต้องพักค้างคืนที่ค่ายหรือเปล่า ?</li>
											<li>A: ใช่ครับ เพื่อให้น้องๆ สะดวกต่อการเข้าร่วมกิจกรรม น้องๆ จะได้นอนพักในห้องพักที่พี่ๆ จัดเตรียมไว้ให้ที่คณะ ซึ่งติดแอร์เย็นฉ่ำ สะดวกสบาย ง่ายต่อการทำกิจกรรมของน้องๆ และที่สำคัญ พี่ๆ จะดูแลน้องได้ตลอด 24 ชั่วโมงตลอดโครงการ น้องๆ สบายใจได้ครับ</li>
											<li>Q: สมัครมากกว่าหนึ่งค่ายย่อยหรือเปลี่ยนไปอยู่ค่ายอื่นได้หรือไม่ ?</li>
											<li>A: <b>ไม่สามารถสมัครได้ครับ</b> ดังนั้นน้องๆ ควรจะตัดสินใจให้ชัดเจนว่าจะสมัครค่ายไหน เพราะช่วงที่มีการเรียนการสอน แต่ละค่ายจะจัดการเรียนการสอนแยกกันอย่างชัดเจน</li>
											<li>Q: จำเป็นต้องมีความรู้มาก่อนหรือไม่ ?</li>
											<li>A: ไม่จำเป็นครับ ขอแค่เพียงน้องๆ มีความสนใจและใฝ่รู้ก็พอครับ ที่เหลือพี่ๆ จะเป็นคนช่วยสอนน้องๆ เอง</li>
											<li>Q: ค่ายรับระดับชั้นไหนบ้าง ปวช. สามารถสมัครได้หรือเปล่า ?</li>
											<li>A: ค่ายนี้จะรับเฉพาะน้องๆ ที่กำลังศึกษาอยู่ระดับชั้นมัธยมศึกษาตอนปลาย ทุกแผนการเรียน และ ปวช. เท่านั้นครับ</li>
										</ul>
									</div>
									<h2>ติดต่อ</h2>
									<table cellspacing="0" cellpadding="0" border="0">
										<tr>
											<td rowspan="2" align="left" class="box-contact-camp">
												<div class="link"><a href="https://www.facebook.com/itcampKMITL" target="_blank"><img class="facebookicon" src="main_assets/img/facebookicon.png" />facebook.com/itcampKMITL</a></div>
												<div class="link"><a href="https://twitter.com/ITCAMP" target="_blank"><img class="twittericon" src="main_assets/img/twittericon.png" />@ITCAMP</a></div>
												<div class="link"><a href="mailto:itcamp12@gmail.com" target="_blank"><img class="facebookicon" src="main_assets/img/gmailicon.png" />itcamp12@gmail.com</a></div>
											</td>
											<td width="360">
												<div class="people">
													<div class="avatar">
														<img src="main_assets/img/girlicon.png" width="75" />
													</div>
													<div class="detail">
														<span class="contact-name">พี่มี่มี่</span><br />
														เบอร์โทร : 089-3365314<br />
														Line : mimiiiz<br />
													</div>
												</div>
												<hr />
											</td>
										</tr>
										<tr>
											<td width="360">
												<div class="people">
													<div class="avatar">
														<img src="main_assets/img/boyicon.png" width="75" />
													</div>
													<div class="detail">
														<span class="contact-name">พี่อาร์มี่</span><br />
														เบอร์โทร : 082-3445894<br />
														Line : olarmiezzlo<br />
													</div>
												</div>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>
