/**
 * writes to page
 */
var log = function () {
    var argsArray = [];

    for (var i = 0; i < arguments.length; i++) {
        argsArray.push('' + arguments[i]);
    }

    document.writeln(argsArray + '<br>')
};