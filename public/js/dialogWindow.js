const WIDTH = 100
const WIDTH1 = 800
const height  = 200

function chart (canvas, data){
    const ctx = canvas.getContext('2d')
    // canvas.style.width = WIDTH + '%'
    canvas.style.width = WIDTH1 + 'px'
    canvas.style.height = height + 'px'

    ctx.beginPath();
    ctx.moveTo(15,145);
    ctx.lineTo(15,120);
    ctx.lineTo(0,100);
    ctx.lineTo(15,100);
    ctx.lineTo(15,10);
    ctx.lineTo(200,10);
    ctx.lineTo(200,145);
    ctx.lineTo(15,145);
    // ctx.stroke()
    ctx.fill()
    // ctx.fillStyle = "white"
}

chart(document.getElementById('dialogWindow'))