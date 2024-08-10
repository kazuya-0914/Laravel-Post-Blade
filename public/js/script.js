const logOut = document.getElementById('logout');
logOut.addEventListener('click', (e) => {
  e.preventDefault();
  document.getElementById('logout-form').submit();
});