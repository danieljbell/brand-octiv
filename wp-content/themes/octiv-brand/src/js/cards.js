(function() {
  var allCards = document.querySelectorAll('.card');
  for (var i = 0; i < allCards.length; i++) {
    allCards[i].addEventListener('mouseover', function(e) {
      console.log(e);
    });
  }
})();
