//
    var slides = document.querySelectorAll('.slide');
    var btns = document.querySelectorAll('.btn');
    let currentSlide = 1;

    // Javascript for image slider manual navigation
    var manualNav = function(manual){
      slides.forEach((slide) => {
        slide.classList.remove('active');

        btns.forEach((btn) => {
          btn.classList.remove('active');
        });
      });

      slides[manual].classList.add('active');
      btns[manual].classList.add('active');
    }

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        manualNav(i);
        currentSlide = i;
      });
    });

    // Javascript for image slider autoplay navigation
    var repeat = function(activeClass){
      let active = document.getElementsByClassName('active');
      let i = 1;

      var repeater = () => {
        setTimeout(function(){
          [...active].forEach((activeSlide) => {
            activeSlide.classList.remove('active');
          });

        slides[i].classList.add('active');
        btns[i].classList.add('active');
        i++;

        if(slides.length == i){
          i = 0;
        }
        if(i >= slides.length){
          return;
        }
        repeater();
      }, 10000);
      }
      repeater();
    }
    repeat();


    //calculating packages anoumt

    function packages(val)
    {
        var pkg=val;
        var no=document.getElementById("id").value;

        if (pkg=="BASIC")
        {
          var total=8000.00 * no;
          var dis=(8000.00 * no)*(5.0/100);
          var amount= total-dis;

          document.getElementById('1').innerHTML=total;
          document.getElementById('2').innerHTML=dis;
          document.getElementById('3').innerHTML=amount;
        }
        if (pkg=="STANDARD")
        {
          var total=12000.00 * no;
          var dis=(12000.00 * no)*(5.0/100);
          var amount= total-dis;
          document.getElementById('1').innerHTML=total;
          document.getElementById('2').innerHTML=dis;
          document.getElementById('3').innerHTML=amount;

        }
        if (pkg=="PREMIUM")
        {
          var total=15000.00 * no;
          var dis=(15000.00 * no)*(5.0/100);
          var amount= total-dis;
          document.getElementById('1').innerHTML=total;
          document.getElementById('2').innerHTML=dis;
          document.getElementById('3').innerHTML=amount;
        }


    }