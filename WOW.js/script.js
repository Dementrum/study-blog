var waypoint = new Waypoint({
  element: document.getElementById('mov'),
  handler: function() {
    $('#mov').addClass('zoomIn');
  },
  offset: "70%"
})
var waypoint = new Waypoint({
  element: document.getElementsByClassName('mov2'),
  handler: function() {
    $('.mov2').addClass('zoomIn');
  },
  offset: "70%"
})
