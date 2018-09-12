var waypoint = new Waypoint({
  element: document.getElementById('mov'),
  handler: function() {
    $('#mov').addClass('animated zoomIn');
  },
  offset: '70%'
});

var waypoint = new Waypoint({
  element: document.getElementsByClassName('mov2'),
  handler: function() {
    $('.mov2').addClass('animated fadeIn');
},
  offset: '70%'
});

var waypoint = new Waypoint({
  element: document.getElementsByClassName('mov3'),
  handler: function() {
    $('.mov3').addClass('animated bounce');
},
  offset: '70%'
});

// var waypoint = new Waypoint({
//   element: document.getElementsByClassName('mov2'),
//   handler: function() {
//     $('.mov2').addClass('animated zoomIn');
// },
//   offset: '70%'
// });

// var waypoint = new Waypoint({
//   element: document.getElementsByClassName('mov2'),
//   handler: function() {
//     $('.mov2').addClass('animated zoomIn');
// },
//   // offset: '70%'
// })