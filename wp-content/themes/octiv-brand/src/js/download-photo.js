(function() {
  var allDownloadButtons = document.querySelectorAll('.box a');
  var allSelectButtons = document.querySelectorAll('.box select');

  for (var i=0; i<allSelectButtons.length; i++) {
    allSelectButtons[i].addEventListener('input', function() {
      var imgStyle = this.value;
      var imgSRC = this.previousElementSibling.src;
      if (imgStyle === 'branded') {
        imgSRC = imgSRC.replace('edited', 'branded');
        this.previousElementSibling.src = imgSRC;
      } else {
        imgSRC = imgSRC.replace('branded', 'edited');
        this.previousElementSibling.src = imgSRC;
      }
      var downloadButton = this.parentElement.querySelector('a');
      downloadButton.href = imgSRC;
    });
  }

  // for (var i = 0; i < allDownloadButtons.length; i++) {
  //   allDownloadButtons[i].addEventListener('click', function(e) {
  //     e.preventDefault();
  //     var img = this.parentElement.querySelector('img');
  //     this.href = img;
  //   });
  // }
})();
