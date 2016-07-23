var a=0,b=0,c=0;
var init = function(){
  var a=0,b=0,c=0;

  var box = document.querySelector('#theArt').children[0],
      showPanelButtons = document.querySelectorAll('.show-buttons input'),
      panelClassName = 'show-front',

      onButtonClick = function(event){
        box.removeClassName(panelClassName);
        panelClassName = event.target.className;
        box.addClassName(panelClassName);
      } ;

      for (var i = 0, len = showPanelButtons.length; i < len; i++) {

        showPanelButtons[i].addEventListener('click' , onButtonClick, false);

      }

        formElement = document.getElementById("desiredCourse");
        formElement.addEventListener("blur", desireCourseChanged, false);

        formElement = document.getElementById("desiredCourse");
        formElement.addEventListener("change", desireCourseChanged, false);

        formElement = document.getElementById("artistLength1");
        formElement.addEventListener("change", artistLengthChanged, false);

        formElement = document.getElementById("artistLength2");
        formElement.addEventListener("change", artistLengthChanged, false);

        formElement = document.getElementById("artistLength3");
        formElement.addEventListener("change", artistLengthChanged, false);

        formElement = document.getElementById("artistLength4");
        formElement.addEventListener("change", artistLengthChanged, false);

        formElement = document.getElementById("artistLength5");
        formElement.addEventListener("change", artistLengthChanged, false);

        formElement = document.getElementById("hoursPractice");
        formElement.addEventListener("change", hoursPracticeChanged, false);

}

window.addEventListener('DOMContentLoaded', init, false);

function desireCourseChanged(e){// that will be the forElement
  a = 1;
  target = e.target;
  theValue = target.value;
  localStorage.setItem('desiredCourse',theValue);// the first attribute i called it what i want here corresponds to the element ID
}

function artistLengthChanged(e) {
  b=1;
  target = e.target;
  theValue = target.value;
  localStorage.setItem('artistLength',theValue);
}

function hoursPracticeChanged(e) {
  c=1;
  target = e.target;
  theValue = target.value;
  localStorage.setItem('hoursPractice',theValue);
}
