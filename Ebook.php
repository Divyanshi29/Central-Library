<?php
include("include/main.php");
include("include/header.php");
?>
    <style>
      .ebook {
        margin-bottom:50px;
      }
      .type {
        list-style-type: none;
      }

      .font {
        margin-top: 20px;
        color:black;
        font-size:20px;
      }
      .individualInside {
        justify-content: center;
        align-items: center;
        display: flex;
        flex-direction: row;
        position: relative;
        
        
      }
      .tata {
        box-shadow: 5px 25px 25px #F5F5F5;
        min-width: 230px;
        min-height:250px;
        text-align: center;
        cursor: pointer;
        margin-left:20px;
      }
      .bookCover {
        width: 125px;
        height: 150px;
      }
      .headBook {
        display: flex;
        justify-content: center;
        margin-bottom: 30px;
      }
      .btn-browse
      {
        min-width: 50px;
        background-color:black;
        border:none;
        color:white;
        
        
      }
      .btn-div
      {
        cursor:pointer;
        position: absolute;
        right: 130px;
        bottom:-10px;
       
      }
      .bookCover
      {
        margin-bottom:10px;
      }
    </style>
    <div class="ebook">
    
          <!-- Heading the publisher name and logo-->
          <div class="headBook">
            <!-- <img
              src="https://lh3.googleusercontent.com/proxy/0ByGHx2NsI3EKoBrQqnNEkyZoDB8gB8f42DOvmKDjW0A_nTeh8AfoB2EoWPLxDkJzJZvHyolBQMTQx_FtxaLCSVIIMp-vejJZX3-n8tiD4e8kF1MCA"
              style="width: 85px"
            /> -->
            <span class="font">Tata Mc-GrawHill's</span><br />
          </div>
          <!-- All the book covers -->
          <div class="individualInside">
            <!-- First Div for book-->
            <div class="tata" onclick="window.location.href='https://www.expresslibrary.mheducation.com/product/important-judgments-that-transformed-india-for-upsc-civil-services-examination';">
              <img class="bookCover" src="image/tataMcTransformedIndia.jpg" />
              <p>
                Important Judgments<br />
                that Transformed<br />
                India: For UPSC Civil<br />
                Services Examination
              </p>
            </div>
            <!-- Second Div for book-->
            <div class="tata" onclick="window.location.href='https://www.expresslibrary.mheducation.com/product/indian-economy-key-concepts-sixth-edition-english';">
              <img class="bookCover" src="image/tataMcTransformedIndia2.jpg" />
              <p>Indian Economy - <br />Key Concepts</p>
            </div>
            <!-- Third Div for book-->
            <div class="tata" onclick="window.location.href='https://www.expresslibrary.mheducation.com/product/art-culture-question-bank-for-civil-services-preliminary-examination-second-edition';">
              <img class="bookCover" src="image/tataMcTransformedIndia3.jpg" />
              <p>
                Art and Culture<br />
                Question Bank
              </p>
            </div>
            <!-- Fourth Div for book-->
            <div class="tata" onclick="window.location.href='https://www.expresslibrary.mheducation.com/product/bhartiya-arthvyavastha';" >
                <img class="bookCover" src="image/tataMcTransformedIndia4.jpg" 
              />
              <p>Bhartiya Arthvyavastha</p>
            </div>
            <!-- Fifth Div for book-->
            <div class="tata" onclick="window.location.href='https://www.expresslibrary.mheducation.com/product/bharitya-arthvyavastha-sukshma-audharana-6e';">
              <img class="bookCover" src="image/tataMcTransformedIndia5.jpg" />
              <p>Bharitya Arthvyavastha<br />- Sukshma Audharana</p>
              
            </div>
            <div class="btn-div" >
                <button class="btn-browse" onClick="window.location.href='https://www.expresslibrary.mheducation.com/'">Browse</button>
            </div>
            </div>
            



            

          <!-- Second Publisher-->
            <div class="headBook">
            <!-- <img
              src="https://lh3.googleusercontent.com/proxy/0ByGHx2NsI3EKoBrQqnNEkyZoDB8gB8f42DOvmKDjW0A_nTeh8AfoB2EoWPLxDkJzJZvHyolBQMTQx_FtxaLCSVIIMp-vejJZX3-n8tiD4e8kF1MCA"
              style="width: 85px"
            /> -->
            <span class="font">Myilibrary</span><br />
          </div>
          <!-- All the book covers -->
          <div class="individualInside">
            <!-- First Div for book-->
            <div class="tata" onclick="window.location.href='https://lib.myilibrary.com/?id=752693';">
              <img class="bookCover" src="image/myilibrary1.jpeg" />
              <p>
                Computer Science <br> An overview
              </p>
            </div>
            <!-- Second Div for book-->
            <div class="tata" onclick="window.location.href='https://lib.myilibrary.com/?id=645682';">
              <img class="bookCover" src="image/myilibrary2.jpeg" />
              <p>Computer Vision<br> A modern<br>Approach</p>
            </div>
            <!-- Third Div for book-->
            <div class="tata" onclick="window.location.href='https://lib.myilibrary.com/?id=641410';">
              <img class="bookCover" src="image/myilibrary3.jpeg" />
              <p>
                MATLAB For <br> Engineers
              </p>
            </div>
            <!-- Fourth Div for book-->
            <div class="tata" onclick="window.location.href='https://lib.myilibrary.com/?id=645687';" >
                <img class="bookCover" src="image/myilibrary4.jpeg" 
              />
              <p>Data and<br> Computer Communications</p>
            </div>
            <!-- Fifth Div for book-->
            <div class="tata" onclick="window.location.href='https://lib.myilibrary.com/?id=663371';">
              <img class="bookCover" src="image/myilibrary5.jpeg" />
              <p>Java Software<br> Structures</p>
            </div>
             <div class="btn-div">
                <button class="btn-browse" onClick="window.location.href='http://lib.myilibrary.com/'">Browse</button>
        </div>
        </div>
        



        <!-- Third Publisher-->
            <div class="headBook">
            <!-- <img
              src="https://lh3.googleusercontent.com/proxy/0ByGHx2NsI3EKoBrQqnNEkyZoDB8gB8f42DOvmKDjW0A_nTeh8AfoB2EoWPLxDkJzJZvHyolBQMTQx_FtxaLCSVIIMp-vejJZX3-n8tiD4e8kF1MCA"
              style="width: 85px"
            /> -->
            <span class="font">Free e-Book Archive</span><br />
          </div>
          <!-- All the book covers -->
          <div class="individualInside">
            <!-- First Div for book-->
            <div class="tata" onclick="window.location.href='https://archive.org/details/arxiv';">
              <img class="bookCover" src="image/free1.jfif" />
              <p>
                Arvix
              </p>
            </div>
            <!-- Second Div for book-->
            <div class="tata" onclick="window.location.href='https://archive.org/details/computermanuals';">
              <img class="bookCover" src="image/free2.jfif" />
              <p>Computer Manuals</p>
            </div>
            <!-- Third Div for book-->
            <div class="tata" onclick="window.location.href='https://archive.org/details/ukmhl';">
              <img class="bookCover" src="image/free6.jfif" />
              <p>
               UK Medical<br> Heritage Library
              </p>
            </div>
            <!-- Fourth Div for book-->
            <div class="tata" onclick="window.location.href='https://archive.org/details/penn_state_univ';" >
                <img class="bookCover" src="image/free8.jfif" 
              />
              <p>Penn University</p>
            </div>
            <!-- Fifth Div for book-->
            <div class="tata" onclick="window.location.href='https://archive.org/details/bostonpubliclibrary';">
              <img class="bookCover" src="image/free5.jfif" />
              <p>Boston Library</p>
            </div>
            <div class="btn-div">
                <button class="btn-browse" onClick="window.location.href='https://archive.org/details/texts'">Browse</button>
            </div>
            </div>
            


            <!-- Third Publisher-->
            <div class="headBook">
            <!-- <img
              src="https://lh3.googleusercontent.com/proxy/0ByGHx2NsI3EKoBrQqnNEkyZoDB8gB8f42DOvmKDjW0A_nTeh8AfoB2EoWPLxDkJzJZvHyolBQMTQx_FtxaLCSVIIMp-vejJZX3-n8tiD4e8kF1MCA"
              style="width: 85px"
            /> -->
            <span class="font">Springer</span><br />
          </div>
          <!-- All the book covers -->
          <div class="individualInside">
            <!-- First Div for book-->
            <div class="tata" onclick="window.location.href='https://www.springer.com/gp/book/9783030185442';">
              <img class="bookCover" src="image/springer2.jpg" />
              <p>
               Python for Probability,<br>Statistics,<br>and Machine Learning
              </p>
            </div>
            <!-- Second Div for book-->
            <div class="tata" onclick="window.location.href='https://www.springer.com/gp/book/9781484254035';">
              <img class="bookCover" src="image/springer3.jpg" />
              <p>Interactive<br> Object-Oriented Programming<br> in Java</p>
            </div>
            <!-- Third Div for book-->
            <div class="tata" onclick="window.location.href='https://www.springer.com/gp/book/9789813299375';">
              <img class="bookCover" src="image/springer4.jpg" />
              <p>
               Springer Handbook <br>of Power Systems
              </p>
            </div>
            <!-- Fourth Div for book-->
            <div class="tata" onclick="window.location.href='https://www.springer.com/journal/11071';" >
                <img class="bookCover" src="image/springer5.jpg" style="width:100px;"
              />
              <p>Nonlinear <br>Dynamics</p>
            </div>
            <!-- Fifth Div for book-->
            <div class="tata" onclick="window.location.href='https://www.springer.com/journal/10544';">
              <img class="bookCover" src="image/springer6.jpg" />
              <p>Biomedical Microdevices</p>
            </div>
            <div class="btn-div" >
                <button class="btn-browse" onClick="window.location.href='https://www.springer.com/gp/shop?countryChanged=true'">Browse</button>
            </div>
            </div>
            
            
          </div>
    </div>
 
    <?php include("include/footerstrip.php"); ?>