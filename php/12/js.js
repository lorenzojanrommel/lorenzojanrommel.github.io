var slide = $.makeArray($(".slide")),
  count = 0;
$(".next").on("click", function() {
  if (count == slide.length) {
    count = 0;
  }
  $(slide[count]).css("z-index", "1");
  $(slide[count])
    .siblings()
    .css("z-index", 0);
  count++;
});