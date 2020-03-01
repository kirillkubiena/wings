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
