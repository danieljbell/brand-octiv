(function() {
  /*
  ==============================
  COMMENTS ON PAGES
  ==============================
  */ 
  var allCommentLinks = document.querySelectorAll('.comment-reply-link');
  for (var i = 0; i < allCommentLinks.length; i++) {
    allCommentLinks[i].classList.add('btn-arrow');
  }

  /*
  ==============================
  MARKETO FORM FORMATTING
  ==============================
  */
  if (window.MktoForms2) {
    MktoForms2.onFormRender(function(form) {
      console.log(form);
    });
  }
})();