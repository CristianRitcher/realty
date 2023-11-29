function ch_bg_color(sugerencia){
    
    const ops = ["op1", "op2", "op3"];
    
    if (sugerencia) {
        for (const op of ops) {
            document.getElementById(op).style.backgroundColor = 'white';
            document.getElementById(op).style.color = 'gray';
            document.getElementById(op).style.boxShadow = '1px 1px 1px rgb(200, 200, 200)';
        }
        if (sugerencia != 'op0') {
            document.getElementById(sugerencia).style.boxShadow = ' inset gray 1px 1px 4px -1px';
        }
    }
    
}