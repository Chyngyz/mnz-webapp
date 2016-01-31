(function ($) {
    // Main router
    var router;
    var routing = function (mode) {
      router = new Navigo(null, mode === 'hash');
      router.on({
        'home':function () {
          homeFn();
        },
        'services/:service': function (params) {
          setContent(null, params.service);
        },
        'services': function () {
          setContent('services');
        },
        'about': function () {
          aboutFn();
        },

        'team': function () {
          setContent('team');
        },
        'testimonials': function () {
          setContent('testimonials');
        }
      });
      router.on(function() {
        homeFn();
      });
    };


    // Content Loader
    function setContent(id, content, cb) {
      var slug = id || 'services-' + content;
      $('.main-content').load('partial/' + slug + '.html', function () {
        console.log('Loaded ' + slug);
        cb();
      })
    };

    // Main navigation
    function navigation () {
      var currentRoute = window.location.hash || 'home';
      if(currentRoute != 'home') {
        currentRoute = currentRoute.slice(1);
      }
      []
      .slice
      .call(document.querySelectorAll('.main-nav a'))
      .forEach(function (link) {
        if (link.getAttribute('href').indexOf('http') >= 0) return;
        link.addEventListener('click', function (e) {
          e.preventDefault();
          router.navigate(link.getAttribute('data-switchto'));
          $(burger).trigger('click');
        });
      });
    };


    // Close loading
    var Loader = function () {
      var loader = $('.m-app-loading');
      var svg = $(loader).find('svg');
      var loaderLine = $(loader).find('.load-wrap');

      //init();
      return {
        hide: hide,
        show: show
      }

      function init () {
        TweenMax.set(loaderLine, {
          opacity: 0
        });
        TweenMax.set(svg, {
          scale:0
        });
        TweenMax.set(loader, {
          opacity:0
        });
      }

      function hide () {
        var tl = new TimelineLite;
        tl.to(loaderLine, 0.3, {
          opacity: 0
        }).to(svg, .5, {
          scale: 0,
          ease:Back.easeOut
        }).to(loader, 0.2, {
          opacity: 0,
          onComplete: function () {
            $(loader).css('visibility', 'hidden');
            console.log('Preload closed');
          }
        });
      }

      function show () {
        var tl = new TimelineLite;
        $(loader).css('visibility', 'visible');
        tl.to(loader, 0.2, {
          opacity: 1
        }).to(svg, .3, {
          scale: 1,
          ease:Back.easeOut
        }).to(loaderLine, 0.3, {
          opacity: 1,
          onComplete: function () {
            console.log('Preloader opened');
          }
        });
      }
    }

    var loader = new Loader();

    var pageStates = {
      menuState: false,
      burgerColor: 'light',
      logoColor: 'light'
    };

    var burger = $('.burger')[0];
    $(burger).on('click', function () {
      var $this = $(this); 
      $this.toggleClass('open');
      if(!pageStates.menuState) {
        if(pageStates.burgerColor == 'dark' || $this.hasClass('dark')) {
          $this.removeClass('dark').addClass('light');
        }
        openMenu(true);
      } else {
        openMenu(false);
        if(pageStates.burgerColor == 'dark') {
          $this.removeClass('light').addClass('dark');
        }
      }
      pageStates.menuState = !pageStates.menuState;
    });
    

    // Audio vars
    var $audioPlayerWrap = $('.audio-wrapper'),
        $audioPlayer = $audioPlayerWrap.find('.audio-player'),
        $audioTitle = $audioPlayer.find('.audio-player--title'),
        audio = $('#bgAudio')[0];

    // Audio toggle
    $audioPlayer.click(function () {
      if(audio.paused) {
        startAudio();
      } else {
        audio.pause();
        $audioPlayer.removeClass('playing');
        $audioTitle.html('вык');
      }
    });

    // Start Audio
    function startAudio () {
      audio.volume = 0.5;
      audio.play();
      $audioPlayer.addClass('playing');
      $audioTitle.html('вкл');
    };    




    // Main menu
    var bg = $('.white-overlay')[0],
        bgImg = $('.menu-img')[0],
        skewP = $('.global-overlay')[0],
        nurik = $('.menu-n')[0],
        logo = $('.menu-logo')[0],
        callBtn = $('.call-sm')[0],
        nav = $('.main-nav-wrap')[0],
        ul = $('.main-nav')[0],
        menuWrap = $('.menu-wrap')[0];

    function openMenu(openMenu) {
      

      if(openMenu) {
        $(menuWrap).css('visibility', 'visible');
        TweenMax.set(nurik, {
          x: '-200'
        });

        var tl = new TimelineLite();
        tl.to(bg, 0.2, {
          opacity: 1,
          visibility: 'visible',
          ease: Back.easeIn
        })
          .to(skewP, 0.3, {
          x: '0%',
          ease: Power4.easeIn
        })
          .to(bgImg, 0.4, {
            backgroundImage: "url('../assets/images/menu-bg.jpg')",
            opacity: 1,
            ease: Power3.easeIn
          },'-=0.2')
          .to(nurik,0.4, {
            opacity: 1,
            x: 0,
            visibility: "visible",
            ease: Power1.easeIn,
            onComplete: function () {
              TweenMax.staggerTo($(ul).children(), 0.2, {
                visibility: 'visible',
                opacity: 1,
                x:'0',
                ease: Power1.easeIn
              }, 0.1);
            }
          })
          .to(logo, 0.3, {
            opacity: 1,
            y: '0%',
            ease: Expo.easeIn
          }, '-=0.2')
          .to(callBtn, 0.3, {
            scale: 1,
            ease: Expo.easeIn,
            onComplete: function () {
              //callParal(nurik);
            }
          },'-=0.1');
      } else {
        var tl = new TimelineLite();
        tl.to(logo, 0.3, {
          opacity:0,
          y:'-100%',
          ease:Expo.easeOut,
          onComplete: function () {
            var li = $(ul).children();
            TweenMax.staggerTo(li, 0.2, {
              opacity: 0,
              x:'100',
              ease: Power1.easeIn
            }, 0.1);
            for(var i=0; i< $(li).length; i++) {
              TweenMax.set($(li)[i], {
                visibility: 'hidden'
              })
            }
          }
        })
          .to(callBtn, 0.3, {
            scale: 0,
            ease: Expo.easeOut
          },'-=0.1')
          .to(nurik,0.5, {
          opacity: 0,
          ease: Expo.easeOut
        }, '-=0.1')
          .to(bgImg, 0.4, {
            opacity: 0,
            ease: Power3.easeOut
        },'-=0.2')
          .to(skewP, 0.5, {
            x: '100%',
            ease: Back.easeOut
        })
          .to(bg, 0.3, {
            opacity: 0,
            ease: Back.easeOut,
            onComplete: function () {
              $(bg).css('visibility', 'hidden');
              $(nurik).css('visibility', 'hidden');
              $(menuWrap).css('visibility', 'hidden');
              offParal();
            }
        });
      }
    }

    function offParal() {
      document.onmousemove = '';
    }

    var contacts = $('.contacts');
    function hideContacts () {
      TweenMax.set($(contacts).children(), {
        x: 200
      });
    }

    function contactsAnimation () {
      hideContacts();

      setTimeout(function () {
        TweenMax.staggerTo($(contacts).children(), 0.3, {
          x:0,
          ease: Power1.easeIn
        }, 0.2);
      }, 2000);
    }


    function callParal(el) {

      // Set-up to use getMouseXY function onMouseMove
      document.onmousemove = getMouseXY;

      // Temporary variables to hold mouse x-y pos.s
      var tempX = 0;
      var tempY = 0;


      var objectArray = new Array();

      fillObjectArray();
      positionDivs();

      function fillObjectArray() {
        var birdDiv = $(el)[0];
        var birdX = 212; //position div from half width of the page
        var birdY = 33;
        var birdFactor = 0.05; //parallax shift factor, the bigger the value, the more it shift for parallax movement
        var birdArray = new Array();
        birdArray.push(birdDiv, birdX, birdY, birdFactor);
        objectArray.push(birdArray);


      }

      // Main function to retrieve mouse x-y pos.s

      function getMouseXY(e) {

        // grab the x-y pos.s if browser is NS
        tempX = e.pageX;
        tempY = e.pageY;

        // catch possible negative values in NS4
        if (tempX < 0){tempX = 0}
        if (tempY < 0){tempY = 0}

        moveDiv(tempX);

        return true
      }

      function moveDiv(tempX) {

        for (var i=0;i<objectArray.length;i++) {
          var yourDivPositionX = objectArray[i][3] * (0.5 * 1365 - tempX) + objectArray[i][1];
          objectArray[i][0].style.left = yourDivPositionX + 'px';
          console.log(yourDivPositionX);
        }
      }

      function positionDivs() {
        console.log(objectArray);
        for (var i=0;i<objectArray.length;i++)
        {
          objectArray[i][0].style.left = objectArray[i][1] + "px";
        }
      }
    }


    function homeFn () {
      setContent('home', null, runHome);

      pageStates.burgerColor = 'light';

      function runHome() {
        contactsAnimation();
        setTimeout(function () {
          $(burger).removeClass('dark').addClass('light');
          contactsIn();
        }, 1500);
        var hero = $('.brand-wrap');

        

        TweenMax.set($(hero).children(), {
          y: 100,
          opacity: 0
        });

        function contactsIn () {
          setTimeout(function () {
            TweenMax.staggerTo($(hero).children(), 0.5, {
              y:0,
              opacity: 1,
              ease: Power4.easeIn
            }, 0.1);
          }, 300);
        };
      }
    }

    function aboutFn () {
      setContent('about', null, runAbout);

      pageStates.burgerColor = 'dark';
      hideContacts();

      function runAbout () {
        setTimeout(function () {
          $(burger).removeClass('light').addClass('dark');
          
          $(".m-right-content--text").mCustomScrollbar({
            theme: 'dark'
          });

          $(".m-left-slideshow").vegas({
              slides: [
                  { src: "assets/images/slide-1.jpg" },
                  { src: "assets/images/slide-2.jpg" },
                  { src: "assets/images/slide-3.jpg" },
                  { src: "assets/images/menu-bg.jpg" }
              ],
              transition: 'fade2',
              animation: 'kenburnsUpLeft'
          });
        }, 1500);
      }
    }

    












    // Initialize
    function init() {
      routing('hash');
      navigation();
      //startAudio();
      setTimeout(function () {
        loader.hide();
      }, 1500);
    };




    window.onload = init;

})(jQuery);





    