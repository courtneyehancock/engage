window.onscroll = () => {
  const nav = document.querySelector('#mainnav');
  if(this.scrollY <= 10) nav.className = ''; else nav.className = 'scroll';
};
