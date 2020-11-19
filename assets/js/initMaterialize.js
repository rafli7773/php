const toasts = () => {
    const toastsGua = document.querySelector('.toasts-gua');
    if(toastsGua){
        M.toast({html: toastsGua, classes: 'green'});
    }
}
toasts();