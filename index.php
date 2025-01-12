<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style type="text/css">
        
    </style>
</head>
<body>
     <div id="header">
     	<div class="container">

     		<nav>
     			<p id="logo"><span>M</span><span>A</span><span>D</span><span>U</span><span>G</span>U<span>TECH</span></p>
     			<ul id="sidemenu">
     				<li><a href="">Home</a></li>
     				<li><a href="#about">About</a></li>
     				<li><a href="#services">Services</a></li>
     				<li><a href="#portfolio">Portfolio</a></li>
     				<li><a href="#contact">Contact</a></li>
                     <i class="fas fa-times" onclick="close_menu()"></i>
     			</ul>
                <i class="fas fa-bars" onclick="open_menu()"></i>
     		</nav>

     		<div class="header-text">
     			<p>Software Develper</p>
     			<h1>Hi,I am <span>Muhammad</span>  <br>From Nigeria.
     		</div>
     		
     	</div>
     	
     </div>
           <!-- about -->
     <div id="about">
     	 <div class="container">
     	 	<div class="row">
     	 		<div class="about-col-1">
     	 			<img src="images/default.jpg">
     	 		</div>
     	 	<div class="about-col-2">
    <h1 class="sub-title">About Me</h1>
    <p>
        I am a driven computer science professional with a Master's degree from Nile University of Nigeria and extensive experience in full-stack development, artificial intelligence, and machine learning. Over the years, I have honed my skills in various programming languages like Python, Java, and JavaScript, while working on innovative projects ranging from AI-driven solutions to full-stack web applications.
        <br><br>
        My passion for technology is matched by my dedication to continuous learning, as demonstrated by certifications in advanced machine learning and deep learning. I thrive on tackling complex problems, delivering impactful solutions, and contributing to cutting-edge research and development in artificial intelligence.
    </p>
    <div class="tab-titles">
        <p class="tab-links active-link" onclick="open_tab('skills')">Skills</p>
        <p class="tab-links" onclick="open_tab('experience')">Experience</p>
        <p class="tab-links" onclick="open_tab('education')">Education</p>
    </div>
    <div class="tab-contents active-tab" id="skills">
        <ul>
            <li><span>Full-Stack Development</span><br> Expertise in building dynamic, responsive web applications.</li>
            <li><span>Machine Learning</span> <br> Proficiency in developing models for real-world applications like sentiment analysis and stock prediction.</li>
            <li><span>Programming Languages</span> <br> Skilled in Python, Java, JavaScript, and C++.</li>
        </ul>
    </div>
    <div class="tab-contents" id="experience">
        <ul>
            <li><span>Software Development</span><br> Backend developer at Unicus Technologies, building scalable solutions.</li>
            <li><span>Data Science Intern</span> <br> Developed advanced Python-based models during the Edruka internship program.</li>
            <li><span>Project Supervision</span> <br> Led multiple web and mobile application projects for academic and professional purposes.</li>
        </ul>
    </div>
    <div class="tab-contents" id="education">
        <ul>
            <li><span>Master's in Computer Science</span><br>Nile University of Nigeria, Abuja (2021-2023).</li>
            <li><span>Bachelor's in Computer Science</span><br>Ahmadu Bello University, Zaria (2015-2019).</li>
        </ul>
    </div>
</div>

     	 	</div>
     	 </div>
     </div>

      <!-- Services -->
       <div id="services">
       	<div class="container">
       		<h1 class="sub-title">My Services</h1>
   <div class="services-list">
    <div>
        <i class="fa-solid fa-laptop-code"></i> <!-- Icon for Web Development -->
        <h2>Web Development</h2>    
        <p>
            I specialize in creating responsive, user-friendly websites tailored to meet your needs. From design to deployment, I deliver robust and scalable web solutions using modern technologies to help your business thrive online.
        </p>  
    </div>
    <div>
        <i class="fa-solid fa-mobile-screen"></i> <!-- Icon for Mobile Development -->
        <h2>Mobile Development</h2>    
        <p>
            I develop intuitive and feature-rich mobile applications for Android and iOS platforms. My apps are optimized for performance and designed to provide a seamless user experience that keeps your audience engaged.
        </p>  
    </div>
    <div>
        <i class="fa-solid fa-chart-line"></i> <!-- Icon for Data Science -->
        <h2>Data Science</h2>    
        <p>
            Harness the power of data to make informed decisions. I offer data analysis, visualization, and machine learning solutions to transform raw data into actionable insights for your business.
        </p>  
    </div>
</div>


       	</div>
       </div> 


       <!-- Portfolio -->

       <div id="portfolio">
            <div class="container">
                 <h1 class="sub-title">My Works</h1>
              <div class="work-list">
    <div class="work">
        <img src="images/bizcard.jpeg">
        <div class="layer">
            <h3>BizCard</h3>
            <p>
                A smart electronic business card that simplifies networking by providing users with an innovative way to share their professional details. Developed as a mobile and web application with a focus on usability and efficiency.
            </p>
            <a href="https://www.unicus.live/bizcard/"><i class="fa fa-external-link-alt"></i></a>
        </div>  
    </div>
    <div class="work">
        <img src="images/recifa_real.jpeg">  
        <div class="layer">
            <h3>Recifa</h3>
            <p>
                An online payment solution enabling seamless financial transactions with a user-friendly interface and secure backend processing. Designed for efficiency in managing business transactions.
            </p>
            <a href="https://www.recifa.com"><i class="fa fa-external-link-alt"></i></a>
        </div>  
    </div>
    <div class="work">
        <img src="images/assessment.jpeg">  
        <div class="layer">
            <h3>CBT Software</h3>
            <p>
                A computer-based testing solution designed for educational institutions and organizations to manage assessments with features like automated grading and detailed reporting.
            </p>
            <a href="https://www.unicus.live/assessment/"><i class="fa fa-external-link-alt"></i></a>
        </div>  
    </div>
    <div class="work">
        <img src="images/bread_real.jpeg">  
        <div class="layer">
            <h3>Bread Culture Foods</h3>
            <p>
                A bakery specializing in high-quality, health-focused bread varieties such as Digestive, Coconut, and Midi Loaf. Dedicated to delivering nutritious and delicious baked goods to customers.
            </p>
            <a href="https://breadculturefoods.com/" target="_blank"><i class="fa fa-external-link-alt"></i></a>
        </div>  
    </div>
    <div class="work">
        <img src="images/samatech.jpeg">  
        <div class="layer">
            <h3>Samatech Business Solutions Limited</h3>
            <p>
                An engineering and consultancy company providing innovative solutions in the oil and gas sector, including process and pipeline services, condition monitoring, and project management.
            </p>
            <a href="https://samatechbs.com/" target="_blank"><i class="fa fa-external-link-alt"></i></a>
        </div>  
    </div>

    <div class="work">
        <img src="images/vanguard.jpeg">  
        <div class="layer">
            <h3>Vanguard Educational Company</h3>
            <p>
                Contributed to projects for Vanguard Educational Company, focusing on software solutions to enhance educational processes and streamline administrative tasks.
            </p>
            <a href="https://vanguardeducationcompany.com/"><i class="fa fa-external-link-alt"></i></a>
        </div>  
    </div>
    
    <div class="work">
        <img src="images/school.jpeg">  
        <div class="layer">
            <h3>School Management System</h3>
            <p>
                A comprehensive system for managing secondary school operations, including result uploads, fee management, and administrative tasks, designed for efficiency and user convenience.
            </p>
            <a href="https://vanguardeducationcompany.com/portal/"><i class="fa fa-external-link-alt"></i></a>
        </div>  
    </div>
</div>

            </div>
       </div>

       <!-- Contact -->

       <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                   <h1 class="sub-title">Contact Me</h1> 
                   <p><a href="mailto:ibrahimmo2012@gmail.com"><i class="fas fa-paper-plane"></i> ibrahimmo2012@gmail.com</a></p>
                  <p><a href="tel:+2349064057929"><i class="fas fa-phone-square-alt"></i> 09064057929</a></p>

               <div class="social-icons">
                    <a href="https://www.facebook.com/Muhammad.Ibrahim" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="https://wa.me/2349064057929" target="_blank"><i class="fab fa-whatsapp"></i></a>
               </div>

                   <a href="MuhammadCv.pdf" download class="btn">Download Cv</a>
                </div>
                <div class="contact-right">
                    <form>
                        <input type="text" name="name" placeholder="Your Name" required>
                        <input type="email" name="email" placeholder="Your Email" required>
                        <textarea placeholder="Enter Message" rows="6"></textarea>
                        <input type="submit" name="" value="Send" class="btn">
                    </form>
                </div>
            </div>
        </div>

        <div class="copyright">
            <p>Madugu Tech <?=date('Y')?></p>
        </div>
           
       </div>

</body>
 <script type="text/javascript">
 	 var tablinks = document.querySelectorAll('.tab-links');
 	 var tabcontents = document.querySelectorAll('.tab-contents');
     var sidebar = document.querySelector('#sidemenu');

      function open_tab(tabname) {
      	 for(tablink of tablinks){
      	 	tablink.classList.remove('active-link');
      	 }

      	 for(tabcontent of tabcontents){
      	 	tabcontent.classList.remove('active-tab');
      	 }

      	 event.currentTarget.classList.add('active-link');

      	 document.querySelector('#'+tabname).classList.add('active-tab')
      }

   
      function open_menu(){
        sidebar.style.right = '0px';
      }


        function close_menu(){
        sidebar.style.right = '-200px';
      }
 </script>
</html>