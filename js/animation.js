 function animate_Elements() {
     var fadeLeftAni;
     var fadeRightAni;
     var fadeTopAni;
     var serviceAni;
     var robotAni;
     var windowHeight;

     function init() {
         fadeLeftAni = document.querySelectorAll('.fade-left-ani');
         fadeRightAni = document.querySelectorAll('.fade-right-ani');
         fadeTopAni = document.querySelectorAll('.fade-top');
         serviceAni = document.querySelectorAll('.service-ani');
         robotAni = document.querySelectorAll('.robot-ani');
         windowHeight = window.innerHeight;
     }

     function checkPosition() {
         for (var i = 0; i < fadeLeftAni.length; i++) {
             var fadeLeft = fadeLeftAni[i];
             var positionFromTop = fadeLeftAni[i].getBoundingClientRect().top;

             if (positionFromTop - windowHeight <= 0) {
                 fadeLeft.classList.add('fade-in-left');
                 fadeLeft.classList.remove('fade-left-ani');
             }
         }
         for (var i = 0; i < fadeRightAni.length; i++) {
             var fadeRight = fadeRightAni[i];
             var positionFromTop = fadeRightAni[i].getBoundingClientRect().top;

             if (positionFromTop - windowHeight <= 0) {
                 fadeRight.classList.add('fade-in-right');
                 fadeRight.classList.remove('fade-right-ani');
             }
         }
         for (var i = 0; i < fadeTopAni.length; i++) {
             var fadeTop = fadeTopAni[i];
             var positionFromTop = fadeTopAni[i].getBoundingClientRect().top;

             if (positionFromTop - windowHeight <= 0) {
                 fadeTop.classList.add('fade-in-top');
                 fadeTop.classList.remove('fade-top');
             }
         }
         for (var i = 0; i < serviceAni.length; i++) {
             var service = serviceAni[i];
             var positionFromTop = serviceAni[i].getBoundingClientRect().top;

             if (positionFromTop - windowHeight <= 0) {
                 service.classList.add('service-solution-animation');
                 service.classList.remove('service-ani');
             }
         }
         for (var i = 0; i < robotAni.length; i++) {
             var robot = robotAni[i];
             var positionFromTop = robotAni[i].getBoundingClientRect().top;

             if (positionFromTop - windowHeight <= 0) {
                 robot.classList.add('robot-animation');
                 robot.classList.remove('robot-ani');
             }
         }
     }

     window.addEventListener('scroll', checkPosition);
     window.addEventListener('resize', init);
     setTimeout(function () {
         init();
         checkPosition();
     }, 100);
 }
 animate_Elements();
