function handleMediaQueryChange(e) {
    const searchDiv = document.querySelector('.search');
    if (e.matches) {
      searchDiv.classList.remove('ms-auto');
    } else {
      searchDiv.classList.add('ms-auto');
    }
  }
  
  const mediaQuery = window.matchMedia('(max-width: 768px)');
  mediaQuery.addListener(handleMediaQueryChange);
  handleMediaQueryChange(mediaQuery); // Initial check  

