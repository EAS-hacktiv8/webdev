function cekPalindrom(input) {
    let startIndex = 0;
    let endIndex = input.length - 1;
    while (startIndex < endIndex) {
        startChar = input[startIndex];
        endChar = input[endIndex];
        if (!startChar.match(/[a-z]/i)) {
            startIndex++;
            continue;
        }
        if (!endChar.match(/[a-z]/i)) {
            endIndex--;
            continue;
        }
        if (startChar.toLowerCase() != endChar.toLowerCase()) {
            return false;
        }
        startIndex++;
        endIndex--;
    }
    return true;
}

function cekPalindromTambahan(input, validasiTambahan) {
    let startIndex = 0;
    let endIndex = input.length - 1;
    while (startIndex < endIndex) {
        startChar = input[startIndex];
        endChar = input[endIndex];
        if (validasiTambahan) {
            if (startChar != endChar) {
                return false;
            }
        } else {
            if (!startChar.match(/[a-z]/i)) {
                startIndex++;
                continue;
            }
            if (!endChar.match(/[a-z]/i)) {
                endIndex--;
                continue;
            }
        }
        if (startChar.toLowerCase() != endChar.toLowerCase()) {
            return false;
        }
        startIndex++;
        endIndex--;
    }
    return true;
}
