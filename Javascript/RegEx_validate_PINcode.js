function validatePIN(pin) {
    let fourPattern = /^[0-9]{4}$/;
    let sixPattern = /^[0-9]{6}$/;
    if( fourPattern.test(pin) ) return true;
    else if ( sixPattern.test(pin) ) return true;
    else return false;
}

/* Best Practice

function validatePIN(pin) {
    return /^(\d{4}|\d{6})$/.test(pin)
}

*/ 