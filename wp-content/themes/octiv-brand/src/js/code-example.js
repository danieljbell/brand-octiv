(function() {
  var allButtons = document.querySelectorAll('button.expander');
  for (var i = 0; i < allButtons.length; i++) {
    allButtons[i].addEventListener('click', function() {
      this.previousElementSibling.classList.toggle('is-expanded');
      if (this.innerText === 'Expand Code') {
        this.innerText = 'Collapse Code';
      } else {
        this.innerText = 'Expand Code';
      }
    })
  };
})();