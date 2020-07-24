/* Responive menu */
function myMenuShow() {
  let x = document.getElementById('menu');
  let scroll = document.getElementsByTagName('body')[0];
  x.className === 'myMenu'
    ? (x.className += ' responsive')
    : (x.className = 'myMenu');

  scroll.className = 'stop-scrolling';
}

function myMenu() {
  let x = document.getElementById('menu');
  let scroll = document.getElementsByTagName('body')[0];
  x.className === 'myMenu'
    ? (x.className -= ' responsive')
    : (x.className = 'myMenu');

  scroll.classList.remove('stop-scrolling');
}

/* Today date in the input placeholder */
jQuery(function ($) {
  var now = new Date();
  var day = ('0' + now.getDate()).slice(-2);
  var month = ('0' + (now.getMonth() + 1)).slice(-2);
  var today = now.getFullYear() + '-' + month + '-' + day;
  $('#date').val(today);
  $('#date').attr('min', today);
});

/* Onclick effect with time */
jQuery(function ($) {
  $('#timepicker').click(function () {
    $(this).prop('type', 'time');
  });
});
