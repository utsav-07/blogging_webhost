<?php
include_once('connection.php');

$query = "SELECT * FROM `details` WHERE id =1";

$result = mysqli_query($conn , $query);

$rows = mysqli_fetch_assoc($result);

$totalUser = $rows['users'];
$totalViwers = $rows['viewrs'];

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blogging</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <div style="padding-top: 21px">
      <span class="logo">Blogging</span>

      <a href="./started.html" ><button  class="start-btn">Get Started</button></a>
      <span class="input">
        <input type="text" placeholder="Google Search" />
        <img
          src="https://internship.suvenconsultants.com/projects/blogging/images/search.png"
          width="30px"
          height="30px"
          style="position: relative"
        />
      </span>
    </div>
    <header class="nav">
      <div class="nav-box">
        <span class=""><a href="#">Home</a></span
        >&nbsp;&nbsp; <span class=""><a href="#">Nation</a></span
        >&nbsp;&nbsp; <span class=""><a href="#">Sports</a></span
        >&nbsp;&nbsp; <span class=""><a href="#">Politics</a></span
        >&nbsp;&nbsp; <span class=""><a href="#">Entertainment</a></span
        >&nbsp;&nbsp; <span class=""><a href="#">Search</a></span
        >&nbsp;&nbsp;
        <span class=""><a href="#">Contact Us</a></span>
      </div>
    </header>

    <table class="section1">
      <tbody>
        <tr>
          <td style="text-align: left; padding: 5px; padding-top: 20px">
            <span class="featured1" style="text-align: left; padding: 0px">
              <img src="images/featured1.png" alt="" width="400" height="150" />
              <p></p>
              <h2>Should Twitter Get Rid of Follower Counts?</h2>
              <h3>The possibility feels closer than ever</h3>
              Cool Neha in All Things Creative<br />
              <h4>Jan 9 · 5 min read</h4>

              <p></p>
            </span>
          </td>
          <td style="padding-top: 14px">
            <span class="top3">
              <span
                ><img
                  src="images/top3A.png"
                  alt=""
                  style="
                    float: left;
                    border: 1px solid black;
                    margin: 22px 10px 10px 0px;
                  "
                  width="100"
                  height="100"
                />
                <h3>
                  Html, a standardized system for tagging text files to achieve
                  font, colour, graphic, and hyperlink effects on WWW pages.
                </h3> </span
              ><br />

              <span style="float: left"
                ><p></p>
                <img
                  src="images/top3B.png"
                  alt=""
                  style="
                    float: left;
                    border: 1px solid black;
                    margin: 0px 10px 10px 0px;
                  "
                  width="100"
                  height="100"
                />
                <h3>
                  CSS describes how HTML elements are to be displayed on screen,
                  paper, or in other media &amp; control the layout of multiple
                  web pages.
                </h3> </span
              ><br />

              <span style="float: left"
                ><p></p>
                <img
                  src="images/top3C.png"
                  alt=""
                  style="
                    float: left;
                    border: 1px solid black;
                    margin: 5px 10px 10px 0px;
                  "
                  width="100"
                  height="100"
                />
                <h3>
                  Teach yourself the foundations of designing using these links
                  made for learning.--freecodecamp &amp; theodinproject
                </h3>
              </span>
            </span>
          </td>
          <td style="text-align: left; padding: 5px">
            <span class="featured2">
              <span class="newpage" onclick="article()"
                ><img
                  src="images/featured3.png "
                  alt=" "
                  width="400"
                  height="150"
                />
                <p></p>
                <h2>No, That’s Not How You Say It</h2>
                <h3>
                  A short personal history of my favorite fast food<br />(
                  <a href="blog.html">Read more...</a>)
                </h3>
                VIP Singh <br />
                <h4>Jan 29 · 8 min read</h4>
                <p></p>
              </span>
            </span>
          </td>
        </tr>
      </tbody>
    </table>
    <hr />
    <div class="section2">
      <span class="site-media">
        <img src="images/media22.png " alt=" " />
      </span>
    </div>
    <hr />

    <table class="section3">
      <tbody>
        <tr>
          <td style="text-align: left; padding: 5px; padding-top: 20px">
            <span class="featured1" style="text-align: left; padding: 0px">
              <img
                src="images/bottom3C.png "
                alt=" "
                width="400"
                height="150"
              />
              <p></p>
              <h2>A few good reasons why you should learn to code</h2>
              <h3>
                You might be wondering if learning to code is something you
                should...
              </h3>
              Rocky Jagtiani <br />
              <h4>Jan 9 · 5 min read</h4>

              <p></p>
            </span>
          </td>
          <td style="padding-top: 14px">
            <span class="top3">
              <span
                ><img
                  src="images/chinese.png "
                  alt=" "
                  style="
                    float: left;
                    border: 1px solid black;
                    margin: 22px 10px 10px 0px;
                  "
                  width="100 "
                  height="100 "
                />
                <h3>
                  Only buy something that you’d be perfectly happy to hold if
                  the market shut down for 10 years.
                </h3> </span
              ><br />

              <span style="float: left"
                ><p></p>
                <img
                  src="images/summer.png "
                  alt=" "
                  style="
                    float: left;
                    border: 1px solid black;
                    margin: 0px 10px 10px 0px;
                  "
                  width="100 "
                  height="100 "
                />
                <h3>
                  When I figured out how to work my grill, it was quite a
                  moment. I discovered that summer is a completely different
                  experience when you know how to grill.
                </h3> </span
              ><br />

              <span style="float: left"
                ><p></p>
                <img
                  src="images/winter.png "
                  alt=" "
                  style="
                    float: left;
                    border: 1px solid black;
                    margin: 5px 10px 10px 0px;
                  "
                  width="100 "
                  height="100 "
                />
                <h3>
                  Chains of habit are too light to be felt until they are too
                  heavy to be broken.
                </h3>
              </span>
            </span>
          </td>
          <td style="text-align: left; padding: 5px">
            <span class="featured2">
              <span
                ><img
                  src="images/bottom3B.png"
                  alt=""
                  width="400"
                  height="150"
                />
                <p></p>
                <h2>
                  Deep space radio waves baffle astronomers; aliens not ruled
                  out
                </h2>
                <h3>
                  Every time we see something we’ve never seen before that is an
                  opportu..
                </h3>
                Enzyme Snehar<br />
                <h4>Jan 29 · 8 min read</h4>
                <p></p>
              </span>
            </span>
          </td>
        </tr>
      </tbody>
    </table>

    <hr />

    <footer class="page-footer">
      <div class="container">
        <div class="row">
          <br />
          <div class="aboutus">
            <a href="aboutus.html">About us</a><a>Privacy policy</a
            ><a>Newsletter</a><a>Sitemap</a>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text"><b>FOLLOW US ON</b></h5>
            <i class="fa fa-facebook" href="https://www.facebook.com/"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-google" href="https://www.google.co.in"></i>
            <i class="fa fa-rss"></i>
            <i class="fa fa-youtube" href="https://www.youtube.com/"></i>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          <h5>
            <p>
              Copyright © 2019
              <a>Suven Consultants and technology pvt ltd</a>All rights reserved
            </p>
          </h5>
          <br />
        </div>
      </div>
    </footer>
  </body>
</html>
