$(function() {
  init();
});

function init() {
  $('#download').on('click', function(e) {
    e.preventDefault();
    window.location.href = 'files/videotheek.zip';
  });
}