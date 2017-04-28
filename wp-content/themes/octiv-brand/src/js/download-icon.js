(function() {
  var allDownloadButtons = document.querySelectorAll('.box button');
  var allSelectButtons = document.querySelectorAll('.box select');
  for (var i=0; i<allSelectButtons.length; i++) {
    allSelectButtons[i].addEventListener('input', function() {
      var iconColor = this.value;
      if (iconColor === "black") {
        iconColor = '#000000';
      } else if(iconColor === "white") {
        iconColor = '#ffffff';
      } else if(iconColor === "orange") {
        iconColor = '#ed4c06';
      } else if(iconColor === "blue") {
        iconColor = '#42b0d8';
      } else if(iconColor === "green") {
        iconColor = '#33ab40';
      } else if(iconColor === "purple") {
        iconColor = '#b949f5';
      } else if(iconColor === "yellow") {
        iconColor = '#fac500';
      }
      this.parentElement.children[0].classList.value = '';
      var allPaths = this.parentElement.children[0].children;
      for (var j=0; j<allPaths.length; j++) {
        allPaths[j].style.fill = iconColor;
      }
    });
  }
  for (var i=0; i<allDownloadButtons.length; i++) {
    allDownloadButtons[i].addEventListener('click', function() {

      var svg = this.parentElement.children[0];
      var canvas = this.nextElementSibling;

      function triggerDownload (imgURI) {
        var evt = new MouseEvent('click', {
          view: window,
          bubbles: false,
          cancelable: true
        });

        var a = document.createElement('a');
        a.setAttribute('download', 'MY_COOL_IMAGE.png');
        a.setAttribute('href', imgURI);
        a.setAttribute('target', '_blank');

        a.dispatchEvent(evt);
      }

      var ctx = canvas.getContext('2d');
      var data = (new XMLSerializer()).serializeToString(svg);
      var DOMURL = window.URL || window.webkitURL || window;

      var img = new Image();
      var svgBlob = new Blob([data], {type: 'image/svg+xml;charset=utf-8'});
      var url = DOMURL.createObjectURL(svgBlob);

      img.onload = function () {
        ctx.drawImage(img, 0, 0);
        DOMURL.revokeObjectURL(url);

        var imgURI = canvas.toDataURL('image/png');

        triggerDownload(imgURI);
      };

      img.src = url;
    });
  }
})();