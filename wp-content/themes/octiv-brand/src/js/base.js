(function() {
  var allCommentLinks = document.querySelectorAll('.comment-reply-link');
  for (var i = 0; i < allCommentLinks.length; i++) {
    allCommentLinks[i].classList.add('btn-arrow');
  }
})();