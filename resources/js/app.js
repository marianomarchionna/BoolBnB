/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

var deleteArr = document.querySelectorAll('.deleteForm');
console.log(deleteArr);
deleteArr.forEach(function (el) {
  el.addEventListener('submit', function (e) {
    var res = confirm('Delete Post?');

    if (!res) {
      e.preventDefault();
    }
  });
});

$('#leads').on('hidden.bs.modal', function () {
  $(this).find('form').trigger('reset');
})