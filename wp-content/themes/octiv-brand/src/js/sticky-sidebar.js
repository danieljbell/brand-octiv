(function() {
  var getStickyElem = document.querySelectorAll('.sticky-sidebar');
  for (var i = 0; i < getStickyElem.length; i++) {
    var elem = getStickyElem[i];
    var elemOffset = elem.offsetTop;
    var nextElem = elem.parentNode.children[1];

    if (window.scrollY > (elemOffset - 54)) {
      elem.classList.add('stuck');
    }

    window.addEventListener('scroll', function() {
      var scrollY = window.scrollY;

      if (scrollY > (elemOffset - 54)) {
        elem.classList.add('stuck');
        elem.style.transform = 'translateY(0)';
      }
      if (scrollY < (elemOffset - 54)) {
        elem.classList.remove('stuck');
      }
      if (scrollY > (nextElem.offsetHeight + nextElem.offsetTop - elem.offsetHeight - 54)) {
        var transformAmount = (scrollY - nextElem.offsetHeight - elem.offsetHeight - elem.offsetTop - (18 * 11))
        elem.style.transform = 'translateY(-' + transformAmount + 'px)';
      }
      if (scrollY > (nextElem.offsetHeight + nextElem.offsetTop + elem.offsetHeight - 108)) {
        elem.classList.remove('stuck');
        elem.style.transform = 'translateY(0px)';
      }

      var nextElemContainers = nextElem.querySelectorAll('section');
      for (var i = 0; i < nextElemContainers.length; i++) {
        var count = i;
        var links = elem.querySelectorAll('a');
        if (scrollY > nextElemContainers[i].offsetTop - 54) {
          if (nextElemContainers[i+1]) {
            if (scrollY < (nextElemContainers[i+1].offsetTop - 54)) {
              elem.children[2].children[count].classList.add('active');
            } else {
              elem.children[2].children[count].classList.remove('active');
            }
          }
        }
      }

    });

    var stickyLinks = elem.querySelectorAll('a');
    for (var i = 0; i < stickyLinks.length; i++) {
      stickyLinks[i].addEventListener('click', function(e) {
        e.preventDefault();
        var target = e.target.hash;
        var targetLocation = document.querySelector(target);
        window.scrollTo(0, (targetLocation.offsetTop - 54));
      });
    }
  }

})();
