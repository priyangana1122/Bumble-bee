
/* Allow user to type numbers between 0-9 and + sign (For foreign numbers) */
function onlyNumberKey(evt) {
    // Only ASCII character in that range allowed
    var ASCIICode = (evt.which) ? evt.which : evt.keyCode
    if (ASCIICode > 31 && ASCIICode != 43 && (ASCIICode < 48 || ASCIICode > 57))
        return false;
    return true;
}