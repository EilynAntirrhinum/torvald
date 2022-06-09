const WIDTH = 100
const WIDTH1 = 715
const height  = 245
const DPI_WIDTH = WIDTH1*2
const DPI_HEIGHT = height*2

function chart (canvas, data){
    const ctx = canvas.getContext('2d')
    // canvas.style.width = WIDTH + '%'
    canvas.style.width = WIDTH1 + 'px'
    canvas.style.height = height + 'px'
    canvas.width = DPI_WIDTH
    canvas.width = DPI_HEIGHT
    
    ctx.beginPath();
    ctx.moveTo(25,145);
    ctx.lineTo(25,120);
    ctx.lineTo(0,100);
    ctx.lineTo(25,100);
    ctx.lineTo(25,5);
    ctx.lineTo(600,5);
    ctx.lineTo(600,145);
    ctx.lineTo(25,145);
    ctx.fillStyle = "white";
    ctx.strokeStyle = "black";
    ctx.stroke();
    ctx.fill();
    
}

chart(document.getElementById('dialogWindow'))