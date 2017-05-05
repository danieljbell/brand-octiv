document.body.addEventListener('keydown', function(e) {
  if (e.keyCode === 80 && e.metaKey === true) {
    e.preventDefault();

    var solutionHeading = document.querySelector('#solution h3');
    solutionHeading.innerText = "Overview";
    solutionHeading.parentElement.style.padding = 0;

    var differentHeading = document.querySelector('#different h3');
    differentHeading.remove();

    var pageType = document.createElement('div');
    var logoMark = document.createElement('img');
    pageType.classList.add('callout-brand-two');
    pageType.classList.add('page-type');
    pageType.innerHTML = '<p>Datasheet</p>';
    logoMark.src = './wp-content/themes/octiv-brand/dist/img/Octiv-Mark.svg';
    // console.dir(logoMark);
    pageType.appendChild(logoMark);
    document.querySelector('header').appendChild(pageType);

    setTimeout(function() {
      window.print();
    }, 300);

  }
});
