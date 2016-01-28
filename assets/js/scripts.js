(function ($) {
    // Main router
    var router;
    var routing = function (mode) {
      router = new Navigo(null, mode === 'hash');
      router.on({
        
        'services/:service': function (params) {
          setContent(null, params.service);
        },
        'services': function () {
          setContent('services');
        },
        'about': function () {
          setContent('about');
        },

        'team': function () {
          setContent('team');
        },
        'testimonials': function () {
          setContent('testimonials');
        }
      });
      router.on(function() {
        setContent('about');
      });
    };

    var setc = function () {
      $('.js-content').html('Hello');
    }


    // Content Loader
    var setContent = function(id, content) {

      var slug = id || 'services-' + content;
      $('.js-content').load('partial/' + slug + '.html', function () {
        console.log('Loaded ' + slug);
      })
    };

    // Main navigation
    var navigation = function () {
      []
      .slice
      .call(document.querySelectorAll('nav a'))
      .forEach(function (link) {
        if (link.getAttribute('href').indexOf('http') >= 0) return;
        link.addEventListener('click', function (e) {
          e.preventDefault();
          router.navigate(link.getAttribute('data-switchto'));
        });
      });
    };

    // Initialize
    var init = function () {
      routing('hash');
      navigation();
    };

    window.onload = init;

})(jQuery);

