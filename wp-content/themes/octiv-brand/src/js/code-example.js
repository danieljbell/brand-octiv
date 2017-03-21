// (function() {
//   var codeExamples = document.querySelectorAll('.has-code-example');
//   for (var i = 0; i < codeExamples.length; i++) {
//     codeExamples[i].addEventListener('click', function() {
//       this.classList.toggle('example-is-open');
//     });
//   }
// })();

(function() {
  if (document.body.classList.contains('single-design-examples')) {
    var getContainer = document.querySelectorAll('.examples-container > div');
    var exampleContents = [];
    for (var i = 0; i < getContainer.length; i++) {
      var contents = getContainer[i];
    }
    console.log(getContainer);
  }
})();
