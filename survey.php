<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Survey</title>
    <link rel="stylesheet" href="style.css" media="screen, projection" >
      <link rel="stylesheet" href="transitions.css" media="screen, projection" >
      <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
      <script type="text/javascript" src="modernizr-form.js"></script><!-- file library for the old browsers  -->
      <script type="text/javascript" src="utils.js"></script>
      <script type="text/javascript" src="custom_survey.js"></script>
      <script type="text/javascript" src="jquery.columnizer.js"></script>
      <script type="text/javascript" src="html5slider.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          $('.column').columnize({columns: 3});
          $('#review').click(function(){// select any of the tags(radio butons) with the class of interests that have been checked
            //map = javaScript function will pull in those values (array of values)
            interestsChecked = $('.interests:checked').map(function(){
              return $(this).val();
            }).get();// take everything that's returned and put it into the interestsChecked variable.

            $('#interestsResult').html('<strong>Interests: </strong>');
            $('#interestsResult').append(interestsChecked.join(', '));// because interestsChecked is an array
              sharedChecked = $('.shared:checked').map(function(){
                return $(this).val();
              }).get();

              $('#sharedResult').html('<strong>Shared: </strong>');
              $('#sharedResult').append(sharedChecked.join(', '));

              if(a==1){
              var theDesiredCourse = localStorage.getItem('desiredCourse');

              theDesiredCourse = '<strong>Desired: </strong>' + theDesiredCourse;
              $('#desiredCourseResult').html(theDesiredCourse);}
              else{
                localStorage.setItem('desiredCourse',"");
              }
              if(b==1){
              var theArtistLength = localStorage.getItem('artistLength');
              theArtistLength = '<strong>ArtistLength: </strong>' + theArtistLength;
              $('#artistLengthResult').html(theArtistLength);}
              else{
                localStorage.setItem('artistLength',"");
              }
              if(c==1){
              var theHoursPractice = localStorage.getItem('hoursPractice');
            theHoursPractice = '<strong>HoursPractice: </strong>' + theHoursPractice;
              $('#hoursPracticeResult').html(theHoursPractice);}
              else{
                localStorage.setItem('hoursPractice',"");
              }


        });
      });
        // this is non jquery code , i want to place outside of jquery specific section
        //Update text field for slider
        function printValue( textbox, sliderID){
           var x = document.getElementById(textbox);
            var y = document.getElementById(sliderID);
            x.value = y.value;
        }

        window.onload = function(){
          printValue('hoursPracticeValue','hoursPractice' );
        }

      </script>
  </head>

  <body>
    <article id="mainContent">
      <header>

      <h1>Student Survey Cube</h1>
      <p>
        Please take the short survey below to help us better understand<br>
         and fullfill
        your desires and needs.
      </p>
    </header>
      <div id="theArt">
        <div id="cube" class="show-front">

          <form id="theForm"  method="POST" action="surveyphp.php"  />

            <div class="front panel">
              <div class="innerContainer">
                <h2>Q 1/5</h2>
                <p>
                  what subjects are you most interested in?<br>
                  (Check as many as you like.)
                </p>

                <div class="column">
                  <p>
                    <label ><input type="checkbox" name="interests_" value="Architecture" id="interests_0" class="interests">Architecture</label>
                  </p>

                  <p>
                    <label ><input type="checkbox" name="interests_" value="Ceramics" id="interests_1" class="interests">Ceramics</label>
                  </p>

                  <p>
                    <label ><input type="checkbox" name="interests_" value="Film/Video" id="interests_2" class="interests">Film/Video</label>
                  </p>

                  <p>
                    <label ><input type="checkbox" name="interests_" value="Glass" id="interests_3" class="interests">Glass</label>
                  </p>

                  <p>
                    <label ><input type="checkbox" name="interests_" value="Graphic Design" id="interests_4" class="interests">Graphic Design</label>
                  </p>

                  <p>
                    <label ><input type="checkbox" name="interests_" value="Illustration" id="interests_5" class="interests">Illustration</label>
                  </p>

                  <p>
                    <label ><input type="checkbox" name="interests_" value="Jewelry" id="interests_6" class="interests">Jewelry</label>
                  </p>

                  <p>
                    <label ><input type="checkbox" name="interests_" value="Metalsmithing" id="interests_7" class="interests">Metalsmithing</label>
                  </p>

                  <p>
                    <label ><input type="checkbox" name="interests_" value="Photography" id="interests_8" class="interests">Photography</label>
                  </p>

                  <p>
                    <label ><input type="checkbox" name="interests_" value="Printmaking" id="interests_9" class="interests">Printmaking</label>
                  </p>

                  <p>
                    <label ><input type="checkbox" name="interests_" value="Sculpture" id="interests_10" class="interests">Sculpture</label>
                  </p>
                  <p>
                    <label ><input type="checkbox" name="interests_" value="Textiles" id="interests_11" class="interests">Textiles</label>
                  </p>

                </div>
                <p class="show-buttons">
                    <input type="button" class="show-back alignRight" value="Next"/>
                </p>

              </div>
            </div>
            <div class="back cf panel">
              <div class="innerContainer">
                <h2>Q 2/5</h2>
                <p>What area of study didn't you see that you wish you did?</p>

                <p><input id="desiredCourse" name="desiredCourse" type="text" placeholder="Desired Course" /></p>


                <p class="show-buttons">
                    <input type="button" class="show-front alignLeft" value="Previous"/>
                    <input type="button" class="show-right alignRight" value="Next"/>

                </p>
              </div>
            </div>
            <div class="right cf panel">
              <div class="innerContainer">
                <h2>Q 3/5</h2>
                <p>
                How long have you thought of yourself as an artist?
                </p>
                <p>
                  <input type="radio" id='artistLength1' name="artistLength" value="Since I was a kid"/>
                  <label>Since I was a kid.</label>
                </p>
                <p>
                  <input type="radio" id='artistLength2' name="artistLength" value="Since high school"/>
                  <label>Since high school.</label>
                </p>
                <p>
                  <input type="radio" id='artistLength3' name="artistLength" value="Less than a year"/>
                  <label>Less than a year.</label>
                </p>
                <p>
                  <input type="radio" id='artistLength4' name="artistLength" value="All my life"/>
                  <label>All my life.</label>
                </p>
                <p>
                  <input type="radio" id='artistLength5' name="artistLength" value="I don't"/>
                  <label>I don't.</label>
                </p>
                <p class="show-buttons">
                    <input type="button" class="show-back alignLeft" value="Previous"/>
                    <input type="button" class="show-left alignRight" value="Next"/>

                </p>
              </div>
            </div>
            <div class="left cf panel">
              <div class="innerContainer">
                <h2>Q 4/5</h2>
                <p>
                  How many hours a day do you practice your art?
                </p>
                <p>
                  <input id="hoursPractice" type="range" min="0" max="24" value="0" onchange="printValue('hoursPracticeValue','hoursPractice');"/>
                </p>
                <p>
                <input id="hoursPracticeValue" type="text" name="hoursPracticeValue"  placeholder="Move slider from 0 to 24 hours"/>
              </p>
                <p class="show-buttons">
                    <input type="button" class="show-right alignLeft" value="Previous"/>
                    <input type="button" class="show-top alignRight" value="Next"/>

                </p>
              </div>
            </div>
            <div class="top cf panel">
              <div class="innerContainer">
                <h2>Q 5/5</h2>
                <p>
                  Who have you shared your work with?<br>
                  (check all that apply.)
                </p>
                <p>
                  <label ><input type="checkbox" name="viewers_" value="Family" id="viewers_0" class="shared">family</label>
                </p>
                <p>
                  <label ><input type="checkbox" name="viewers_" value="Friends" id="viewers_1" class="shared">Friends</label>
                </p>
                <p>
                  <label ><input type="checkbox" name="viewers_" value="Teachers and classmates" id="viewers_2" class="shared">Teachers and classmates</label>
                </p>
                <p>
                  <label ><input type="checkbox" name="viewers_" value=" public  showing" id="viewers_3" class="shared">The public in a showing</label>
                </p>
                <p>
                  <label ><input type="checkbox" name="viewers_" value="No one" id="viewers_4" class="shared">No one</label>
                </p>
                <p class="show-buttons">
                    <input type="button" class="show-left alignLeft" value="Previous"/>
                    <input id="review" type="button" class="show-bottom alignRight" value="Next"/>

                </p>
              </div>
            </div>
            <div class="bottom cf panel">
              <div class="innerContainer">
                <h2>Review / Submit</h2>
                <p>
                Please review your responses below and click the related change button to make any updates.
                When you're satisfied with your responses, click Submit.
                </p>
                <table width="100%">
                  <tr class="blue1">
                    <td width="15%">Q1:</td>
                    <td id="interestsResult" width="60%"><strong>Interests:</strong></td>
                    <td width="25%" class="show-buttons"><input type="button" class="show-front"  value="Modify"></td>
                  </tr>
                  <tr class="blue2">
                    <td> Q2:</td>
                    <td id="desiredCourseResult" ><strong>Desired:</strong></td>
                    <td class="show-buttons"><input type="button" class="show-back"  value="Modify"></td>
                  </tr>
                  <tr class="blue1">
                    <td> Q3:</td>
                    <td id="artistLengthResult" ><strong>Artist:</strong></td>
                    <td class="show-buttons"><input type="button" class="show-right"  value="Modify"></td>
                  </tr>
                  <tr class="blue2">
                    <td> Q4:</td>
                    <td id="hoursPracticeResult" ><strong>Hours:</strong></td>
                    <td  class="show-buttons"><input type="button" class="show-left"  value="Modify"></td>
                  </tr>
                  <tr class="blue1">
                    <td> Q5:</td>
                    <td id="sharedResult" ><strong>Shared:</strong></td>
                    <td class="show-buttons"><input type="button" class="show-top"  value="Modify"></td>
                  </tr>

                </table>

                <p>
                  Thank you for taking our servey.
                </p>

                <p class="show-buttons">
                    <input type="button" class="show-top alignLeft" value="Previous"/>
                    <input id="submit" type="submit" name="submit"  value="Submit" />

                </p>
              </div>
            </div>

          </form>
            </div>
        </div>


    </article>

  </body>
</html>
