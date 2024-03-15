
    const switchThemeBtn = document.querySelector('.ChangeTheme');
    let toggleTheme = 0;

    switchThemeBtn.addEventListener('click',() => {
        if(toggleTheme == 0){
            document.documentElement.style.setProperty('--ecritureNav','#fff');
            document.documentElement.style.setProperty('--background','#282626');
            document.documentElement.style.setProperty('--backgroundHtml','rgb(35, 34, 34)');
            document.documentElement.style.setProperty('--backgroundDiv','#696565');
            document.documentElement.style.setProperty('--backgroundBlack','black');
            document.documentElement.style.setProperty('--ecritureRouge','#c70101');
            toggleTheme++;
            }

            else{

            document.documentElement.style.setProperty('--ecritureNav','black');
            document.documentElement.style.setProperty('--background','#white');
            document.documentElement.style.setProperty('--backgroundHtml','white');
            document.documentElement.style.setProperty('--backgroundDiv','#001d35');
            document.documentElement.style.setProperty('--backgroundBlack','white');
            document.documentElement.style.setProperty('--ecritureRouge','#c70101');
                toggleTheme--;

            }

    })