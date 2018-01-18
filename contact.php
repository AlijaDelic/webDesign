<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Assignment</title>
    <meta name="description" content="html&css assignment">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/nav.css" type="text/css">
    <link rel="stylesheet" href="css/contact.css" type="text/css">
    <link rel="icon" href="favicon.ico" type="image/icon">
</head>
<body>
<div class="wrapper">
    <div class="navigation">
        <div class="igman">Igman</div>
        <div class="igman">Bjelasnica</div>
        <div class="igman">Vlasic</div>
        <div class="igman">Trebevic</div>
    </div>
    <div class="main">
        <div class="line"></div>
        <div class="left">
            <h1>You have a question?<br>Ask here!</h1>
            <form>
                <div class="labeli">
                    <label for="fname">Your name: </label>
                    <br>
                    <br>
                    <label for="lname">Email: </label>
                    <br>
                    <br>
                    <label for="phoneNumber">Your phone number:</label>
                    <br><br>
                    <label for="select">Date of birth:</label>
                </div>
                <div class="enteri">
                    <input type="text" name="fname" id="fname" placeholder=" Your first name..">
                    <input type="text" name="lname" id="lname" placeholder=" Your last name..">
                    <br>
                    <br>
                    <input type="text" name="email" id="email" placeholder=" example@gmail.com...">
                    <br><br>
                    <input type="text" name="phoneNumber" id="phoneNumber" placeholder=" +385 00 000 000">
                    <br><br>
                    <select name="year" id="year">
                        <option>Select year</option>

                    </select>
                </div>
                <div class="question">
                    <textarea>Write your question here!</textarea>
                </div>
            </form>
        </div>
        <div class="right"><p>Where can I get some?
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.<br><br> All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. <br><br>The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>

        </div>
        <div class="line"></div>
        <div class="location">
            <div class="locationleft">
                <p>You can come and visit us on these locataions:</p>
                <ul>
                    <li>Maršala Tita 54/II</li>
                    <li>123 Main St., St. Louis</li>
                    <li>Franca Lehara 2</li>
                </ul>
            </div>
            <div class="locationRight"><a target="_blank" href="https://www.google.ba/maps"> <img src="img/location.jpg"></a></div>
        </div>
        <div class="line"></div>
        <div class="socialNetworks">
            <div class="t"> <p>Or You can contact Us on our social networks!</p> </div>
            <div class="p"> <a href="https://www.facebook.com" target="_blank"> <img src="img/facebook.png" alt="facebook"> </a></div>
            <div class="p"> <a href="https://twitter.com" target="_blank"> <img src="img/Twitter.png" alt="Twitter"> </a></div>
            <div class="p"> <a href="https://www.instagram.com" target="_blank"> <img src="img/instagram.jpg" alt="instagram"></a></div>

        </div>
        <div class="line"></div>
    </div>
    <div class="foter">
        <div class="home"><a href="index.html"> Home </a> </div>
        <div class="home"><a href="articles/article1.html"> Articles  </a></div>
        <div class="home"><a href="contact.php"> Contact </a></div>
    </div>
    <div class="copywright"> &copy; Powerd by Alija Delic </div>

</body>
</html>
