<a href="http://www.swift-tutor.com/wp-content/uploads/2013/09/mysql-php-swift-tutor.png" class="alignleft rollover dt-single-mfp-popup dt-mfp-item mfp-image"  title="mysql-php-swift-tutor" data-dt-img-description=""><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2013/09/mysql-php-swift-tutor-270x145.png" width="270" height="145"  title="mysql-php-swift-tutor" alt="mysql-php-swift-tutor" /></a>
	<h1 hidden="">เพื่อควบคุมการเข้าใช้งานเมธอดและพร็อบเพอร์ตี้เราควรกำหนด keyword ที่หน้าชื่อ Method หรือ Properties ซึ่ง Keyword ดังกล่าวนั้นได้แก่ public, protected และ private</h1>
<p hidden="">Public ไม่จำกัดการเข้าใช้งาน Protected จำกัดการใช้งานจากภายนอกแต่ไม่จำกัดภายใน Class และ Child Class ส่วน Private ใช้ได้เฉพาะภายใน Class เท่านั้น</p>
<h3>public, protected และ private</h3>
<p>เพื่อควบคุมการเข้าใช้งาน Method และ Properties เราจะต้องกำหนด keyword<span id="more-1211"></span> ที่หน้าชื่อ Method หรือ Properties ซึ่ง Keyword ดังกล่าวนั้นได้แก่ public, protected และ private</p>
<p style="padding-left: 30px;"><strong>public</strong> กำหนดให้ Method หรือ Properties สามารถใช้งานได้ทั้งภายใน Class และจากภายนอก Class</p>
<p style="padding-left: 30px;"><strong>protected</strong> จำกัดการใช้งาน Method หรือ Properties ให้สามารถเข้าถึงและใช้งานได้เฉพาะภายใน Class หรือ Child Class เท่านั้น ไม่อนุญาตให้ใช้งานจากภายนอก Class</p>
<p style="padding-left: 30px;"><strong>private</strong> จำกัดการใช้งาน Method หรือ Properties ให้สามารถเข้าถึงและใช้งานได้เฉพาะภายใน Class เท่านั้น และไม่อนุญาตให้ใช้งานจาก Child Class หรืิอจากภายนอก Class</p>
<p>ต่อไปนี้เป็นตัวอย่างการใช้ Keyword ในทั้ง 3 แบบข้างต้น</p><!-- Crayon Syntax Highlighter v2.7.1 -->

		<div id="crayon-5821faa0752a6259241975" class="crayon-syntax crayon-theme-classic crayon-font-monaco crayon-os-pc print-yes notranslate" data-settings=" no-popup minimize scroll-mouseover" style=" margin-top: 12px; margin-bottom: 12px; font-size: 12px !important; line-height: 15px !important;">
		
			<div class="crayon-plain-wrap"></div>
			<div class="crayon-main" style="">
				<table class="crayon-table">
					<tr class="crayon-row">
				<td class="crayon-nums " data-settings="show">
					<div class="crayon-nums-content" style="font-size: 12px !important; line-height: 15px !important;"><div class="crayon-num" data-line="crayon-5821faa0752a6259241975-1">1</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752a6259241975-2">2</div><div class="crayon-num" data-line="crayon-5821faa0752a6259241975-3">3</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752a6259241975-4">4</div><div class="crayon-num" data-line="crayon-5821faa0752a6259241975-5">5</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752a6259241975-6">6</div><div class="crayon-num" data-line="crayon-5821faa0752a6259241975-7">7</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752a6259241975-8">8</div><div class="crayon-num" data-line="crayon-5821faa0752a6259241975-9">9</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752a6259241975-10">10</div><div class="crayon-num" data-line="crayon-5821faa0752a6259241975-11">11</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752a6259241975-12">12</div><div class="crayon-num" data-line="crayon-5821faa0752a6259241975-13">13</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752a6259241975-14">14</div><div class="crayon-num" data-line="crayon-5821faa0752a6259241975-15">15</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752a6259241975-16">16</div><div class="crayon-num" data-line="crayon-5821faa0752a6259241975-17">17</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752a6259241975-18">18</div><div class="crayon-num" data-line="crayon-5821faa0752a6259241975-19">19</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752a6259241975-20">20</div><div class="crayon-num" data-line="crayon-5821faa0752a6259241975-21">21</div></div>
				</td>
						<td class="crayon-code"><div class="crayon-pre" style="font-size: 12px !important; line-height: 15px !important; -moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4;"><div class="crayon-line" id="crayon-5821faa0752a6259241975-1"><span class="crayon-ta">&lt;?php</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752a6259241975-2"><span class="crayon-t">class</span><span class="crayon-h"> </span><span class="crayon-e">user</span><span class="crayon-h"> </span><span class="crayon-c">//1</span></div><div class="crayon-line" id="crayon-5821faa0752a6259241975-3"><span class="crayon-sy">{</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752a6259241975-4"><span class="crayon-h">&nbsp;&nbsp;</span><span class="crayon-m">private</span><span class="crayon-h"> </span><span class="crayon-v">$id</span><span class="crayon-sy">;</span><span class="crayon-h"> </span><span class="crayon-c">//2</span></div><div class="crayon-line" id="crayon-5821faa0752a6259241975-5"><span class="crayon-h">&nbsp;&nbsp;</span><span class="crayon-m">protected</span><span class="crayon-h"> </span><span class="crayon-v">$user</span><span class="crayon-sy">;</span><span class="crayon-h"> </span><span class="crayon-c">//3</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752a6259241975-6"><span class="crayon-h">&nbsp;&nbsp;</span><span class="crayon-m">public</span><span class="crayon-h"> </span><span class="crayon-t">function</span><span class="crayon-h"> </span><span class="crayon-e">setMyName</span><span class="crayon-sy">(</span><span class="crayon-v">$input</span><span class="crayon-sy">)</span><span class="crayon-sy">{</span><span class="crayon-h"> </span><span class="crayon-c">//4</span></div><div class="crayon-line" id="crayon-5821faa0752a6259241975-7"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-v">$this</span><span class="crayon-o">-&gt;</span><span class="crayon-i">user</span><span class="crayon-h"> </span><span class="crayon-o">=</span><span class="crayon-h"> </span><span class="crayon-v">$input</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752a6259241975-8"><span class="crayon-h">&nbsp;&nbsp;</span><span class="crayon-sy">}</span></div><div class="crayon-line" id="crayon-5821faa0752a6259241975-9"><span class="crayon-h">&nbsp;&nbsp;</span><span class="crayon-m">public</span><span class="crayon-h"> </span><span class="crayon-t">function</span><span class="crayon-h"> </span><span class="crayon-e">getMyName</span><span class="crayon-sy">(</span><span class="crayon-sy">)</span><span class="crayon-sy">{</span><span class="crayon-h"> </span><span class="crayon-c">//5</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752a6259241975-10"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-k ">return</span><span class="crayon-h"> </span><span class="crayon-v">$this</span><span class="crayon-o">-&gt;</span><span class="crayon-i">user</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-5821faa0752a6259241975-11"><span class="crayon-h">&nbsp;&nbsp;</span><span class="crayon-sy">}</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752a6259241975-12"><span class="crayon-sy">}</span></div><div class="crayon-line" id="crayon-5821faa0752a6259241975-13"><span class="crayon-ta">?&gt;</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752a6259241975-14">&nbsp;</div><div class="crayon-line" id="crayon-5821faa0752a6259241975-15"><span class="crayon-ta">&lt;?php</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752a6259241975-16"><span class="crayon-v">$Student</span><span class="crayon-h"> </span><span class="crayon-o">=</span><span class="crayon-h"> </span><span class="crayon-r">new</span><span class="crayon-h"> </span><span class="crayon-e">user</span><span class="crayon-sy">(</span><span class="crayon-sy">)</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-5821faa0752a6259241975-17"><span class="crayon-v">$setName</span><span class="crayon-h"> </span><span class="crayon-o">=</span><span class="crayon-h"> </span><span class="crayon-s">"injectioline"</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752a6259241975-18"><span class="crayon-v">$Student</span><span class="crayon-o">-&gt;</span><span class="crayon-e">setMyName</span><span class="crayon-sy">(</span><span class="crayon-v">$setName</span><span class="crayon-sy">)</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-5821faa0752a6259241975-19"><span class="crayon-v">$name</span><span class="crayon-h"> </span><span class="crayon-o">=</span><span class="crayon-h"> </span><span class="crayon-v">$Student</span><span class="crayon-o">-&gt;</span><span class="crayon-e">getMyName</span><span class="crayon-sy">(</span><span class="crayon-sy">)</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752a6259241975-20"><span class="crayon-k ">echo</span><span class="crayon-h"> </span><span class="crayon-s">"My name is &lt;em&gt;"</span><span class="crayon-sy">.</span><span class="crayon-v">$name</span><span class="crayon-sy">.</span><span class="crayon-s">"&lt;/em&gt;"</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-5821faa0752a6259241975-21"><span class="crayon-ta">?&gt;</span></div></div></td>
					</tr>
				</table>
			</div>
		</div>
<!-- [Format Time: 0.0023 seconds] -->
<p>1. กำหนดตัวแปร $id เป็นแบบ private</p>
<p>2. กำหนดตัวแปร $user เป็นแบบ protected</p>
<p>3. กำหนดฟังก์ชัน setMyName เป็นแบบ public</p>
<p>4. กำหนดฟังก์ชัน getMyName เป็นแบบ public</p>
<p style="padding-left: 30px;">นอกจากตัวอย่างการกำหนด Keyword ทั้ง 3 แบบใน Class ตามตัวอย่างข้างต้นแล้ว เรายังสามารถกำหนดได้ที่ตัวแปร หรือที่ฟังก์ชันภายใน Class ก็ได้ ดังตัวอย่างโค๊ตต่อไปนี้</p>
<p></p><!-- Crayon Syntax Highlighter v2.7.1 -->

		<div id="crayon-5821faa0752af337459751" class="crayon-syntax crayon-theme-classic crayon-font-monaco crayon-os-pc print-yes notranslate" data-settings=" no-popup minimize scroll-mouseover" style=" margin-top: 12px; margin-bottom: 12px; font-size: 12px !important; line-height: 15px !important;">
		
			<div class="crayon-plain-wrap"></div>
			<div class="crayon-main" style="">
				<table class="crayon-table">
					<tr class="crayon-row">
				<td class="crayon-nums " data-settings="show">
					<div class="crayon-nums-content" style="font-size: 12px !important; line-height: 15px !important;"><div class="crayon-num" data-line="crayon-5821faa0752af337459751-1">1</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752af337459751-2">2</div><div class="crayon-num" data-line="crayon-5821faa0752af337459751-3">3</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752af337459751-4">4</div><div class="crayon-num" data-line="crayon-5821faa0752af337459751-5">5</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752af337459751-6">6</div><div class="crayon-num" data-line="crayon-5821faa0752af337459751-7">7</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752af337459751-8">8</div><div class="crayon-num" data-line="crayon-5821faa0752af337459751-9">9</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752af337459751-10">10</div><div class="crayon-num" data-line="crayon-5821faa0752af337459751-11">11</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752af337459751-12">12</div><div class="crayon-num" data-line="crayon-5821faa0752af337459751-13">13</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752af337459751-14">14</div><div class="crayon-num" data-line="crayon-5821faa0752af337459751-15">15</div></div>
				</td>
						<td class="crayon-code"><div class="crayon-pre" style="font-size: 12px !important; line-height: 15px !important; -moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4;"><div class="crayon-line" id="crayon-5821faa0752af337459751-1"><span class="crayon-t">class</span><span class="crayon-h"> </span><span class="crayon-e">myClass</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752af337459751-2"><span class="crayon-sy">{</span></div><div class="crayon-line" id="crayon-5821faa0752af337459751-3"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-m">public</span><span class="crayon-h"> </span><span class="crayon-v">$variable1</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752af337459751-4"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-m">public</span><span class="crayon-h"> </span><span class="crayon-t">function</span><span class="crayon-h"> </span><span class="crayon-e">functionName1</span><span class="crayon-sy">(</span><span class="crayon-sy">)</span><span class="crayon-sy">{</span></div><div class="crayon-line" id="crayon-5821faa0752af337459751-5"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-c">//...statement...</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752af337459751-6"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-sy">}</span></div><div class="crayon-line" id="crayon-5821faa0752af337459751-7"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-m">private</span><span class="crayon-h"> </span><span class="crayon-v">$variable2</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752af337459751-8"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-m">private</span><span class="crayon-h"> </span><span class="crayon-t">function</span><span class="crayon-h"> </span><span class="crayon-e">functionName2</span><span class="crayon-sy">(</span><span class="crayon-sy">)</span><span class="crayon-sy">{</span></div><div class="crayon-line" id="crayon-5821faa0752af337459751-9"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-c">//...statement...</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752af337459751-10"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-sy">}</span></div><div class="crayon-line" id="crayon-5821faa0752af337459751-11"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-m">protected</span><span class="crayon-h"> </span><span class="crayon-v">$variable3</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752af337459751-12"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-m">protected</span><span class="crayon-h"> </span><span class="crayon-t">function</span><span class="crayon-h"> </span><span class="crayon-e">functionName3</span><span class="crayon-sy">(</span><span class="crayon-sy">)</span><span class="crayon-sy">{</span></div><div class="crayon-line" id="crayon-5821faa0752af337459751-13"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-c">//...statement...</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752af337459751-14"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-sy">}</span></div><div class="crayon-line" id="crayon-5821faa0752af337459751-15"><span class="crayon-sy">}</span></div></div></td>
					</tr>
				</table>
			</div>
		</div>
<!-- [Format Time: 0.0012 seconds] -->
<p></p>
<h3>ป้องกันการใช้งานจากภายนอกด้วย Protected</h3>
<p style="padding-left: 30px;">หากเรามีข้อมูลที่ต้องการปกป้อง นิยมเก็บข้อมูลประเภทนี้ลงในตัวแปรแบบ protected ซึ่งข้อดีคือ เราสามารถจำกัดการ Access ข้อมูลจากภายนอกได้</p>
<p>1. สร้างไฟล์ magicNow.php แล้วกรอกโค๊ตต่อไปนี้ลงไป</p><!-- Crayon Syntax Highlighter v2.7.1 -->

		<div id="crayon-5821faa0752b3989555431" class="crayon-syntax crayon-theme-classic crayon-font-monaco crayon-os-pc print-yes notranslate" data-settings=" no-popup minimize scroll-mouseover" style=" margin-top: 12px; margin-bottom: 12px; font-size: 12px !important; line-height: 15px !important;">
		
			<div class="crayon-plain-wrap"></div>
			<div class="crayon-main" style="">
				<table class="crayon-table">
					<tr class="crayon-row">
				<td class="crayon-nums " data-settings="show">
					<div class="crayon-nums-content" style="font-size: 12px !important; line-height: 15px !important;"><div class="crayon-num" data-line="crayon-5821faa0752b3989555431-1">1</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752b3989555431-2">2</div><div class="crayon-num" data-line="crayon-5821faa0752b3989555431-3">3</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752b3989555431-4">4</div><div class="crayon-num" data-line="crayon-5821faa0752b3989555431-5">5</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752b3989555431-6">6</div></div>
				</td>
						<td class="crayon-code"><div class="crayon-pre" style="font-size: 12px !important; line-height: 15px !important; -moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4;"><div class="crayon-line" id="crayon-5821faa0752b3989555431-1"><span class="crayon-ta">&lt;?php</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752b3989555431-2"><span class="crayon-t">class</span><span class="crayon-h"> </span><span class="crayon-e">magicNow</span></div><div class="crayon-line" id="crayon-5821faa0752b3989555431-3"><span class="crayon-sy">{</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752b3989555431-4"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-m">protected</span><span class="crayon-h"> </span><span class="crayon-v">$myData</span><span class="crayon-sy">;</span><span class="crayon-h"> </span><span class="crayon-c">//กำหนดให้เป็นตัวแปรแบบ protected</span></div><div class="crayon-line" id="crayon-5821faa0752b3989555431-5"><span class="crayon-sy">}</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752b3989555431-6"><span class="crayon-ta">?&gt;</span></div></div></td>
					</tr>
				</table>
			</div>
		</div>
<!-- [Format Time: 0.0004 seconds] -->
<p>2. เซฟไฟล์ magicNow.php ลงในโฮมโฟลเดอร์ ที่เป็นโฟลเดอร์หลักของเว็บไซต์</p>
<p>3. สร้างไฟล์ testMagic.php แล้วกรอกโค๊ตต่อไปนี้ลงไป</p><!-- Crayon Syntax Highlighter v2.7.1 -->

		<div id="crayon-5821faa0752b6728574896" class="crayon-syntax crayon-theme-classic crayon-font-monaco crayon-os-pc print-yes notranslate" data-settings=" no-popup minimize scroll-mouseover" style=" margin-top: 12px; margin-bottom: 12px; font-size: 12px !important; line-height: 15px !important;">
		
			<div class="crayon-plain-wrap"></div>
			<div class="crayon-main" style="">
				<table class="crayon-table">
					<tr class="crayon-row">
				<td class="crayon-nums " data-settings="show">
					<div class="crayon-nums-content" style="font-size: 12px !important; line-height: 15px !important;"><div class="crayon-num" data-line="crayon-5821faa0752b6728574896-1">1</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752b6728574896-2">2</div><div class="crayon-num" data-line="crayon-5821faa0752b6728574896-3">3</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752b6728574896-4">4</div><div class="crayon-num" data-line="crayon-5821faa0752b6728574896-5">5</div></div>
				</td>
						<td class="crayon-code"><div class="crayon-pre" style="font-size: 12px !important; line-height: 15px !important; -moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4;"><div class="crayon-line" id="crayon-5821faa0752b6728574896-1"><span class="crayon-ta">&lt;?php</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752b6728574896-2"><span class="crayon-k ">require_once</span><span class="crayon-h"> </span><span class="crayon-s">'magicNow.php'</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-5821faa0752b6728574896-3"><span class="crayon-v">$Text</span><span class="crayon-h"> </span><span class="crayon-o">=</span><span class="crayon-h"> </span><span class="crayon-r">new</span><span class="crayon-h"> </span><span class="crayon-e">magicNow</span><span class="crayon-sy">(</span><span class="crayon-sy">)</span><span class="crayon-sy">;</span><span class="crayon-h"> </span><span class="crayon-c">//สร้าง object ที่ชื่อว่า Text</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752b6728574896-4"><span class="crayon-v">$Text</span><span class="crayon-o">-&gt;</span><span class="crayon-i">myData</span><span class="crayon-h"> </span><span class="crayon-o">=</span><span class="crayon-h"> </span><span class="crayon-s">'test add data'</span><span class="crayon-sy">;</span><span class="crayon-h"> </span><span class="crayon-c">//กำหนดค่าให้กับตัวแปร myData</span></div><div class="crayon-line" id="crayon-5821faa0752b6728574896-5"><span class="crayon-ta">?&gt;</span></div></div></td>
					</tr>
				</table>
			</div>
		</div>
<!-- [Format Time: 0.0006 seconds] -->
<p>4. เซฟไฟล์ testMagic.php ลงในโฮมโฟลเดอร์ เช่นเดียวกับไฟล์ magicNow.php</p>
<p>5. ทดลองเปิดไฟล์ testMagic.php จะพบว่า ไม่สามารถกำหนดค่าให้กับตัวแปร myData (เป็น Properties ที่อยู่ใน Class) เนื่องจากตัวแปร $myData เป็นแบบ protected จึงไม่สามารถ Access ได้จากภายนอก</p>
<p style="padding-left: 30px;">ในกรณีตัวอย่างข้างต้น หากเราต้องการเข้าไปแก้ไขค่าใน $myData จากภายนอก จะต้องสร้าง method ภายใน Class ดังนี้</p>
<p>เริ่มจากเข้าไปแก้ไขโค๊ตในไฟล์ magicNow.php โดยเพิ่ม method ที่ชื่อว่า setData และ method ที่ชื่อว่า getData โดยใช้วิธีเพิ่มฟังก์ชัน setData() และ ฟังก์ชัน getData() ตามลำดับ</p><!-- Crayon Syntax Highlighter v2.7.1 -->

		<div id="crayon-5821faa0752ba911533826" class="crayon-syntax crayon-theme-classic crayon-font-monaco crayon-os-pc print-yes notranslate" data-settings=" no-popup minimize scroll-mouseover" style=" margin-top: 12px; margin-bottom: 12px; font-size: 12px !important; line-height: 15px !important;">
		
			<div class="crayon-plain-wrap"></div>
			<div class="crayon-main" style="">
				<table class="crayon-table">
					<tr class="crayon-row">
				<td class="crayon-nums " data-settings="show">
					<div class="crayon-nums-content" style="font-size: 12px !important; line-height: 15px !important;"><div class="crayon-num" data-line="crayon-5821faa0752ba911533826-1">1</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752ba911533826-2">2</div><div class="crayon-num" data-line="crayon-5821faa0752ba911533826-3">3</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752ba911533826-4">4</div><div class="crayon-num" data-line="crayon-5821faa0752ba911533826-5">5</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752ba911533826-6">6</div><div class="crayon-num" data-line="crayon-5821faa0752ba911533826-7">7</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752ba911533826-8">8</div><div class="crayon-num" data-line="crayon-5821faa0752ba911533826-9">9</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752ba911533826-10">10</div><div class="crayon-num" data-line="crayon-5821faa0752ba911533826-11">11</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752ba911533826-12">12</div><div class="crayon-num" data-line="crayon-5821faa0752ba911533826-13">13</div></div>
				</td>
						<td class="crayon-code"><div class="crayon-pre" style="font-size: 12px !important; line-height: 15px !important; -moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4;"><div class="crayon-line" id="crayon-5821faa0752ba911533826-1"><span class="crayon-ta">&lt;?php</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752ba911533826-2"><span class="crayon-t">class</span><span class="crayon-h"> </span><span class="crayon-e">magicNow</span></div><div class="crayon-line" id="crayon-5821faa0752ba911533826-3"><span class="crayon-sy">{</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752ba911533826-4"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-m">protected</span><span class="crayon-h"> </span><span class="crayon-v">$myData</span><span class="crayon-sy">;</span><span class="crayon-h"> </span><span class="crayon-c">//1</span></div><div class="crayon-line" id="crayon-5821faa0752ba911533826-5"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-m">public</span><span class="crayon-h"> </span><span class="crayon-t">function</span><span class="crayon-h"> </span><span class="crayon-e">setData</span><span class="crayon-sy">(</span><span class="crayon-v">$setData</span><span class="crayon-sy">)</span><span class="crayon-sy">{</span><span class="crayon-h"> </span><span class="crayon-c">//2</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752ba911533826-6"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-v">$this</span><span class="crayon-o">-&gt;</span><span class="crayon-i">myData</span><span class="crayon-h"> </span><span class="crayon-o">=</span><span class="crayon-h"> </span><span class="crayon-v">$setData</span><span class="crayon-sy">;</span><span class="crayon-h"> </span><span class="crayon-c">//3</span></div><div class="crayon-line" id="crayon-5821faa0752ba911533826-7"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-sy">}</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752ba911533826-8"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-m">public</span><span class="crayon-h"> </span><span class="crayon-t">function</span><span class="crayon-h"> </span><span class="crayon-e">getData</span><span class="crayon-sy">(</span><span class="crayon-sy">)</span><span class="crayon-sy">{</span><span class="crayon-h"> </span><span class="crayon-c">//4</span></div><div class="crayon-line" id="crayon-5821faa0752ba911533826-9"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-k ">return</span><span class="crayon-h"> </span><span class="crayon-v">$this</span><span class="crayon-o">-&gt;</span><span class="crayon-i">myData</span><span class="crayon-sy">;</span><span class="crayon-h"> </span><span class="crayon-c">//5</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752ba911533826-10"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-sy">}</span></div><div class="crayon-line" id="crayon-5821faa0752ba911533826-11"><span class="crayon-sy">}</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752ba911533826-12">&nbsp;</div><div class="crayon-line" id="crayon-5821faa0752ba911533826-13"><span class="crayon-ta">?&gt;</span></div></div></td>
					</tr>
				</table>
			</div>
		</div>
<!-- [Format Time: 0.0012 seconds] -->
<p>1. ประกาศตัวแปรเป็นแบบ protected</p>
<p>2. สร้างฟังก์ชัน setData() โดยมีการรับค่าเข้าไปในฟังก์ชัน</p>
<p>3. ใช้ตัวแปร $this อ้างอิงกับ Object ปัจจุบัน ซึ่งก็คือ class นั่นเอง และกำหนดค่าให้กับตัวแปร myData ซึ่งการใช้คำสั่ง $this-&gt;myData = $setData; จะหมายถึง การนำเอาค่าจากตัวแปร $setData ไปใส่ให้กับ property ที่ชื่อว่า myData</p>
<p>4. สร้างฟังก์ชัน setData()</p>
<p>5. คำสั่ง return $this-&gt;myData; จะหมายถึง ส่งค่าตัวแปร $myData ที่อยู่ใน Class ออกไป</p>
<p style="padding-left: 30px;">จากนั้นเข้าไปแก้ไขโค๊ตในไฟล์ testMagic.php โดยหากต้องการแก้ไขค่าในตัวแปร $myData จะทำผ่าน Method ที่ชื่อว่า setData() ส่วนการแสดงค่าจากตัวแปร $myData จะทำผ่าน Method ที่ชื่อว่า getData()</p>
<p></p><!-- Crayon Syntax Highlighter v2.7.1 -->

		<div id="crayon-5821faa0752be723760835" class="crayon-syntax crayon-theme-classic crayon-font-monaco crayon-os-pc print-yes notranslate" data-settings=" no-popup minimize scroll-mouseover" style=" margin-top: 12px; margin-bottom: 12px; font-size: 12px !important; line-height: 15px !important;">
		
			<div class="crayon-plain-wrap"></div>
			<div class="crayon-main" style="">
				<table class="crayon-table">
					<tr class="crayon-row">
				<td class="crayon-nums " data-settings="show">
					<div class="crayon-nums-content" style="font-size: 12px !important; line-height: 15px !important;"><div class="crayon-num" data-line="crayon-5821faa0752be723760835-1">1</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752be723760835-2">2</div><div class="crayon-num" data-line="crayon-5821faa0752be723760835-3">3</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752be723760835-4">4</div><div class="crayon-num" data-line="crayon-5821faa0752be723760835-5">5</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752be723760835-6">6</div></div>
				</td>
						<td class="crayon-code"><div class="crayon-pre" style="font-size: 12px !important; line-height: 15px !important; -moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4;"><div class="crayon-line" id="crayon-5821faa0752be723760835-1"><span class="crayon-ta">&lt;?php</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752be723760835-2"><span class="crayon-k ">require_once</span><span class="crayon-h"> </span><span class="crayon-s">'magicNow.php'</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-5821faa0752be723760835-3"><span class="crayon-v">$text</span><span class="crayon-h"> </span><span class="crayon-o">=</span><span class="crayon-h"> </span><span class="crayon-r">new</span><span class="crayon-h"> </span><span class="crayon-e">magicNow</span><span class="crayon-sy">(</span><span class="crayon-sy">)</span><span class="crayon-sy">;</span><span class="crayon-h"> </span><span class="crayon-c">//1</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752be723760835-4"><span class="crayon-v">$text</span><span class="crayon-o">-&gt;</span><span class="crayon-e">setData</span><span class="crayon-sy">(</span><span class="crayon-s">'test add data'</span><span class="crayon-sy">)</span><span class="crayon-sy">;</span><span class="crayon-h"> </span><span class="crayon-c">//2</span></div><div class="crayon-line" id="crayon-5821faa0752be723760835-5"><span class="crayon-k ">echo</span><span class="crayon-h"> </span><span class="crayon-v">$text</span><span class="crayon-o">-&gt;</span><span class="crayon-e">getData</span><span class="crayon-sy">(</span><span class="crayon-sy">)</span><span class="crayon-sy">;</span><span class="crayon-h"> </span><span class="crayon-c">//3</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752be723760835-6"><span class="crayon-ta">?&gt;</span></div></div></td>
					</tr>
				</table>
			</div>
		</div>
<!-- [Format Time: 0.0008 seconds] -->
<p>1. สร้าง object ที่ชื่อว่า Text</p>
<p>2. เรียกใช้ Method ท่ี่ชื่อว่า setData โดยส่งค่าเข้าไป</p>
<p>3. เรียกใช้ Method ที่ชื่อว่า getData ซึ่งผลลัพธ์ที่ต้องการคือ การแสดงค่าที่อยู่ใน Properties ที่ชื่อว่า myData</p>
<p>ทดลองเปิดไฟล์ testMagic.php เราก็จะพบว่าข้อความตามต้องการ</p>
<h3>ตรวจดู Class ทั้งหมดที่ใช้งานอยู่</h3>
<p>หลังจากที่เรากำหนด Class ไปเรียบร้อยแล้ว เราสามารถตรวจสอบได้ว่า ในปัจจุบันมี Class ใดๆ ได้ถูกกำหนดไว้บ้าง ในกรณีนี้จะใช้ฟังก์ชัน get_declared_classes() เพื่อตรวจสอบรายชื่อ Class ที่เรากำหนดขึ้น รวมถึงรายชื่อ Class ที่ทาง PHP เตรียมเอาไว้ให้</p><!-- Crayon Syntax Highlighter v2.7.1 -->

		<div id="crayon-5821faa0752c2930569947" class="crayon-syntax crayon-theme-classic crayon-font-monaco crayon-os-pc print-yes notranslate" data-settings=" no-popup minimize scroll-mouseover" style=" margin-top: 12px; margin-bottom: 12px; font-size: 12px !important; line-height: 15px !important;">
		
			<div class="crayon-plain-wrap"></div>
			<div class="crayon-main" style="">
				<table class="crayon-table">
					<tr class="crayon-row">
				<td class="crayon-nums " data-settings="show">
					<div class="crayon-nums-content" style="font-size: 12px !important; line-height: 15px !important;"><div class="crayon-num" data-line="crayon-5821faa0752c2930569947-1">1</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752c2930569947-2">2</div><div class="crayon-num" data-line="crayon-5821faa0752c2930569947-3">3</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752c2930569947-4">4</div><div class="crayon-num" data-line="crayon-5821faa0752c2930569947-5">5</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752c2930569947-6">6</div><div class="crayon-num" data-line="crayon-5821faa0752c2930569947-7">7</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752c2930569947-8">8</div><div class="crayon-num" data-line="crayon-5821faa0752c2930569947-9">9</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752c2930569947-10">10</div><div class="crayon-num" data-line="crayon-5821faa0752c2930569947-11">11</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752c2930569947-12">12</div><div class="crayon-num" data-line="crayon-5821faa0752c2930569947-13">13</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752c2930569947-14">14</div><div class="crayon-num" data-line="crayon-5821faa0752c2930569947-15">15</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752c2930569947-16">16</div><div class="crayon-num" data-line="crayon-5821faa0752c2930569947-17">17</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752c2930569947-18">18</div><div class="crayon-num" data-line="crayon-5821faa0752c2930569947-19">19</div></div>
				</td>
						<td class="crayon-code"><div class="crayon-pre" style="font-size: 12px !important; line-height: 15px !important; -moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4;"><div class="crayon-line" id="crayon-5821faa0752c2930569947-1"><span class="crayon-ta">&lt;?php</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752c2930569947-2"><span class="crayon-t">class</span><span class="crayon-h"> </span><span class="crayon-e">FirstClass</span><span class="crayon-h"> </span><span class="crayon-sy">{</span></div><div class="crayon-line" id="crayon-5821faa0752c2930569947-3"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-m">private</span><span class="crayon-h"> </span><span class="crayon-v">$name</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752c2930569947-4"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-m">public</span><span class="crayon-h"> </span><span class="crayon-t">function</span><span class="crayon-h"> </span><span class="crayon-e">setName</span><span class="crayon-sy">(</span><span class="crayon-v">$name</span><span class="crayon-sy">)</span><span class="crayon-h"> </span><span class="crayon-sy">{</span></div><div class="crayon-line" id="crayon-5821faa0752c2930569947-5"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-v">$this</span><span class="crayon-o">-&gt;</span><span class="crayon-v">$name</span><span class="crayon-h"> </span><span class="crayon-o">=</span><span class="crayon-h"> </span><span class="crayon-v">$name</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752c2930569947-6"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-sy">}</span></div><div class="crayon-line" id="crayon-5821faa0752c2930569947-7"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-m">public</span><span class="crayon-h"> </span><span class="crayon-t">function</span><span class="crayon-h"> </span><span class="crayon-e">showName</span><span class="crayon-sy">(</span><span class="crayon-sy">)</span><span class="crayon-h"> </span><span class="crayon-sy">{</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752c2930569947-8"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-k ">echo</span><span class="crayon-h"> </span><span class="crayon-v">$this</span><span class="crayon-o">-&gt;</span><span class="crayon-v">$name</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-5821faa0752c2930569947-9"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-sy">}</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752c2930569947-10"><span class="crayon-sy">}</span></div><div class="crayon-line" id="crayon-5821faa0752c2930569947-11">&nbsp;</div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752c2930569947-12"><span class="crayon-t">class</span><span class="crayon-h"> </span><span class="crayon-e">SecondClass</span><span class="crayon-h"> </span><span class="crayon-sy">{</span></div><div class="crayon-line" id="crayon-5821faa0752c2930569947-13"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-c">//ใส่โค๊ตเพิ่มเติม</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752c2930569947-14"><span class="crayon-sy">}</span></div><div class="crayon-line" id="crayon-5821faa0752c2930569947-15"><span class="crayon-v">$allClasses</span><span class="crayon-h"> </span><span class="crayon-o">=</span><span class="crayon-h"> </span><span class="crayon-e">get_declared_classes</span><span class="crayon-sy">(</span><span class="crayon-sy">)</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752c2930569947-16"><span class="crayon-st">foreach</span><span class="crayon-sy">(</span><span class="crayon-v">$allClasses</span><span class="crayon-h"> </span><span class="crayon-st">as</span><span class="crayon-h"> </span><span class="crayon-v">$showClass</span><span class="crayon-sy">)</span><span class="crayon-sy">{</span></div><div class="crayon-line" id="crayon-5821faa0752c2930569947-17"><span class="crayon-k ">echo</span><span class="crayon-h"> </span><span class="crayon-v">$showClass</span><span class="crayon-sy">.</span><span class="crayon-h"> </span><span class="crayon-s">"&lt;br /&gt;"</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752c2930569947-18"><span class="crayon-sy">}</span></div><div class="crayon-line" id="crayon-5821faa0752c2930569947-19"><span class="crayon-ta">?&gt;</span></div></div></td>
					</tr>
				</table>
			</div>
		</div>
<!-- [Format Time: 0.0017 seconds] -->
<p>ผลลัพธ์จากฟังก์ชัน get_declared_classes() จะได้เป็น array() ซึ่งเก็บชื่อ Class ทั้งหมดเอาไว้ เราจึงต้องใช้ foreach เข้าไปวนลูปดูทุกๆ ค่าที่อยู่ใน array() และแสดงรายชื่อ Class ออกมา</p>
<h3>ตรวจดู Class ว่ามีอยู่หรือไม่</h3>
<p>เมื่อต้องการตรวจสอบว่า Class ที่สนใจได้ถูกกำหนดไว้หรือไม่ เราจะใช้ฟังก์ชัน class_exists() ซึ่งจะรีเทิร์นค่า TRUE หาก Class นั้นมีอยู่ และจะรีเทิร์น FALSE หาก Class นั้นไม่ได้ถูกกำหนดไว้</p><!-- Crayon Syntax Highlighter v2.7.1 -->

		<div id="crayon-5821faa0752c5862693541" class="crayon-syntax crayon-theme-classic crayon-font-monaco crayon-os-pc print-yes notranslate" data-settings=" no-popup minimize scroll-mouseover" style=" margin-top: 12px; margin-bottom: 12px; font-size: 12px !important; line-height: 15px !important;">
		
			<div class="crayon-plain-wrap"></div>
			<div class="crayon-main" style="">
				<table class="crayon-table">
					<tr class="crayon-row">
				<td class="crayon-nums " data-settings="show">
					<div class="crayon-nums-content" style="font-size: 12px !important; line-height: 15px !important;"><div class="crayon-num" data-line="crayon-5821faa0752c5862693541-1">1</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752c5862693541-2">2</div><div class="crayon-num" data-line="crayon-5821faa0752c5862693541-3">3</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752c5862693541-4">4</div><div class="crayon-num" data-line="crayon-5821faa0752c5862693541-5">5</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752c5862693541-6">6</div><div class="crayon-num" data-line="crayon-5821faa0752c5862693541-7">7</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752c5862693541-8">8</div><div class="crayon-num" data-line="crayon-5821faa0752c5862693541-9">9</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752c5862693541-10">10</div><div class="crayon-num" data-line="crayon-5821faa0752c5862693541-11">11</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752c5862693541-12">12</div><div class="crayon-num" data-line="crayon-5821faa0752c5862693541-13">13</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752c5862693541-14">14</div><div class="crayon-num" data-line="crayon-5821faa0752c5862693541-15">15</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752c5862693541-16">16</div><div class="crayon-num" data-line="crayon-5821faa0752c5862693541-17">17</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752c5862693541-18">18</div><div class="crayon-num" data-line="crayon-5821faa0752c5862693541-19">19</div></div>
				</td>
						<td class="crayon-code"><div class="crayon-pre" style="font-size: 12px !important; line-height: 15px !important; -moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4;"><div class="crayon-line" id="crayon-5821faa0752c5862693541-1"><span class="crayon-ta">&lt;?php</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752c5862693541-2"><span class="crayon-t">class</span><span class="crayon-h"> </span><span class="crayon-e">FirstClass</span><span class="crayon-h"> </span><span class="crayon-sy">{</span></div><div class="crayon-line" id="crayon-5821faa0752c5862693541-3"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-m">private</span><span class="crayon-h"> </span><span class="crayon-v">$name</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752c5862693541-4"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-m">public</span><span class="crayon-h"> </span><span class="crayon-t">function</span><span class="crayon-h"> </span><span class="crayon-e">setName</span><span class="crayon-sy">(</span><span class="crayon-v">$name</span><span class="crayon-sy">)</span><span class="crayon-h"> </span><span class="crayon-sy">{</span></div><div class="crayon-line" id="crayon-5821faa0752c5862693541-5"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-v">$this</span><span class="crayon-o">-&gt;</span><span class="crayon-v">$name</span><span class="crayon-h"> </span><span class="crayon-o">=</span><span class="crayon-h"> </span><span class="crayon-v">$name</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752c5862693541-6"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-sy">}</span></div><div class="crayon-line" id="crayon-5821faa0752c5862693541-7"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-m">public</span><span class="crayon-h"> </span><span class="crayon-t">function</span><span class="crayon-h"> </span><span class="crayon-e">showName</span><span class="crayon-sy">(</span><span class="crayon-sy">)</span><span class="crayon-h"> </span><span class="crayon-sy">{</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752c5862693541-8"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-k ">echo</span><span class="crayon-h"> </span><span class="crayon-v">$this</span><span class="crayon-o">-&gt;</span><span class="crayon-v">$name</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-5821faa0752c5862693541-9"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-sy">}</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752c5862693541-10"><span class="crayon-sy">}</span></div><div class="crayon-line" id="crayon-5821faa0752c5862693541-11"><span class="crayon-t">class</span><span class="crayon-h"> </span><span class="crayon-e">SecondClass</span><span class="crayon-sy">{</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752c5862693541-12"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-c">//เพิ่มโค๊ต</span></div><div class="crayon-line" id="crayon-5821faa0752c5862693541-13"><span class="crayon-sy">}</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752c5862693541-14"><span class="crayon-st">if</span><span class="crayon-sy">(</span><span class="crayon-e">class_exists</span><span class="crayon-sy">(</span><span class="crayon-s">"SecondClass"</span><span class="crayon-sy">)</span><span class="crayon-sy">)</span><span class="crayon-sy">{</span></div><div class="crayon-line" id="crayon-5821faa0752c5862693541-15"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-k ">echo</span><span class="crayon-h"> </span><span class="crayon-s">"Class has been defined"</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752c5862693541-16"><span class="crayon-sy">}</span><span class="crayon-h"> </span><span class="crayon-st">else</span><span class="crayon-h"> </span><span class="crayon-sy">{</span></div><div class="crayon-line" id="crayon-5821faa0752c5862693541-17"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-k ">echo</span><span class="crayon-h"> </span><span class="crayon-s">"Class have not been defined yet"</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752c5862693541-18"><span class="crayon-sy">}</span></div><div class="crayon-line" id="crayon-5821faa0752c5862693541-19"><span class="crayon-ta">?&gt;</span></div></div></td>
					</tr>
				</table>
			</div>
		</div>
<!-- [Format Time: 0.0024 seconds] -->
<p>ผลลัพธ์บนเว็บบราวเซอร์ จะแสดงข้อความบอกว่า Class ที่สนใจนั้นมีอยู่หรือไม่</p>
<h3>ตรวจดู Method ภายใน Class</h3>
<p>เมื่อต้องการตรวจสอบว่า Class ที่สนใจ มี Method ใดๆ อยู่บ้าง เราจะใช้ฟังก์ชัน get_class_methods() เข้าไปตรวจสอบ ซึ่งผลลัพธ์ที่ได้จะเป็น array() เก็บค่า รายชื่อ Method ทั้งหมดเอาไว้ และถ้าหากต้องการตรวจสอบว่า Method ที่สนใจมีอยู่ใน Class หรือไม่ ก็สามารถใช้ฟังก์ชัน method_exists() ดังตัวอย่างต่อไปนี้</p><!-- Crayon Syntax Highlighter v2.7.1 -->

		<div id="crayon-5821faa0752c9842786397" class="crayon-syntax crayon-theme-classic crayon-font-monaco crayon-os-pc print-yes notranslate" data-settings=" no-popup minimize scroll-mouseover" style=" margin-top: 12px; margin-bottom: 12px; font-size: 12px !important; line-height: 15px !important;">
		
			<div class="crayon-plain-wrap"></div>
			<div class="crayon-main" style="">
				<table class="crayon-table">
					<tr class="crayon-row">
				<td class="crayon-nums " data-settings="show">
					<div class="crayon-nums-content" style="font-size: 12px !important; line-height: 15px !important;"><div class="crayon-num" data-line="crayon-5821faa0752c9842786397-1">1</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752c9842786397-2">2</div><div class="crayon-num" data-line="crayon-5821faa0752c9842786397-3">3</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752c9842786397-4">4</div><div class="crayon-num" data-line="crayon-5821faa0752c9842786397-5">5</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752c9842786397-6">6</div><div class="crayon-num" data-line="crayon-5821faa0752c9842786397-7">7</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752c9842786397-8">8</div><div class="crayon-num" data-line="crayon-5821faa0752c9842786397-9">9</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752c9842786397-10">10</div><div class="crayon-num" data-line="crayon-5821faa0752c9842786397-11">11</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752c9842786397-12">12</div><div class="crayon-num" data-line="crayon-5821faa0752c9842786397-13">13</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752c9842786397-14">14</div><div class="crayon-num" data-line="crayon-5821faa0752c9842786397-15">15</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752c9842786397-16">16</div><div class="crayon-num" data-line="crayon-5821faa0752c9842786397-17">17</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752c9842786397-18">18</div><div class="crayon-num" data-line="crayon-5821faa0752c9842786397-19">19</div><div class="crayon-num crayon-striped-num" data-line="crayon-5821faa0752c9842786397-20">20</div></div>
				</td>
						<td class="crayon-code"><div class="crayon-pre" style="font-size: 12px !important; line-height: 15px !important; -moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4;"><div class="crayon-line" id="crayon-5821faa0752c9842786397-1"><span class="crayon-ta">&lt;?php</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752c9842786397-2"><span class="crayon-t">class</span><span class="crayon-h"> </span><span class="crayon-e">FirstClass</span><span class="crayon-h"> </span><span class="crayon-sy">{</span></div><div class="crayon-line" id="crayon-5821faa0752c9842786397-3"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-m">private</span><span class="crayon-h"> </span><span class="crayon-v">$name</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752c9842786397-4"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-m">public</span><span class="crayon-h"> </span><span class="crayon-t">function</span><span class="crayon-h"> </span><span class="crayon-e">setName</span><span class="crayon-sy">(</span><span class="crayon-v">$name</span><span class="crayon-sy">)</span><span class="crayon-h"> </span><span class="crayon-sy">{</span></div><div class="crayon-line" id="crayon-5821faa0752c9842786397-5"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-v">$this</span><span class="crayon-o">-&gt;</span><span class="crayon-v">$name</span><span class="crayon-h"> </span><span class="crayon-o">=</span><span class="crayon-h"> </span><span class="crayon-v">$name</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752c9842786397-6"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-sy">}</span></div><div class="crayon-line" id="crayon-5821faa0752c9842786397-7"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-m">public</span><span class="crayon-h"> </span><span class="crayon-t">function</span><span class="crayon-h"> </span><span class="crayon-e">showName</span><span class="crayon-sy">(</span><span class="crayon-sy">)</span><span class="crayon-h"> </span><span class="crayon-sy">{</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752c9842786397-8"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-k ">echo</span><span class="crayon-h"> </span><span class="crayon-v">$this</span><span class="crayon-o">-&gt;</span><span class="crayon-v">$name</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-5821faa0752c9842786397-9"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-sy">}</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752c9842786397-10"><span class="crayon-sy">}</span></div><div class="crayon-line" id="crayon-5821faa0752c9842786397-11"><span class="crayon-st">if</span><span class="crayon-sy">(</span><span class="crayon-e">method_exists</span><span class="crayon-sy">(</span><span class="crayon-s">"FirstClass"</span><span class="crayon-sy">,</span><span class="crayon-s">"showName"</span><span class="crayon-sy">)</span><span class="crayon-sy">)</span><span class="crayon-sy">{</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752c9842786397-12"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-k ">echo</span><span class="crayon-h"> </span><span class="crayon-s">"Method "</span><span class="crayon-i">showName</span><span class="crayon-s">" has been defined"</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-5821faa0752c9842786397-13"><span class="crayon-sy">}</span><span class="crayon-h"> </span><span class="crayon-st">else</span><span class="crayon-h"> </span><span class="crayon-sy">{</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752c9842786397-14"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-k ">echo</span><span class="crayon-h"> </span><span class="crayon-s">"Method have not been defined yet"</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-5821faa0752c9842786397-15"><span class="crayon-sy">}</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752c9842786397-16"><span class="crayon-v">$allMethods</span><span class="crayon-h"> </span><span class="crayon-o">=</span><span class="crayon-h"> </span><span class="crayon-e">get_class_methods</span><span class="crayon-sy">(</span><span class="crayon-s">"FirstClass"</span><span class="crayon-sy">)</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-5821faa0752c9842786397-17"><span class="crayon-st">foreach</span><span class="crayon-sy">(</span><span class="crayon-v">$allMethods</span><span class="crayon-h"> </span><span class="crayon-st">as</span><span class="crayon-h"> </span><span class="crayon-v">$showMethod</span><span class="crayon-sy">)</span><span class="crayon-sy">{</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752c9842786397-18"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-k ">echo</span><span class="crayon-h"> </span><span class="crayon-s">"&lt;br /&gt;"</span><span class="crayon-sy">.</span><span class="crayon-h"> </span><span class="crayon-v">$showMethod</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-5821faa0752c9842786397-19"><span class="crayon-sy">}</span></div><div class="crayon-line crayon-striped-line" id="crayon-5821faa0752c9842786397-20"><span class="crayon-ta">?&gt;</span></div></div></td>
					</tr>
				</table>
			</div>
		</div>
<!-- [Format Time: 0.0021 seconds] -->
<p>￼</p>

	
	<div class="post-meta wf-table wf-mobile-collapsed"><div class="entry-meta"><a href="http://www.swift-tutor.com/2013/09/09/" title="2:08 pm" rel="bookmark"><time class="entry-date" datetime="2013-09-09T14:08:23+00:00">กันยายน 9, 2013</time></a><a class="author vcard" href="http://www.swift-tutor.com/author/swift/" title="View all posts by swift-tutor" rel="author">By swift-tutor</a><a href="http://www.swift-tutor.com/category/php/" >PHP</a> <a href="http://www.swift-tutor.com/category/%e0%b9%80%e0%b8%82%e0%b8%b5%e0%b8%a2%e0%b8%99%e0%b9%82%e0%b8%9b%e0%b8%a3%e0%b9%81%e0%b8%81%e0%b8%a3%e0%b8%a1/" >เขียนโปรแกรม</a></div><div class="entry-share wf-td">
					<div class="soc-ico"><a href="http://www.facebook.com/sharer.php?s=100&#038;p%5Burl%5D=http://www.swift-tutor.com/%e0%b9%80%e0%b8%82%e0%b8%b5%e0%b8%a2%e0%b8%99-php-%e0%b9%83%e0%b8%99%e0%b8%aa%e0%b9%84%e0%b8%95%e0%b8%a5%e0%b9%8c-oop-02/&#038;p%5Btitle%5D=%E0%B9%80%E0%B8%82%E0%B8%B5%E0%B8%A2%E0%B8%99+PHP+%E0%B9%83%E0%B8%99%E0%B8%AA%E0%B9%84%E0%B8%95%E0%B8%A5%E0%B9%8C+OOP+%E0%B8%95%E0%B8%AD%E0%B8%99%E0%B8%97%E0%B8%B5%E0%B9%88+2&#038;p%5Bimages%5D%5B0%5D=http://www.swift-tutor.com/wp-content/uploads/2013/09/mysql-php-swift-tutor.png" class="share-button facebook" target="_blank" title="Facebook"><span class="assistive-text">Facebook</span><span class="share-content">share</span></a><a href="http://twitter.com/home?status=%E0%B9%80%E0%B8%82%E0%B8%B5%E0%B8%A2%E0%B8%99+PHP+%E0%B9%83%E0%B8%99%E0%B8%AA%E0%B9%84%E0%B8%95%E0%B8%A5%E0%B9%8C+OOP+%E0%B8%95%E0%B8%AD%E0%B8%99%E0%B8%97%E0%B8%B5%E0%B9%88+2+http%3A%2F%2Fwww.swift-tutor.com%2F%25e0%25b9%2580%25e0%25b8%2582%25e0%25b8%25b5%25e0%25b8%25a2%25e0%25b8%2599-php-%25e0%25b9%2583%25e0%25b8%2599%25e0%25b8%25aa%25e0%25b9%2584%25e0%25b8%2595%25e0%25b8%25a5%25e0%25b9%258c-oop-02%2F" class="share-button twitter" target="_blank" title="Twitter"><span class="assistive-text">Twitter</span><span class="share-content">tweet</span></a><a href="http://plus.google.com/share?url=http://www.swift-tutor.com/%e0%b9%80%e0%b8%82%e0%b8%b5%e0%b8%a2%e0%b8%99-php-%e0%b9%83%e0%b8%99%e0%b8%aa%e0%b9%84%e0%b8%95%e0%b8%a5%e0%b9%8c-oop-02/&#038;title=เขียน+PHP+ในสไตล์+OOP+ตอนที่+2" class="share-button google" target="_blank" title="Google+"><span class="assistive-text">Google+</span><span class="share-content">share</span></a></div>
			</div></div>
	
		<div class="entry-author">
			<img src="http://1.gravatar.com/avatar/47be331e303ae5b0f151c50d8473a30a?s=61&#038;d=http%3A%2F%2Fwww.swift-tutor.com%2Fwp-content%2Fthemes%2Fgoogle%2Fimages%2Fno-avatar.gif&#038;r=g" width="61" height="61" alt="" class="avatar avatar-61 wp-user-avatar wp-user-avatar-61 photo avatar-default" />			<p class="text-primary">About the author</p>
			<p class="text-small"></p>
		</div>

	
	<div class="navigation-inner"><a class="next-post" href="http://www.swift-tutor.com/%e0%b9%80%e0%b8%82%e0%b8%b5%e0%b8%a2%e0%b8%99-php-%e0%b9%83%e0%b8%99%e0%b8%aa%e0%b9%84%e0%b8%95%e0%b8%a5%e0%b9%8c-oop-03/" rel="next">เขียน PHP ในสไตล์ OOP ตอนที่ 3</a><a class="prev-post" href="http://www.swift-tutor.com/%e0%b9%80%e0%b8%82%e0%b8%b5%e0%b8%a2%e0%b8%99-php-%e0%b9%83%e0%b8%99%e0%b8%aa%e0%b9%84%e0%b8%95%e0%b8%a5%e0%b9%8c-oop/" rel="prev">เขียน PHP ในสไตล์ OOP ตอนที่ 1</a></div>
	<div class="gap-20"></div>

	<div class="hr-thick"></div><div class="gap-30"></div><h2 class="entry-title">Related posts</h2><div class="gap-10"></div><section class="items-grid wf-container"><div class="wf-cell wf-1-3"><div class="borders"><article class="post-format-standard"><div class="wf-td"><a class="alignleft post-rollover" href="http://www.swift-tutor.com/%e0%b8%9e%e0%b8%b7%e0%b9%89%e0%b8%99%e0%b8%90%e0%b8%b2%e0%b8%99-bootstrap-3-x/" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2016/08/bootstrap-logo-swift-tutor-60x60.png" width="60" height="60"  alt="bootstrap-logo-swift-tutor" /></a></div><div class="post-content"><a href="http://www.swift-tutor.com/%e0%b8%9e%e0%b8%b7%e0%b9%89%e0%b8%99%e0%b8%90%e0%b8%b2%e0%b8%99-bootstrap-3-x/">พื้นฐาน bootstrap 3.x</a><br /><time class="text-secondary" datetime="2016-08-09T09:00:50+00:00">สิงหาคม 9, 2016</time></div></article></div></div><div class="wf-cell wf-1-3"><div class="borders"><article class="post-format-standard"><div class="wf-td"><a href="http://www.swift-tutor.com/ios-app-02/" class="alignleft post-rollover no-avatar" ></a></div><div class="post-content"><a href="http://www.swift-tutor.com/ios-app-02/">สร้าง Project ใหม่ใน Xcode 5</a><br /><time class="text-secondary" datetime="2014-03-04T23:06:26+00:00">มีนาคม 4, 2014</time></div></article></div></div><div class="wf-cell wf-1-3"><div class="borders"><article class="post-format-standard"><div class="wf-td"><a class="alignleft post-rollover" href="http://www.swift-tutor.com/%e0%b9%80%e0%b8%82%e0%b8%b5%e0%b8%a2%e0%b8%99-php-%e0%b9%83%e0%b8%99%e0%b8%aa%e0%b9%84%e0%b8%95%e0%b8%a5%e0%b9%8c-oop-05/" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2013/09/mysql-php-swift-tutor-60x60.png" width="60" height="60"  alt="mysql-php-swift-tutor" /></a></div><div class="post-content"><a href="http://www.swift-tutor.com/%e0%b9%80%e0%b8%82%e0%b8%b5%e0%b8%a2%e0%b8%99-php-%e0%b9%83%e0%b8%99%e0%b8%aa%e0%b9%84%e0%b8%95%e0%b8%a5%e0%b9%8c-oop-05/">เขียน PHP ในสไตล์ OOP ตอนที่ 5</a><br /><time class="text-secondary" datetime="2013-09-09T15:29:12+00:00">กันยายน 9, 2013</time></div></article></div></div><div class="wf-cell wf-1-3"><div class="borders"><article class="post-format-standard"><div class="wf-td"><a class="alignleft post-rollover" href="http://www.swift-tutor.com/%e0%b9%80%e0%b8%82%e0%b8%b5%e0%b8%a2%e0%b8%99-php-%e0%b9%83%e0%b8%99%e0%b8%aa%e0%b9%84%e0%b8%95%e0%b8%a5%e0%b9%8c-oop-04/" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2013/09/mysql-php-swift-tutor-60x60.png" width="60" height="60"  alt="mysql-php-swift-tutor" /></a></div><div class="post-content"><a href="http://www.swift-tutor.com/%e0%b9%80%e0%b8%82%e0%b8%b5%e0%b8%a2%e0%b8%99-php-%e0%b9%83%e0%b8%99%e0%b8%aa%e0%b9%84%e0%b8%95%e0%b8%a5%e0%b9%8c-oop-04/">เขียน PHP ในสไตล์ OOP ตอนที่ 4</a><br /><time class="text-secondary" datetime="2013-09-09T14:47:59+00:00">กันยายน 9, 2013</time></div></article></div></div><div class="wf-cell wf-1-3"><div class="borders"><article class="post-format-standard"><div class="wf-td"><a class="alignleft post-rollover" href="http://www.swift-tutor.com/%e0%b9%80%e0%b8%82%e0%b8%b5%e0%b8%a2%e0%b8%99-php-%e0%b9%83%e0%b8%99%e0%b8%aa%e0%b9%84%e0%b8%95%e0%b8%a5%e0%b9%8c-oop-03/" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2013/09/mysql-php-swift-tutor-60x60.png" width="60" height="60"  alt="mysql-php-swift-tutor" /></a></div><div class="post-content"><a href="http://www.swift-tutor.com/%e0%b9%80%e0%b8%82%e0%b8%b5%e0%b8%a2%e0%b8%99-php-%e0%b9%83%e0%b8%99%e0%b8%aa%e0%b9%84%e0%b8%95%e0%b8%a5%e0%b9%8c-oop-03/">เขียน PHP ในสไตล์ OOP ตอนที่ 3</a><br /><time class="text-secondary" datetime="2013-09-09T14:25:15+00:00">กันยายน 9, 2013</time></div></article></div></div><div class="wf-cell wf-1-3"><div class="borders"><article class="post-format-standard"><div class="wf-td"><a class="alignleft post-rollover" href="http://www.swift-tutor.com/%e0%b9%80%e0%b8%82%e0%b8%b5%e0%b8%a2%e0%b8%99-php-%e0%b9%83%e0%b8%99%e0%b8%aa%e0%b9%84%e0%b8%95%e0%b8%a5%e0%b9%8c-oop/" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2013/09/mysql-php-swift-tutor-60x60.png" width="60" height="60"  alt="mysql-php-swift-tutor" /></a></div><div class="post-content"><a href="http://www.swift-tutor.com/%e0%b9%80%e0%b8%82%e0%b8%b5%e0%b8%a2%e0%b8%99-php-%e0%b9%83%e0%b8%99%e0%b8%aa%e0%b9%84%e0%b8%95%e0%b8%a5%e0%b9%8c-oop/">เขียน PHP ในสไตล์ OOP ตอนที่ 1</a><br /><time class="text-secondary" datetime="2013-09-08T17:10:39+00:00">กันยายน 8, 2013</time></div></article></div></div></section><div class="gap-10"></div>
	
	
	
</article><!-- #post-1211 -->

				
			
			</div><!-- #content .wf-cell -->

										<aside id="sidebar" class="sidebar">
					<div class="sidebar-content">
										<section id="bbp_login_widget-2" class="widget bbp_widget_login"><div class="widget-title">สมาชิก</div>
			<form method="post" action="http://www.swift-tutor.com/wp-login.php" class="bbp-login-form">
				<fieldset>
					<legend>เข้าสู่ระบบ</legend>

					<div class="bbp-username">
						<label for="user_login">ชื่อผู้ใช้: </label>
						<input type="text" name="log" value="" size="20" id="user_login" tabindex="101" />
					</div>

					<div class="bbp-password">
						<label for="user_pass">รหัสผ่าน: </label>
						<input type="password" name="pwd" value="" size="20" id="user_pass" tabindex="102" />
					</div>

					<div class="bbp-remember-me">
						<input type="checkbox" name="rememberme" value="forever"  id="rememberme" tabindex="103" />
						<label for="rememberme">บันทึกการใช้งานของฉัน</label>
					</div>

					<div class="bbp-submit-wrapper">

						
						<button type="submit" name="user-submit" id="user-submit" tabindex="104" class="button submit user-submit">เข้าสู่ระบบ</button>

						
		<input type="hidden" name="user-cookie" value="1" />

		<input type="hidden" id="bbp_redirect_to" name="redirect_to" value="http://www.swift-tutor.com/%e0%b9%80%e0%b8%82%e0%b8%b5%e0%b8%a2%e0%b8%99-php-%e0%b9%83%e0%b8%99%e0%b8%aa%e0%b9%84%e0%b8%95%e0%b8%a5%e0%b9%8c-oop-02/" /><input type="hidden" id="_wpnonce" name="_wpnonce" value="f7b7a49c68" /><input type="hidden" name="_wp_http_referer" value="/%e0%b9%80%e0%b8%82%e0%b8%b5%e0%b8%a2%e0%b8%99-php-%e0%b9%83%e0%b8%99%e0%b8%aa%e0%b9%84%e0%b8%95%e0%b8%a5%e0%b9%8c-oop-02/" />
					</div>

					
						<div class="bbp-login-links">

							
								<a href="http://www.swift-tutor.com/wp-login.php?action=register" title="ลงทะเบียน" class="bbp-register-link">ลงทะเบียน</a>

							
							
								<a href="http://www.swift-tutor.com/wp-login.php?action=lostpassword" title="จำรหัสผ่านไม่ได้" class="bbp-lostpass-link">จำรหัสผ่านไม่ได้</a>

							
						</div>

					
				</fieldset>
			</form>

		</section><section id="presscore-portfolio-3" class="widget widget_presscore-portfolio"><div class="widget-title">พื้นฐาน ภาษา Swift 3</div><div class="instagram-photos">
<a href="http://www.swift-tutor.com/project/swift-tutorial-%e0%b8%9e%e0%b8%b7%e0%b9%89%e0%b8%99%e0%b8%90%e0%b8%b2%e0%b8%99-1-variable-constant/" title="ภาษา Swift Tutorial พื้นฐาน 1 (Variable และ Constant)" class="post-rollover" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2014/06/ios8-web-02-90x90.png" width="90" height="90"  alt="ios8-web-02" /></a>

<a href="http://www.swift-tutor.com/project/swift-tutorial-%e0%b8%9e%e0%b8%b7%e0%b9%89%e0%b8%99%e0%b8%90%e0%b8%b2%e0%b8%99-2-tuples-optional/" title="ภาษา Swift Tutorial พื้นฐาน 2 (Tuples และ Optional)" class="post-rollover" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2014/06/ios8-web-01-90x90.png" width="90" height="90"  alt="ios8-web-01" /></a>

<a href="http://www.swift-tutor.com/project/swift-tutorial-%e0%b8%9e%e0%b8%b7%e0%b9%89%e0%b8%99%e0%b8%90%e0%b8%b2%e0%b8%99-3-operator/" title="ภาษา Swift Tutorial พื้นฐาน 3 (Operator)" class="post-rollover" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2014/06/swift-tutor-iphone5c-01-90x90.jpg" width="90" height="90"  alt="swift-tutor-iphone5c-01" /></a>

<a href="http://www.swift-tutor.com/project/swift-tutorial-%e0%b8%9e%e0%b8%b7%e0%b9%89%e0%b8%99%e0%b8%90%e0%b8%b2%e0%b8%99-4-string-%e0%b9%81%e0%b8%a5%e0%b8%b0-character/" title="ภาษา Swift Tutorial พื้นฐาน 4 (String และ Character)" class="post-rollover" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2014/06/swift-tutor-ipadair-01-90x90.png" width="90" height="90"  alt="swift-tutor-ipadair-01" /></a>

<a href="http://www.swift-tutor.com/project/swift-tutorial-%e0%b8%9e%e0%b8%b7%e0%b9%89%e0%b8%99%e0%b8%90%e0%b8%b2%e0%b8%99-5-collection-type/" title="ภาษา Swift Tutorial พื้นฐาน 5 (Array, Dictionary และ Set)" class="post-rollover" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2014/06/swift-tutor-macbook-air-01-90x90.jpg" width="90" height="90"  alt="swift-tutor-macbook-air-01" /></a>

<a href="http://www.swift-tutor.com/project/swift-tutorial-%e0%b8%9e%e0%b8%b7%e0%b9%89%e0%b8%99%e0%b8%90%e0%b8%b2%e0%b8%99-6/" title="ภาษา Swift Tutorial พื้นฐาน 6 (Control Flow)" class="post-rollover" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2014/06/swift-tutor-ipad-air-01-90x90.png" width="90" height="90"  alt="swift-tutor-ipad-air-01" /></a>

<a href="http://www.swift-tutor.com/project/swift-tutorial-%e0%b8%9e%e0%b8%b7%e0%b9%89%e0%b8%99%e0%b8%90%e0%b8%b2%e0%b8%99-7-%e0%b8%9f%e0%b8%b1%e0%b8%87%e0%b8%81%e0%b9%8c%e0%b8%8a%e0%b8%b1%e0%b8%99/" title="ภาษา Swift Tutorial พื้นฐาน 7 (ฟังก์ชัน)" class="post-rollover" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2014/07/swift-tutor-inheritance-feature5-90x90.png" width="90" height="90"  alt="swift-tutor-inheritance-feature5" /></a>

<a href="http://www.swift-tutor.com/project/swift-tutorial-%e0%b8%9e%e0%b8%b7%e0%b9%89%e0%b8%99%e0%b8%90%e0%b8%b2%e0%b8%99-8-closures/" title="ภาษา Swift Tutorial พื้นฐาน 8 (Closures)" class="post-rollover" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2014/07/swift-tutor-ns-encoder-feature-90x90.png" width="90" height="90"  alt="swift-tutor-ns-encoder-feature" /></a>

<a href="http://www.swift-tutor.com/project/swift-tutorial-%e0%b8%9e%e0%b8%b7%e0%b9%89%e0%b8%99%e0%b8%90%e0%b8%b2%e0%b8%99-9-enumeration/" title="ภาษา Swift Tutorial พื้นฐาน 9 (Enumeration)" class="post-rollover" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2014/05/iosthailand-c-array-feature-03-90x90.png" width="90" height="90"  alt="iosthailand-c-array-feature-03" /></a>

<a href="http://www.swift-tutor.com/project/swift-tutorial-%e0%b8%9e%e0%b8%b7%e0%b9%89%e0%b8%99%e0%b8%90%e0%b8%b2%e0%b8%99-10-class-%e0%b9%81%e0%b8%a5%e0%b8%b0-structure/" title="ภาษา Swift Tutorial พื้นฐาน 10 (Class และ Structure)" class="post-rollover" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2015/01/swift-tutor-inherit-90x90.png" width="90" height="90"  alt="swift-tutor-inherit" /></a>

<a href="http://www.swift-tutor.com/project/swift-tutorial-%e0%b8%9e%e0%b8%b7%e0%b9%89%e0%b8%99%e0%b8%90%e0%b8%b2%e0%b8%99-11-property-observers/" title="ภาษา Swift Tutorial พื้นฐาน 11 (Property Observers)" class="post-rollover" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2014/06/swift-tutor-iphone5c-01-90x90.jpg" width="90" height="90"  alt="swift-tutor-iphone5c-01" /></a>

<a href="http://www.swift-tutor.com/project/swift-tutorial-%e0%b8%9e%e0%b8%b7%e0%b9%89%e0%b8%99%e0%b8%90%e0%b8%b2%e0%b8%99-12-method-%e0%b9%83%e0%b8%99%e0%b8%a0%e0%b8%b2%e0%b8%a9%e0%b8%b2-swift/" title="ภาษา Swift Tutorial พื้นฐาน 12 (Method ในภาษา Swift)" class="post-rollover" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2014/05/swift-tutor-post-01-90x90.png" width="90" height="90"  alt="swift-tutor-post-01" /></a>

<a href="http://www.swift-tutor.com/project/swift-tutorial-%e0%b8%9e%e0%b8%b7%e0%b9%89%e0%b8%99%e0%b8%90%e0%b8%b2%e0%b8%99-13-%e0%b9%80%e0%b8%81%e0%b8%b5%e0%b9%88%e0%b8%a2%e0%b8%a7%e0%b8%81%e0%b8%b1%e0%b8%9a-initialization/" title="ภาษา Swift Tutorial พื้นฐาน 13 (เกี่ยวกับ Initialization)" class="post-rollover" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2015/01/initializers-swift-tutor-90x90.png" width="90" height="90"  alt="initializers-swift-tutor" /></a>

<a href="http://www.swift-tutor.com/project/number-in-string/" title="การแสดงตัวเลขในแบบ String" class="post-rollover" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2015/04/number-string_swift-tutor-90x90.png" width="90" height="90"  alt="number-string_swift-tutor" /></a>

<a href="http://www.swift-tutor.com/project/sort-in-dictionary/" title="การเรียงข้อมูลใน Dictionary" class="post-rollover" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2015/04/sort-key-dictionary-90x90.png" width="90" height="90"  alt="sort-key-dictionary" /></a>

<a href="http://www.swift-tutor.com/project/%e0%b8%9e%e0%b8%b7%e0%b9%89%e0%b8%99%e0%b8%90%e0%b8%b2%e0%b8%99-14-%e0%b9%80%e0%b8%81%e0%b8%b5%e0%b9%88%e0%b8%a2%e0%b8%a7%e0%b8%81%e0%b8%b1%e0%b8%9a-protocol-%e0%b9%81%e0%b8%a5%e0%b8%b0-delegation/" title="ภาษา Swift Tutorial พื้นฐาน 14 เกี่ยวกับ Protocol และ Delegation" class="post-rollover" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2015/04/swift-tutor-protocol-delegation-90x90.png" width="90" height="90"  alt="swift-tutor-protocol-delegation" /></a>

<a href="http://www.swift-tutor.com/project/designated-%e0%b9%81%e0%b8%a5%e0%b8%b0-convenience-initializer/" title="ภาษา Swift เรื่อง Designated และ Convenience Initializer" class="post-rollover" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2015/04/designated-convenience-initailizer-feature-90x90.png" width="90" height="90"  alt="designated-convenience-initailizer-feature" /></a>

<a href="http://www.swift-tutor.com/project/error-handling-%e0%b9%83%e0%b8%99-swift/" title="ภาษา Swift Tutorial พื้นฐาน 15 (Error Handling)" class="post-rollover" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2015/10/error-handling-swift-tutor-90x90.png" width="90" height="90"  alt="error-handling-swift-tutor" /></a>

<a href="http://www.swift-tutor.com/project/%e0%b8%9e%e0%b8%b7%e0%b9%89%e0%b8%99%e0%b8%90%e0%b8%b2%e0%b8%99%e0%b9%80%e0%b8%81%e0%b8%b5%e0%b9%88%e0%b8%a2%e0%b8%a7%e0%b8%81%e0%b8%b1%e0%b8%9a-optional-chaining/" title="ภาษา Swift tutorial พื้นฐาน 16 (Optional Chaining)" class="post-rollover" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2015/10/Optional-Chaining-Swift-tutor-90x90.png" width="90" height="90"  alt="Optional-Chaining-Swift-tutor" /></a>

<a href="http://www.swift-tutor.com/project/%e0%b8%a0%e0%b8%b2%e0%b8%a9%e0%b8%b2-swift-17-downcasting/" title="ภาษา Swift Tutorial พื้นฐาน 17 (Type Casting &#038; Downcasting)" class="post-rollover" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2015/11/downclass-ภาษา-swift-90x90.png" width="90" height="90"  alt="downclass-ภาษา-swift" /></a>

<a href="http://www.swift-tutor.com/project/%e0%b8%a0%e0%b8%b2%e0%b8%a9%e0%b8%b2-swift-tutorial-%e0%b8%9e%e0%b8%b7%e0%b9%89%e0%b8%99%e0%b8%90%e0%b8%b2%e0%b8%99-18-subscript-syntax/" title="ภาษา Swift Tutorial พื้นฐาน 18 (Subscript)" class="post-rollover" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2016/09/subscript-swift-tutor-feature-image-90x90.png" width="90" height="90"  alt="subscript-swift-tutor-feature-image" /></a>

<a href="http://www.swift-tutor.com/project/%e0%b8%a0%e0%b8%b2%e0%b8%a9%e0%b8%b2-swift-tutorial-%e0%b8%9e%e0%b8%b7%e0%b9%89%e0%b8%99%e0%b8%90%e0%b8%b2%e0%b8%99-19-anyobject-any/" title="ภาษา Swift Tutorial พื้นฐาน 19 (Any และ AnyObject)" class="post-rollover" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2016/10/ภาษา-swift-any-anyobject-feature-90x90.png" width="90" height="90"  alt="ภาษา-swift-any-anyobject-feature" /></a>

<a href="http://www.swift-tutor.com/project/%e0%b8%a0%e0%b8%b2%e0%b8%a9%e0%b8%b2-swift-tutorial-%e0%b8%9e%e0%b8%b7%e0%b9%89%e0%b8%99%e0%b8%90%e0%b8%b2%e0%b8%99-20-generic/" title="ภาษา Swift Tutorial พื้นฐาน 20 (Generic)" class="post-rollover" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2016/10/คอร์สออนไลน์-generic-stack-feature-90x90.png" width="90" height="90"  alt="คอร์สออนไลน์-generic-stack-feature" /></a>
</div></section><section id="presscore-portfolio-4" class="widget widget_presscore-portfolio"><div class="widget-title">ภาษา Swift พัฒนาแอพพลิเคชัน iOS</div><div class="instagram-photos">
<a href="http://www.swift-tutor.com/project/mvc-%e0%b9%83%e0%b8%99-ios/" title="MVC กับการพัฒนาแอพพลิเคชันบน iOS" class="post-rollover" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2016/09/swift-tutor-mvc-swift-03-90x90.png" width="90" height="90"  alt="swift-tutor-mvc-swift-03" /></a>

<a href="http://www.swift-tutor.com/project/%e0%b8%a0%e0%b8%b2%e0%b8%a9%e0%b8%b2-swift-tutorial-%e0%b8%9e%e0%b8%b7%e0%b9%89%e0%b8%99%e0%b8%90%e0%b8%b2%e0%b8%99-21-uitableviewcontroller/" title="ภาษา swift tutorial เรื่อง UITableViewController" class="post-rollover" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2016/04/tableViewController-icon-swift-tutor-90x90.png" width="90" height="90"  alt="tableViewController-icon-swift-tutor" /></a>

<a href="http://www.swift-tutor.com/project/%e0%b8%a0%e0%b8%b2%e0%b8%a9%e0%b8%b2-swift-tutorial-%e0%b8%9e%e0%b8%b7%e0%b9%89%e0%b8%99%e0%b8%90%e0%b8%b2%e0%b8%99-20-%e0%b8%95%e0%b8%b2%e0%b8%a3%e0%b8%b2%e0%b8%87-uitableview/" title="ภาษา swift tutorial พื้นฐาน UITableView" class="post-rollover" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2016/04/tableView-icon-90x90.png" width="90" height="90"  alt="tableView-icon" /></a>

<a href="http://www.swift-tutor.com/project/%e0%b8%a0%e0%b8%b2%e0%b8%a9%e0%b8%b2-swift-%e0%b8%9e%e0%b8%b7%e0%b9%89%e0%b8%99%e0%b8%90%e0%b8%b2%e0%b8%99-19-multithreading-%e0%b9%83%e0%b8%99-ios/" title="ภาษา swift Multithreading ใน iOS" class="post-rollover" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2016/03/multithreading-icon-swift-tutor-90x90.png" width="90" height="90"  alt="multithreading-icon-swift-tutor" /></a>

<a href="http://www.swift-tutor.com/project/%e0%b8%a0%e0%b8%b2%e0%b8%a9%e0%b8%b2-swift-tutorial-%e0%b8%9e%e0%b8%b7%e0%b9%89%e0%b8%99%e0%b8%90%e0%b8%b2%e0%b8%99-18-notification-center/" title="ภาษา swift tutorial Notification Center" class="post-rollover" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2016/03/notificationCenter-icon-swift-tutor-90x90.png" width="90" height="90"  alt="notificationCenter-icon-swift-tutor" /></a>
</div></section><section id="presscore-custom-menu-1-3" class="widget widget_presscore-custom-menu-1"><div class="widget-title">บทความอื่นๆ</div><ul class="custom-menu"><li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3532 first"><a href="http://www.swift-tutor.com/category/javascript/">JavaScript</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-2449 act"><a href="http://www.swift-tutor.com/category/php/">PHP</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3594"><a href="http://www.swift-tutor.com/category/apple-objective-c/">Objective-C</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3595"><a href="http://www.swift-tutor.com/category/%e0%b8%aa%e0%b8%a3%e0%b9%89%e0%b8%b2%e0%b8%87%e0%b9%80%e0%b8%a7%e0%b9%87%e0%b8%9a%e0%b9%84%e0%b8%8b%e0%b8%95%e0%b9%8c/wordpress-%e0%b8%aa%e0%b8%a3%e0%b9%89%e0%b8%b2%e0%b8%87%e0%b9%80%e0%b8%a7%e0%b9%87%e0%b8%9a%e0%b9%84%e0%b8%8b%e0%b8%95%e0%b9%8c/">WordPress</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3598"><a href="http://www.swift-tutor.com/category/%e0%b8%aa%e0%b8%a3%e0%b9%89%e0%b8%b2%e0%b8%87%e0%b9%80%e0%b8%a7%e0%b9%87%e0%b8%9a%e0%b9%84%e0%b8%8b%e0%b8%95%e0%b9%8c/joomla/">Joomla</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3597"><a href="http://www.swift-tutor.com/category/access/">Access</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2452"><a href="http://www.swift-tutor.com/category/networksecurity/">Security</a></li></ul></section><section id="presscore-portfolio-2" class="widget widget_presscore-portfolio"><div class="widget-title">บทความ Swift ล่าสุด</div><div class="instagram-photos">
<a href="http://www.swift-tutor.com/project/%e0%b8%a0%e0%b8%b2%e0%b8%a9%e0%b8%b2-swift-tutorial-%e0%b8%9e%e0%b8%b7%e0%b9%89%e0%b8%99%e0%b8%90%e0%b8%b2%e0%b8%99-20-generic/" title="ภาษา Swift Tutorial พื้นฐาน 20 (Generic)" class="post-rollover" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2016/10/คอร์สออนไลน์-generic-stack-feature-90x90.png" width="90" height="90"  alt="คอร์สออนไลน์-generic-stack-feature" /></a>

<a href="http://www.swift-tutor.com/project/%e0%b8%a0%e0%b8%b2%e0%b8%a9%e0%b8%b2-swift-tutorial-%e0%b8%9e%e0%b8%b7%e0%b9%89%e0%b8%99%e0%b8%90%e0%b8%b2%e0%b8%99-19-anyobject-any/" title="ภาษา Swift Tutorial พื้นฐาน 19 (Any และ AnyObject)" class="post-rollover" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2016/10/ภาษา-swift-any-anyobject-feature-90x90.png" width="90" height="90"  alt="ภาษา-swift-any-anyobject-feature" /></a>

<a href="http://www.swift-tutor.com/project/%e0%b8%a0%e0%b8%b2%e0%b8%a9%e0%b8%b2-swift-tutorial-%e0%b8%9e%e0%b8%b7%e0%b9%89%e0%b8%99%e0%b8%90%e0%b8%b2%e0%b8%99-18-subscript-syntax/" title="ภาษา Swift Tutorial พื้นฐาน 18 (Subscript)" class="post-rollover" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2016/09/subscript-swift-tutor-feature-image-90x90.png" width="90" height="90"  alt="subscript-swift-tutor-feature-image" /></a>

<a href="http://www.swift-tutor.com/project/mvc-%e0%b9%83%e0%b8%99-ios/" title="MVC กับการพัฒนาแอพพลิเคชันบน iOS" class="post-rollover" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2016/09/swift-tutor-mvc-swift-03-90x90.png" width="90" height="90"  alt="swift-tutor-mvc-swift-03" /></a>

<a href="http://www.swift-tutor.com/project/%e0%b8%a0%e0%b8%b2%e0%b8%a9%e0%b8%b2-swift-tutorial-%e0%b8%9e%e0%b8%b7%e0%b9%89%e0%b8%99%e0%b8%90%e0%b8%b2%e0%b8%99-21-uitableviewcontroller/" title="ภาษา swift tutorial เรื่อง UITableViewController" class="post-rollover" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2016/04/tableViewController-icon-swift-tutor-90x90.png" width="90" height="90"  alt="tableViewController-icon-swift-tutor" /></a>

<a href="http://www.swift-tutor.com/project/%e0%b8%a0%e0%b8%b2%e0%b8%a9%e0%b8%b2-swift-tutorial-%e0%b8%9e%e0%b8%b7%e0%b9%89%e0%b8%99%e0%b8%90%e0%b8%b2%e0%b8%99-20-%e0%b8%95%e0%b8%b2%e0%b8%a3%e0%b8%b2%e0%b8%87-uitableview/" title="ภาษา swift tutorial พื้นฐาน UITableView" class="post-rollover" ><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2016/04/tableView-icon-90x90.png" width="90" height="90"  alt="tableView-icon" /></a>
</div></section><section id="bbp_topics_widget-2" class="widget widget_display_topics"><div class="widget-title">กระทู้ล่าสุด</div>
		<ul>

			
				<li>
					<a class="bbp-forum-title" href="http://www.swift-tutor.com/forums/topic/swift-2-0-%e0%b8%a1%e0%b8%b5%e0%b8%ad%e0%b8%b0%e0%b9%84%e0%b8%a3%e0%b9%80%e0%b8%9b%e0%b8%a5%e0%b8%b5%e0%b9%88%e0%b8%a2%e0%b8%99%e0%b9%81%e0%b8%9b%e0%b8%a5%e0%b8%87%e0%b8%9a%e0%b9%89%e0%b8%b2%e0%b8%87/">swift 2.0 มีอะไรเปลี่ยนแปลงบ้างครับ</a>

					
					
				</li>

			
				<li>
					<a class="bbp-forum-title" href="http://www.swift-tutor.com/forums/topic/%e0%b8%9b%e0%b8%a3%e0%b8%b0%e0%b8%81%e0%b8%b2%e0%b8%a8%e0%b8%ab%e0%b8%b2%e0%b8%9c%e0%b8%b9%e0%b9%89%e0%b8%a3%e0%b9%88%e0%b8%a7%e0%b8%a1%e0%b8%a3%e0%b8%b5%e0%b8%a7%e0%b8%b4%e0%b8%a7%e0%b8%98%e0%b8%b5/">ประกาศหาผู้ร่วมรีวิวธีมของ WordPress ครับ</a>

					
					
				</li>

			
				<li>
					<a class="bbp-forum-title" href="http://www.swift-tutor.com/forums/topic/%e0%b8%9b%e0%b8%b1%e0%b8%8d%e0%b8%ab%e0%b8%b2%e0%b9%80%e0%b8%81%e0%b8%b5%e0%b9%88%e0%b8%a2%e0%b8%a7%e0%b8%81%e0%b8%b1%e0%b8%9a-shortcode-%e0%b8%82%e0%b8%ad%e0%b8%87-woocommerce/">ปัญหาเกี่ยวกับ Shortcode ของ woocommerce</a>

					
					
				</li>

			
				<li>
					<a class="bbp-forum-title" href="http://www.swift-tutor.com/forums/topic/%e0%b8%aa%e0%b8%a3%e0%b9%89%e0%b8%b2%e0%b8%87-child-theme-%e0%b9%84%e0%b8%a1%e0%b9%88%e0%b9%84%e0%b8%94%e0%b9%89/">สร้าง Child Theme ไม่ได้</a>

					
					
				</li>

			
				<li>
					<a class="bbp-forum-title" href="http://www.swift-tutor.com/forums/topic/%e0%b8%95%e0%b8%b4%e0%b8%94%e0%b8%95%e0%b8%b1%e0%b9%89%e0%b8%87-theme-%e0%b9%81%e0%b8%a5%e0%b9%89%e0%b8%a7-error/">ติดตั้ง theme แล้ว error</a>

					
					
				</li>

			
		</ul>

		</section><section id="tag_cloud-2" class="widget widget_tag_cloud"><div class="widget-title">แท็ก</div><div class="tagcloud"><a href='http://www.swift-tutor.com/tag/access-2/' class='tag-link-30' title='1 หัวข้อ' style='font-size: 8pt;'>access</a>
<a href='http://www.swift-tutor.com/tag/admin/' class='tag-link-28' title='1 หัวข้อ' style='font-size: 8pt;'>admin</a>
<a href='http://www.swift-tutor.com/tag/app/' class='tag-link-10' title='6 หัวข้อ' style='font-size: 14.936936936937pt;'>app</a>
<a href='http://www.swift-tutor.com/tag/application/' class='tag-link-48' title='2 หัวข้อ' style='font-size: 10.27027027027pt;'>application</a>
<a href='http://www.swift-tutor.com/tag/c/' class='tag-link-49' title='2 หัวข้อ' style='font-size: 10.27027027027pt;'>c</a>
<a href='http://www.swift-tutor.com/tag/cms/' class='tag-link-62' title='1 หัวข้อ' style='font-size: 8pt;'>CMS</a>
<a href='http://www.swift-tutor.com/tag/code/' class='tag-link-31' title='1 หัวข้อ' style='font-size: 8pt;'>code</a>
<a href='http://www.swift-tutor.com/tag/computer-network/' class='tag-link-25' title='1 หัวข้อ' style='font-size: 8pt;'>computer network</a>
<a href='http://www.swift-tutor.com/tag/decryption/' class='tag-link-19' title='1 หัวข้อ' style='font-size: 8pt;'>decryption</a>
<a href='http://www.swift-tutor.com/tag/encryption/' class='tag-link-20' title='1 หัวข้อ' style='font-size: 8pt;'>encryption</a>
<a href='http://www.swift-tutor.com/tag/function/' class='tag-link-32' title='2 หัวข้อ' style='font-size: 10.27027027027pt;'>function</a>
<a href='http://www.swift-tutor.com/tag/injectioline/' class='tag-link-52' title='8 หัวข้อ' style='font-size: 16.198198198198pt;'>injectioline</a>
<a href='http://www.swift-tutor.com/tag/internet/' class='tag-link-26' title='2 หัวข้อ' style='font-size: 10.27027027027pt;'>internet</a>
<a href='http://www.swift-tutor.com/tag/ios-2/' class='tag-link-12' title='25 หัวข้อ' style='font-size: 22pt;'>ios</a>
<a href='http://www.swift-tutor.com/tag/iosthailand/' class='tag-link-13' title='15 หัวข้อ' style='font-size: 19.351351351351pt;'>iosthailand</a>
<a href='http://www.swift-tutor.com/tag/ipad/' class='tag-link-14' title='12 หัวข้อ' style='font-size: 18.216216216216pt;'>ipad</a>
<a href='http://www.swift-tutor.com/tag/iphone/' class='tag-link-15' title='12 หัวข้อ' style='font-size: 18.216216216216pt;'>iphone</a>
<a href='http://www.swift-tutor.com/tag/javascript-2/' class='tag-link-94' title='2 หัวข้อ' style='font-size: 10.27027027027pt;'>javaScript</a>
<a href='http://www.swift-tutor.com/tag/joomla-2/' class='tag-link-45' title='1 หัวข้อ' style='font-size: 8pt;'>joomla</a>
<a href='http://www.swift-tutor.com/tag/key/' class='tag-link-21' title='1 หัวข้อ' style='font-size: 8pt;'>key</a>
<a href='http://www.swift-tutor.com/tag/login/' class='tag-link-53' title='1 หัวข้อ' style='font-size: 8pt;'>login</a>
<a href='http://www.swift-tutor.com/tag/microsoft/' class='tag-link-33' title='1 หัวข้อ' style='font-size: 8pt;'>microsoft</a>
<a href='http://www.swift-tutor.com/tag/nsstring/' class='tag-link-67' title='1 หัวข้อ' style='font-size: 8pt;'>NSString</a>
<a href='http://www.swift-tutor.com/tag/object/' class='tag-link-35' title='1 หัวข้อ' style='font-size: 8pt;'>object</a>
<a href='http://www.swift-tutor.com/tag/objective-c/' class='tag-link-16' title='14 หัวข้อ' style='font-size: 19.099099099099pt;'>objective-c</a>
<a href='http://www.swift-tutor.com/tag/plugin/' class='tag-link-63' title='1 หัวข้อ' style='font-size: 8pt;'>plugin</a>
<a href='http://www.swift-tutor.com/tag/plugins/' class='tag-link-54' title='1 หัวข้อ' style='font-size: 8pt;'>plugins</a>
<a href='http://www.swift-tutor.com/tag/procedure/' class='tag-link-36' title='1 หัวข้อ' style='font-size: 8pt;'>procedure</a>
<a href='http://www.swift-tutor.com/tag/programming/' class='tag-link-50' title='2 หัวข้อ' style='font-size: 10.27027027027pt;'>programming</a>
<a href='http://www.swift-tutor.com/tag/safety/' class='tag-link-27' title='2 หัวข้อ' style='font-size: 10.27027027027pt;'>safety</a>
<a href='http://www.swift-tutor.com/tag/safty/' class='tag-link-22' title='1 หัวข้อ' style='font-size: 8pt;'>safty</a>
<a href='http://www.swift-tutor.com/tag/security/' class='tag-link-23' title='3 หัวข้อ' style='font-size: 11.783783783784pt;'>security</a>
<a href='http://www.swift-tutor.com/tag/sub/' class='tag-link-37' title='1 หัวข้อ' style='font-size: 8pt;'>sub</a>
<a href='http://www.swift-tutor.com/tag/table-view/' class='tag-link-85' title='4 หัวข้อ' style='font-size: 13.045045045045pt;'>table view</a>
<a href='http://www.swift-tutor.com/tag/tools/' class='tag-link-46' title='1 หัวข้อ' style='font-size: 8pt;'>tools</a>
<a href='http://www.swift-tutor.com/tag/user/' class='tag-link-55' title='1 หัวข้อ' style='font-size: 8pt;'>user</a>
<a href='http://www.swift-tutor.com/tag/vba/' class='tag-link-38' title='1 หัวข้อ' style='font-size: 8pt;'>vba</a>
<a href='http://www.swift-tutor.com/tag/website/' class='tag-link-47' title='2 หัวข้อ' style='font-size: 10.27027027027pt;'>website</a>
<a href='http://www.swift-tutor.com/tag/wordpress/' class='tag-link-57' title='3 หัวข้อ' style='font-size: 11.783783783784pt;'>wordpress</a>
<a href='http://www.swift-tutor.com/tag/xcode/' class='tag-link-51' title='5 หัวข้อ' style='font-size: 14.054054054054pt;'>xcode</a>
<a href='http://www.swift-tutor.com/tag/%e0%b8%9b%e0%b8%a5%e0%b8%b1%e0%b9%8a%e0%b8%81%e0%b8%ad%e0%b8%b4%e0%b8%99/' class='tag-link-58' title='2 หัวข้อ' style='font-size: 10.27027027027pt;'>ปลั๊กอิน</a>
<a href='http://www.swift-tutor.com/tag/%e0%b8%a5%e0%b9%87%e0%b8%ad%e0%b8%81%e0%b8%ad%e0%b8%b4%e0%b8%99/' class='tag-link-59' title='1 หัวข้อ' style='font-size: 8pt;'>ล็อกอิน</a>
<a href='http://www.swift-tutor.com/tag/%e0%b9%80%e0%b8%82%e0%b8%b5%e0%b8%a2%e0%b8%99%e0%b9%82%e0%b8%9b%e0%b8%a3%e0%b9%81%e0%b8%81%e0%b8%a3%e0%b8%a1/' class='tag-link-121' title='2 หัวข้อ' style='font-size: 10.27027027027pt;'>เขียนโปรแกรม</a>
<a href='http://www.swift-tutor.com/tag/%e0%b9%80%e0%b8%a7%e0%b8%b4%e0%b8%a3%e0%b9%8c%e0%b8%94%e0%b9%80%e0%b8%9e%e0%b8%a3%e0%b8%aa/' class='tag-link-60' title='1 หัวข้อ' style='font-size: 8pt;'>เวิร์ดเพรส</a>
<a href='http://www.swift-tutor.com/tag/%e0%b9%80%e0%b8%a7%e0%b9%87%e0%b8%9a%e0%b9%84%e0%b8%8b%e0%b8%95%e0%b9%8c/' class='tag-link-61' title='3 หัวข้อ' style='font-size: 11.783783783784pt;'>เว็บไซต์</a></div>
</section>					</div>
				</aside><!-- #sidebar -->
			
		

		

			</div><!-- .wf-container -->
		</div><!-- .wf-wrap -->
	</div><!-- #main -->

	
	
	<!-- !Bottom-bar -->
	<div id="bottom-bar" role="contentinfo">
		<div class="wf-wrap">
			<div class="wf-table wf-mobile-collapsed">

								<div id="branding-bottom" class="wf-td"><img class="preload-me" src="http://www.swift-tutor.com/wp-content/uploads/2014/06/swift-website-logo.png" width="181" height="64"   alt="เรียน สอน Swift คือ Swift Tutorial ดาวน์โหลด ตัวอย่างโค้ด" /></div>
				
				
													<div class="wf-td">
						<div class="wf-float-left">
																				&nbsp;SWIFT-TUTOR &mdash; <a href="http://facebook.com/swifttutor" target="_blank">ศูนย์กลางสำหรับคนสร้าง App บน iOS และ OS X</a>
                                                         &nbsp; : <a href="https://plus.google.com/113664598526592559324" rel="publisher">Google+</a>
						                                            

                                                <div class="wf-float-right">Copyright 2014 by swift-tutor.com All rights reserved.</div>
						</div>
					</div>
				
				<div class="wf-td">
									</div>

				
			</div>
		</div><!-- .wf-wrap -->
	</div><!-- #bottom-bar -->

	
		<a href="#" class="scroll-top"></a>

</div><!-- #page -->
<link rel='stylesheet' id='crumina_slider_css-css'  href='http://www.swift-tutor.com/wp-content/plugins/crumina_slider/css/crumina_slider.css?ver=3.6.2' type='text/css' media='all' />
<script type='text/javascript' src='http://www.swift-tutor.com/wp-content/plugins/bbpress/templates/default/js/editor.js?ver=2.5.8-5815'></script>
<script type='text/javascript' src='http://www.swift-tutor.com/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/www.swift-tutor.com\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","sending":"Sending ...","cached":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.swift-tutor.com/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=4.3'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var mejsL10n = {"language":"th-TH","strings":{"Close":"\u0e1b\u0e34\u0e14","Fullscreen":"\u0e40\u0e15\u0e47\u0e21\u0e08\u0e2d","Download File":"\u0e14\u0e32\u0e27\u0e19\u0e4c\u0e42\u0e2b\u0e25\u0e14\u0e44\u0e1f\u0e25\u0e4c","Download Video":"\u0e14\u0e32\u0e27\u0e19\u0e4c\u0e42\u0e2b\u0e25\u0e14\u0e27\u0e35\u0e14\u0e35\u0e42\u0e2d","Play\/Pause":"\u0e40\u0e25\u0e48\u0e19\/\u0e2b\u0e22\u0e38\u0e14","Mute Toggle":"\u0e40\u0e1b\u0e34\u0e14\/\u0e1b\u0e34\u0e14 \u0e40\u0e2a\u0e35\u0e22\u0e07","None":"\u0e44\u0e21\u0e48\u0e21\u0e35","Turn off Fullscreen":"\u0e1b\u0e34\u0e14\u0e01\u0e32\u0e23\u0e40\u0e25\u0e48\u0e19\u0e40\u0e15\u0e47\u0e21\u0e2b\u0e19\u0e49\u0e32\u0e08\u0e2d","Go Fullscreen":"\u0e43\u0e0a\u0e49\u0e01\u0e32\u0e23\u0e40\u0e25\u0e48\u0e19\u0e40\u0e15\u0e47\u0e21\u0e2b\u0e19\u0e49\u0e32\u0e08\u0e2d","Unmute":"\u0e40\u0e1b\u0e34\u0e14\u0e40\u0e2a\u0e35\u0e22\u0e07","Mute":"\u0e1b\u0e34\u0e14\u0e40\u0e2a\u0e35\u0e22\u0e07","Captions\/Subtitles":"\u0e04\u0e33\u0e2d\u0e18\u0e34\u0e1a\u0e32\u0e22\/\u0e04\u0e33\u0e41\u0e1b\u0e25"}};
var _wpmejsSettings = {"pluginPath":"\/wp-includes\/js\/mediaelement\/"};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.swift-tutor.com/wp-includes/js/mediaelement/mediaelement-and-player.min.js?ver=2.17.0'></script>
<script type='text/javascript' src='http://www.swift-tutor.com/wp-includes/js/mediaelement/wp-mediaelement.js?ver=4.3.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var quick_count = {"url":"http:\/\/www.swift-tutor.com\/wp-content\/plugins\/quick-count\/","version":"3.00","jqvmap_version":"1.0","ajaxurl":"http:\/\/www.swift-tutor.com\/wp-admin\/admin-ajax.php","script_suffix":"","timeout_refresh_users":"180000","i18n":{"one_admin_s":"<strong>1 Administrator<\/strong>","one_subscriber_s":"<strong>1 Subscriber<\/strong>","one_visitor_s":"<strong>1 Visitor<\/strong>","one_bot_s":"<strong>1 Bot<\/strong>","multiple_admins_s":"<strong>%number Administrators<\/strong>","multiple_subscribers_s":"<strong>%number Subscribers<\/strong>","multiple_visitors_s":"<strong>%number Visitors<\/strong>","multiple_bots_s":"<strong>%number Bots<\/strong>","zero_s":"There are no users","one_s":"There is <strong>1<\/strong> user","multiple_s":"There are <strong>%number<\/strong> users","one_country_s":"from <strong>1<\/strong> country<\/strong>","multiple_countries_s":"from <strong>%number<\/strong> countries<\/strong>","one_admin_online_s":"<strong>1 administrator<\/strong> online:","one_subscriber_online_s":"<strong>1 subscriber<\/strong> online:","one_visitor_online_s":"<strong>1 visitor<\/strong> online:","one_bot_online_s":"<strong>1 bot<\/strong> online:","multiple_admins_online_s":"<strong>%number administrators<\/strong> online:","multiple_subscribers_online_s":"<strong>%number subscribers<\/strong> online:","multiple_visitors_online_s":"<strong>%number visitors<\/strong> online:","multiple_bots_online_s":"<strong>%number bots<\/strong> online:","most_online_s":"Most users online were <strong>%number<\/strong>, on <strong>%time<\/strong>","count_s":"<strong>#%count - %name<\/strong>","ip_s":"[%ip]","country_s":"from %cname %cflag","joined_s":"first joined on %joined, last seen on %polled while browsing <a href=\"%url\" title=\"%url\" target=\"_blank\">%title<\/a>","browser_s":"using %bname %bversion browser on %pname %pversion platform","agent_s":"using %agent","referrer_s":"[<a href=\"%referrer\" title=\"%referrer\" target=\"_blank\">referrer<\/a>]"}};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.swift-tutor.com/wp-content/plugins/quick-count/js/quick-count-load-frontend.js?ver=3.00'></script>
<script type='text/javascript' src='http://www.swift-tutor.com/wp-content/themes/google/royalslider/jquery.royalslider.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://www.swift-tutor.com/wp-content/themes/google/js/animate-elements.js?ver=1.0.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var dtLocal = {"passText":"To view this protected post, enter the password below:","postID":"1211","ajaxurl":"http:\/\/www.swift-tutor.com\/wp-admin\/admin-ajax.php","contactNonce":"cac3fe8d47"};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.swift-tutor.com/wp-content/themes/google/js/plugins.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://www.swift-tutor.com/wp-content/themes/google/js/desktop-tablet.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://www.swift-tutor.com/wp-content/themes/google/js/desktop.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://www.swift-tutor.com/wp-content/themes/google/js/main.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://www.swift-tutor.com/wp-content/plugins/crumina_slider/js/crumina_slider_content.js?ver=3.6.2'></script>
</body>
</html>