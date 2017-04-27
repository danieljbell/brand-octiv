(function() {
  // get all cards on the page
  var allCards = document.querySelectorAll('.card');

  // loop all cards on the page
  for (var i = 0; i < allCards.length; i++) {

    // add mouseenter event on all cards
    allCards[i].addEventListener('mouseenter', function(e) {
      // get all children of the hovered element's parent
      var allSiblings = this.parentElement.children;
      // add .is-focused class to the hovered element
      this.classList.add('is-focused');
      // loop thru all children of the element's parent
      for (var j = 0; j < allSiblings.length; j++) {
        // test for .is-focused class
        if (!allSiblings[j].classList.contains('is-focused')) {
          // add .is-faded if a sibling element
          allSiblings[j].classList.add('is-faded');
        }
      }
    });

    // add mouseleave event on all cards
    allCards[i].addEventListener('mouseleave', function(e) {
      // get all children of the hovered element's parent
      var allSiblings = this.parentElement.children;
      // remove .is-focused class to the hovered element
      this.classList.remove('is-focused');
      // loop thru all children of the element's parent
      for (var j = 0; j < allSiblings.length; j++) {
        // remove .is-faded class from all children of the element's parent
        allSiblings[j].classList.remove('is-faded');
      }
    });

  }
})();
