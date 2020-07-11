/* Responive menu */
function myMenuShow() {
  let x = document.getElementById('menu');
  x.className === 'myMenu'
    ? (x.className += ' responsive')
    : (x.className = 'myMenu');
}

function myMenu() {
  let x = document.getElementById('menu');
  x.className === 'myMenu'
    ? (x.className -= ' responsive')
    : (x.className = 'myMenu');
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
