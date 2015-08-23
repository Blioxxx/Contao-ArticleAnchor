function ClipBoard(){
    generatedLink.innerText = link.innerText;
    Copied = generatedLink.createTextRange();
    Copied.execCommand("Copy");
}
