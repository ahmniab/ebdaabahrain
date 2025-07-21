function preventNumbers(e) {
    const char = String.fromCharCode(e.which);
    const isNumber = /[0-9]/.test(char);
    if (isNumber) {
        e.preventDefault(); 
        return false;
    }
    return true;
}

function preventCharacters(e) {
    const char = String.fromCharCode(e.which);
    const isNumber = /[0-9]/.test(char);
    if (!isNumber) {
        e.preventDefault();
        return false;
    }
    return true;
}

