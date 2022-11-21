$(function(){
  $(".dropdown-item").click(function(){
    var icon_text=$(this).html();
    $(".dropdown-toggle").html(icon_text);
  })
})


$(function(){
  $("[data-trigger]").on("click",function(){
    var targeet_id=$(this).attr('data-trigger');
    $("targeet_id").toggleClass("show");
    $('body').toggleClass("offcanvas-active");
  })
})