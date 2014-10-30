$(function () {
  init();
});

function init() {
  clearSelected();
  $('#personalia-btn p').addClass('btn-selected');
  hideAllBio();
  addButtonHandlers();
  $("#personalia-content").show();
}

function hideAllBio() {
  //$("#personalia-content").hide();
  $("#personalia-content").hide();
  $("#over-mezelf-content").hide();
  $("#sterke-punten-content").hide();
  $("#varia-content").hide();
}

function clearSelected() {
  $('#personalia-btn p').removeClass('btn-selected');
  $('#over-mezelf-btn p').removeClass('btn-selected');
  $('#sterke-punten-btn p').removeClass('btn-selected');
  $('#varia-btn p').removeClass('btn-selected');
}

function addButtonHandlers() {    
  $("#personalia-btn").on('click', function() {
    clearSelected();
    $('#personalia-btn p').addClass('btn-selected');
    hideAllBio();
    $("#personalia-content").fadeIn("slow")();
  });
  
  $("#over-mezelf-btn").on('click', function() {
    clearSelected();
    $('#over-mezelf-btn p').addClass('btn-selected');
    hideAllBio();
    $("#over-mezelf-content").fadeIn("slow");
  });
  
  $("#sterke-punten-btn").on('click', function() {
    clearSelected();
    $('#sterke-punten-btn p').addClass('btn-selected');
    hideAllBio();
    $("#sterke-punten-content").fadeIn("slow");
  });
  
  $("#varia-btn").on('click', function() {
    clearSelected();
    $('#varia-btn p').addClass('btn-selected');
    hideAllBio();
    $("#varia-content").fadeIn("slow");
  });
  
  
}
  