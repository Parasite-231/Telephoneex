var myPrintingBot = new function () {
    this.printTable = function () {
        var table_info = document.getElementById('table_info');
        var win = window.open('', '', 'height=700,width=700');
        win.document.write(table_info.outerHTML);
        win.document.close();
        win.print();
    }
}