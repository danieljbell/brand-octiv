document.body.addEventListener('keydown', function(e) {
  if (e.keyCode === 80 && e.metaKey === true) {
    e.preventDefault();

    var solutionHeading = document.querySelector('#solution h3');
    solutionHeading.innerText = "Overview";
    solutionHeading.parentElement.style.padding = 0;

    var differentHeading = document.querySelector('#different h3');
    if (differentHeading) {
        differentHeading.remove();
    }

    var logoMark = document.querySelectorAll('.page-type path');
    for (var i = 0; i < logoMark.length; i++) {
      logoMark[i].style.fill = '#ffffff';
    }

    window.print();

  }
});
