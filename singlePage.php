<?php  
/*
 Template Name: Main-Page
 
*/
get_header(); 
html_form();

?>

<div id="slideshow" >
	
</div>



<div id="contactSection" class="section">
	<div class="inneraddress">
		<form id="first" method="post" action="http://localhost:8080/testing/home/">
			<table width="450px">
			</tr>
			<tr>
			 <td valign="top">
			  <label for="first_name">First Name *</label>
			 </td>
			 <td valign="top">
			  <input  type="text" name="first_name" maxlength="50" size="30">
			 </td>
			</tr>
			 
			<tr>
			 <td valign="top"">
			  <label for="last_name">Last Name *</label>
			 </td>
			 <td valign="top">
			  <input  type="text" name="last_name" maxlength="50" size="30">
			 </td>
			</tr>
			<tr>
			 <td valign="top">
			  <label for="email">Email Address *</label>
			 </td>
			 <td valign="top">
			  <input  type="text" name="email" maxlength="80" size="30">
			 </td>
			 
			</tr>
			<tr>
			 <td valign="top">
			  <label for="telephone">Telephone Number</label>
			 </td>
			 <td valign="top">
			  <input  type="text" name="telephone" maxlength="30" size="30">
			 </td>
			</tr>
			<tr>
			 <td valign="top">
			  <label for="comments">Comments *</label>
			 </td>
			 <td valign="top">
			  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
			 </td>
			 
			</tr>
			<tr>
			 <td colspan="2" style="text-align:center">
			  <input type="submit" value="Submit">
			 </td>
			</tr>
			</table>
		</form>
		<div id="second" >
			<h3>OUR ADDRESS</h3>
			<ul>
				<li>
					<i>
						1 Avoca Terrace <br>
						Blackrock <br>
						Dublin <br>
						A94 EA44
					</i>
				</li>
			</ul>
		</div>
	</div>
</div>





<div id="aboutUsSection" class="section">
	<div class="inner">
		<h1 id="ourWork">
			MARKETING WITH VIDEO <br><br>
		</h1>
				A researcher at Forrester Dr. James McQuivey estimates that a one-minute video is equivalent to 1.8 million words. Video is on track to become the primary online marketing tool. Airvison aims to assist businesses to navigate the changes in marketing practices. 90% of web users say that seeing a video about a product is helpful in the decision process.<br>
			<h1>
				OUR APPROACH<br><br>
			</h1>
			<p>Immediacy and concision is Airvision's speciality. The most successful video marketing projects grab the viewers attention. Our approach to video marketing creates a powerful connection between your business and its audience. <br></p>
				
			<h1>
				YOUR VISION<br><br>
			</h1>
			<p>
				Airvision specialises in the development of video portfolios for companies, organizations and individuals to showcase their ideas, talents and skills within their marketplace. Airvision's diverse clientele has created a unique environment where each production garners individualized attention and a fresh perspective.<br>

				Airvision launched in 2016. We have an enthusiastic core professional team with the skills and equipment to handle high-end video projects. We are aiming to build a strong reputation as one of the country's top producers of Web-Commercials.We understand the importance of building relationships and remaining flexible to our clients needs and ideas. Your message is our motivation.<br>
			</p>
				
		</p>
	</div>
</div>




<div id="workSection" class="section">
	<div id="innerSection">
		<div id="headerdiv">
			<header id="worheader">
				<h3 class="section-title">
					<span>Our Work</span>
				</h3>
			</header>
		</div>
		<div id="videos">
			<div class="videoThumb">
				<img  src="http://localhost:8080/testing/wp-content/uploads/2016/08/Sugar-cane-workers-Honduras-Trocaire-1.jpg" alt="" class="thumbPic" />
			</div>
			<div class="videoThumb">
				<img  src="http://localhost:8080/testing/wp-content/uploads/2016/08/Sugar-cane-workers-Honduras-Trocaire-1.jpg" alt="" class="thumbPic" />
			</div>
			<div class="videoThumb">
				<img  src="http://localhost:8080/testing/wp-content/uploads/2016/08/Kosova-War-ruins-of-boys-house-1.jpg" alt="" class="thumbPic" />
			</div>
			<div class="videoThumb">
				<img  src="http://localhost:8080/testing/wp-content/uploads/2016/08/102-Years-old-Bolivia-for-Trocaire-1.jpg" alt="" class="thumbPic" />
			</div>
			<div class="videoThumb">
				<img  src="http://localhost:8080/testing/wp-content/uploads/2016/08/Maram.jpg" alt="" class="thumbPic" />
			</div>
			<div class="videoThumb">
				<img  src="http://localhost:8080/testing/wp-content/uploads/2016/08/Portrait.jpg" alt="" class="thumbPic" />
			</div>
			<div class="videoThumb">
				 <img  src="http://localhost:8080/testing/wp-content/uploads/2016/08/Natural-History-Museum-London-1.jpg"  alt="" class="thumbPic" />
			</div>
		</div>
	</div>
</div>


<?php

get_footer();